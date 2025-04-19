<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Document</title>
        <style>
            body {
                font-family: 'DejaVu Sans', sans-serif;
            }

            h1 {
                text-align: center;
            }

            section {
                margin: 12px 0px;
            }

            table {
                width: 100%;
            }

            table,
            tr,
            td,
            th {
                border: 1px solid black;
                border-collapse: collapse;
                font-size: 0.7rem;
            }

            tr {
                text-align: center;
            }

            th {
                padding: 0.2rem 0.4rem;
            }

            td {
                padding: 0.2rem 0.4rem;
            }

            .bold {
                font-weight: bold;
            }
        </style>
    </head>
    <body>
        <h2>Hasil rekomendasi Program Studi {{ $user->name }}</h2>
        <small>
            Berdasarkan hasil perhitungan, user dengan nama
            <span class="bold">{{ $user->name }}</span>
            memiliki rekomendasi untuk memilih Program Studi
            <span class="bold">
                {{ $hasilRekomendasi->first()->alternative->name }}
            </span>
        </small>

        <section>
            <small style="margin: 5px 0; display: block">
                Tabel di bawah ini merupakan hasil perhitungan :
            </small>
            <table>
                <thead>
                    <th>Kode Program Studi</th>
                    <th>Program Studi</th>
                    <th>Nilai Akhir</th>
                    <th>Ranking</th>
                </thead>
                <tbody>
                    @foreach ($hasilRekomendasi as $hasil)
                        <tr>
                            <td>
                                {{ $hasil->alternative->kode }}
                            </td>

                            <td>
                                {{ $hasil->alternative->name }}
                            </td>

                            <td>
                                {{ $hasil->vektor_v }}
                            </td>
                            <td>
                                {{ $hasil->ranking }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </section>

        <br />

        <section>
            <small style="margin: 5px 0; display: block">
                Tabel di bawah ini merupakan hasil Jawaban :
            </small>
            <table>
                <thead>
                    <th>Kode Kriteria</th>
                    <th>Kriteria</th>
                    <th>Bobot</th>
                    <th>Kategori</th>
                    <th>Jawaban</th>
                    <th>Nilai</th>
                </thead>
                <tbody>
                    @foreach ($userJawaban as $jawaban)
                        <tr>
                            <td>{{ $jawaban->kriteria->kode_kriteria }}</td>
                            <td>{{ $jawaban->kriteria->kriteria }}</td>
                            <td>
                                {{ $jawaban->kriteria->bobot->normalisasi }}
                            </td>
                            <td>{{ $jawaban->kriteria->kategori }}</td>
                            <td>{{ $jawaban->PilihanJawaban->name }}</td>
                            <td>{{ $jawaban->PilihanJawaban->nilai }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </section>
    </body>
</html>
