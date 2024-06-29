<div>
    <livewire:components.todo-header :todoList="$activeTodoList"/>
    <livewire:todos.todo-create :activeTodoList="$activeTodoList"/>
    <ul class="mt-6 grid grid-cols-3 md:grid-cols-4 gap-2">
        @foreach($todos as $todo)
            <livewire:todos.todo-show :todo="$todo" :key="$todo->id" :activeTodoList="$activeTodoList" :todoLists="$todoLists"/>
        @endforeach
    </ul>
</div>
