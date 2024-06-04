<li class="border border-transparent rounded-lg px-6 py-4 min-h-36 bg-white/75 hover:bg-white/50 font-serif">
    <form wire:submit.prevent="update" class="h-full">
        <div class="flex flex-col justify-between items-center h-full">
            @if($editing)
                <input
                    value="{{$todo->description}}"
                    type="text"
                    class="text-gray-800 bg-white rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600"
                    wire:model="description"
                    wire:keydown.enter="update()"
                    wire:keydown.escape="toggleEdit()"
                >
            @else
                <div class="h-full flex justify-center cursor-default">
                    <p class="h-full content-center max-w-sm break-words whitespace-normal">
                        {{ $todo->description }}
                    </p>
                </div>
            @endif
            <div class="flex gap-2 pt-2">
                <x-heroicon-o-check-circle
                    class="h-5 {{$todo->completed ? 'text-gray-300' : 'text-green-600'}} cursor-pointer"
                    wire:click="toggleComplete()"/>
                @if($editing)
                    <x-heroicon-o-paper-airplane
                        class="h-5 text-gray-600 cursor-pointer"
                        wire:click="update()"/>
                @else
                    <x-heroicon-o-pencil-square
                        class="h-5 text-gray-600 cursor-pointer"
                        wire:click="toggleEdit()"/>
                @endif
                <livewire:components.todo-list-dropdown :todo="$todo"/>

                <x-heroicon-o-trash
                    class="h-5 text-gray-600 cursor-pointer"
                    wire:click="delete()"/>
            </div>
        </div>
    </form>
</li>
