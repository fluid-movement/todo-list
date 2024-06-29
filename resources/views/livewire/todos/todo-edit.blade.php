<dialog id="todo_modal_{{$todo->id}}" class="modal">
    <div class="modal-box rounded-sm">
        <h3 class="font-bold text-lg">Edit details</h3>
        <form>
            <div class="label">
                <span class="label-text">What is your quest?</span>
            </div>
            <textarea class="textarea rounded-sm w-full" wire:model="description">{{$todo->description}}</textarea>
            <button class="btn btn-primary mt-4" wire:click="update()">Save</button>
        </form>
    </div>
    <form method="dialog" class="modal-backdrop">
        <button>Close</button>
    </form>
</dialog>
