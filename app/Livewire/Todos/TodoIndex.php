<?php

namespace App\Livewire\Todos;

use Livewire\Attributes\On;
use Livewire\Component;

class TodoIndex extends Component
{
    public $todos;

    public function render()
    {
        return view('livewire.todos.todo-index');
    }

    public function mount()
    {
        $this->loadTodos();
    }

    #[On('todosUpdated')]
    public function loadTodos()
    {
        $this->todos = auth()->user()->todos()->get();
    }
}
