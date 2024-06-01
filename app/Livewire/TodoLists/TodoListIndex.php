<?php

namespace App\Livewire\TodoLists;

use Livewire\Attributes\On;
use Livewire\Component;

class TodoListIndex extends Component
{
    public $todolists;

    public function render()
    {
        return view('livewire.todo-lists.todo-list-index');
    }

    public function mount()
    {
        $this->loadTodoLists();
    }

    #[On('todoListsUpdated')]
    public function loadTodoLists()
    {
        $this->todolists = auth()->user()->todoLists()->get();
    }
}
