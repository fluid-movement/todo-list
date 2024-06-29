<li class="group" wire:key="{{ $key }}">
    <a href="{{ $link }}"
       wire:navigate
       class="flex justify-between items-center gap-2 px-2 py-1 my-1 cursor-pointer border border-transparent hover:border-gray-300 rounded-sm @if($active) bg-stone-300  @endif">
        <h3 class="text-lg font-semibold">
            {{ $title }}
        </h3>
        <div class="invisible group-hover:visible">
            @if($count > 0)
                <span class="w-6 h-6 inline-flex items-center justify-center text-xs rounded-full bg-stone-100 @if($active) shadow-inner shadow-lg @endif">{{ $count }}</span>
            @endif
        </div>
    </a>
</li>
