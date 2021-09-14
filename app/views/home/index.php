<?php
$id_jadwal = 0;
?>
<div class="content mt-5" style="background-image: url(<?= base_url; ?>/img/tampilanawal.jpg);   height: 100%;    background-position: center;    background-repeat: no-repeat;    background-size: cover;">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Siswa</h4>
                        <p class="card-category">Jadwal Kegiatan Siswa</p>
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
                                            <th scope="col">Jadwal</th>
                                            <th scope="col">Kegiatan Siswa</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php

                                        foreach ($data['jadwal'] as $jadwal) : ?>
                                            <form action="<?= base_url; ?>/jadwalkegiatansiswa/deletejadwal/<?= $jadwal['id_jadwal']; ?>" method="POST">
                                                <tr>
                                                    <th scope="row"><?php echo $jadwal['waktu_jadwal'] ?></th>
                                                    <td><?php echo $jadwal['kegiatan_jadwal'] ?></td>

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

<!-- Modal Tambah siswa -->
<div class="modal fade" id="tambahCustomer" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Siswa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form role="form" action="<?= base_url; ?>/jadwalkegiatansiswa/tambah_jadwal" method="POST" enctype="multipart/form-data">
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Jadwal</span>
                        <input required type="text" id="jadwal" name="jadwal" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Nama Kegiatan</span>
                        <textarea required class="form-control" id="nama_kegiatan" name="nama_kegiatan" style="height: 100px"></textarea>
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