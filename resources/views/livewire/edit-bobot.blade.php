<x-modal-dialog
    x-data="{
        show : $wire.entangle('modalOpen'),
        bobot : '',
        keterangan : ''
        }"
    x-on:modaledit-open.window="
        show = true;
       $wire.set('bobot',$event.detail.value.bobot);
        $wire.set('keterangan',$event.detail.value.keterangan);

    "
    x-on:modaledit-close.window="show = false"
>
    <h1
        class="text-primary font-poppins my-3 text-center text-lg font-bold md:text-2xl"
    >
        Tambah Bobot
    </h1>

    <x-input
        placeholder="bobot"
        class="w-[90%]"
        wire:model="bobot"
        value="bobot"
    />
    <x-input
        placeholder="keterangan"
        class="w-[90%]"
        wire:model="keterangan"
        value="keterangan"
    />

    <div
        class="mt-4 flex w-full flex-col justify-center gap-2 text-sm md:flex-row md:gap-8 md:text-base"
    >
        <x-button class="bg-primary text-white" wire:click="editBobot">
            Tambah
        </x-button>
        <x-button
            class="bg-secondary text-black"
            @click="$dispatch('modaledit-close')"
        >
            close
        </x-button>
    </div>
</x-modal-dialog>
