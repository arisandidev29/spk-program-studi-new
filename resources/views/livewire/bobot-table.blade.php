<x-card
 x-data
 class="mx-auto max-w-4xl">
    <div class="flex items-center gap-4">
        <div class="bg-primary w-max rounded-xl p-4">
            <img src="/asset/bobot.svg" alt="user" class="w-6" />
        </div>
        <p>Bobot</p>
    </div>

    <x-button
        class="bg-primary my-2 text-white"
        @click="$dispatch('modaltambah-open')"
    >
        Tambah Bobot
    </x-button>

    {{-- alert --}}

    <x-alert.succesfull />
    
    {{-- end alert --}}

    <div class="overflow-auto">
        <table class="my-2">
            <thead>
                <tr class="text-sm md:text-base">
                    <th>#</th>
                    <th>Name</th>
                    <th>Keterangan</th>
                    <th>Bobot</th>
                    <th>Normalisasi</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bobots as $index => $bobot)
                    <tr class="text-xs md:text-sm" id="bobot-{{$bobot->id}}">
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $bobot->name }}</td>
                        <td>{{ $bobot->keterangan }}</td>
                        <td>{{ $bobot->bobot }}</td>
                        <td>
                            <span
                                class="bg-secondary rounded-full px-2 py-1 text-black"
                            >
                                {{ $bobot->normalisasi }}
                            </span>
                        </td>
                        <td>
                            <a wire:navigate  href="{{route('admin.bobot.edit',$bobot->id)}}">
                                <x-button
                                class="bg-secondary px-2! text-black"
                                >
                                Edit
                            </x-button>
                        </a>
                        </td>
                        <td>
                            <x-button
                                @click="$dispatch('modaldelete-open',
                                {
                                    name : '{{$bobot->name}}',
                                    id : '{{$bobot->id}}'
                                })"
                                class="w-6 rounded-lg bg-red-500 px-1!"
                            >
                                <img
                                    src="/asset/trash.svg"
                                    alt="trash"
                                    class="w-6"
                                />
                            </x-button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    {{-- pegination --}}

    {{$bobots->links()}}

    {{-- <div class="mx-auto mt-8 flex w-max items-center gap-4">
        <div
            class="bg-dark-primary grid h-8 w-10 place-content-center rounded-full py-1"
        >
            <img
                src="/asset/left-arrow.svg"
                alt="left arrow"
                class="mx-auto w-[90%]"
            />
        </div>
        <div class="flex gap-2 text-sm md:text-base">
            <p
                class="bg-dark-primary grid h-8 w-6 place-content-center rounded-full py-1 text-white md:w-10"
            >
                1
            </p>
            <p
                class="grid h-8 w-6 place-content-center rounded-full border border-gray-400 bg-transparent py-1 text-gray-500 md:w-10"
            >
                1
            </p>
            <p
                class="grid h-8 w-6 place-content-center rounded-full border border-gray-400 bg-transparent py-1 text-gray-500 md:w-10"
            >
                ....
            </p>
            <p
                class="grid h-8 w-6 place-content-center rounded-full border border-gray-400 bg-transparent py-1 text-gray-500 md:w-10"
            >
                8
            </p>
        </div>
        <div
            class="bg-dark-primary grid h-8 w-10 place-content-center rounded-full py-1"
        >
            <img
                src="/asset/left-arrow.svg"
                alt="left arrow"
                class="mx-auto w-[90%] rotate-180"
            />
        </div>
    </div> --}}

    {{-- modal --}}

    <livewire:tambah-bobot />

    <x-modal-dialog
        x-data="{show : false, id : '', name : ''}"
        x-on:modaldelete-open.window="
        show = true;
        id = $event.detail.id;
        name = $event.detail.name;
        "
        x-on:modaldelete-close.window="show = false"
        content-class="text-center"
    >
        <h1 class="text-primary my-4 text-2xl">
            Yakin Hapus Bobot
            <span x-text="name"></span>
            ?
        </h1>
        <div class="my-2 flex justify-center gap-4">
            <x-button
                class="bg-red-500 text-white"
                @click="$wire.deleteBobot(id)"
            >
                Ya
            </x-button>
            <x-button
                @click="$dispatch('modaldelete-close')"
                class="bg-primary text-white"
            >
                Tidak
            </x-button>
        </div>
    </x-modal-dialog>
</x-card>
