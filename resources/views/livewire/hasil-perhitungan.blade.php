<x-card>
    <div class="flex items-center gap-4">
        <div class="bg-primary w-max rounded-xl p-4">
            <img src="/asset/diagnosis.svg" alt="user" class="w-6" />
        </div>
        <p>Hasil Rekomendasi</p>
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
                <tr class="text-xs sm:text-sm " :key="$hasil->id" >
                    <td class="whitespace-nowrap">{{$hasil->alternative->kode}}</td>

                    <td class="whitespace-nowrap">{{$hasil->alternative->name}}</td>
                    
                    <td>{{$hasil->alternative->VektorS->first()->vektor_s}}</td>

                    <td>
                        {{$hasil->vektor_v}}
                    </td>
                    <td>
                        <span class="p-2 rounded-full bg-primary text-white font-bold">{{$hasil->ranking}}</span>
                    </td>



                    
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</x-card>