<div class="p-16 flex justify-center items-center">
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <button wire:click="increment" class="py-2 px-4 bg-indigo-500 hover:bg-indigo-600 rounded text-white">+</button>
    {{ $count }}
    <button wire:click="decrement"  class="py-2 px-4 bg-indigo-500 hover:bg-indigo-600 rounded text-white">-</button>
</div>
