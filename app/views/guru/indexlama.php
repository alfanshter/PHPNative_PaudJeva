<?php
$id = 0;
?>
<div class="content mt-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Data Guru</h4>
                        <p class="card-category">Selamat Datang</p>
                    </div>
                    <div class="card-body">
                        <div class="container">
                            <div class="row">
                                <?php
                                Flasher::Message();
                                ?>
                                <div class="col-lg-3">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahCustomer">
                                        Tambah
                                    </button>
                                </div>
                                <div class="col-lg-9">
                                    <form action="<?= base_url; ?>/dataguru/cariguru" method="POST">
                                        <div class="input-group mb-3 mt-2">
                                            <input type="text" class="form-control" name="key" placeholder="Cari Guru" aria-label="Recipient's username" aria-describedby="button-addon2">
                                            <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Cari</button>
                                            <a href="<?= base_url; ?>/dataguru"><button class="btn btn-outline-secondary" type="button">Reset</button></a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="container">
                                <table class="table table-stripped">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Lembaga</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Foto</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php $i = 1; ?>
                                        <?php

                                        foreach ($data['dataguru'] as $guru) : ?>
                                            <form action="<?= base_url; ?>/dataguru/hapusguru" method="POST">
                                                <input type="hidden" value="<?= $guru['id_guru']; ?>" name="id_guru">
                                                <tr>
                                                    <th scope="row"><?= $i; ?></th>
                                                    <td><?php echo $guru['nama_lembaga'] ?></td>
                                                    <td><?php echo $guru['nama_guru'] ?></td>
                                                    <td> <img src="<?= base_url; ?>/img/<?= $guru['foto_guru']; ?>" height="100" width="100">
                                                    </td>
                                                    <td>

                                                        <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                                            <a href="<?= base_url; ?>/detailguru/<?= $guru['id_guru']; ?>" class="btn btn-success"><span style="color: white" class="material-icons">
                                                                    remove_red_eye
                                                                </span></a>

                                                            <button onclick="return confirm('Apakah anda yakin akan menghapus?')" type="submit" class="btn btn-danger"><span style="color: white" class="material-icons">
                                                                    delete
                                                                </span></button>
                                                        </div>
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

<!-- Modal Tambah siswa -->
<div class="modal fade" id="tambahCustomer" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Guru</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form role="form" action="<?= base_url; ?>/dataguru/tambahguru" method="POST" enctype="multipart/form-data">
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Nama Guru</span>
                        <input required type="text" id="nama_guru" name="nama_guru" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>

                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Nama Lembaga</span>
                        <input required type="text" id="nama_lembaga" name="nama_lembaga" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>

                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Tempat/tanggal lahir</span>
                        <input required type="text" id="tempatlahir_guru" name="tempatlahir_guru" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                        <input type="date" id="ttl_guru" name="ttl_guru">
                    </div>

                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">KTP Guru</span>
                        <input required type="number" id="ktp_guru" name="ktp_guru" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>

                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">TMT</span>
                        <input required type="text" id="tmt" name="tmt" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>

                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Tahun Kerja</span>
                        <input required type="number" id="tahun_kerja" name="tahun_kerja" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>

                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Bulan Kerja</span>
                        <input required type="number" id="bulan_kerja" name="bulan_kerja" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>

                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Status Guru</span>
                        <input required type="text" id="status_guru" name="status_guru" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>

                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Alamat Lembaga</span>
                        <input required type="text" id="alamat_lembaga" name="alamat_lembaga" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>

                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Alamat Rumah</span>
                        <input required type="text" id="alamat_rumah" name="alamat_rumah" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>

                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Pendidikan Guru</span>
                        <input required type="text" id="pendidikan_guru" name="pendidikan_guru" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>

                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Foto Guru</span>
                        <input required type="file" id="foto_guru" name="foto_guru" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>




            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </form>

        </div>
    </div>
</div>