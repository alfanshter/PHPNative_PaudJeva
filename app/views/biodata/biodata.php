<?php 
$this->view('templates/strtemplate',$data);
?>

<body class="g-sidenav-show  bg-gray-200">
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar --> <?php 
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
                                <h4 class="text-white text-capitalize ps-3">BIODATA SISWA PAUD ASSIBYAN</h4>
                            </div>
                        </div>
                        <div class="card-body px-0 pb-2">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-2">
                                        <?php
                                        Flasher::Message();
                                        ?>
                                        <p>
                                            <button type="submit" class="btn" style="background-color:#b0c4ee;"
                                                data-bs-toggle="modal" data-bs-target="#exampleModal">Tambah</button>
                                        </p>
                                    </div>

                                    <div class="col-lg-6">
                                        <form action="<?= base_url ?>/biodata/carisiswa" method="post">
                                            <div class="row">
                                                <div class="col-sm-8" style="padding-left: 0px;">
                                                    <input placeholder="Cari Siswa" name="cari" type="text"
                                                        class="mobileforminput"
                                                        style="width: 400px;background-color:#FFFFFF;">
                                                </div>
                                                <div class="col-sm-2">
                                                    <button type="submit" class="btn btn-xs bg-gradient-light">
                                                        Cari
                                                    </button>
                                                </div>
                                                <div class="col-sm-2" style="padding-right: 0px;padding-left: 0px;">
                                                    <a href="<?= base_url ?>/biodata"
                                                        class="btn btn-xs bg-gradient-danger">
                                                        Reset
                                                    </a>
                                                </div>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
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
                                                Nama Siswa</th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder  ps-2 text-center">
                                                Kelas</th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder  ps-2 text-center">
                                                Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php $no=0; foreach($data['biodata'] as $item) : $no++?>
                                        <tr>
                                            <td class="text-center" style="border-right:1pt solid black;"><?= $no ?>
                                            </td>
                                            <td class="text-center" style="border-right:1pt solid black;">
                                                <?= $item['nama'] ?>
                                            </td>
                                            <td class="text-center" style="border-right:1pt solid black;">
                                                <?= $item['kelas'] ?></td>
                                            <td class="text-center" style="border-right:1pt solid black;">
                                                <a href="biodata/detail/<?= $item['id'] ?>" type="submit"
                                                    class="btn btn-xs bg-gradient-success">
                                                    <img src="<?= base_url ?>/assets_baru/img/illustrations/eye.png"
                                                        alt="" width="20" height="20" />
                                                </a>

                                                <form action="biodata/hapus" method="post">
                                                    <input type="hidden" name="oldImage" value="<?= $item['foto'] ?>">
                                                    <input type="hidden" name="id" value="<?= $item['id'] ?>">
                                                    <button type="submit"
                                                        onclick="return confirm('Apakah anda akan menghapus data ?')"
                                                        class="btn btn-xs bg-gradient-danger">
                                                        <img src="<?= base_url ?>/assets_baru/img/illustrations/delete-btn.png"
                                                            alt="" width="20" height="20" />
                                                    </button>

                                                </form>
                                            </td>
                                        </tr>
                                        <?php endforeach;?>

                                    </tbody>
                                </table>
                            </div>
                            <hr style="color:black;">
                            <br>
                        </div>
                    </div>
                    <br>
                    <br>
                </div>
            </div>
            <!-- {{-- Modal Tambah Siswa --}} -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">
                                TAMBAH GURU
                            </h5>
                            <button type="button" data-bs-dismiss="modal" aria-label="Close">
                                <img src="<?= base_url ?>/assets_baru/img/menu/imgclose.svg" alt="" srcset="" />
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="biodata/insert" method="post" enctype="multipart/form-data">
                                <center>
                                    <div>
                                        <img class="img-preview img-fluid"
                                            src="<?= base_url ?>/assets_baru/img/siswa/imgfoto.svg" width="200px"
                                            width="200px" />
                                        <label for="foto" class="d-block btn-primary mt-2 w-100">Pilih Foto</label>
                                        <input name="foto" id="foto" type="file" style="visibility: hidden" required
                                            onchange="previewImage()" />
                                        <script>
                                        function previewImage() {
                                            const image =
                                                document.querySelector(
                                                    "#foto"
                                                );
                                            const imgPreview =
                                                document.querySelector(
                                                    ".img-preview"
                                                );

                                            imgPreview.style.display =
                                                "block";

                                            const oFReader =
                                                new FileReader();
                                            oFReader.readAsDataURL(
                                                foto.files[0]
                                            );

                                            oFReader.onload = function(
                                                oFREvent
                                            ) {
                                                imgPreview.src =
                                                    oFREvent.target.result;
                                            };
                                        }
                                        </script>
                                    </div>
                                </center>
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Nama:</label>
                                    <select class="form-select" id="user_id" name="user_id"
                                        style="background-color: #B6BDFF">
                                        <option selected>Pilih Username...</option>
                                        <?php 
                                        foreach($data['siswa'] as $item) :
                                        ?>

                                        <option value="<?= $item['id'] ?>"><?= $item['username'] ?></option>
                                        <?php endforeach;?>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Tempat Lahir:</label>
                                    <input type="text" class="form-control" placeholder="Masukkan Tempat Lahir"
                                        name="tempat_lahir" id="tempat_lahir" required
                                        style="background-color: #B6BDFF">
                                </div>

                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Tanggal Lahir:</label>
                                    <input type="date" class="form-control" placeholder="Masukkan Tanggal Lahir"
                                        name="tanggal_lahir" id="tanggal_lahir" required
                                        style="background-color: #B6BDFF">
                                </div>

                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Jenis Kelamin:</label>
                                    <select class="form-select" id="jenis_kelamin" name="jenis_kelamin"
                                        style="background-color: #B6BDFF">
                                        <option selected>Pilih Jenis Kelamin ...</option>
                                        <option value="LAKI-LAKI">LAKI-LAKI</option>
                                        <option value="PEREMPUAN">PEREMPUAN</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">NIK:</label>
                                    <input type="number" class="form-control" placeholder="Masukkan NIK" name="nik"
                                        id="nik" required style="background-color: #B6BDFF">
                                </div>

                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Alamat:</label>
                                    <input type="text" class="form-control" placeholder="Masukkan Alamat" name="alamat"
                                        id="alamat" required style="background-color: #B6BDFF">
                                </div>

                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Agama:</label>
                                    <select class="form-select" id="agama" name="agama"
                                        style="background-color: #B6BDFF">
                                        <option selected>Pilih Agama ...</option>
                                        <option value="ISLAM">ISLAM</option>
                                        <option value="KRISTEN">KRISTEN</option>
                                        <option value="BUDHA">BUDHA</option>
                                        <option value="HINDU">HINDU</option>
                                        <option value="KONGHUCU">KONGHUCU</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Kelas:</label>
                                    <input type="text" class="form-control" placeholder="Masukkan Kelas" name="kelas"
                                        id="kelas" required style="background-color: #B6BDFF">
                                </div>

                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Alat Transportasi:</label>
                                    <input type="text" class="form-control" placeholder="Masukkan Alat Transportasi"
                                        name="alat_transportasi" id="alat_transportasi" required
                                        style="background-color: #B6BDFF">
                                </div>

                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">No Hp:</label>
                                    <input type="text" class="form-control" placeholder="Masukkan No Hp" name="no_hp"
                                        id="no_hp" required style="background-color: #B6BDFF">
                                </div>

                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">NIS:</label>
                                    <input type="text" class="form-control" placeholder="Masukkan NIS" name="nis"
                                        id="nis" required style="background-color: #B6BDFF">
                                </div>

                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Nomor KPS:</label>
                                    <input type="text" class="form-control" placeholder="Masukkan Nomor KPS"
                                        name="nomor_kps" id="nomor_kps" required style="background-color: #B6BDFF">
                                </div>

                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Jenis Tinggal:</label>
                                    <input type="text" class="form-control" placeholder="Masukkan Jenis Tinggal"
                                        name="jenis_tinggal" id="jenis_tinggal" required
                                        style="background-color: #B6BDFF">
                                </div>

                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Tanggal Masuk PAUD
                                        Assibyan:</label>
                                    <input type="date" class="form-control"
                                        placeholder="Masukkan Tanggal Masuk PAUD Assibyan" name="tanggal_masuk"
                                        id="tanggal_masuk" required style="background-color: #B6BDFF">
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                        Close
                                    </button>
                                    <button type="submit" class="btn btn-primary">
                                        Submit
                                    </button>
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