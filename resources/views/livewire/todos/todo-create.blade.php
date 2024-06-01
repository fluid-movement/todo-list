<div>
    <form wire:submit.prevent="create">
        <div class="flex items-center justify-between">
            <input
                wire:model="description"
                type="text"
                class="w-full px-4 py-2 text-lg text-gray-800 bg-white rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600"
                placeholder="Add a new todo"
                required
            >
        </div>
    </form>
</div>
