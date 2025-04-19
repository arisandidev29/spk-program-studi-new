<x-card class="mx-auto max-w-3xl">
    <a wire:navigate href="{{ route("admin.kriteria") }}" class="my-2 block">
        <x-button class="bg-primary text-sm text-white md:text-base">
            Back
        </x-button>
    </a>

    <h1 class="text-primary text-xl dark:text-gray-300">Edit Kriteria</h1>

    {{-- alert --}}

    <x-alert.succesfull />
    {{-- endalert --}}
    <form
        wire:submit="update"
        class="my-2 grid grid-cols-2 justify-stretch gap-4"
    >
        <x-input
            placeholder="kriteria"
            type="text"
            wire:model="kriteria"
            class-wrapper="col-span-2"
            :value="$kriteria"
        />
        <x-input-textarea
            wire:model="desc"
            placeholder="description"
            parrentClass=" col-span-2 "
            error="desc"
            class="h-40"
            :value="$desc"
        />

        <x-input-textarea
            wire:model="note"
            placeholder="note (optional)"
            parrentClass=" col-span-2 "
            class="h-20"
            :value="$note"
        />

        <x-input-dropdown name="bobot" wire:model="bobot.id" error="bobot.id">
            <option value="">Pilih Bobot</option>
            @foreach ($bobotOptions as $options)
                <option
                    value="{{ $options["id"] }}"
                    :selected="{{ $options->id == $bobot["id"] }}"
                >
                    {{ $options->keterangan }}
                    ({{ $options->normalisasi }})
                </option>
            @endforeach
        </x-input-dropdown>

        <x-input-dropdown
            name="kategori"
            wire:model.live="kategori"
            error="kategori"
        >
            <option value="Benefit" :selected="$kategori == 'benefit'">
                Benefit
            </option>
            <option value="Cost" :selected="$kategori == 'cost'">Cost</option>
        </x-input-dropdown>

        <div class="gridcols-1 col-span-2 grid gap-2 md:grid-cols-2">
            @foreach ($pilihans as $index => $value)
                <div class="flex items-center gap-2">
                    <x-input
                        placeholder="Pilihan {{$index + 1}}"
                        error="pilihans.{{$index}}.name"
                        type="text"
                        wire:model="pilihans.{{$index}}.name"
                        :value="$pilihans[$index]['name']"
                        class-wrapper="grow"
                    />

                    <p
                        class="bg-primary rounded-lg px-3 py-2 text-xs text-white md:text-base"
                    >
                        Nilai {{ $value["nilai"] }}
                    </p>
                </div>
            @endforeach
        </div>

        <x-button
            class="bg-secondary hover:bg-dark-primary col-span-2 w-max text-black"
        >
            Edit
        </x-button>
    </form>
</x-card>
