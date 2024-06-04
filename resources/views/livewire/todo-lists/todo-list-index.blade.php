<div class="bg-stone-100 h-full p-4 shadow-2xl">
    <livewire:todo-lists.todo-list-create/>
    <ul class="py-2">
    <x-todo-list-entry
        :link="route('todos.default')"
        :active="!$activeTodoList->id"
        :title="$activeTodoList->defaultListName()"
        :count="5"
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
