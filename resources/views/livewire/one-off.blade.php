<form wire:submit="print" class="p-2 space-y-4">
    <x-bit.input wire:model="name" id="name" />
    <x-bit.input wire:model="pronouns" id="pronouns" />
    <x-bit.button>Print</x-bit.button>

    @dump($printers)
</form>
