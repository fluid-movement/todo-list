<div class="flex justify-between">
    <div class="flex gap-4 items-center">
        <h1 class="mt-2 mb-4 text-2xl font-bold leading-none tracking-tight text-gray-900 md:text-4xl lg:text-6xl">
            {{$todoList->name ?: $todoList->defaultListName()}}
        </h1>
        @if($todoList->id)
            <div>
                <x-heroicon-o-trash class="h-5 cursor-pointer" wire:click="deleteList()"/>
            </div>
        @endif
    </div>
    <div class="">
        <x-user-dropdown/>
    </div>
</div>
