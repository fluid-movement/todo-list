<div class="relative font-sans" x-data="{ open: @entangle('isOpen') }">
    <button @click="open = !open" class="text-gray-500 hover:text-gray-700 focus:outline-none">
        <x-heroicon-o-list-bullet class="h-5 cursor-pointer"/>
    </button>
    <div x-show="open"
         @click.away="open = false"
         class="absolute right-0 mt-2 w-48 bg-white/75 border border-transparent rounded-md shadow-lg z-50">
        @foreach($todoLists as $todoList)
            <li
                class="px-4 py-2 border border-transparent m-1 @if($todo->inList($todoList)) bg-orange-400/75 @endif hover:border-gray-300 cursor-pointer"
                wire:click="addToList({{$todoList}})"
                wire:key="{{$todoList->id}}">
                {{ $todoList->name }}
            </li>
        @endforeach
    </div>
</div>
