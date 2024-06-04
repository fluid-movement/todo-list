<?php

namespace App\Livewire\Components;

use App\Models\Todo;
use App\Models\TodoList;
use Livewire\Attributes\On;
use Livewire\Component;

class TodoListDropdown extends Component
{
    public Todo $todo;
    public $todoLists;
    #[On('todo-added-to-list')]
    public function render()
    {
        return view('livewire.components.todo-list-dropdown');
    }

    public function mount(Todo $todo)
    {
        $this->todo = $todo;
        $this->todoLists = auth()->user()->todoLists()->get();
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
}
