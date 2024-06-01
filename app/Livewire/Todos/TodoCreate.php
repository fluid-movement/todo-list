<?php

namespace App\Livewire\Todos;

use Livewire\Component;

class TodoCreate extends Component
{
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
        ]);

        $this->reset(['description']);

        // Emit the event
        $this->dispatch('todosUpdated');
    }
}
