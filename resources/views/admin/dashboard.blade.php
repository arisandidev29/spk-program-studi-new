<x-admin-layout title="testing">
    <div class="flex flex-col gap-4 sm:flex-row">
        <div class="flex-grow">
            <x-card class="grid grid-cols-3 gap-4">
                <div class="font-poppins border border-gray-400 p-4">
                    <h1 class="text-lg text-gray-500">Total User</h1>
                    <p class="my-2 text-2xl">100</p>
                    <a href="" class="text-primary text-xs">Visit User Page</a>
                </div>
                <div class="font-poppins border border-gray-400 p-4">
                    <h1 class="text-lg text-gray-500">Total Kriteria</h1>
                    <p class="my-2 text-2xl">100</p>
                    <a href="" class="text-primary text-xs">
                        Visit Kriteria Page
                    </a>
                </div>
                <div class="font-poppins border border-gray-400 p-4">
                    <h1 class="text-lg text-gray-500">Total Alternative</h1>
                    <p class="my-2 text-2xl">100</p>
                    <a href="" class="text-primary text-xs">
                        Visit Alternative Page
                    </a>
                </div>
            </x-card>
            <x-card class="my-4 w-full">
                <canvas id="myChart"></canvas>
            </x-card>
        </div>
        <div>
            <x-card class="py-8">
                <h2 class="text-primary font-bold">
                    Program studi paling Populer
                </h2>

                <div class="my-2">
                    <x-popular-study-program-card
                        programStudy="Sistem Informasi"
                        percentage="50%"
                    />
                    <x-popular-study-program-card
                        programStudy="Komputerisasi Akuntasi"
                        percentage="70%"
                    />
                    <x-popular-study-program-card
                        programStudy="Manajemen informatika"
                        percentage="30%"
                    />
                </div>
            </x-card>

            <x-card class="my-4">
                <canvas id="TotalUserChart"></canvas>
            </x-card>
        </div>
    </div>
    @vite("resources/js/chart.js")
</x-admin-layout>
