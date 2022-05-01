<?php
$this->view('templates/strtemplate',$data);
?>

<body class="g-sidenav-show  bg-gray-200">
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <?php
$this->view('templates/nav',$data);
?>
        <!-- End Navbar -->
        <div class="container-fluid py-4" style="padding-left: 0px;">
            <?php
$this->view('templates/mainmenu',$data);
?>
            <div class="position-relative h-100 m-3 px-7 d-flex flex-column justify-content-center">
                <div class="col-12">
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <h4 class="text-white text-capitalize ps-3">Aanggota Siswa Paud Assibyan</h4>
                            </div>
                            <div class="card-body px-0 pb-2">
                                <div class="container">

                                    <div class="row">

                                        <form action="<?= base_url ?>/siswa/carikelas" method="post">
                                            <div class="row">
                                                <div class="col-sm-12" style="padding-left: 0px;">
                                                    <h6> Kelas </h6>
                                                    <div class="col-sm">
                                                        <div class="row">
                                                            <div class="col-sm" style="padding-bottom: 5px;">
                                                                <select class="form-select" placeholder="Tulis Tahun"
                                                                    type="text" class="" name="cari"
                                                                    style="width: 70px;background-color:#b0c4ee;padding-left: 8px;">
                                                                    <option value="A">A</option>
                                                                    <option value="B">B</option>
                                                                    <option value="C">C</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-sm">
                                                                <button
                                                                    class="btn btn-xs bg-gradient-light">cari</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </form>

                                        <form action="<?= base_url ?>/siswa/carisiswa" method="post" class="col-lg-6">


                                            <div class="row">
                                                <div class="col-sm-8" style="padding-left: 0px;">
                                                    <input placeholder="Cari Siswa" type="text" class="mobileforminput"
                                                        name="cari" require
                                                        style="width: 400px;background-color:#FFFFFF;">
                                                </div>
                                                <div class="col-sm-2">
                                                    <button type="submit" class="btn btn-xs bg-gradient-light">
                                                        Cari
                                                    </button>
                                                </div>
                                                <div class="col-sm-2" style="padding-right: 0px;padding-left: 0px;">
                                                    <a href="<?= base_url ?>/siswa"
                                                        class="btn btn-xs bg-gradient-danger">
                                                        Reset
                                                    </a>
                                                </div>
                                            </div>

                                        </form>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <div class="card-body px-0 pb-2">
                            <div class="row table-responsive p-0" style="margin-left: 20px;margin-right: 20px;">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr class="border-radius-lg" style="background-color:#b0c4ee;">
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder align-middle text-center ">
                                                No</th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder  ps-2 align-middle text-center">
                                                Nama</th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder  ps-2 align-middle text-center">
                                                Kelas</th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder  ps-2 align-middle text-center">
                                                Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $loop =0; foreach ($data['siswa'] as $item) : $loop++ ?>
                                        <tr>
                                            <td class="text-center"><?= $loop ?></td>
                                            <td class="text-center"><?= $item['nama'] ?></td>
                                            <td class="text-center"><?= $item['kelas'] ?></td>
                                            <td class="align-middle text-center">
                                                <div class="d-flex justify-content-sm-center mt-2">

                                                    <a href="<?= base_url ?>/tambahsiswa/delete/<?= $item['id'] ?>">
                                                        <button class="btn btn-danger ml-2"
                                                            onclick="return confirm('Apakah anda akan menghapus data ?')">Hapus</button>
                                                    </a>


                                                </div>
                                            </td>


                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>

                                </table>
                            </div>
                            <hr>
                            <br>


                            <br>
                        </div>
                    </div>
                    <br><br>
                    <div class="position-relative">
                        <a href="<?= base_url ?>/tambahsiswa/admin" VALUE="Kembali"
                            class="btn btn-primary position-absolute end-0 bottom-0 "
                            style="background-color: #DA2FE9;margin-left:100px"></a>
                    </div>
                    <br><br>
                </div>
            </div>

            <!-- {{-- Modal Tambah Siswa --}} -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Buat Akun Siswa</h5>
                            <button type="button" data-bs-dismiss="modal" aria-label="Close"> <img
                                    src="{{asset('assets/img/menu/imgclose.svg')}}" alt="" srcset=""> </button>
                        </div>
                        <div class="modal-body">

                            <form action="<?= base_url ?>/tambahsiswa/insert" method="post">
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Nama Siswa:</label>
                                    <input type="text" class="form-control" placeholder="Masukkan Nama Siswa"
                                        name="nama" required style="background-color: #B6BDFF" id="recipient-name">
                                </div>

                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Buat Username:</label>
                                    <input type="text" class="form-control" placeholder="Masukkan Username"
                                        name="username" required style="background-color: #B6BDFF" id="recipient-name">
                                </div>

                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Buat Password:</label>
                                    <input type="text" class="form-control" placeholder="Masukkan Password"
                                        name="password" required style="background-color: #B6BDFF" id="recipient-name">
                                </div>

                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Ulangi Password:</label>
                                    <input type="text" class="form-control" placeholder="Masukkan Ulang Password"
                                        name="password_ulang" required style="background-color: #B6BDFF"
                                        id="recipient-name">
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <?php
$this->view('templates/footer',$data);
?>
        </div>
    </main>

    <?php
$this->view('templates/endtemplate',$data);
?>)