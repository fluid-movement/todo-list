<div>
    <livewire:todo-lists.todo-list-create/>
    <ul>
        @foreach($todolists as $todolist)
            <livewire:todo-lists.todo-list-show :todolist="$todolist" :key="$todolist->id"/>
        @endforeach
    </ul>
</div>
