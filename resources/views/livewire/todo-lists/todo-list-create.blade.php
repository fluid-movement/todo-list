<div>
    <form wire:submit.prevent="create">
        <div class="relative flex items-center justify-between">
            <input
                wire:model="name"
                type="text"
                class="w-full px-4 text-lg text-gray-800 bg-white/75 rounded-sm focus:outline-none focus:ring-2"
                placeholder="Start a new adventure"
                required
            >
            <x-heroicon-o-plus class="h-6 absolute right-2"/>
        </div>
    </form>
</div>
