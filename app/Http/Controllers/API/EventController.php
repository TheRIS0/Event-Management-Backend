<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\Comment;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        return Event::all();
    }

    public function store(Request $request)
    {
        $event = Event::create($request->all());
        return response()->json($event, 201);
    }

    public function show($id)
    {
        return Event::find($id);
    }

    public function update(Request $request, $id)
    {
        $event = Event::findOrFail($id);
        $event->update($request->all());
        return response()->json($event, 200);
    }

    public function destroy($id)
    {
        Event::destroy($id);
        return response()->json(null, 204);
    }

    public function setAttendance(Request $request, $id)
    {
        $event = Event::findOrFail($id);
        $status = $request->input('status');
        if (in_array($status, ['Attending', 'Not Attending'])) {
            $event->status = $status;
            $event->save();
        }
        return response()->json($event, 200);
    }

    public function getComments($id)
    {
        $event = Event::findOrFail($id);
        return $event->comments;
    }

    public function addComment(Request $request, $id)
    {
        $request->validate([
            'text' => 'required',
            'user_name' => 'required'
        ]);

        $event = Event::findOrFail($id);
        $comment = new Comment;
        $comment->text = $request->input('text');
        $comment->user_name = $request->input('user_name');
        $comment->event_id = $event->id;
        $comment->save();
        return response()->json($comment, 201);
    }

    public function deleteComment($eventId, $commentId)
    {
        $event = Event::findOrFail($eventId);
        $comment = $event->comments()->findOrFail($commentId);
        $comment->delete();
        return response()->json(null, 204);
    }
}
