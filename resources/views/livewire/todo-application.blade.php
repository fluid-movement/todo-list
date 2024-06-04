<div class="py-4 flex gap-6 min-h-screen">
    <div class="w-2/5">
        <livewire:todo-lists.todo-list-index :activeTodoList="$activeTodoList"/>
    </div>
    <div class="w-full">
        <livewire:todos.todo-index :activeTodoList="$activeTodoList"/>
    </div>
</div>
