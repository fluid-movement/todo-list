<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TodoList extends Model
{
    public $fillable = ['name', 'user_id'];
    public $active = false;

    public function todos()
    {
        return $this->hasMany(Todo::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function todoCount()
    {
        return $this->todos()->count();
    }

    public function setActive()
    {
        $this->active = true;
    }

    public function defaultListName()
    {
        return auth()->user()->defaultTodoListName();
    }
}
