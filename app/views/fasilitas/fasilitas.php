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
                                    Fasilitas Paud Assabyan
                                </h4>
                            </div>
                            <div class="card-body px-0 pb-2">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <?php
                                        Flasher::Message();
                                        ?>
                                            <?php if($_SESSION["role"] ==0 ) {?>
                                            <p>
                                                <button type="submit" class="btn" style="background-color:#b0c4ee;"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">Tambah</button>
                                            </p>

                                            <?php }?>
                                        </div>

                                    </div>
                                </div>
                            </div>
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
                                                Nama Fasilitas
                                            </th>
                                            <?php if ($_SESSION["role"] ==0) {
                                                ?>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder  ps-2">
                                                Aksi</th>

                                            <?php }?>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 0;  foreach($data['fasilitas'] as $item) : $no++?>
                                        <tr>
                                            <td class="text-center">
                                                <?= $no ?>
                                            </td>
                                            <td class="text-center align-middle">
                                                <img src="<?= base_url ."/img/".$item['foto']  ?>" width="200"
                                                    height="150" />
                                            </td>
                                            <td class="text-center">
                                                <?= $item['nama'] ?>
                                            </td>
                                            <?php if($_SESSION["role"] == 0) {?>
                                            <td class="align-middle text-center">
                                                <div class="d-flex justify-content-sm-center mt-2">
                                                    <input type="image" src="tombol/btnedit.png" data-bs-toggle="modal"
                                                        data-bs-target="#editmodal<?= $item['id']?>" name="button"
                                                        width="50" height="37" alt="submit" />

                                                    <!-- modal editt -->
                                                    <div class="modal fade" id="editmodal<?= $item['id']?>"
                                                        tabindex="-1" aria-labelledby="exampleModalLabel"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">
                                                                        DETAIL Fasilitas
                                                                    </h5>
                                                                    <button type="button" data-bs-dismiss="modal"
                                                                        aria-label="Close">
                                                                        <img src="assets_baru/img/menu/imgclose.svg"
                                                                            alt="" srcset="" />
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form action="fasilitas/update" method="post"
                                                                        enctype="multipart/form-data">
                                                                        <input type="hidden" name="id"
                                                                            value="<?= $item['id']?>">
                                                                        <input type="hidden" name="oldImage"
                                                                            value="<?= $item['foto']?>">
                                                                        <center>
                                                                            <div>
                                                                                <?php if($item['foto']){ ?>
                                                                                <img class="img-preview_edit img-fluid"
                                                                                    src="  <?= base_url ."/img/".$item['foto']  ?>"
                                                                                    style="width: 200px; height:200px">
                                                                                <?php }else {?>
                                                                                <img class="img-preview_edit img-fluid"
                                                                                    src="assets_baru/img/siswa/imgfoto.svg"
                                                                                    width="200px" width="200px">

                                                                                <?php }?>


                                                                                <label for="foto_edit"
                                                                                    class="d-block btn-primary mt-2 w-100">Pilih
                                                                                    Foto</label>
                                                                                <input name="foto" id="foto_edit"
                                                                                    type="file"
                                                                                    style="visibility: hidden"
                                                                                    onchange="hokya()" />
                                                                                <script>
                                                                                function hokya() {
                                                                                    const image =
                                                                                        document.querySelector(
                                                                                            "#foto_edit"
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
                                                                                        foto_edit.files[0]
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
                                                                        <div class="row">
                                                                            <div class="col-sm-4">
                                                                                <label for="recipient-name"
                                                                                    class="col-form-label">Nama
                                                                                    Fasilitas:</label>
                                                                            </div>
                                                                            <div class="col-sm">
                                                                                <input type="text"
                                                                                    class="mobileforminput"
                                                                                    value="<?= $item['nama'] ?>"
                                                                                    name="nama" id="nama" required
                                                                                    style="width: 250px;background-color: #FFFFFF">
                                                                            </div>
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


                                                    <form action="fasilitas/delete" method="post">
                                                        <input type="hidden" name="id" value="<?=$item['id']?>"
                                                            id="id" />
                                                        <input type="hidden" name="oldImage" value="<?=$item['foto']?>"
                                                            id="foto" />

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
            <!-- {{-- Modal Tambah Fasilitas --}} -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">
                                TAMBAH Fasilitas
                            </h5>
                            <button type="button" data-bs-dismiss="modal" aria-label="Close">
                                <img src="assets_baru/img/menu/imgclose.svg" alt="" srcset="" />
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="fasilitas/insert" method="post" enctype="multipart/form-data">
                                <center>
                                    <div>
                                        <img class="img-preview img-fluid" src="assets_baru/img/siswa/imgfoto.svg"
                                            width="200px" width="200px" />
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
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label for="recipient-name" class="col-form-label">Nama Fasilitas:</label>
                                    </div>
                                    <div class="col-sm">
                                        <input type="text" class="mobileforminput" name="nama" id="nama" required
                                            style="width: 250px;background-color: #FFFFFF">
                                    </div>
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