<?php

namespace App\Livewire\Todos;

use App\Models\Todo;
use Livewire\Component;

class TodoShow extends Component
{
    public $todo;
    public $description;
    public $editing = false;

    public function render()
    {
        return view('livewire.todos.todo-show');
    }

    public function mount(Todo $todo)
    {
        $this->todo = $todo;
        $this->description = $todo->description;
    }

    public function toggleComplete()
    {
        $this->todo->update([
            'completed' => !$this->todo->completed,
            'completed_at' => $this->todo->completed ? null : now()
        ]);
    }

    public function toggleEdit()
    {
        $this->editing = !$this->editing;
    }

    public function update()
    {
        $this->validate([
            'description' => 'required|string'
        ]);

        $this->todo->description = $this->description;
        $this->todo->save();
        $this->editing = false;
        $this->dispatch('todos-updated');
    }

    public function delete()
    {
        $this->todo->delete();
        $this->dispatch('todo-deleted');
    }
}
