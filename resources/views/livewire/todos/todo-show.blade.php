<li class="border border-transparent rounded-sm shadow-2xl p-6 bg-white/75 hover:bg-white/50">
    <div class="flex flex-col gap-2 h-full">
        <p class="flex-grow pb-4 break-words text-center whitespace-normal">
            {{ $todo->description }}
        </p>
        <div class="flex justify-between gap-4">
            <x-heroicon-o-check-circle
                class="h-5 {{$todo->completed ? 'text-neutral' : 'text-green-600'}} cursor-pointer"
                wire:click="toggleComplete()"
            />
            <x-heroicon-o-pencil-square
                class="h-5 text-gray-600 cursor-pointer"
                onclick="todo_modal_{{$todo->id}}.showModal()"
            />

            <div class="dropdown">
                <div tabindex="0">
                    <x-heroicon-o-list-bullet class="h-5 cursor-pointer"/>
                </div>
                <ul tabindex="0" class="dropdown-content z-[1] menu p-2 shadow bg-base-100 rounded-box w-52">
                    @foreach($todoLists as $todoList)
                        <li
                            class="px-4 py-2 border border-transparent m-1 @if($todo->inList($todoList)) bg-neutral @endif hover:border-neutral cursor-pointer"
                            wire:click="addToList({{$todoList}})"
                            wire:key="{{$todoList->id}}">
                            {{ $todoList->name }}
                        </li>
                    @endforeach
                </ul>
            </div>
            <x-heroicon-o-trash
                class="h-5 text-gray-600 cursor-pointer"
                wire:click="delete()"/>
        </div>
        <livewire:todos.todo-edit :todo="$todo"/>
    </div>

</li>
