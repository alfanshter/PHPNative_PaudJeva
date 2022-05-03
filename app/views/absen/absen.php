<?php
$this->view('templates/strtemplate', $data);
?>


<body class="g-sidenav-show  bg-gray-200">
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <?php
        $this->view('templates/nav', $data);
        ?>

        <!-- End Navbar -->
        <div class="container-fluid py-4" style="padding-left: 0px;">
            <?php
            $this->view('templates/mainmenu', $data);
            ?>

            <div class="position-relative h-100 m-3 px-7 d-flex flex-column justify-content-center">
                <div class="col-12">
                    <div class="card my-4" style="background: rgba(255, 254, 254, 0.83);">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <h4 class="text-white text-capitalize ps-3">ABSENSI SISWA PAUD ASSIBYAN</h4>
                            </div>
                            <?php if ($_SESSION["role"] == 0) {
                            ?>
                                <div class="card-body px-0 pb-2">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-2">
                                                <?php
                                                Flasher::Message();
                                                ?>
                                                <p>
                                                    <button type="submit" class="btn" style="background-color:#b0c4ee;" data-bs-toggle="modal" data-bs-target="#exampleModal">Tambah</button>
                                                </p>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="row">
                                                    <div class="col-sm-8" style="padding-left: 0px;">
                                                        <input placeholder="Cari Siswa" type="text" class="mobileforminput" style="width: 400px;background-color:#FFFFFF;">
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <button type="submit" class="btn btn-xs bg-gradient-light">
                                                            Cari
                                                        </button>
                                                    </div>
                                                    <div class="col-sm-2" style="padding-right: 0px;padding-left: 0px;">
                                                        <button type="submit" class="btn btn-xs bg-gradient-danger">
                                                            Reset
                                                        </button>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            <?php } ?>
                        </div>
                        <div class="card-body px-0 pb-2">
                            <div class="row table-responsive p-0" style="margin-left: 20px;margin-right: 20px;">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr class="border-radius-lg" style="background-color:#b0c4ee;">
                                            <th class="text-uppercase text-center text-secondary text-xxs text-dark  font-weight-bolder ">No
                                            </th>
                                            <th class="text-uppercase text-center text-secondary text-xxs text-dark  font-weight-bolder ">Nama
                                            </th>
                                            <th class="text-uppercase text-center text-secondary text-xxs text-dark  font-weight-bolder  ps-2 text-center">
                                                Kelas</th>
                                            <th class="text-uppercase text-center text-secondary text-xxs text-dark  font-weight-bolder  ps-2">
                                                Tanggal</th>
                                            <th class="text-uppercase text-center text-secondary text-xxs text-dark  font-weight-bolder  ps-2">
                                                Hadir / Tidak Hadir</th>
                                            <th class="text-uppercase text-center text-secondary text-xxs text-dark  font-weight-bolder  ps-2">
                                                Keterangan</th>
                                            <?php if ($_SESSION["role"] == 0) {
                                            ?>
                                                <th class="text-uppercase text-secondary text-xxs text-dark  font-weight-bolder  ps-2">
                                                    Aksi</th>

                                            <?php } ?>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 0;
                                        foreach ($data['absen'] as $item) : $no++ ?>
                                            <tr>
                                                <td class="text-center text-dark"><?= $no ?></td>
                                                <td class="text-center text-dark "><?= $item['nama'] ?></td>
                                                <td class="text-center text-dark "><?= $item['kelas'] ?></td>
                                                <td class="text-center text-dark "><?= $item['tanggal'] ?></td>
                                                <?php if ($item['absen'] == 0) { ?>
                                                    <td class="text-center text-dark ">Tidak Hadir</td>
                                                <?php } ?>
                                                <?php if ($item['absen'] == 1) { ?>
                                                    <td class="text-center text-dark ">Hadir</td>
                                                <?php } ?>

                                                <td class="text-center text-dark "><?= $item['keterangan'] ?></td>
                                                <?php if ($_SESSION["role"] == 0) {
                                                ?>
                                                    <td class="align-middle text-center text-dark ">
                                                        <div class="d-flex justify-content-sm-center mt-2">
                                                            <input type="image" src="tombol/btnmata.png" name="button" data-bs-toggle="modal" data-bs-target="#editmodal<?= $item['id'] ?>" width="50" height="37" alt="submit" />
                                                            <a href="absensiswa/delete/<?= $item['id'] ?>">
                                                                <input type="image" src="tombol/btnhapus.png" onclick="return confirm('Apakah anda akan menghapus data ?')" name="submit" width="50" height="37" alt="submit" />

                                                            </a>
                                                            <!-- {{-- Modal Edit Absen --}} -->
                                                            <div class="modal fade" id="editmodal<?= $item['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">
                                                                                Detail Absensi Siswa</h5>
                                                                            <button type="button" data-bs-dismiss="modal" aria-label="Close"> <img src="assets_baru/img/menu/imgclose.svg" alt="" srcset=""> </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <form action="absensiswa/update" method="post">
                                                                                <input type="hidden" name="id" value="<?= $item['id'] ?>">
                                                                                <div class="mb-3">
                                                                                    <label for="recipient-name" class="col-form-label">Nama:</label>
                                                                                    <input type="text" class="form-control" value="<?= $item['nama'] ?>" disabled style="background-color: #B6BDFF">
                                                                                </div>

                                                                                <div class="mb-3">
                                                                                    <label for="recipient-name" class="col-form-label">Tanggal
                                                                                        Absen:</label>
                                                                                    <input type="date" class="form-control" value="<?= $item['tanggal'] ?>" name="tanggal" id="tanggal" required style="background-color: #B6BDFF">
                                                                                </div>


                                                                                <div class="mb-3">
                                                                                    <label for="recipient-name" class="col-form-label">Kelas:</label>
                                                                                    <input type="text" class="form-control" value="<?= $item['kelas'] ?>" placeholder="Masukkan Kelas" name="kelas" id="kelas" required style="background-color: #B6BDFF">
                                                                                </div>


                                                                                <div class="mb-3">
                                                                                    <label for="recipient-name" class="col-form-label">Hadir/Tidak
                                                                                        Hadir:</label>
                                                                                    <select class="form-select" id="absen" required name="absen" style="background-color: #B6BDFF">
                                                                                        <option selected>Pilih Absen</option>
                                                                                        <option value="1">Hadir</option>
                                                                                        <option value="0">Tidak Hadir</option>
                                                                                    </select>
                                                                                </div>

                                                                                <div class="mb-3">
                                                                                    <label for="recipient-name" class="col-form-label">Keterangan:</label>
                                                                                    <input type="text" class="form-control" value="<?= $item['keterangan'] ?>" placeholder="Keterangan" name="keterangan" id="keterangan" required style="background-color: #B6BDFF">
                                                                                </div>


                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                                    <button type="submit" class="btn btn-primary">Simpan
                                                                                        Edit</button>
                                                                                </div>

                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>


                                                            </div>
                                                    </td>

                                                <?php } ?>

                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                            <br>
                        </div>
                    </div>
                    <div class="position-relative">
                        <input type="button" onClick="history.go(-1)" VALUE="Kembali" class="btn btn-primary position-absolute top-0 end-0" style="background-color: #DA2FE9;"></input>

                    </div>
                    <br>
                </div>
            </div>
            <!-- {{-- Modal Tambah Siswa --}} -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Absensi Siswa</h5>
                            <button type="button" data-bs-dismiss="modal" aria-label="Close"> <img src="assets_baru/img/menu/imgclose.svg" alt="" srcset=""> </button>
                        </div>
                        <div class="modal-body">
                            <form action="absensiswa/insert" method="post">
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Nama:</label>
                                    <select class="form-select" id="user_id" name="user_id" style="background-color: #B6BDFF">
                                        <option selected>Pilih Siswa...</option>
                                        <?php foreach ($data['siswa'] as $item) : ?>
                                            <option value="<?= $item['user_id'] ?>"><?= $item['nama'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Tanggal Absen:</label>
                                    <input type="date" class="form-control" placeholder="Masukkan Tanggal Lahir" name="tanggal" id="tanggal" required style="background-color: #B6BDFF">
                                </div>


                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Kelas:</label>
                                    <input type="text" class="form-control" placeholder="Masukkan Kelas" name="kelas" id="kelas" required style="background-color: #B6BDFF">
                                </div>


                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Hadir/Tidak Hadir:</label>
                                    <select class="form-select" id="absen" name="absen" style="background-color: #B6BDFF">
                                        <option selected>Pilih Absen</option>
                                        <option value="1">Hadir</option>
                                        <option value="0">Tidak Hadir</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Keterangan:</label>
                                    <input type="text" class="form-control" placeholder="Keterangan" name="keterangan" id="keterangan" required style="background-color: #B6BDFF">
                                </div>


                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>



            <?php
            $this->view('templates/footer', $data);
            ?>

        </div>
    </main>

    <?php
    $this->view('templates/endtemplate', $data);
    ?>