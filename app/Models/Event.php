<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'description', 'start_time', 'end_time', 'location', 'status', 'order_number'
    ];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($event) {
            $maxOrderNumber = static::max('order_number');
            $event->order_number = $maxOrderNumber ? $maxOrderNumber + 1 : 1;
        });
    }
}
