<x-card class="mx-auto max-w-4xl">
    <div class="flex items-center gap-4">
        <div class="bg-primary w-max rounded-xl p-4">
            <img src="/asset/alternative.svg" alt="user" class="w-6" />
        </div>
        <p>Alternative</p>
    </div>

    <x-button
        class="bg-primary my-2 text-white"
        @click="$dispatch('modaltambah-open')"
    >
        Tambah Alternative 
    </x-button>

    <table class="my-2">
        <thead>
            <tr>
                <th>#</th>
                <th>Kode</th>
                <th>Name</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr class="text-sm">
                <td>1</td>
                <td>Ak</td>
                <td>Sistem Informasi</td>
                <td>
                    @php
                        $data = [
                            "name" => "sistem informasi",
                        ];
                        // dd($data);
                    @endphp

                    <x-button
                        class="bg-secondary px-2! text-black"
                        @click="$dispatch('modaledit-open',{value: {{json_encode($data)}} })"
                    >
                        Edit
                    </x-button>
                </td>
                <td>
                    <x-button
                        @click="$dispatch('modaldelete-open',{id : 'id alternative'})"
                        class="rounded-lg bg-red-500 px-1!"
                    >
                        <img  src="/asset/trash.svg" alt="trash" class="w-6" />
                    </x-button>
                </td>
            </tr>
        </tbody>
    </table>

    {{-- modal --}}

    <livewire:tambah-alterantive/>
    <livewire:edit-alterantive/>

    <x-modal-dialog
        x-data="{show : false, id : ''}"
        x-on:modaldelete-open.window="
        show = true;
        id = $event.detail.id;
        "
        x-on:modaldelete-close.window="show = false"
        content-class="text-center"
    >
        <h1 class="text-2xl my-4 text-primary">Yakin Hapus Alternative ini ?</h1>
        <div class="my-2 flex justify-center gap-4">
            <x-button class="bg-red-500 text-white" wire:click="deleteAlternative(id)">Ya</x-button>
            <x-button  @click="$dispatch('modaldelete-close')" class="bg-primary text-white">Tidak</x-button>
        </div>
    </x-modal-dialog>
</x-card>
