<div class="bg-secondary h-full p-6 shadow-2xl">
    <livewire:todo-lists.todo-list-create/>
    <ul class="py-2">
    <x-todo-list-entry
        :link="route('todos.default')"
        :active="!$activeTodoList->id"
        :title="$activeTodoList->defaultListName()"
        :count="$activeTodoList->defaultTodoCount()"
        :key="$activeTodoList->defaultListName()"
    />
    @foreach($todoLists as $todoList)
            <x-todo-list-entry
                :link="route('todos.index', ['list' => $todoList->id])"
                :active="$todoList->active"
                :title="$todoList->name"
                :count="$todoList->todoCount()"
                :key="$todoList->id"
            />
        @endforeach
    </ul>
</div>
