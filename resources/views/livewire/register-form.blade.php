<div wire:submit.prevent="submit" class="w-[400px] mx-auto py-16">
    @if (session()->has('message'))
        <div class="bg-emerald-500 text-white py-3 px-4 mb-4">
            {{session('message')}}
        </div>

    @endif

    <div class="flex gap-4 mb-4">
            <label >
                <input type="radio" value="customer" name="role" wire:model="role">
                Customer
            </label>
            <label >
                <input type="radio" value="vendor" name="role" wire:model="role">
                Customer
            </label>
    </div>
</div>
