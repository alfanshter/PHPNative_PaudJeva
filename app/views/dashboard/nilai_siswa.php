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
                                            <th scope="col">Aksi</th>
                                        </tr>

                                    </thead>
                                    <tbody>

                                        <?php

                                        foreach ($data['nilai'] as $nilai) : ?>
                                            <form action="<?= base_url; ?>/nilaisiswa/deletenilai/<?= $nilai['id_nilai']; ?>" method="POST">
                                                <tr>
                                                    <th scope="row"><?php echo $nilai['tanggal_nilai'] ?></th>
                                                    <td><?php echo $nilai['nama'] ?></td>
                                                    <td><?php echo $nilai['bermain'] ?></td>
                                                    <td><?php echo $nilai['ikrar_bersama'] ?></td>
                                                    <td><?php echo $nilai['senam_irama'] ?></td>
                                                    <td><?php echo $nilai['bernyanyi'] ?></td>
                                                    <td><?php echo $nilai['berdoa'] ?></td>
                                                    <td><?php echo $nilai['pijakan_sebelum_bermain'] ?></td>
                                                    <td><?php echo $nilai['pijakan_setelah_bermain'] ?></td>
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

                                                        <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                                            <a href="<?= base_url; ?>/detailnilaisiswa/<?= $nilai['id_nilai']; ?>" class="btn btn-success"><span style="color: white" class="material-icons">
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
                <h5 class="modal-title" id="exampleModalLabel">Tambah Nilai</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form role="form" action="<?= base_url; ?>/nilaisiswa/tambah_nilai" method="POST" enctype="multipart/form-data">
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Nama</span>
                        <select class="form-select" aria-label="Default select example" id="nik_siswa" name="nik_siswa">
                            <option selected>Pilih Siswa</option>
                            <?php foreach ($data['datasiswa_all'] as $siswa) : ?>
                                <option value="<?= $siswa['nik']; ?>"><?= $siswa['nama']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Bermain</span>
                        <input required type="number" id="bermain" name="bermain" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>

                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Ikrar Bersama</span>
                        <input required type="number" id="ikrar_bersama" name="ikrar_bersama" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>

                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Senam Irama</span>
                        <input required type="number" id="senam_irama" name="senam_irama" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>

                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Bernyanyi</span>
                        <input required type="number" id="bernyanyi" name="bernyanyi" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>

                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Berdoa</span>
                        <input required type="number" id="berdoa" name="berdoa" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>

                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Pijakan Sebelum Bermain</span>
                        <input required type="number" id="pijakan_sebelum_bermain" name="pijakan_sebelum_bermain" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>

                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Pijakan Setelah Bermain</span>
                        <input required type="number" id="pijakan_setelah_bermain" name="pijakan_setelah_bermain" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>


                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Tanggal Nilai</span>
                        <input type="date" id="tanggal_nilai" name="tanggal_nilai">
                    </div>

                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Komentar Nilai</span>
                        <textarea required id="komentar_nilai" name="komentar_nilai" rows="4" cols="50"></textarea>
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