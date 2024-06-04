<?php

namespace App\Livewire;

use App\Models\TodoList;
use Livewire\Component;

class TodoApplication extends Component
{
    public string $list;
    public TodoList $activeTodoList;

    public function render()
    {
        return view('livewire.todo-application');
    }

    public function mount(string $list = '')
    {
        $this->list = $list;
        $this->activeTodoList = TodoList::findOrNew($list);
    }
}
