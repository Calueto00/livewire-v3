<div class="p-16 flex justify-center gap-6 items-center">
    <button class="bg-blue-500 hover:bg-blue-600 px-4 py-2 text-white rounded" wire:click="increment">+</button>
        <span>{{$counter}}</span>
    <button class="bg-blue-500 hover:bg-blue-600 px-4 py-2 text-white rounded" wire:click="decrement">-</button>
</div>
