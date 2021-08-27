<?php
$id_jadwal = 0;
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
                            <!-- @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <i class="material-icons">close</i>
                                </button>
                                <span>
                                    <b>{{$message}}</span>
                            </div>
                            @endif
                            @if ($message = Session::get('gagal'))
                            <div class="alert alert-warning">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <i class="material-icons">close</i>
                                </button>
                                <span>
                                    <b>{{$message}}</span>
                            </div>
                            @endif
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif -->
                            <div class="row">
                                <?php
                                Flasher::Message();
                                ?>
                                <div class="col-lg-3">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahCustomer">
                                        Tambah
                                    </button>
                                </div>
                            </div>
                            <div class="container">
                                <table class="table table-stripped">
                                    <thead>
                                        <tr>
                                            <th scope="col">Jadwal</th>
                                            <th scope="col">Kegiatan Siswa</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php

                                        foreach ($data['jadwal'] as $jadwal) : ?>
                                            <form action="<?= base_url; ?>/datasiswa/deletesiswa" method="POST">
                                                <tr>
                                                    <th scope="row"><?php echo $jadwal['waktu_jadwal'] ?></th>
                                                    <td><?php echo $jadwal['kegiatan_jadwal'] ?></td>
                                                    <td>

                                                        <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                                            <a href="<?= base_url; ?>/detailsiswa/<?= $jadwal['id_jadwal']; ?>" class="btn btn-success"><span style="color: white" class="material-icons">
                                                                    remove_red_eye
                                                                </span></a>

                                                            <button onclick="return confirm('Apakah anda yakin akan menghapus?')" type="submit" class="btn btn-danger"><span style="color: white" class="material-icons">
                                                                    delete
                                                                </span></button>
                                                        </div>
                                                    </td>

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
                <form role="form" action="<?= base_url; ?>/jadwalkegiatansiswa/daftarsiswa" method="POST" enctype="multipart/form-data">
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