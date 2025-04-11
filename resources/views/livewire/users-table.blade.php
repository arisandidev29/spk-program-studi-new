<x-card
    x-data="{
    modal: {
        show: false,
        title: '',
        content: ''
    }
}"
    class="relative order-2 flex-grow xl:order-1"
>
    <div class="flex items-center gap-4">
        <div class="bg-primary w-max rounded-xl p-4">
            <img src="/asset/user.svg" alt="user" class="w-6" />
        </div>
        <p>Users</p>
    </div>

    {{-- alert --}}
    <x-alert.danger />
    <x-alert.succesfull />
    {{-- end alert --}}

    <div class="flex items-center justify-end gap-4">
        <div>
            <x-button
                class="bg-primary flex w-max gap-2 rounded-lg px-2! text-sm text-white md:text-base"
            >
                Filter
                <img src="/asset/filter.svg" alt="filter" />
            </x-button>
        </div>

        <div>
            <x-input
                wire:model.live="search"
                placeholder="Search"
                icon="/asset/search.svg"
            />
        </div>
    </div>

    <div class="overflow-auto">
        <table class="my-2 table-auto">
            <thead>
                <tr class="text-xs md:text-sm">
                    <th>#</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Status</th>
                    <th>User Type</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $index => $user)
                    <tr class="text-xs sm:text-sm " wire:key="{{ $user->id }}">
                        <td class="whitespace-nowrap">{{ $index + 1 }}</td>
                        <td class="whitespace-nowrap">{{ $user->name }}</td>
                        <td class="whitespace-nowrap">{{ $user->email }}</td>
                        <td class="whitespace-nowrap">
                            {{-- @if ($user->HasilRekomendasi()->exists()) --}}
                            @if( $user->HasilRekomendasi()->exists())
                            
                            <span
                            class="bg-primary inline-block w-max rounded-full px-2 py-1 text-white"
                            >
                            Sudah Memilih
                        </span>
                        @else
                        <span
                        class="bg-secondary inline-block w-max rounded-full px-2 py-1 text-black"
                        >
                        Belum Memilih
                    </span>
                    @endif
                        </td>
                        <td>
                            <a wire:navigate href="{{route('admin.user.result', $user->id)}}">
                                <x-button
                                    class="bg-dark-primary w-max px-2! text-white {{
                                        $user->hasilRekomendasi()->exists()
                                            ? '' :  ' !text-black !cursor-not-allowed'
                                            
                                    }}"
                                    :disabled="!$user->hasilRekomendasi()->exists()"
                                >
                                    lihat hasil
                                </x-button>
                            </a>
                        </td>
                        <td class="whitespace-nowrap">
                            <x-button
                                @click="$dispatch('modaldelete-open', {
                                 id : '{{$user->id}}',
                                 name : `{{$user->name}}` })"
                                class="w-6 rounded-lg bg-red-500 px-1!"
                            >
                                <img
                                    src="/asset/trash.svg"
                                    alt="trash"
                                    class="h-6 w-6"
                                />
                            </x-button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    {{ $users->links() }}

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
            Yakin Hapus User
            <span x-text="name"></span>
            ?
        </h1>
        <div class="my-2 flex justify-center gap-4">
            <x-button class="bg-red-500 text-white" @click="$wire.delete(id)">
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
