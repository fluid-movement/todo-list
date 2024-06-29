<?php

namespace App\Livewire\Todos;

use App\Models\TodoList;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Attributes\On;
use Livewire\Component;

class TodoIndex extends Component
{
    public $todos;
    public TodoList $activeTodoList;
    public Collection $todoLists;

    public function render()
    {
        return view('livewire.todos.todo-index');
    }

    public function mount(): void
    {
        $this->loadTodos();
        $this->todoLists = auth()->user()->todoLists()->get();
    }

    #[On('todos-updated')]
    #[On('todo-deleted')]
    #[On('todo-added-to-list')]
    public function loadTodos(): void
    {
        if ($this->activeTodoList->getAttribute('id')) {
            // Load the todos for the active list (if there is one)
            $this->todos = $this->activeTodoList->todos()->get();
        } else {
            // Load all todos where list_id is null
            $this->todos = auth()->user()->todos()->whereNull('todo_list_id')->get();
        }
    }
}
