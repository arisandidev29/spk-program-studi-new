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
            <x-input placeholder="Search" icon="/asset/search.svg" />
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
                <tr class="text-xs sm:text-sm">
                    <td class="whitespace-nowrap">1</td>
                    <td class="whitespace-nowrap">arisandi</td>
                    <td class="whitespace-nowrap">arisandi@examble.com</td>
                    <td class="whitespace-nowrap">
                        <span
                            class="bg-primary inline-block w-max rounded-full px-2 py-1 text-white"
                        >
                            Sudah Daftar
                        </span>
                    </td>
                    <td class="whitespace-nowrap">Mahasiswa</td>
                    <td>
                        <a href="">
                            <x-button
                                class="bg-dark-primary w-max px-2! text-white"
                            >
                                lihat hasil
                            </x-button>
                        </a>
                    </td>
                    <td class="whitespace-nowrap">
                        <x-button
                            @click="modal.show = !modal.show"
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
                {{--
                    <tr class="text-sm">
                    <td>1</td>
                    <td>arisandi</td>
                    <td>arisandi@examble.com</td>
                    <td>
                    <span
                    class="bg-secondary inline-block w-max rounded-full px-2 py-1 text-black"
                    >
                    Belum Daftar
                    </span>
                    </td>
                    <td>Mahasiswa</td>
                    <td>
                    <a href="">
                    <x-button class="bg-dark-primary px-2! text-white">
                    lihat hasil
                    </x-button>
                    </a>
                    </td>
                    <td>
                    <x-button class="rounded-lg bg-red-500 px-1!">
                    <img
                    src="/asset/trash.svg"
                    alt="trash"
                    class="w-6"
                    />
                    </x-button>
                    </td>
                    </tr>
                --}}
            </tbody>
        </table>
    </div>

    {{-- Pagination --}}
    <div class="mx-auto mt-8 flex w-max items-center gap-4">
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
    </div>

    {{-- modal --}}

    <x-modal x-cloak show="modal.show">
        <h1 class="font-poppins text-center text-xl">
            <span>Yakin Hapus User ?</span>
            <img
                src="/asset/confuse-face.svg"
                alt="emotion"
                class="inline-block w-8"
            />
        </h1>

        <div class="mt-4 flex justify-center gap-8">
            <x-button class="bg-red-500 text-white">Ya</x-button>
            <x-button
                class="bg-primary text-white"
                @click="modal.show = !modal.show"
            >
                Tidak
            </x-button>
        </div>
    </x-modal>
</x-card>
