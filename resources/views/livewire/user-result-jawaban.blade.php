<x-card>
     <div class="flex items-center gap-4">
        <div class="bg-primary w-max rounded-xl p-4">
            <img src="/asset/diagnosis.svg" alt="user" class="w-6" />
        </div>
        <p>Table Kriteria Jawaban</p>
    </div>

    <div class="overflow-auto">
        <table class="my-2 table-auto">
            <thead>
                <tr class="text-xs md:text-sm">
                    <th>Kode Kriteria</th>
                    <th>Kriteria</th>
                    <th>Bobot (normalisasi)</th>
                    <th>Kategori</th>
                    <th>Jawaban</th>
                    <th>Nilai</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($jawabanUser as $jawaban )
                <tr class="text-xs sm:text-sm "  >
                    <td>{{$jawaban->kriteria->kode_kriteria}}</td>
                    <td>{{$jawaban->kriteria->kriteria}}</td>
                    <td>{{$jawaban->kriteria->bobot->normalisasi}}</td>
                    <td>{{$jawaban->kriteria->kategori}}</td>
                    <td>{{$jawaban->PilihanJawaban->name}}</td>
                    <td>{{$jawaban->PilihanJawaban->nilai}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-card>