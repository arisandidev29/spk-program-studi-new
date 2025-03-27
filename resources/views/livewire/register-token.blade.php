<x-card
    class="order-2 flex w-full flex-col items-center gap-4 self-start xl:order-1 xl:w-64"
>

    {{-- alert --}}

    <x-alert.succesfull  event="registerToken"/>

    {{-- end alert --}}

    
    <p>User Register Token</p>
    <h2 class="text-dark-secondary font-poppins text-4xl font-bold">{{$token}}</h2>
    <x-button class="bg-primary flex items-center gap-2 text-white" wire:click="refreshToken">
        Refresh
        <img src="/asset/reload.png" alt="reload" class="w-6" />
    </x-button>
</x-card>
