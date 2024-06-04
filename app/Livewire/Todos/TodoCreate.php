<?php

namespace App\Livewire\Todos;

use App\Models\TodoList;
use Livewire\Component;

class TodoCreate extends Component
{
    public TodoList $activeTodoList;
    public $description;

    public function render()
    {
        return view('livewire.todos.todo-create');
    }

    public function create()
    {
        $this->validate([
            'description' => 'required|string'
        ]);

        auth()->user()->todos()->create([
            'description' => $this->description,
            'user_id' => auth()->id(),
            'todo_list_id' => $this->activeTodoList->id ?: null
        ]);

        $this->reset(['description']);

        // Emit the event
        $this->dispatch('todo-added-to-list');
    }
}
