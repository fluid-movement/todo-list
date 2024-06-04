<?php

namespace App\Livewire\TodoLists;

use App\Models\TodoList;
use Livewire\Attributes\On;
use Livewire\Component;

class TodoListIndex extends Component
{
    public $todoLists;
    public $newTodoList;
    public TodoList $activeTodoList;
    #[On('todo-added-to-list')]
    #[On('todo-deleted')]
    public function render()
    {
        return view('livewire.todo-lists.todo-list-index');
    }

    public function mount()
    {
        $this->loadTodoLists();
    }

    #[On('todo-list-created')]
    public function loadTodoLists()
    {
        $this->todoLists = auth()->user()->todoLists()->get();
        foreach ($this->todoLists as $todoList) {
            if ($todoList->id == $this->activeTodoList->id) {
                $todoList->setActive();
            }
        }
    }
}
