<?php
$id_jadwal = 0;
?>
<div class="content mt-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Nilai Siswa</h4>
                        <p class="card-category">Selamat Datang</p>
                    </div>
                    <div class="card-body">
                        <div class="container">

                            <div class="row">
                                <?php
                                Flasher::Message();
                                ?>
                            </div>
                            <div class="container">
                                <table class="table table-stripped">
                                    <thead>
                                        <tr>
                                            <th scope="col">Tgl</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Bermain</th>
                                            <th scope="col">Ikrar Bersama</th>
                                            <th scope="col">Senam Irama</th>
                                            <th scope="col">Bernyanyi</th>
                                            <th scope="col">Berdoa</th>
                                            <th scope="col">Pijakan Sebelum Bermain</th>
                                            <th scope="col">Pijakan Setelah Bermain</th>
                                            <th scope="col">Rata - Rata</th>
                                            <th scope="col">Status</th>
                                        </tr>

                                    </thead>
                                    <tbody>

                                        <?php

                                        foreach ($data['detailnilai'] as $nilai) : ?>
                                            <form action="<?= base_url; ?>/nilaisiswa/deletenilai/<?= $nilai['id_nilai']; ?>" method="POST">
                                                <tr>
                                                    <th scope="row"><?php echo $nilai['tanggal_nilai'] ?></th>
                                                    <td style="text-align: center;"><?php echo $nilai['nama'] ?></td>
                                                    <td style="text-align: center;"><?php echo $nilai['bermain'] ?></td>
                                                    <td style="text-align: center;"><?php echo $nilai['ikrar_bersama'] ?></td>
                                                    <td style="text-align: center;"><?php echo $nilai['senam_irama'] ?></td>
                                                    <td style="text-align: center;"><?php echo $nilai['bernyanyi'] ?></td>
                                                    <td style="text-align: center;"><?php echo $nilai['berdoa'] ?></td>
                                                    <td style="text-align: center;"><?php echo $nilai['pijakan_sebelum_bermain'] ?></td>
                                                    <td style="text-align: center;"><?php echo $nilai['pijakan_setelah_bermain'] ?></td>
                                                    <td><?php $jumlah = $nilai['bermain'] + $nilai['ikrar_bersama'] + $nilai['senam_irama'] + $nilai['bernyanyi'] + $nilai['berdoa'] + $nilai['pijakan_sebelum_bermain'] + $nilai['pijakan_setelah_bermain'];
                                                        $rata2 = $jumlah / 7;
                                                        echo number_format($rata2, 1);
                                                        ?></td>
                                                    <td><?php
                                                        if ($rata2 >= 85) {
                                                            echo 'Sangat Baik';
                                                        } else if ($rata2 >= 75) {
                                                            echo 'Baik';
                                                        } else if ($rata2 >= 60) {
                                                            echo 'Cukup';
                                                        } else {
                                                            echo 'Kurang';
                                                        }
                                                        ?></td>

                                                    <td>

                                                </tr>

                                            </form>
                                        <?php
                                        endforeach; ?>

                                    </tbody>
                                </table>
                            </div>
                            <hr class="mt-2">
                            <div class="d-flex justify-content-center">
                                <!-- {{ $data->links('vendor.pagination.simple-tailwind') }} -->
                            </div>
                        </div>
                    </div>
                </div>

                <!-- kedua -->
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Komentar Nilai</h4>
                    </div>
                    <div class="card-body">
                        <div class="container">

                            <div class="row">
                                <?php
                                Flasher::Message();
                                ?>
                            </div>
                            <div class="container">
                                <table class="table table-stripped">
                                    <thead>
                                        <tr>
                                            <th scope="col">Tgl</th>
                                            <th scope="col">Komentar Nilai</th>
                                        </tr>

                                    </thead>
                                    <tbody>

                                        <?php

                                        foreach ($data['detailnilai'] as $nilai) : ?>
                                            <form action="<?= base_url; ?>/nilaisiswa/deletenilai/<?= $nilai['id_nilai']; ?>" method="POST">
                                                <tr>
                                                    <th scope="row"><?php echo $nilai['tanggal_nilai'] ?></th>
                                                    <td><?php echo $nilai['komentar_nilai'] ?></td>

                                                </tr>

                                            </form>
                                        <?php
                                        endforeach; ?>

                                    </tbody>
                                </table>
                            </div>
                            <hr class="mt-2">
                            <div class="d-flex justify-content-center">
                                <!-- {{ $data->links('vendor.pagination.simple-tailwind') }} -->
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>