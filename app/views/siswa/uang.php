<?php
$id_jadwal = 0;
?>
<div class="content mt-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Keuangan Siswa</h4>
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
                                            <th scope="col">No</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Periode</th>
                                            <th scope="col">Jenis Tagihan/Keterangan</th>
                                            <th scope="col">Nominal</th>
                                            <th scope="col">Status Bayar</th>
                                            <th scope="col">Tgl Bayar</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                        $i = 1;
                                        foreach ($data['keuangan'] as $keuangan) : ?>
                                            <form action="<?= base_url; ?>/keuangansiswa/hapuskeuangan/<?= $keuangan['id_keuangan']; ?>" method="POST">
                                                <tr>
                                                    <th scope="row"><?php echo $i ?></th>
                                                    <td><?php echo $keuangan['nama'] ?></td>
                                                    <td><?php echo $keuangan['periode'] ?></td>
                                                    <td><?php echo $keuangan['jenis_tagihan'] ?></td>
                                                    <td><?php echo $keuangan['nominal'] ?></td>
                                                    <td><?php echo $keuangan['status_bayar'] ?></td>
                                                    <td><?php echo $keuangan['tanggal_bayar'] ?></td>

                                                </tr>

                                            </form>
                                        <?php
                                            $i++;
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
                <form role="form" action="<?= base_url; ?>/keuangansiswa/tambah_keuangan" method="POST" enctype="multipart/form-data">
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Nama</span>
                        <select class="form-select" aria-label="Default select example" id="nik_keuangan" name="nik_keuangan">
                            <option selected>Pilih Siswa</option>
                            <?php foreach ($data['datasiswa_all'] as $siswa) : ?>
                                <option value="<?= $siswa['nik']; ?>"><?= $siswa['nama']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Periode</span>
                        <input required type="text" id="periode" name="periode" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>

                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Jenis Tagihan</span>
                        <input required type="text" id="jenis_tagihan" name="jenis_tagihan" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>

                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Nominal</span>
                        <input required type="number" id="nominal" name="nominal" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>

                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Status Bayar</span>
                        <input required type="text" id="status_bayar" name="status_bayar" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>

                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Tanggal Bayar</span>
                        <input type="date" id="tanggal_bayar" name="tanggal_bayar">
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