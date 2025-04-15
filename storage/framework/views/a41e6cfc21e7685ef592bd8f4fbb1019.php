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
        <h2>Hasil rekomendasi Program Studi <?php echo e($user->name); ?></h2>
        <small>
            Berdasarkan hasil perhitungan, user dengan nama
            <span class="bold"><?php echo e($user->name); ?></span>
            memiliki rekomendasi untuk memilih Program Studi
            <span class="bold"><?php echo e($hasilRekomendasi->first()->alternative->name); ?></span>
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
                    <?php $__currentLoopData = $hasilRekomendasi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hasil): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td>
                                <?php echo e($hasil->alternative->kode); ?>

                            </td>

                            <td>
                                <?php echo e($hasil->alternative->name); ?>

                            </td>

                            <td>
                                <?php echo e($hasil->vektor_v); ?>

                            </td>
                            <td>
                                <?php echo e($hasil->ranking); ?>

                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                    <?php $__currentLoopData = $userJawaban; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jawaban): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($jawaban->kriteria->kode_kriteria); ?></td>
                            <td><?php echo e($jawaban->kriteria->kriteria); ?></td>
                            <td>
                                <?php echo e($jawaban->kriteria->bobot->normalisasi); ?>

                            </td>
                            <td><?php echo e($jawaban->kriteria->kategori); ?></td>
                            <td><?php echo e($jawaban->PilihanJawaban->name); ?></td>
                            <td><?php echo e($jawaban->PilihanJawaban->nilai); ?></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </section>
    </body>
</html>
<?php /**PATH /home/arisandi/Documents/skirpsi/spk-program-studi-new/resources/views/pdf/UserRekomendation.blade.php ENDPATH**/ ?>