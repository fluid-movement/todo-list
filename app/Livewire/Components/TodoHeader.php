<?php

namespace App\Livewire\Components;

use App\Models\TodoList;
use Livewire\Component;

class TodoHeader extends Component
{
    public TodoList $todoList;
    public function render()
    {
        return view('livewire.components.todo-header');
    }

    public function deleteList()
    {
        $this->todoList->delete();
        redirect()->route('todos.default');
    }
}
