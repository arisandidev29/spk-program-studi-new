<x-card>
    <h2 class="text-primary my-4 text-center text-2xl">Edit Bobot</h2>

    <x-alert.succesfull />

    <form wire:submit="edit">
        <x-input
            placeholder="name"
            class="w-[90%]"
            wire:model="name"
            :value="$name"
        />
        <x-input
            placeholder="keterangan"
            class="w-[90%]"
            wire:model="keterangan"
            :value="$keterangan"
        />
        <x-input
            placeholder="bobot"
            class="w-[90%]"
            wire:model="bobot"
            :value="$bobot"
        />

        <div class="my-2 flex gap-4">
            <a wire:navigate href="{{ route("admin.bobot") }}">
                <x-button type="button" class="bg-primary text-white">
                    Back
                </x-button>
            </a>
            <x-button type="submit" class="bg-secondary text-black">
                Edit
            </x-button>
        </div>
    </form>
</x-card>
