<?php
$id_jadwal = 0;
?>
<div class="content mt-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Data Absen</h4>
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
                                            <th scope="col">Nama</th>
                                            <th scope="col">Tanggal</th>
                                            <th scope="col">Hadir/Tidak Hadir</th>
                                            <th scope="col">Keterangan</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                        foreach ($data['absen'] as $absen) : ?>
                                            <form action="<?= base_url; ?>/absensiswa/hapusabsen/<?= $absen['id_absen']; ?>" method="POST">
                                                <tr>
                                                    <th scope="row"><?php echo $absen['nama'] ?></th>
                                                    <td><?php echo $absen['tanggal_absen'] ?></td>
                                                    <td><?php echo $absen['kehadiran'] ?></td>
                                                    <td><?php echo $absen['keterangan'] ?></td>


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
                <h5 class="modal-title" id="exampleModalLabel">Tambah Keuangan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form role="form" action="<?= base_url; ?>/absensiswa/tambahabsen" method="POST" enctype="multipart/form-data">
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Nama</span>
                        <select class="form-select" aria-label="Default select example" id="nik_absen" name="nik_absen">
                            <?php foreach ($data['datasiswa_all'] as $siswa) : ?>
                                <option value="<?= $siswa['nik']; ?>"><?= $siswa['nama']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Tanggal Absen</span>
                        <input type="date" id="tanggal_absen" name="tanggal_absen">
                    </div>

                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Hadir/Tidak Hadir</span>
                        <select class="form-select" aria-label="Default select example" id="kehadiran" name="kehadiran">
                            <option value="Hadir">Hadir</option>
                            <option value="Tidak Hadir">Tidak Hadir</option>
                        </select>
                    </div>

                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Keterangan</span>
                        <input required type="text" id="keterangan" name="keterangan" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
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