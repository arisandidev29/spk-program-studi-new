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
    <small>Periode Pilihan <?php echo e(now()->year()); ?></small> <br>
    <small>Tanggal : <?php echo e(now()); ?></small>
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
            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $no => $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($no + 1); ?></td>
                    <td><?php echo e($user->name); ?></td>
                    <td><?php echo e($user->email); ?></td>
                    <td><?php echo e($rekomendasiService->getHasilRekomendasi($user->id)->first()->alternative->name); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</body>

</html>
<?php /**PATH /home/arisandi/Documents/skirpsi/spk-program-studi-new/resources/views/pdf/UserOnlyThisYear.blade.php ENDPATH**/ ?>