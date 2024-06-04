<?php

namespace App\Livewire\TodoLists;

use Livewire\Component;

class TodoListCreate extends Component
{
    public $name;

    public function render()
    {
        return view('livewire.todo-lists.todo-list-create');
    }

    public function create()
    {
        $this->validate([
            'name' => 'required|string'
        ]);

        auth()->user()->todoLists()->create([
            'name' => $this->name,
            'user_id' => auth()->id(),
        ]);

        $this->reset(['name']);

        // Emit the event
        $this->dispatch('todo-list-created');
    }
}
