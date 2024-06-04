<li wire:key="{{ $key }}">
    <a href="{{ $link }}"
       wire:navigate
       class="flex justify-between items-center gap-2 px-2 py-1 my-1 text-lg cursor-pointer border border-transparent hover:border-gray-300 rounded-sm @if($active) bg-stone-300  @endif">
        {{ $title }}
        <div class="right-1">
            @if($count > 0)
                <span class="text-sm text-gray-500">{{ $count }}</span>
            @endif
        </div>
    </a>
</li>
