<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\EventController;
use App\Http\Controllers\API\ReservationController;
use App\Http\Controllers\API\CustomerController;

Route::apiResource('events', EventController::class);
Route::apiResource('reservations', ReservationController::class);
Route::apiResource('customers', CustomerController::class);

Route::patch('events/{id}/attendance', [EventController::class, 'setAttendance']);
Route::get('events/{id}/comments', [EventController::class, 'getComments']);
Route::post('events/{id}/comments', [EventController::class, 'addComment']);
Route::delete('events/{eventId}/comments/{commentId}', [EventController::class, 'deleteComment']);
