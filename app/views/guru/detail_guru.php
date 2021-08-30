<?php
$id_siswa = 0;
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
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahGuru">
                                        Edit
                                    </button>
                                </div>
                            </div>
                            <div class="container">
                                <table class="table table-stripped" border="2">
                                    <thead>
                                        <tr>

                                            <td scope="col" rowspan="2">No</td>
                                            <td scope="col" rowspan="2">Nama Lembaga</td>
                                            <td scope="col" rowspan="2">Nama Guru</td>
                                            <td scope="col" rowspan="2">TTL</td>
                                            <td scope="col" rowspan="2">No KTP</td>
                                            <td scope="col" rowspan="2">TMT (SK Awal)</td>
                                            <td scope="col" colspan="2" style="text-align: center;">Masa Kerja Keseluruhan</td>
                                            <td scope="col" rowspan="2">Status</td>
                                            <td scope="col" colspan="2" style="text-align: center;">Alamat</td>
                                            <td scope="col" rowspan="2">Pendidikan Terakhir</td>

                                        </tr>
                                        <tr>
                                            <td>Tahun</td>
                                            <td>Bulan</td>
                                            <td>Lembaga</td>
                                            <td>Rumah</td>

                                        </tr>

                                    </thead>
                                    <tbody>
                                        <form action="<?= base_url; ?>/datasiswa/deletesiswa" method="POST">
                                            <input type="hidden" value="<?= $guru['id_guru']; ?>" name="id_guru">
                                        </form>
                                        <tr>
                                            <td>1</td>
                                            <td style="text-align: center;"> <?php echo $data['detailguru']['nama_lembaga'];  ?></td>
                                            <td style="text-align: center;"> <?php echo $data['detailguru']['nama_guru'];  ?></td>
                                            <td style="text-align: center;"> <?php echo $data['detailguru']['ttl_guru'];  ?></td>
                                            <td style="text-align: center;"> <?php echo $data['detailguru']['ktp_guru'];  ?></td>
                                            <td style="text-align: center;"> <?php echo $data['detailguru']['tmt'];  ?></td>
                                            <td style="text-align: center;"> <?php echo $data['detailguru']['tahun_kerja'];  ?></td>
                                            <td style="text-align: center;"> <?php echo $data['detailguru']['bulan_kerja'];  ?></td>
                                            <td style="text-align: center;"> <?php echo $data['detailguru']['status_guru'];  ?></td>
                                            <td style="text-align: center;"> <?php echo $data['detailguru']['alamat_lembaga'];  ?></td>
                                            <td style="text-align: center;"> <?php echo $data['detailguru']['alamat_rumah'];  ?></td>
                                            <td style="text-align: center;"> <?php echo $data['detailguru']['pendidikan_guru'];  ?></td>

                                            <!-- <td>

                                                        <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                                            <a href="<?= base_url; ?>/detailguru/<?= $guru['id_guru']; ?>" class="btn btn-success"><span style="color: white" class="material-icons">
                                                                    remove_red_eye
                                                                </span></a>

                                                            <button onclick="return confirm('Apakah anda yakin akan menghapus?')" type="submit" class="btn btn-danger"><span style="color: white" class="material-icons">
                                                                    delete
                                                                </span></button>
                                                        </div>
                                                    </td> -->

                                        </tr>
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
<div class="modal fade" id="tambahGuru" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Guru</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form role="form" action="<?= base_url; ?>/detailguru/editguru" method="POST" enctype="multipart/form-data">
                    <input type="hidden" value="<?php echo $data['detailguru']['id_guru']; ?>" name="id_guru">
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Nama Guru</span>
                        <input required type="text" id="nama_guru" name="nama_guru" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" value="<?php echo  $data['detailguru']['nama_guru']; ?>">
                    </div>

                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Nama Lembaga</span>
                        <input required value="<?php echo $data['detailguru']['nama_lembaga']; ?>" type="text" id="nama_lembaga" name="nama_lembaga" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>

                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Tempat/tanggal lahir</span>
                        <input required type="text" value="<?php echo $data['detailguru']['tempatlahir_guru']; ?>" id="tempatlahir_guru" name="tempatlahir_guru" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                        <input type="date" id="ttl_guru" name="ttl_guru" value="<?php echo $data['detailguru']['ttl_guru']; ?>">
                    </div>

                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">KTP Guru</span>
                        <input required type="number" value="<?php echo $data['detailguru']['ktp_guru']; ?>" id="ktp_guru" name="ktp_guru" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>

                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">TMT</span>
                        <input required value="<?php echo $data['detailguru']['tmt']; ?>" type="text" id="tmt" name="tmt" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>

                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Tahun Kerja</span>
                        <input required value="<?php echo $data['detailguru']['tahun_kerja']; ?>" type="number" id="tahun_kerja" name="tahun_kerja" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>

                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Bulan Kerja</span>
                        <input required value="<?php echo $data['detailguru']['bulan_kerja']; ?>" type="number" id="bulan_kerja" name="bulan_kerja" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>

                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Status Guru</span>
                        <input required value="<?php echo $data['detailguru']['status_guru']; ?>" type="text" id="status_guru" name="status_guru" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>

                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Alamat Lembaga</span>
                        <input required value="<?php echo $data['detailguru']['alamat_lembaga']; ?>" type="text" id="alamat_lembaga" name="alamat_lembaga" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>

                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Alamat Rumah</span>
                        <input required value="<?php echo $data['detailguru']['alamat_rumah']; ?>" type="text" id="alamat_rumah" name="alamat_rumah" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>

                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Pendidikan Guru</span>
                        <input required value="<?php echo $data['detailguru']['pendidikan_guru']; ?>" type="text" id="pendidikan_guru" name="pendidikan_guru" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
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