<?php
$this->view('templates/strtemplate', $data);
?>


<body class="g-sidenav-show  bg-gray-200">
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">

        <?php
        $this->view('templates/nav', $data);
        ?>


        <!-- End Navbar -->
        <div class="container-fluid py-4" style="padding-left: 0px;"> <?php
                                                                        $this->view('templates/mainmenu', $data);
                                                                        ?>
            <div class="position-relative h-100 m-3 px-7 d-flex flex-column justify-content-center">
                <div class="col-12">
                    <div class="card my-4" style="background: rgba(255, 254, 254, 0.83);">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <h4 class="text-white text-capitalize ps-3">Nilai Siswa Paud Assibyan</h4>
                                <?php
                                Flasher::Message();
                                ?>
                            </div>
                        </div>
                        <div class="card-body px-0 pb-2">
                            <?php if ($_SESSION["role"] == 0) {

                            ?>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <p>
                                                <button type="submit" class="btn" style="background-color:#b0c4ee;" data-bs-toggle="modal" data-bs-target="#exampleModal">Tambah</button>
                                            </p>
                                        </div>
                                        <div class="col-lg-3" style="padding-right: 50px;">
                                            <form action="<?= base_url ?>/nilaisiswa/carikelas" method="post">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <h6> Kelas </h6>
                                                    </div>
                                                    <div class="col-sm" style="padding-bottom: 5px;">
                                                        <select class="form-select" type="text" class="" name="cari" style="background-color:#b0c4ee;padding-left: 8px;">
                                                            <option value="A">A</option>
                                                            <option value="B">B</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <h6> Tanggal </h6>
                                                    </div>
                                                    <div class="col-sm" style="padding-bottom: 5px;">

                                                        <input type="date" class="form-control" name="tanggal" style="background-color:#b0c4ee;padding-left: 8px;" required>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-2">
                                                        <button type="submit" class="btn btn-xs bg-gradient-light">
                                                            Cari
                                                        </button>
                                                    </div>

                                                </div>
                                            </form>
                                        </div>
                                        <div class="col-lg-6">
                                            <form action="<?= base_url ?>/nilaisiswa/carisiswa" method="post">
                                                <div class="row">
                                                    <div class="col-sm-8" style="padding-left: 0px;">
                                                        <input placeholder="Cari Siswa" name="cari" type="text" class="mobileforminput" style="width: 400px;background-color:#FFFFFF;">
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <button type="submit" class="btn btn-xs bg-gradient-light">
                                                            Cari
                                                        </button>
                                                    </div>
                                                    <div class="col-sm-2" style="padding-right: 0px;padding-left: 0px;">
                                                        <a href="<?= base_url ?>/nilaisiswa" class="btn btn-xs bg-gradient-danger">
                                                            Reset
                                                        </a>
                                                    </div>

                                                </div>
                                            </form>
                                            <div class="row">
                                                <form action="<?= base_url ?>/nilaisiswa/nilai_pdf" method="post" target="_blank">
                                                    <?php
                                                    $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                                                    $last_url = basename($actual_link);
                                                    ?>
                                                    <?php if ($last_url == "carikelas") { ?>
                                                        <input type="hidden" name="cari" value="<?= $data['cari'] ?>">
                                                        <input type="hidden" name="tanggal" value="<?= $data['tanggal'] ?>">
                                                        <input type="hidden" name="last_url" value="<?= $last_url ?>">
                                                    <?php } ?>

                                                    <?php if ($last_url == "carisiswa") { ?>
                                                        <input type="hidden" name="cari" value="<?= $data['cari'] ?>">
                                                        <input type="hidden" name="last_url" value="<?= $last_url ?>">

                                                    <?php } else { ?>

                                                    <?php } ?>
                                                    <button type="submit" class="btn btn-warning" style="width: 380px;">
                                                        <img src="<?= base_url ?>/assets_baru/img/illustrations/pdf-btn.png" alt="Kegiatan" width="40" height="40"> CETAK NILAI SESUAI
                                                        TANGGAL
                                                        YANG
                                                        DITENTUKAN
                                                    </button>

                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                            <br>
                            <div class="row table-responsive p-0" style="margin-left: 20px;margin-right: 20px;">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr class="border-radius-lg" style="background-color:#b0c4ee;">
                                            <th class="text-uppercase text-secondary text-xxs text-dark  font-weight-bolder ">
                                                Tanggal</th>
                                            <th class="text-uppercase text-secondary text-xxs text-dark  font-weight-bolder  ps-2 text-center">
                                                Nama</th>
                                            <th class="text-uppercase text-secondary text-xxs text-dark  font-weight-bolder  ps-2">
                                                Kelas</th>
                                            <th class="text-uppercase text-secondary text-xxs text-dark  font-weight-bolder  ps-2">
                                                Bermain</th>
                                            <th class="text-uppercase text-secondary text-xxs text-dark  font-weight-bolder  ps-2">
                                                Ikrar Bersama</th>
                                            <th class="text-uppercase text-secondary text-xxs text-dark  font-weight-bolder  ps-2">
                                                Senan Irama</th>
                                            <th class="text-uppercase text-secondary text-xxs text-dark  font-weight-bolder  ps-2">
                                                Bernyanyi</th>
                                            <th class="text-uppercase text-secondary text-xxs text-dark  font-weight-bolder  ps-2">
                                                Berdoa</th>
                                            <th class="text-uppercase text-secondary text-xxs text-dark  font-weight-bolder  ps-2">
                                                Pijakan Sebelum Bermain</th>
                                            <th class="text-uppercase text-secondary text-xxs text-dark  font-weight-bolder  ps-2">
                                                Pijakan Setelah Bermain</th>
                                            <?php if ($_SESSION["role"] == 0) {
                                            ?>
                                                <th class="text-uppercase text-secondary text-xxs text-dark  font-weight-bolder  ps-2">
                                                    Aksi</th>

                                            <?php } ?>
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
                                        <?php foreach ($data['nilai'] as $item) : ?>
                                            <tr>
                                                <td class="text-center text-dark " style="border-right:1pt solid black;">
                                                    <?= $item['tanggal'] ?></td>
                                                <td class="text-center text-dark" style="border-right:1pt solid black;">
                                                    <?= $item['nama'] ?></td>
                                                <td class="text-center text-dark" style="border-right:1pt solid black;">
                                                    <?= $item['kelas'] ?></td>
                                                <td class="text-center text-dark" style="border-right:1pt solid black;">
                                                    <?= $item['bermain'] ?></td>
                                                <td class="text-center text-dark" style="border-right:1pt solid black;">
                                                    <?= $item['ikrar_bersama'] ?></td>
                                                <td class="text-center text-dark" style="border-right:1pt solid black;">
                                                    <?= $item['senam_irama'] ?></td>
                                                <td class="text-center text-dark" style="border-right:1pt solid black;">
                                                    <?= $item['bernyanyi'] ?></td>
                                                <td class="text-center text-dark" style="border-right:1pt solid black;">
                                                    <?= $item['berdoa'] ?></td>
                                                <td class="text-center text-dark" style="border-right:1pt solid black;">
                                                    <?= $item['pijakan_sebelum_bermain'] ?></td>
                                                <td class="text-center text-dark" style="border-right:1pt solid black;">
                                                    <?= $item['pijakan_setelah_bermain'] ?></td>
                                                <?php if ($_SESSION["role"] == 0) { ?>
                                                    <td class="text-center text-dark" style="border-right:1pt solid black;">
                                                        <a href="<?= base_url ?>/nilaisiswa/editnilai/<?= $item['id'] ?>" type="button" class="btn btn-xs bg-gradient-success">
                                                            <img src="assets_baru/img/illustrations/eye.png" alt="" width="20" height="20" />
                                                        </a>

                                                        <a href="<?= base_url ?>/nilaisiswa/delete/<?= $item['id'] ?>" type="submit" class="btn btn-xs bg-gradient-danger" onclick="return confirm('Apakah anda akan menghapus data ?')">
                                                            <img src="assets_baru/img/illustrations/delete-btn.png" alt="" width="20" height="20" />
                                                        </a>
                                                    </td>

                                                <?php } ?>


                                            </tr>


                                        <?php endforeach; ?>
                                    </tbody>
                                </table>

                            </div>
                            <hr style="color:black;">
                            <?php if ($_SESSION["role"] == 1) { ?>
                                <form action="<?= base_url ?>/nilaisiswa/caritahun" method="post">
                                    <div style="margin-left: 20px;margin-right: 20px;">
                                        <div class="d-flex flex-row">
                                            <p class="text-dark text-bold"> TAHUN </p>
                                            <div style="margin-left: 10px; width:100%" class="d-flex flex-column">
                                                <input type="text" name="tahun" class="btn btn-xs bg-gradient-light " style="width: 150px;" placeholder="Tulis tahun">
                                                <div class="position-relative">
                                                    <button type="submit" class="btn btn-xs bg-gradient-light">
                                                        Cari
                                                    </button>
                                                    <a href="<?= base_url ?>/nilaisiswa/cetakpdf/<?= $data['tahun'] ?>" class="btn btn-warning ml-auto position-absolute  end-0" style="width: 300px;">
                                                        <img src="<?= base_url ?>/assets_baru/img/illustrations/pdf-btn.png" alt="Kegiatan" width="40" height="40"> Cetak Nilai Kamu </a>

                                                </div>


                                            </div>

                                        </div>

                                    </div>
                                </form>
                            <?php } ?>

                            <br>
                        </div>
                    </div>
                    <br><br>
                    <?php if ($_SESSION["role"] == 1) { ?>
                        <div class="d-flex flex-row justify-content-center">
                            <div class="card my-4">
                                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                        <h4 class="text-white text-capitalize ps-3">KOMENTAR NILAI SISWA PAUD ASSIBYAN
                                        </h4>
                                    </div>
                                </div>
                                <div class="card-body px-0 pb-2">
                                    <div class="row table-responsive p-0" style="margin-left: 20px;margin-right: 20px;">
                                        <table class="table align-items-center mb-0" id="dataTable">
                                            <thead>
                                                <tr class="border-radius-lg" style="background-color:#b0c4ee;">
                                                    <th class="text-uppercase text-secondary text-xxs text-dark  font-weight-bolder  text-center">
                                                        Tanggal</th>
                                                    <th class="text-uppercase text-secondary text-xxs text-dark  font-weight-bolder  ps-2 text-center">
                                                        Komentar Nilai</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-left" style="border-right:1pt solid white;"></td>
                                                    <td class="text-left" style="border-right:1pt solid white;"></td>
                                                </tr>
                                                <?php foreach ($data['nilai'] as $komentar) : ?>
                                                    <tr>
                                                        <td class="text-center" style="border-right:1pt solid black; ">
                                                            <?= $komentar['tanggal'] ?>
                                                        </td>
                                                        <td class="text-center"><?= $komentar['komentar'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-left" style="border-bottom:1pt solid black;"></td>
                                                        <td class="text-left" style="border-bottom:1pt solid black;"></td>
                                                    </tr>


                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <br>
                                </div>


                                <br>
                                <br>
                            </div>

                            <div class="position-relative">
                                <input type="button" onClick="history.go(-1)" VALUE="Kembali" class="btn btn-primary position-absolute bottom-0 " style="background-color: #DA2FE9;margin-left:100px"></input>

                            </div>

                        </div>

                    <?php } ?>

                    <br><br>
                </div>

                <!-- {{-- MODAL --}} -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Tambah Nilai</h5>
                                <button class="buttonclosemodal" type="button" data-bs-dismiss="modal" aria-label="Close">
                                    <img src="assets/img/menu/imgclose.svg" alt="" srcset="">
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="nilaisiswa/insert" method="POST">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label for="recipient-name" class="col-form-label">Nama:</label>
                                            </div>
                                            <div class="col-sm">
                                                <select class="form-select" id="biodata_siswa_id" name="biodata_siswa_id" style="background-color: #FFFFFF;padding-left: 8px;">
                                                    <option selected>Pilih Siswa</option>
                                                    <?php foreach ($data['siswa'] as $siswa) : ?>
                                                        <option value="<?= $siswa['id'] ?>"><?= $siswa['nama'] ?></option>
                                                    <?php endforeach; ?>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label for="recipient-name" class="col-form-label">Kelas:</label>
                                            </div>
                                            <div class="col-sm">
                                                <select class="form-select" style="width: 100px;background-color: #FFFFFF;padding-left: 8px;">
                                                    <option selected>Pilih Kelas</option>
                                                    <option value="A">A</option>
                                                    <option value="B">B</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label for="recipient-name" class="col-form-label">Bermain:</label>
                                            </div>
                                            <div class="col-sm">
                                                <input type="text" class="mobileforminput" name="bermain" id="bermain" required style="width: 250px;background-color: #FFFFFF">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label for="recipient-name" class="col-form-label">Ikrar
                                                    Bersama:</label>
                                            </div>
                                            <div class="col-sm">
                                                <input type="text" class="mobileforminput" name="ikrar_bersama" id="ikrar_bersama" required style="width: 250px;background-color: #FFFFFF">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label for="recipient-name" class="col-form-label">Senam Irama:</label>
                                            </div>
                                            <div class="col-sm">
                                                <input type="text" class="mobileforminput" name="senam_irama" id="senam_irama" required style="width: 250px;background-color: #FFFFFF">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label for="recipient-name" class="col-form-label">Bernyanyi:</label>
                                            </div>
                                            <div class="col-sm">
                                                <input type="text" class="mobileforminput" name="bernyanyi" id="bernyanyi" required style="width: 250px;background-color: #FFFFFF">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label for="recipient-name" class="col-form-label">Berdoa:</label>
                                            </div>
                                            <div class="col-sm">
                                                <input type="text" class="mobileforminput" name="berdoa" id="berdoa" required style="width: 250px;background-color: #FFFFFF">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label for="recipient-name" class="col-form-label">Pijakan Sebelum
                                                    Bermain:</label>
                                            </div>
                                            <div class="col-sm">
                                                <input type="text" class="mobileforminput" name="pijakan_sebelum_bermain" id="pijakan_sebelum_bermain" required style="width: 250px;background-color: #FFFFFF">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label for="recipient-name" class="col-form-label">Pijakan Setelah
                                                    Bermain:</label>
                                            </div>
                                            <div class="col-sm">
                                                <input type="text" class="mobileforminput" name="pijakan_setelah_bermain" id="pijakan_setelah_bermain" required style="width: 250px;background-color: #FFFFFF">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label for="recipient-name" class="col-form-label">Tanggal
                                                    Nilai:</label>
                                            </div>
                                            <div class="col-sm">
                                                <input type="date" class="mobileforminput" name="tanggal" id="tanggal" required style="width: 250px;background-color: #FFFFFF">
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label">Komentar Nilai
                                                Siswa:</label>
                                            <textarea class="form-control" name="komentar" required id="exampleFormControlTextarea1" rows="3" style="
                            background-color: #b6bdff;
                            padding-left: 10px;
                        "></textarea>
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
                $this->view('templates/footer', $data);
                ?>


            </div>
    </main>

    <?php
    $this->view('templates/endtemplate', $data);
    ?>