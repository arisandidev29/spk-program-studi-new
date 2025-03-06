<x-card x-data="{
    modal: {
        show: false,
        title: '',
        content: ''
    }
}" class="xl:order-1 order-2 flex-grow relative">
    <div class="flex items-center gap-4">
        <div class="w-max bg-primary p-4 rounded-xl">
            <img src="/asset/user.svg" alt="user" class="w-6">
        </div>
        <p>Users</p>
    </div>

    <div class="flex gap-4 justify-end items-center ">
        <div>
            <x-button class="text-white bg-primary flex gap-2 rounded-lg px-2!">
                Filter
                <img src="/asset/filter.svg" alt="filter">
            </x-button>
        </div>

        <div>
            <x-input placeholder="Search" icon="/asset/search.svg" />
        </div>
    </div>

    <table class=" my-2">
        <thead>
            <tr>
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
            <tr class="text-sm">
                <td>1</td>
                <td>arisandi</td>
                <td>arisandi@examble.com</td>
                <td>
                    <span class="inline-block w-max bg-primary text-white px-2 py-1 rounded-full">Sudah Daftar</span>
                </td>
                <td>Mahasiswa</td>
                <td>
                    <a href="">
                        <x-button class=" bg-dark-primary text-white px-2!">
                            lihat hasil
                        </x-button>
                    </a>
                </td>
                <td>
                    <x-button @click="modal.show = !modal.show" class="bg-red-500 rounded-lg px-1!">
                        <img src="/asset/trash.svg" alt="trash" class="w-6">
                    </x-button>
                </td>

            </tr>
            <tr class="text-sm">
                <td>1</td>
                <td>arisandi</td>
                <td>arisandi@examble.com</td>
                <td>
                    <span class="inline-block w-max bg-secondary text-black px-2 py-1 rounded-full">Belum Daftar</span>
                </td>
                <td>Mahasiswa</td>
                <td>
                    <a href="">
                        <x-button class=" bg-dark-primary text-white px-2!">
                            lihat hasil
                        </x-button>
                    </a>
                </td>
                <td>
                    <x-button class="bg-red-500 rounded-lg px-1!">
                        <img src="/asset/trash.svg" alt="trash" class="w-6">
                    </x-button>
                </td>

            </tr>
        </tbody>
    </table>

    {{-- Pagination --}}
    <div class="mt-8  w-max mx-auto flex gap-4 items-center">
        <div class="bg-dark-primary rounded-full w-10 h-8 py-1  grid place-content-center ">
            <img src="/asset/left-arrow.svg" alt="left arrow" class="w-[90%] mx-auto">
        </div>
        <div class="flex gap-2">
            <div class="bg-dark-primary rounded-full w-10 h-8 py-1  grid place-content-center text-white">
                1
            </div>
            <div
                class="bg-transparent border border-gray-400 rounded-full w-10 h-8 py-1  grid place-content-center text-gray-500">
                1
            </div>
            <div
                class="bg-transparent border border-gray-400 rounded-full w-10 h-8 py-1  grid place-content-center text-gray-500">
                ....
            </div>
            <div
                class="bg-transparent border border-gray-400 rounded-full w-10 h-8 py-1  grid place-content-center text-gray-500">
                8
            </div>
        </div>
        <div class="bg-dark-primary rounded-full w-10 h-8 py-1  grid place-content-center ">
            <img src="/asset/left-arrow.svg" alt="left arrow" class="w-[90%] mx-auto rotate-180">
        </div>
    </div>

    {{-- modal --}}

    <x-modal show="modal.show">
         <h1 class="text-center text-xl font-poppins">
                <span>Yakin Hapus User ?</span>
                <img src="/asset/confuse-face.svg" alt="emotion" class="w-8 inline-block">
            </h1>

            <div class="flex justify-center  gap-8 mt-4">
                <x-button class="bg-red-500 text-white ">Ya</x-button>
                <x-button class="bg-primary text-white" @click="modal.show = !modal.show">Tidak</x-button>
            </div>
    </x-modal>

</x-card>
