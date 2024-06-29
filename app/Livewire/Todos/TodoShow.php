<?php

namespace App\Livewire\Todos;

use App\Models\Todo;
use App\Models\TodoList;
use Livewire\Component;

class TodoShow extends Component
{
    public $todo;
    public $description;

    public $todoLists;

    public function render()
    {
        return view('livewire.todos.todo-show');
    }

    #[On('todos-updated')]
    public function mount(Todo $todo, $todoLists)
    {
        $this->todo = $todo;
        $this->description = $todo->description;
        $this->todoLists = $todoLists;
    }

    public function toggleComplete()
    {
        $this->todo->update([
            'completed' => !$this->todo->completed,
            'completed_at' => $this->todo->completed ? null : now()
        ]);
    }

    public function update()
    {
        $this->validate([
            'description' => 'required|string'
        ]);

        $this->todo->description = $this->description;
        $this->todo->save();
        $this->dispatch('todos-updated');
    }

    public function addToList(TodoList $todoList)
    {
        if ($this->todo->inList($todoList)) {
            $this->todo->removeFromList();
        } else {
            $this->todo->addToList($todoList);
        }
        $this->dispatch('todo-added-to-list');
    }

    public function delete()
    {
        $this->todo->delete();
        $this->dispatch('todo-deleted');
    }
}
