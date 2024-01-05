<div class="container mx-auto">
    <button class="bg-blue-600 px-4 py-2 text-white rounded" wire:click="increment">+</button>
        <span>{{$counter}}</span>
    <button class="bg-blue-600 px-4 py-2 text-white" wire:click="decrement">-</button>
</div>
