<x-card>
    <h1
        class="text-primary font-poppins my-3 text-center text-lg font-bold md:text-2xl"
    >
        Edit Alternative {{$kode}}
    </h1>

    {{-- alert --}}
        <x-alert.succesfull />
    {{-- endalert --}}

    <x-input
        placeholder="Kode Alternative"
        class="w-[90%]"
        wire:model="kode"
        error="kode"
        :value="$kode"
    />

    <x-input
        placeholder="name"
        class="w-[90%]"
        wire:model="name"
        :value="$name"
    />

    <div
        class="mt-4 flex w-full flex-col justify-center gap-2 text-sm md:flex-row md:gap-8 md:text-base"
    >
        <x-button class="bg-primary text-white" wire:click="editBobot">
            Edit
        </x-button>
        <a wire:navigate href="{{route('admin.alternative')}}">
            <x-button class="bg-secondary">back</x-button>
        </a>
    </div>
</x-card>
