<div>
    <form wire:submit.prevent="create">
        <div class=" flex items-center justify-between">
            <input
                wire:model="name"
                type="text"
                class="w-full px-4 text-lg text-gray-800 bg-white/75 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                placeholder="Start a new adventure"
                required
            >
        </div>
    </form>
</div>
