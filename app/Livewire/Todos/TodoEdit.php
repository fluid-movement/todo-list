<?php

namespace App\Livewire\Todos;

use App\Models\Todo;
use Livewire\Component;

class TodoEdit extends Component
{
    public Todo $todo;

    public function render()
    {
        return view('livewire.todos.todo-edit');
    }

    public function update()
    {
        $this->validate([
            'description' => 'required|string'
        ]);

        $this->todo->save();
        $this->dispatch('todos-updated');
    }
}
