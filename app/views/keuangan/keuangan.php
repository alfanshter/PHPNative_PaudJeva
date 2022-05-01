<?php 
$this->view('templates/strtemplate',$data);
?>


<body class="g-sidenav-show  bg-gray-200">
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <?php 
$this->view('templates/nav',$data);
?>


        <!-- End Navbar -->
        <div class="container-fluid py-4" style="padding-left: 0px;"> <?php 
$this->view('templates/mainmenu',$data);
?>

            <div class="position-relative h-100 m-3 px-7 d-flex flex-column justify-content-center">
                <div class="col-12">
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <h4 class="text-white text-capitalize ps-3">KEUANGAN SISWA PAUD ASSIBYAN</h4>
                            </div>
                        </div>
                        <div class="card-body px-0 pb-2">
                            <?php if($_SESSION["role"] ==0) { ?>
                            <div class="container">
                                <div class="row">
                                    <?php
                                        Flasher::Message();
                                        ?>
                                    <div class="col-lg-2">
                                        <p>
                                            <button type="submit" class="btn" style="background-color:#b0c4ee;"
                                                data-bs-toggle="modal" data-bs-target="#exampleModal">Tambah</button>
                                        </p>
                                    </div>
                                    <div class="col-lg-3" style="padding-right: 50px;">
                                        <form action="<?= base_url ?>/keuangansiswa/caribulan" method="post">
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <h6> Bulan </h6>
                                                </div>
                                                <div class="col-sm" style="padding-bottom: 5px;">
                                                    <select class="form-select" name="bulan" placeholder="Tulis Tahun"
                                                        type="text" class=""
                                                        style="background-color:#b0c4ee;padding-left: 8px;">
                                                        <option value="Januari">Januari</option>
                                                        <option value="Februari">Februari</option>
                                                        <option value="Maret">Maret</option>
                                                        <option value="April">April</option>
                                                        <option value="Mei">Mei</option>
                                                        <option value="Juni">Juni</option>
                                                        <option value="Juli">Juli</option>
                                                        <option value="Agustus">Agustus</option>
                                                        <option value="September">September</option>
                                                        <option value="Oktober">Oktober</option>
                                                        <option value="November">November</option>
                                                        <option value="Desember">Desember</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <h6> Tahun </h6>
                                                </div>
                                                <div class="col-sm" style="padding-bottom: 5px;">
                                                    <input placeholder="Tulis Tahun" type="text" required name="tahun"
                                                        class="form-control"
                                                        style="background-color:#b0c4ee;padding-left: 8px;">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <h6> Kelas </h6>
                                                </div>
                                                <div class="col-sm">
                                                    <div class="row">
                                                        <div class="col-sm">
                                                            <select class="form-select" placeholder="Tulis Tahun"
                                                                type="text" class="" name="kelas"
                                                                style="width: 70px;background-color:#b0c4ee;padding-left: 8px;">
                                                                <option value="A">A</option>
                                                                <option value="B">B</option>
                                                                <option value="C">C</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-sm">
                                                            <button type="submit"
                                                                class="btn btn-xs bg-gradient-light">cari</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-lg-6">
                                        <form action="<?= base_url ?>/keuangansiswa/carisiswa" method="post">
                                            <div class="row">
                                                <div class="col-sm-8" style="padding-left: 0px;">
                                                    <input placeholder="Cari Siswa" type="text" class="mobileforminput"
                                                        style="width: 400px;background-color:#FFFFFF;" required
                                                        name="cari">
                                                </div>
                                                <div class="col-sm-2">
                                                    <button type="submit" class="btn btn-xs bg-gradient-light">
                                                        Cari
                                                    </button>
                                                </div>
                                                <div class="col-sm-2" style="padding-right: 0px;padding-left: 0px;">
                                                    <a href="<?= base_url ?>/keuangansiswa"
                                                        class="btn btn-xs bg-gradient-danger">
                                                        Reset
                                                    </a>
                                                </div>
                                            </div>

                                        </form>
                                        <div class="row">
                                            <form action="<?= base_url ?>/keuangansiswa/keuangan_pdf" target="_blank"
                                                method="post">
                                                <?php 
                                                    $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                                                    $last_url =basename($actual_link);

                                                    if ($last_url =="caribulan") {
                                
                                                ?>
                                                <input type="hidden" name="bulan" value="<?= $data['bulan'] ?>">
                                                <input type="hidden" name="tahun" value="<?= $data['tahun'] ?>">
                                                <input type="hidden" name="kelas" value="<?= $data['kelas'] ?>">
                                                <?php }?>


                                                <button type="submit" class="btn btn-warning" style="width: 300px;">
                                                    <img src="<?= base_url ?>/assets_baru/img/illustrations/pdf-btn.png"
                                                        alt="Kegiatan" width="40" height="40"> Cetak Keuangan Bulan ini
                                                </button>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <?php }?>
                            <br>
                            <div class="row table-responsive p-0" style="margin-left: 20px;margin-right: 20px;">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr class="border-radius-lg" style="background-color:#b0c4ee;">
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder text-center">
                                                No</th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder  ps-2 text-center">
                                                Nama</th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder  ps-2 text-center">
                                                Kelas</th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder  ps-2 text-center">
                                                Bulan</th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder  ps-2 text-center">
                                                Jenis Surat</th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder  ps-2 text-center">
                                                Biaya</th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder  ps-2 text-center">
                                                status</th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder  ps-2 text-center">
                                                Tanggal</th>
                                            <?php if ($_SESSION["role"] ==0) {
                                                ?>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder  ps-2">
                                                Aksi</th>

                                            <?php }?>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-left" style="border-right:1pt solid white;"></td>
                                            <td class="text-left" style="border-right:1pt solid white;"></td>
                                            <td class="text-left" style="border-right:1pt solid white;"></td>
                                            <td class="text-left" style="border-right:1pt solid white;"></td>
                                            <td class="text-left" style="border-right:1pt solid white;"></td>
                                            <td class="text-left" style="border-right:1pt solid white;"></td>
                                            <td class="text-left" style="border-right:1pt solid white;"></td>
                                            <td class="text-left" style="border-right:1pt solid white;"></td>
                                            <td class="text-left" style="border-right:1pt solid white;"></td>
                                        </tr>
                                        <?php $no = 0;  foreach($data['keuangan'] as $item) : $no++?>
                                        <tr>
                                            <td class="text-center" style="border-right:1pt solid black;"><?= $no ?>
                                            </td>
                                            <td class="text-center" style="border-right:1pt solid black;">
                                                <?= $item['nama'] ?></td>
                                            <td class="text-center" style="border-right:1pt solid black;">
                                                <?= $item['kelas'] ?></td>
                                            <td class="text-center" style="border-right:1pt solid black;">
                                                <?= $item['bulan'] ?></td>
                                            <td class="text-center" style="border-right:1pt solid black;">
                                                <?= $item['jenis_surat'] ?></td>
                                            <td class="text-center" style="border-right:1pt solid black;">
                                                <?= $item['biaya'] ?></td>
                                            <td class="text-center" style="border-right:1pt solid black;">
                                                <?= $item['status'] ?></td>
                                            <td class="text-center" style="border-right:1pt solid black;">
                                                <?= $item['tanggal'] ?></td>
                                            <?php if($_SESSION["role"] ==0){?>
                                            <td class="text-center" style="border-right:1pt solid black;">
                                                <button type="button" class="btn btn-xs bg-gradient-success"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#editmodal<?= $item['id'] ?>">
                                                    <img src="<?= base_url ?>/assets_baru/img/illustrations/eye.png"
                                                        alt="" width="20" height="20" />
                                                </button>
                                                <!-- edit modal -->
                                                <div class="modal fade" id="editmodal<?= $item['id'] ?>" tabindex="-1"
                                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Detail
                                                                    Keuangan</h5>
                                                                <button class="buttonclosemodal" type="button"
                                                                    data-bs-dismiss="modal" aria-label="Close">
                                                                    <img src="assets_baru/img/menu/imgclose.svg" alt=""
                                                                        srcset="">
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="keuangansiswa/update" method="post">
                                                                    <input type="hidden" name="id"
                                                                        value="<?= $item['id'] ?>">
                                                                    <div class="container">
                                                                        <div class="row">
                                                                            <div class="col-sm-4">
                                                                                <label for="recipient-name"
                                                                                    class="col-form-label">Nama:</label>
                                                                            </div>
                                                                            <div class="col-sm">
                                                                                <input type="text"
                                                                                    class="mobileforminput" disabled
                                                                                    value="<?= $item['nama'] ?>"
                                                                                    style="width: 250px;background-color: #FFFFFF">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-sm-4">
                                                                                <label for="recipient-name"
                                                                                    class="col-form-label">Kelas:</label>
                                                                            </div>
                                                                            <div class="col-sm">
                                                                                <select class="form-select" id="kelas"
                                                                                    name="kelas"
                                                                                    style="width: 100px;background-color: #FFFFFF;padding-left: 8px;">
                                                                                    <option selected>
                                                                                        <?= $item['kelas'] ?></option>
                                                                                    <option value="A">A</option>
                                                                                    <option value="B">B</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-sm-4">
                                                                                <label for="recipient-name"
                                                                                    class="col-form-label">Periode:</label>
                                                                            </div>
                                                                            <div class="col-sm">
                                                                                <input type="text"
                                                                                    class="mobileforminput"
                                                                                    value="<?= $item['periode'] ?>"
                                                                                    name="periode" id="periode" required
                                                                                    style="width: 250px;background-color: #FFFFFF">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-sm-4">
                                                                                <label for="recipient-name"
                                                                                    class="col-form-label">Jenis
                                                                                    Tagihan:</label>
                                                                            </div>
                                                                            <div class="col-sm">
                                                                                <input type="text"
                                                                                    class="mobileforminput"
                                                                                    value="<?= $item['jenis_surat'] ?>"
                                                                                    name="jenis_surat" id="jenis_surat"
                                                                                    required
                                                                                    style="width: 250px;background-color: #FFFFFF">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-sm-4">
                                                                                <label for="recipient-name"
                                                                                    class="col-form-label">Nominal:</label>
                                                                            </div>
                                                                            <div class="col-sm">
                                                                                <input type="number"
                                                                                    class="mobileforminput"
                                                                                    value="<?= $item['biaya'] ?>"
                                                                                    name="biaya" id="biaya" required
                                                                                    style="width: 250px;background-color: #FFFFFF">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-sm-4">
                                                                                <label for="recipient-name"
                                                                                    class="col-form-label">Status
                                                                                    Pembayaran:</label>
                                                                            </div>
                                                                            <div class="col-sm">
                                                                                <input type="text"
                                                                                    class="mobileforminput"
                                                                                    value="<?= $item['status'] ?>"
                                                                                    name="status" id="status" required
                                                                                    style="width: 250px;background-color: #FFFFFF">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-sm-4">
                                                                                <label for="recipient-name"
                                                                                    class="col-form-label">Tanggal
                                                                                    Bayar:</label>
                                                                            </div>
                                                                            <div class="col-sm">
                                                                                <input type="date" class="form-control"
                                                                                    value="<?= $item['tanggal'] ?>"
                                                                                    name="tanggal" id="tanggal" required
                                                                                    style="padding-left: 8px;background-color: #E1E1E1">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-primary"
                                                                            data-bs-dismiss="modal">Close</button>
                                                                        <button type="submit"
                                                                            class="btn btn-secondary">Submit</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <a href="<?= base_url ?>/keuangansiswa/delete/<?= $item['id'] ?>"
                                                    class="btn btn-xs bg-gradient-danger"
                                                    onclick="return confirm('Apakah anda akan menghapus data ?')">
                                                    <img src="<?= base_url ?>/assets_baru/img/illustrations/delete-btn.png"
                                                        alt="" width="20" height="20" />
                                                </a>
                                            </td>

                                            <?php }?>
                                        </tr>
                                        <?php endforeach;?>


                                    </tbody>
                                </table>

                            </div>
                            <hr style="color:black;">
                            <br>
                        </div>
                    </div>
                    <div class="position-relative">
                        <input type="button" onClick="history.go(-1)" VALUE="Kembali"
                            class="btn btn-primary position-absolute top-0 end-0"
                            style="background-color: #DA2FE9;"></input>

                    </div>

                    <br>
                    <br>
                </div>
            </div>
            <!-- tambah modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Keuangan</h5>
                            <button class="buttonclosemodal" type="button" data-bs-dismiss="modal" aria-label="Close">
                                <img src="assets_baru/img/menu/imgclose.svg" alt="" srcset="">
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="keuangansiswa/insert" method="post">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label for="recipient-name" class="col-form-label">Nama:</label>
                                        </div>
                                        <div class="col-sm">
                                            <select class="form-select" id="biodata_siswa_id" name="biodata_siswa_id"
                                                style="background-color: #FFFFFF;padding-left: 8px;">
                                                <option selected>Pilih Siswa</option>
                                                <?php foreach ($data['siswa'] as $siswa): ?>
                                                <option value="<?= $siswa['id'] ?>"><?= $siswa['nama'] ?></option>
                                                <?php endforeach;?>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label for="recipient-name" class="col-form-label">Kelas:</label>
                                        </div>
                                        <div class="col-sm">
                                            <select class="form-select" id="kelas" name="kelas"
                                                style="width: 100px;background-color: #FFFFFF;padding-left: 8px;">
                                                <option selected>Pilih Kelas</option>
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label for="recipient-name" class="col-form-label">Periode:</label>
                                        </div>
                                        <div class="col-sm">
                                            <input type="text" class="mobileforminput" name="periode" id="periode"
                                                required style="width: 250px;background-color: #FFFFFF">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label for="recipient-name" class="col-form-label">Jenis Tagihan:</label>
                                        </div>
                                        <div class="col-sm">
                                            <input type="text" class="mobileforminput" name="jenis_surat"
                                                id="jenis_surat" required
                                                style="width: 250px;background-color: #FFFFFF">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label for="recipient-name" class="col-form-label">Nominal:</label>
                                        </div>
                                        <div class="col-sm">
                                            <input type="number" value="0" class="mobileforminput" name="biaya"
                                                id="biaya" required style="width: 250px;background-color: #FFFFFF">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label for="recipient-name" class="col-form-label">Status
                                                Pembayaran:</label>
                                        </div>
                                        <div class="col-sm">
                                            <input type="text" class="mobileforminput" name="status" id="status"
                                                required style="width: 250px;background-color: #FFFFFF">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label for="recipient-name" class="col-form-label">Tanggal Bayar:</label>
                                        </div>
                                        <div class="col-sm">
                                            <input type="date" class="form-control" name="tanggal" id="tanggal" required
                                                style="padding-left: 8px;background-color: #E1E1E1">
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-secondary">Submit</button>
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
?>