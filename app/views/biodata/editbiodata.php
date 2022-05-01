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
                                <h4 class="text-white text-capitalize ps-3">Biodata Siswa Paud Assibyan</h4>
                            </div>
                        </div>
                        <div class="card-body px-0 pb-2">
                            <div class="row table-responsive p-0" style="margin-left: 20px;margin-right: 20px;">
                                <p><button type="button" class="btn btn-lg btn-lg w-auto  mb-0"
                                        style="background-color:#b0c4ee;">Data Induk</button></p>
                                <hr>

                                <form action="<?= base_url ?>/biodata/update" method="POST"
                                    enctype="multipart/form-data">

                                    <input type="hidden" name="oldImage" value="<?= $data['biodata']['foto'] ?>">
                                    <input type="hidden" name="id" value="<?= $data['biodata']['id'] ?>">
                                    <div>
                                        <p class="text-dark">Nama Siswa</p>

                                        <input type="text" name="nama" id="nama" value="<?= $data['biodata']['nama'] ?>"
                                            class="form-control" disabled required
                                            style="background-color: #B6BDFF; padding-left:10px">
                                    </div>
                                    <div class="mt-2">
                                        <p class="text-dark">Username</p>
                                        <input type="text" name="username" id="username"
                                            value="<?= $data['biodata']['username'] ?>" disabled class="form-control"
                                            required style="background-color: #B6BDFF; padding-left:10px">
                                    </div>
                                    <div class="mt-2">
                                        <p class="text-dark">NIK</p>
                                        <input type="text" name="nik" id="nik" value="<?= $data['biodata']['nik'] ?>"
                                            class="form-control" required
                                            style="background-color: #B6BDFF; padding-left:10px">
                                    </div>
                                    <div class="mt-2">
                                        <p class="text-dark">Tanggal Masuk Paud Assibyan</p>
                                        <input type="date" name="tanggal_masuk" id="tanggal_masuk"
                                            value="<?= $data['biodata']['tanggal_masuk'] ?>" class="form-control"
                                            required style="background-color: #B6BDFF; padding-left:10px">
                                    </div>
                                    <div class="mt-2">
                                        <p class="text-dark">Kelas</p>
                                        <input type="text" name="kelas" id="kelas" class="form-control"
                                            value="<?= $data['biodata']['kelas'] ?>" required
                                            style="background-color: #B6BDFF; padding-left:10px">
                                    </div>
                                    <div class="mt-2">
                                        <p class="text-dark">Tempat Lahir</p>
                                        <input type="text" name="tempat_lahir" id="tempat_lahir"
                                            value="<?= $data['biodata']['tempat_lahir'] ?>" class="form-control"
                                            required style="background-color: #B6BDFF; padding-left:10px">
                                    </div>
                                    <div class="mt-2">
                                        <p class="text-dark">Tanggal Lahir</p>
                                        <input type="date" name="tanggal_lahir" id="tanggal_lahir"
                                            value="<?= $data['biodata']['tanggal_lahir'] ?>" class="form-control"
                                            required style="background-color: #B6BDFF; padding-left:10px">
                                    </div>
                                    <div class="mt-2">
                                        <p class="text-dark">Jenis Kelamin</p>
                                        <input type="text" name="jenis_kelamin" id="jenis_kelamin"
                                            value="<?= $data['biodata']['jenis_kelamin'] ?>" class="form-control"
                                            required style="background-color: #B6BDFF; padding-left:10px">
                                    </div>
                                    <div class="mt-2">
                                        <p class="text-dark">Alamat</p>
                                        <input type="text" name="alamat" id="alamat" class="form-control"
                                            value="<?= $data['biodata']['alamat'] ?>" required
                                            style="background-color: #B6BDFF; padding-left:10px">
                                    </div>
                                    <div class="mt-2">
                                        <p class="text-dark">Jenis Tinggal</p>
                                        <input type="text" name="jenis_tinggal" id="jenis_tinggal" class="form-control"
                                            value="<?= $data['biodata']['jenis_tinggal'] ?>" required
                                            style="background-color: #B6BDFF; padding-left:10px">
                                    </div>
                                    <div class="mt-2">
                                        <p class="text-dark">Alat Transportasi</p>
                                        <input type="text" name="alat_transportasi" id="alat_transportasi"
                                            value="<?= $data['biodata']['alat_transportasi'] ?>" class="form-control"
                                            required style="background-color: #B6BDFF; padding-left:10px">
                                    </div>
                                    <div class="mt-2">
                                        <p class="text-dark">No. Telepon/HP</p>
                                        <input type="text" name="no_hp" id="no_hp" class="form-control"
                                            value="<?= $data['biodata']['no_hp'] ?>" required
                                            style="background-color: #B6BDFF; padding-left:10px">
                                    </div>
                                    <div class="mt-2">
                                        <p class="text-dark">Status Dalam Keluarga</p>
                                        <input type="text" name="status_dalam_keluarga" id="status_dalam_keluarga"
                                            class="form-control" style="background-color: #B6BDFF; padding-left:10px">
                                    </div>
                                    <div class="mt-2">
                                        <p class="text-dark">NIS</p>
                                        <input type="text" name="nis" id="nis" class="form-control"
                                            value="<?= $data['biodata']['nis'] ?>" required
                                            style="background-color: #B6BDFF; padding-left:10px">
                                    </div>
                                    <div class="mt-2">
                                        <p class="text-dark">No KPS</p>
                                        <input type="text" name="nomor_kps" id="nomor_kps"
                                            value="<?= $data['biodata']['nomor_kps'] ?>" class="form-control" required
                                            style="background-color: #B6BDFF; padding-left:10px">
                                    </div>

                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Agama:</label>
                                        <select class="form-select" id="agama" name="agama"
                                            style="background-color: #B6BDFF; padding-left:10px">
                                            <option selected><?= $data['biodata']['agama'] ?></option>
                                            <option value="ISLAM">ISLAM</option>
                                            <option value="KRISTEN">KRISTEN</option>
                                            <option value="BUDHA">BUDHA</option>
                                            <option value="HINDU">HINDU</option>
                                            <option value="KONGHUCU">KONGHUCU</option>
                                        </select>
                                    </div>
                                    <center>
                                        <div class="mt-2">
                                            <?php if($data['biodata']['foto']){ ?>
                                            <img class="img-preview img-fluid"
                                                src="  <?= base_url ."/img/".$data['biodata']['foto']  ?>"
                                                style="width: 200px; height:200px">
                                            <?php }else {?>
                                            <img class="img-preview img-fluid" src="assets_baru/img/siswa/imgfoto.svg"
                                                width="200px" width="200px">

                                            <?php }?>

                                            <?php if($_SESSION["role"] ==0){?>
                                            <label for="foto" class="d-block btn-primary mt-2 w-100">Pilih Foto</label>
                                            <input name="foto" id="foto" type="file" id="foto"
                                                style="visibility:hidden;" onchange="previewImage()">

                                            <?php }?>
                                            <script>
                                            function previewImage() {
                                                const image = document.querySelector('#foto');
                                                const imgPreview = document.querySelector('.img-preview');

                                                imgPreview.style.display = 'block';

                                                const oFReader = new FileReader();
                                                oFReader.readAsDataURL(foto.files);

                                                oFReader.onload = function(oFREvent) {
                                                    imgPreview.src = oFREvent.target.result;
                                                }

                                            }
                                            </script>
                                        </div>
                                    </center>
                                    <?php if($_SESSION["role"] ==0){?>
                                    <div class="modal-footer">
                                        <button class="btn btn-secondary" type="button"
                                            data-dismiss="modal">Cancel</button>
                                        <button type="submit" class="btn btn-primary">Edit</button>
                                    </div>

                                    <?php }?>

                                </form>


                            </div>
                            <br>


                            <br>
                        </div>
                    </div>
                    <br><br>
                    <div class="position-relative">
                        <input type="button" onClick="history.go(-1)" VALUE="Kembali"
                            class="btn btn-primary position-absolute end-0 bottom-0 "
                            style="background-color: #DA2FE9;margin-left:100px"></input>

                    </div>

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