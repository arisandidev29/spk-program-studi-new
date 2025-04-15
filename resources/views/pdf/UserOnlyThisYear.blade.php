<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar user</title>



    <style>
        body {
            font-family: 'DejaVu Sans', sans-serif;
        }

        h1 {
            text-align: center;
        }

        table {
            width: 100%
        }

        table,
        tr,
        td,
        th {
            border: 1px solid black;
            border-collapse: collapse;
        }

        tr {
            text-align: center;
        }

        th {
            padding: .2rem .4rem;
        }

        td {
            padding: .2rem .4rem;
        }
    </style>

</head>

<body>
    <h1>Laporan Pilihan User</h1>
    <small>Periode Pilihan {{now()->year()}}</small> <br>
    <small>Tanggal : {{ now() }}</small>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Pilihan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $no => $user)
                <tr>
                    <td>{{ $no + 1 }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $rekomendasiService->getHasilRekomendasi($user->id)->first()->alternative->name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
