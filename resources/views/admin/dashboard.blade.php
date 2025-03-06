<x-admin-layout title="testing">
    <div class="flex flex-col sm:flex-row gap-4 ">
        <div class="flex-grow">
            <x-card class="grid grid-cols-3 gap-4">
                <div class="border border-gray-400 p-4 font-poppins ">
                    <h1 class="text-gray-500 text-lg">Total User</h1>
                    <p class="text-2xl my-2">100</p>
                    <a href="" class="text-xs text-primary">Visit User Page</a>
                </div>
                <div class="border border-gray-400 p-4 font-poppins ">
                    <h1 class="text-gray-500 text-lg">Total Kriteria</h1>
                    <p class="text-2xl my-2">100</p>
                    <a href="" class="text-xs text-primary">Visit Kriteria Page</a>
                </div>
                <div class="border border-gray-400 p-4 font-poppins ">
                    <h1 class="text-gray-500 text-lg">Total Alternative</h1>
                    <p class="text-2xl my-2">100</p>
                    <a href="" class="text-xs text-primary">Visit Alternative Page</a>
                </div>
            </x-card>
            <x-card class="w-full my-4">
                <canvas id="myChart"></canvas>

            </x-card>
        </div>
        <div>
            <x-card class="py-8">
                <h2 class="text-primary font-bold">Program studi paling Populer</h2>
                
                <div class="my-2">
                    <x-popular-study-program-card programStudy="Sistem Informasi" percentage="50%" />
                    <x-popular-study-program-card programStudy="Komputerisasi Akuntasi" percentage="70%" />
                    <x-popular-study-program-card programStudy="Manajemen informatika" percentage="30%" />
                </div>
            </x-card>

            <x-card class="my-4">
                <canvas id="TotalUserChart"></canvas>
            </x-card>
            
        </div>
        
    </div>
    @vite('resources/js/chart.js')
</x-admin-layout>
