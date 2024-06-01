<div class="flex gap-2">
    <div>
        <livewire:todo-lists.todo-list-index/>
    </div>
    <div class="p-4">
        <livewire:todos.todo-create/>
        <ul class="flex gap-2">
            @foreach($todos as $todo)
                <livewire:todos.todo-show :todo="$todo" :key="$todo->id"/>
            @endforeach
        </ul>
    </div>
</div>
