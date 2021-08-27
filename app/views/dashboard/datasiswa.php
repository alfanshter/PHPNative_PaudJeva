<?php
$id_siswa = 0;
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
                                <div class="col-lg-9">
                                    <form action="{{ url('search-customer') }}" method="GET">
                                        <!-- @csrf -->
                                        <div class="input-group mb-3 mt-2">
                                            <input type="text" class="form-control" name="cari" placeholder="Cari Siswa" aria-label="Recipient's username" aria-describedby="button-addon2">
                                            <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Cari</button>
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
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php $i = 1; ?>
                                        <?php

                                        foreach ($data['datasiswa_all'] as $siswa) : ?>
                                            <form action="<?= base_url; ?>/datasiswa/deletesiswa" method="POST">
                                                <input type="hidden" value="<?= $siswa['id_siswa']; ?>" name="id_siswa">
                                                <tr>
                                                    <th scope="row"><?= $i; ?></th>
                                                    <td><?php echo $siswa['nama'] ?></td>
                                                    <td>

                                                        <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                                            <a href="<?= base_url; ?>/detailsiswa/<?= $siswa['id_siswa']; ?>" class="btn btn-success"><span style="color: white" class="material-icons">
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
                <h5 class="modal-title" id="exampleModalLabel">Tambah Siswa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form role="form" action="<?= base_url; ?>/pendaftaran/daftarsiswa" method="POST" enctype="multipart/form-data">
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Nama</span>
                        <input required type="text" id="nama" name="nama" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Tempat/tanggal lahir</span>
                        <input required type="text" id="tempat_lahir" name="tempat_lahir" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                        <input type="date" id="ttl" name="ttl">
                    </div>

                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Jenis Kelamin</span>
                        <select class="form-select" aria-label="Default select example" id="jk" name="jk">
                            <option selected>Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>

                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">NIK</span>
                        <input required type="number" id="nik" name="nik" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>

                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Alamat</span>
                        <input required type="text" id="alamat" name="alamat" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>

                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Agama</span>
                        <select class="form-select" aria-label="Default select example" id="agama" name="agama" required>
                            <option selected>islam</option>
                            <option value="kristen">kristen</option>
                        </select>

                    </div>
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Jenis Tinggal</span>
                        <input required type="text" id="jenis_tinggal" name="jenis_tinggal" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Alat transportasi</span>
                        <input required type="text" id="alat_transportasi" name="alat_transportasi" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Nomor Telepon</span>
                        <input type="number" required id="nomor_telepon" name="nomor_telepon" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Status Dalam Keluarga</span>
                        <input required type="text" id="status_dalam_keluarga" name="status_dalam_keluarga" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Apakah siswa penerima KPS ?</span>
                        <select class="form-select" aria-label="Default select example" id="penerima_kps" name="penerima_kps">
                            <option selected>YA</option>
                            <option value="TIDAK">TIDAK</option>
                        </select>
                    </div>

                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Nomor KPS</span>
                        <input type="text" id="no_kps" name="no_kps" lass="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>

                    <h3 align="end"><b>Data Ayah</b> </h3>
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Nama</span>
                        <input required id="nama_ayah" name="nama_ayah" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Tempat/tanggal lahir</span>
                        <input required type="text" id="tempat_lahir_ayah" name="tempat_lahir_ayah" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                        <input type="date" id="ttl_ayah" name="ttl_ayah">
                    </div>

                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">NIK</span>
                        <input required id="nik_ayah" name="nik_ayah" type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>

                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Pendidikan Terakhir</span>
                        <input required id="pendidikan_ayah" name="pendidikan_ayah" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>

                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Pekerjaan</span>
                        <input required id="pekerjaan_ayah" name="pekerjaan_ayah" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Status</span>
                        <select id="status_ayah" name="status_ayah" class="form-select" aria-label="Default select example">
                            <option selected>Masih Hidup</option>
                            <option value="meninggal">Meninggal</option>
                        </select>
                    </div>

                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Penghasilan</span>
                        <input required id="penghasilan_ayah" name="penghasilan_ayah" type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>

                    <br><br>

                    <h3 align="end"><b>Data Ibu</b> </h3>
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Nama</span>
                        <input required type="text" id="nama_ibu" name="nama_ibu" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Tempat/tanggal lahir</span>
                        <input required type="text" id="tempat_lahir_ibu" name="tempat_lahir_ibu" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                        <input type="date" id="ttl_ibu" name="ttl_ibu">
                    </div>

                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">NIK</span>
                        <input required id="nik_ibu" name="nik_ibu" type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>

                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Pendidikan Terakhir</span>
                        <input required type="text" id="pendidikan_ibu" name="pendidikan_ibu" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>

                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Pekerjaan</span>
                        <input required type="text" class="form-control" id="pekerjaan_ibu" name="pekerjaan_ibu" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Status</span>
                        <select class="form-select" aria-label="Default select example" id="status_ibu" name="status_ibu">
                            <option selected>Masih Hidup</option>
                            <option value="meninggal">Meninggal</option>
                        </select>
                    </div>

                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Penghasilan</span>
                        <input required id="penghasilan_ibu" name="penghasilan_ibu" type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>
                    <p>*Dengan Mengirim, berarti menyetujui untuk mengikuti segala ketentuan dan tata tertib
                        yang sudah di berlakukan oleh Paud Assbiyan.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </form>

        </div>
    </div>
</div>