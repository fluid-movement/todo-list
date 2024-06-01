<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $fillable = [
        'description',
        'completed',
        'completed_at',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function todoList()
    {
        return $this->belongsTo(TodoList::class);
    }
}
