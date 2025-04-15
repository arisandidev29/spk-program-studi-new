<x-card class="relative">

    <div class="flex items-center justify-between gap-4">
        <div class="flex items-center gap-4">
            <div class="bg-primary w-max rounded-xl p-4">
                <img src="/asset/diagnosis.svg" alt="user" class="w-6" />
            </div>
            <p>Hasil Rekomendasi</p>
        </div>

        <x-button
            wire:click="exportUserResult"
            class="bg-secondary px-3! text-xs text-black transition-all duration-300 hover:bg-amber-300 md:text-base"
        >
            Export PDF
        </x-button>
    </div>

    <div class="overflow-auto">
        <table class="my-2 table-auto">
            <thead>
                <tr class="text-xs md:text-sm">
                    <th>Kode Alternative</th>
                    <th>Program Studi</th>
                    <th>Vektor S</th>
                    <th>Vektor V</th>
                    <th>Ranking</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($hasilRekomendasi as $hasil)
                    <tr class="text-xs sm:text-sm" :key="$hasil->id">
                        <td class="whitespace-nowrap">
                            {{ $hasil->alternative->kode }}
                        </td>

                        <td class="whitespace-nowrap">
                            {{ $hasil->alternative->name }}
                        </td>

                        <td>
                            {{ $hasil->alternative->VektorS->first()->vektor_s }}
                        </td>

                        <td>
                            {{ $hasil->vektor_v }}
                        </td>
                        <td>
                            <span
                                class="bg-primary rounded-full p-2 font-bold text-white"
                            >
                                {{ $hasil->ranking }}
                            </span>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    {{-- pdf popup --}}

    <livewire:pdf-export-popup />
</x-card>
