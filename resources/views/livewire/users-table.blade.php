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
        <p class="dark:text-gray-200">Total User : {{ $totalUsers }}</p>
    </div>

    {{-- alert --}}
    <x-alert.danger />
    <x-alert.succesfull />
    {{-- end alert --}}

    <div class="my-4 flex items-center justify-between gap-4 md:items-center">
        {{-- toggleselectionMode --}}
        <div
            x-data="{ actionOption: false }"
            x-on:closeOption.window="actionOption = false"
            class="relative"
        >
            @if (! $selectionMode)
                <x-button
                    wire:click="toggleSelectionMode"
                    class="text-primary border-primary border bg-transparent px-2! text-sm md:px-2! md:py-1! md:text-base"
                >
                    Select
                </x-button>
            @else
                <x-button
                    @click="actionOption = !actionOption"
                    @click.outside="actionOption = false"
                    class="text-primary border-primary relative flex gap-2 border bg-transparent px-2! text-sm md:px-2! md:py-1! md:text-base"
                >
                    Action
                    <svg
                        :class="actionOption ? '-rotate-' : '' "
                        class="w-4 -rotate-90 duration-300"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            d="M5.70711 9.71069C5.31658 10.1012 5.31658 10.7344 5.70711 11.1249L10.5993 16.0123C11.3805 16.7927 12.6463 16.7924 13.4271 16.0117L18.3174 11.1213C18.708 10.7308 18.708 10.0976 18.3174 9.70708C17.9269 9.31655 17.2937 9.31655 16.9032 9.70708L12.7176 13.8927C12.3271 14.2833 11.6939 14.2832 11.3034 13.8927L7.12132 9.71069C6.7308 9.32016 6.09763 9.32016 5.70711 9.71069Z"
                            fill="currentColor"
                        />
                    </svg>
                </x-button>
                <div
                    x-show="actionOption"
                    class="border-primary absolute top-[130%] left-0 rounded-lg border bg-white p-2 shadow-lg"
                >
                    <x-button
                        @click="$dispatch('modaldeleteselection-open')"
                        class="w-full bg-red-500 text-xs whitespace-nowrap text-white md:text-sm"
                    >
                        Delete Selection
                    </x-button>
                    <x-button
                        wire:click="toggleSelectionMode"
                        class="bg-primary mt-2 w-full text-xs whitespace-nowrap text-white md:text-sm"
                    >
                        Cencel
                    </x-button>
                </div>
            @endif
        </div>
        <div class="flex items-center gap-2">
            <div x-data="{ showFilter: false }" class="relative">
                <x-button
                    @click="showFilter = !showFilter"
                    @click.outside="showFilter = false"
                    ::class="showFilter ? 'bg-dark-primary' : '!bg-primary'"
                    class="flex w-max gap-2 rounded-lg px-2! text-sm text-white md:text-base"
                >
                    Filter
                    <img src="/asset/filter.svg" alt="filter" />
                </x-button>
                <div
                    x-show="showFilter"
                    class="bg-primary absolute top-[130%] left-0 flex w-32 flex-col gap-2 rounded-lg p-3 shadow-lg"
                >
                    <button
                        @click="$wire.sort('name','asc')"
                        class="text-primary cursor-pointer rounded-md bg-white px-3 py-1 text-xs hover:bg-gray-100 md:text-sm"
                    >
                        Name (asc)
                    </button>
                    <button
                        @click="$wire.sort('name','desc')"
                        class="text-primary cursor-pointer rounded-md bg-white px-3 py-1 text-xs hover:bg-gray-100 md:text-sm"
                    >
                        Name (desc)
                    </button>
                    <button
                        @click="$wire.sort('email','asc')"
                        class="text-primary cursor-pointer rounded-md bg-white px-3 py-1 text-xs hover:bg-gray-100 md:text-sm"
                    >
                        Email (asc)
                    </button>
                    <button
                        @click="$wire.sort('email','desc')"
                        class="text-primary cursor-pointer rounded-md bg-white px-3 py-1 text-xs hover:bg-gray-100 md:text-sm"
                    >
                        Email (desc)
                    </button>
                </div>
            </div>

            <div>
                <x-input
                    wire:model.live="search"
                    placeholder="Search"
                    icon="/asset/search.svg"
                />
            </div>
        </div>
    </div>

    <div class="overflow-auto">
        <table class="my-2 table-auto dark:text-gray-200">
            <thead>
                <tr class="text-xs md:text-sm">
                    @if ($selectionMode)
                        <th></th>
                    @endif

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
                    <tr class="text-xs sm:text-sm" wire:key="{{ $user->id }}">
                        @if ($selectionMode)
                            <td x-data="{ isChecked: null }">
                                <input
                                    type="checkbox"
                                    class="accent-primary"
                                    x-model="isChecked"
                                    @change="
                                    isChecked ? $wire.selectUser({{ $user->id }}) : $wire.unselectUser({{ $user->id }});"
                                />
                            </td>
                        @endif

                        <td class="whitespace-nowrap">{{ $index + 1 }}</td>
                        <td class="whitespace-nowrap">{{ $user->name }}</td>
                        <td class="whitespace-nowrap">{{ $user->email }}</td>
                        <td class="whitespace-nowrap">
                            {{-- @if ($user->HasilRekomendasi()->exists()) --}}
                            @if ($user->HasilRekomendasi()->exists())
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
                            <a
                                wire:navigate
                                href="{{ route("admin.user.result", $user->id) }}"
                            >
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

    {{-- export user --}}

    <livewire:export-user />

    {{-- popup export pdf --}}

    <livewire:pdf-export-popup />

    {{-- modal delete single user --}}

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

    {{-- modal delete selction user --}}
    <x-modal-dialog
        x-data="{show : false}"
        x-on:modaldeleteselection-open.window="
    show = true;
    "
        x-on:modaldeleteselection-close.window="show = false"
        content-class="text-center"
    >
        <h1 class="text-primary my-4 text-2xl">
            Yakin Hapus User yang Di Pilih
            <span x-text="name"></span>
            ?
        </h1>
        <div class="my-2 flex justify-center gap-4">
            <x-button
                class="bg-red-500 text-white"
                @click="$wire.deleteSelected()"
            >
                Ya
            </x-button>
            <x-button
                @click="$dispatch('modaldeleteselection-close')"
                class="bg-primary text-white"
            >
                Tidak
            </x-button>
        </div>
    </x-modal-dialog>
</x-card>
