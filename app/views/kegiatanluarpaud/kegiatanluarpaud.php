<?php 
$this->view('templates/strtemplate',$data);
?>


<body class="g-sidenav-show bg-gray-200">
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
        <!-- Navbar -->
        <?php 
$this->view('templates/nav',$data);
?>

        <!-- End Navbar -->
        <div class="container-fluid py-4" style="padding-left: 0px">
            <?php 
$this->view('templates/mainmenu',$data);
?>

            <div class="position-relative h-100 m-3 px-7 d-flex flex-column justify-content-center">
                <div class="col-12">
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <h4 class="text-white text-capitalize ps-3">
                                    Jadwal Kegiatan Luar PAUD
                                </h4>
                            </div>
                            <?php if($_SESSION["role"] ==0){?>
                            <div class="card-body px-0 pb-2">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <?php
                                        Flasher::Message();
                                        ?>
                                            <p>
                                                <button type="submit" class="btn" style="background-color:#b0c4ee;"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">Tambah</button>
                                            </p>
                                        </div>

                                        <div class="col-lg-6">
                                            <form action="<?= base_url ?>/kegiatanluarpaud/carikegiatanluarpaud"
                                                method="post">
                                                <div class="row">
                                                    <div class="col-sm-8" style="padding-left: 0px;">
                                                        <input placeholder="Cari Kegiatan" type="text"
                                                            class="mobileforminput" name="key"
                                                            style="width: 400px;background-color:#FFFFFF;">
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <button type="submit" class="btn btn-xs bg-gradient-light">
                                                            Cari
                                                        </button>
                                                    </div>
                                                    <div class="col-sm-2" style="padding-right: 0px;padding-left: 0px;">
                                                        <a href="<?= base_url ?>/kegiatanluarpaud"
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

                            <?php }?>
                        </div>
                        <div class="card-body px-0 pb-2">
                            <div class="row table-responsive p-0" style="margin-left: 20px; margin-right: 20px">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr class="border-radius-lg" style="background-color: #b0c4ee">
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder text-center">
                                                No
                                            </th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder text-center">
                                                Foto
                                            </th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder text-center">
                                                Nama Kegiatan
                                            </th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder ps-2 text-center">
                                                Cerita Kegiatan
                                            </th>
                                            <?php if ($_SESSION["role"] ==0) {
                                                ?>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder  ps-2">
                                                Aksi</th>

                                            <?php }?>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php  $no = 0;  foreach ($data['kegiatan'] as $kegiatan):  $no++?>
                                        <tr>
                                            <td class="text-center">
                                                <?= $no ?>
                                            </td>
                                            <td class="text-center align-middle">
                                                <img src="<?=base_url."/img/".$kegiatan['foto_kegiatan']?>" width="200"
                                                    height="150" />
                                            </td>
                                            <td class="text-center">
                                                <?= $kegiatan['nama_kegiatan'] ?>
                                            </td>
                                            <td class="text-center">
                                                <?= $kegiatan['cerita_kegiatan'] ?>
                                            </td>
                                            <?php if($_SESSION["role"] ==0) {?>
                                            <td class="align-middle text-center">
                                                <div class="d-flex justify-content-sm-center mt-2">
                                                    <input type="image" src="tombol/btnedit.png" data-bs-toggle="modal"
                                                        data-bs-target="#editmodal<?= $kegiatan['id'] ?>" name="button"
                                                        width="50" height="37" alt="submit" />

                                                    <!-- {{-- Modal Edit Siswa --}} -->
                                                    <div class="modal fade" id="editmodal<?= $kegiatan['id'] ?>"
                                                        tabindex="-1" aria-labelledby="exampleModalLabel"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">
                                                                        TAMBAH KEGIATAN LUAR PAUD
                                                                    </h5>
                                                                    <button type="button" data-bs-dismiss="modal"
                                                                        aria-label="Close">

                                                                        <img src="assets_baru/img/menu/imgclose.svg"
                                                                            alt="" srcset="" />

                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form action="kegiatanluarpaud/update" method="post"
                                                                        enctype="multipart/form-data">
                                                                        <input type="hidden" name="id"
                                                                            value="<?= $kegiatan['id'] ?>">
                                                                        <input type="hidden" name="oldImage"
                                                                            value="<?= $kegiatan['foto_kegiatan'] ?>">
                                                                        <center>
                                                                            <div>

                                                                                <?php if($kegiatan['foto_kegiatan']){ ?>
                                                                                <img class="img-preview_edit img-fluid"
                                                                                    src="<?= base_url."/img/".$kegiatan['foto_kegiatan']?>"
                                                                                    style="width: 200px; height:200px">
                                                                                <?php }else {?>
                                                                                <img class="img-preview_edit img-fluid"
                                                                                    src="assets_baru/img/siswa/imgfoto.svg"
                                                                                    width="200px" width="200px">

                                                                                <?php }?>

                                                                                <label for="foto_kegiatan_edit"
                                                                                    class="d-block btn-primary mt-2 w-100">Pilih
                                                                                    Foto</label>
                                                                                <input name="foto_kegiatan"
                                                                                    id="foto_kegiatan_edit" type="file"
                                                                                    style="visibility: hidden"
                                                                                    onchange="previewImageEdit()" />
                                                                                <script>
                                                                                function previewImageEdit() {
                                                                                    const image =
                                                                                        document.querySelector(
                                                                                            "#foto_kegiatan_edit"
                                                                                        );
                                                                                    const imgPreview =
                                                                                        document.querySelector(
                                                                                            ".img-preview_edit"
                                                                                        );

                                                                                    imgPreview.style.display =
                                                                                        "block";

                                                                                    const oFReader =
                                                                                        new FileReader();
                                                                                    oFReader.readAsDataURL(
                                                                                        foto_kegiatan_edit.files[0]
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
                                                                            <label for="recipient-name"
                                                                                class="col-form-label">Nama
                                                                                Kegiatan:</label>
                                                                            <input type="text" class="form-control"
                                                                                placeholder="Masukkan Nama Kegiatan"
                                                                                name="nama_kegiatan"
                                                                                value="<?= $kegiatan['nama_kegiatan'] ?>"
                                                                                required style="
                                                                                    background-color: #b6bdff;
                                                                                    padding-left: 10px;
                                                                                " id="recipient-name" />
                                                                        </div>

                                                                        <div class="mb-3">
                                                                            <label for="recipient-name"
                                                                                class="col-form-label">Cerita
                                                                                Kegiatan:</label>
                                                                            <textarea class="form-control"
                                                                                name="cerita_kegiatan" required
                                                                                id="exampleFormControlTextarea1"
                                                                                rows="3"
                                                                                style="
                                                                                    background-color: #b6bdff;
                                                                                    padding-left: 10px;
                                                                                "><?= $kegiatan['cerita_kegiatan'] ?></textarea>
                                                                        </div>

                                                                        <div class="modal-footer">
                                                                            <button type="button"
                                                                                class="btn btn-secondary"
                                                                                data-bs-dismiss="modal">
                                                                                Close
                                                                            </button>
                                                                            <button type="submit"
                                                                                class="btn btn-primary">
                                                                                Submit
                                                                            </button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <form action="kegiatanluarpaud/delete" method="post">
                                                        <input type="hidden" name="id" value="l<?= $kegiatan['id'] ?>"
                                                            id="id" />
                                                        <input type="hidden" name="foto_kegiatan"
                                                            value="<?= $kegiatan['foto_kegiatan'] ?>" id="id" />
                                                        <input type="image" src="tombol/btnhapus.png"
                                                            onclick="return confirm('Apakah anda akan menghapus data ?')"
                                                            name="submit" width="50" height="37" alt="submit" />
                                                    </form>
                                                </div>
                                            </td>

                                            <?php }?>
                                        </tr>

                                        <?php endforeach;?>

                                    </tbody>
                                </table>
                            </div>
                            <hr />
                            <br />

                            <br />
                        </div>
                    </div>
                </div>
            </div>
            <!-- {{-- Modal Tambah Siswa --}} -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">
                                TAMBAH KEGIATAN LUAR PAUD
                            </h5>
                            <button type="button" data-bs-dismiss="modal" aria-label="Close">
                                <img src="assets_baru/img/menu/imgclose.svg" alt="" srcset="" />
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="kegiatanluarpaud/insert" method="post" enctype="multipart/form-data">

                                <center>
                                    <div>
                                        <img class="img-preview img-fluid" src="assets_baru/img/siswa/imgfoto.svg"
                                            width="200px" width="200px" />
                                        <label for="foto_kegiatan" class="d-block btn-primary mt-2 w-100">Pilih
                                            Foto</label>
                                        <input name="foto_kegiatan" id="foto_kegiatan" type="file"
                                            style="visibility: hidden" required onchange="previewImage()" />
                                        <script>
                                        function previewImage() {
                                            const image =
                                                document.querySelector(
                                                    "#foto_kegiatan"
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
                                                foto_kegiatan.files[0]
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
                                    <label for="recipient-name" class="col-form-label">Nama Kegiatan:</label>
                                    <input type="text" class="form-control" placeholder="Masukkan Nama Kegiatan"
                                        name="nama_kegiatan" required style="
                                            background-color: #b6bdff;
                                            padding-left: 10px;
                                        " id="recipient-name" />
                                </div>

                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Cerita Kegiatan:</label>
                                    <textarea class="form-control" name="cerita_kegiatan" required
                                        id="exampleFormControlTextarea1" rows="3" style="
                                            background-color: #b6bdff;
                                            padding-left: 10px;
                                        "></textarea>
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

</body>