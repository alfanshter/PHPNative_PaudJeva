<?php
$id = 0;
?>
<div class="content mt-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Data Siswa</h4>
                        <p class="card-category">Selamat Datang</p>
                    </div>
                    <div class="card-body">
                        <div class="container">

                            <div class="row">
                                <?php
                                Flasher::Message();
                                ?>
                                <div class="col-lg-9">
                                    <form action="<?= base_url; ?>/anggotasiswa/carisiswa" method="POST">
                                        <div class="input-group mb-3 mt-2">
                                            <input type="text" class="form-control" name="key" placeholder="Cari Siswa" aria-label="Recipient's username" aria-describedby="button-addon2">
                                            <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Cari</button>
                                            <a href="<?= base_url; ?>/anggotasiswa"><button class="btn btn-outline-secondary" type="button">Reset</button></a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="container">
                                <table class="table table-stripped">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php $i = 1; ?>
                                        <?php

                                        foreach ($data['datasiswa_all'] as $siswa) : ?>
                                            <form action="<?= base_url; ?>/anggotasiswa/deletesiswa" method="POST">
                                                <input type="hidden" value="<?= $siswa['id']; ?>" name="id">
                                                <tr>
                                                    <th scope="row"><?= $i; ?></th>
                                                    <td><?php echo $siswa['nama'] ?></td>
                                                    <td><?php
                                                        if ($siswa['role'] == 10) {
                                                            echo 'Belum Diaktifkan';
                                                        } else {
                                                            echo 'Aktif';
                                                        } ?></td>
                                                    <td>

                                                        <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">

                                                            <button onclick="return confirm('Apakah anda yakin akan menghapus?')" type="submit" class="btn btn-danger"><span style="color: white" class="material-icons">
                                                                    delete
                                                                </span></button>
                                                        </div>
                                                        <?php
                                                        if ($siswa['role'] == 2) {

                                                        ?>
                                                            <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">

                                                                <a href="<?= base_url; ?>/anggotasiswa/gantipassword/<?= $siswa['id']; ?>" class="btn btn-primary"><span style="color: white" class="material-icons">
                                                                        edit
                                                                    </span></a>

                                                            </div>

                                                        <?php } ?>
                                                    </td>

                                                    </td>

                                                </tr>

                                            </form>
                                        <?php $i++;
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