<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $fillable = [
        'description',
        'completed',
        'completed_at',
        'user_id',
        'todo_list_id'
    ];

    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function todoList(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(TodoList::class);
    }

    public function inList(TodoList $todoList): bool
    {
        return $this->todoList()->is($todoList);
    }

    public function addToList(TodoList $todoList): void
    {
        $this->todoList()->associate($todoList);
        $this->save();
    }

    public function removeFromList(): void
    {
        $this->todoList()->dissociate();
        $this->save();
    }
}
