<li class="border rounded-md px-4 py-2 my-2 bg-white">
    <form wire:submit.prevent="update">
        <div class="flex gap-2 items-center justify-center">
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
                <p class="max-w-sm break-words whitespace-normal">
                    {{ $todo->description }}
                </p>
            @endif
            <div>
                @if(!$todo->completed)
                    <x-heroicon-o-check-circle
                        class="h-5 text-green-600 cursor-pointer"
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
                @else
                    <x-heroicon-o-check-circle
                        class="h-5 text-gray-300 cursor-pointer"
                        wire:click="toggleComplete()"/>
                    <x-heroicon-o-x-mark
                        class="h-5 text-red-600 cursor-pointer"
                        wire:click="delete()"/>
                @endif
            </div>
        </div>
    </form>
</li>
