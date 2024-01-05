<div>
    <div class="flex justify-center items-center flex-col">
        <div class="flex p-16 gap-4 mx-auto justify-center items-center">
            <input type="number" wire:model="number1" placeholder="Number 1" class="border">
            <select wire:model="action" class="w-24">
                <option value="">+</option>
                <option value="">-</option>
                <option value="">*</option>
                <option value="">/</option>
                <option value="">%</option>
            </select>
            <input type="number" wire:model="number2" placeholder="Number 2" class="border">
            <button wire:click="calculate" class="px-4 py-2 rounded bg-blue-600">
                   {{$disable ? 'disabled' : ''}} =
            </button>
        </div>
        <p class="text-3xl">{{$result}}</p>
    </div>
</div>
