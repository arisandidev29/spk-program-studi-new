<x-admin-layout title="Hasil Rekomendasi" breadcrumbs="users">
    <x-card class="flex items-center justify-between">
        <h1 class="text-xl text-gray-600">
            Rekomendasi Untuk User :
            <span class="text-primary">{{ $user->name }}</span>
        </h1>

    </x-card>

    <div
        class="grid-flow my-4 grid grid-cols-1 gap-4 md:grid-flow-row md:grid-cols-[1fr_400px]"
    >
        <livewire:hasil-perhitungan :user="$user" />
        <x-card class="flex flex-col items-center">
            <p class="text-center my-2">Presentase Nilai Vekor V</p>

            <div class="w-full  mx-auto"> 
                <canvas id="nilaiVektor"  data-chart-data="{{json_encode($chartData)}}"></canvas>
            </div>
        </x-card>
    </div>

    <livewire:user-result-jawaban :user="$user" />

    @vite("resources/js/presentaseNilaiVektorChart.js",)
  
</x-admin-layout>
