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
                                    Nama Guru Paud Assabyan
                                </h4>
                            </div>

                            <?php 
                            if($_SESSION["role"] ==0){
                            ?>
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
                                            <form action="guru/cariguru" method="post">
                                                <div class="row">
                                                    <div class="col-sm-8" style="padding-left: 0px;">
                                                        <input placeholder="Cari Guru" type="text"
                                                            class="mobileforminput" name="key"
                                                            style="width: 400px;background-color:#FFFFFF;">
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
                                                Nama
                                            </th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder ps-2 text-center">
                                                Lembaga
                                            </th>
                                            <?php if ($_SESSION["role"] ==0) {
                                                ?>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder  ps-2">
                                                Aksi</th>

                                            <?php }?>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 0;  foreach($data['guru'] as $item) : $no++?>
                                        <tr>
                                            <td class="text-center">
                                                <?= $no ?>
                                            </td>
                                            <td class="text-center align-middle">
                                                <img src="<?= base_url ."/img/".$item['foto']  ?>" width="200"
                                                    height="150" />
                                            </td>
                                            <td class="text-center">
                                                <?= $item['nama_guru'] ?>
                                            </td>
                                            <td class="text-center">
                                                <?= $item['nama_lembaga'] ?>
                                            </td>
                                            <?php 
                                            if($_SESSION["role"] == 0){
                                            ?>
                                            <td class="align-middle text-center">
                                                <div class="d-flex justify-content-sm-center mt-2">
                                                    <input type="image" src="<?= base_url ?>/tombol/btnedit.png"
                                                        data-bs-toggle="modal"
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
                                                                        DETAIL GURU
                                                                    </h5>
                                                                    <button type="button" data-bs-dismiss="modal"
                                                                        aria-label="Close">
                                                                        <img src="<?= base_url ?>/assets_baru/img/menu/imgclose.svg"
                                                                            alt="" srcset="" />
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form action="guru/update" method="post"
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
                                                                                    src="<?= base_url ?>/assets_baru/img/siswa/imgfoto.svg"
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
                                                                        <div class="mb-3">
                                                                            <label for="recipient-name"
                                                                                class="col-form-label">Nama
                                                                                Guru:</label>
                                                                            <input type="text" class="form-control"
                                                                                placeholder="Masukkan Nama Guru"
                                                                                name="nama_guru"
                                                                                value="<?= $item['nama_guru']?>"
                                                                                required
                                                                                style="background-color: #b6bdff;padding-left: 10px;                                        "
                                                                                id="recipient-name" />
                                                                        </div>

                                                                        <div class="mb-3">
                                                                            <label for="recipient-name"
                                                                                class="col-form-label">Nama
                                                                                Lembaga:</label>
                                                                            <textarea class="form-control"
                                                                                name="nama_lembaga" required
                                                                                id="exampleFormControlTextarea1"
                                                                                rows="3"
                                                                                style="
                                                                                    background-color: #b6bdff;
                                                                                    padding-left: 10px;
                                                                                "><?= $item['nama_lembaga']?></textarea>
                                                                        </div>

                                                                        <div class="mb-3">
                                                                            <label for="recipient-name"
                                                                                class="col-form-label">Tempat
                                                                                Lahir:</label>
                                                                            <input type="text" class="form-control"
                                                                                placeholder="Masukkan Tempat Lahir"
                                                                                name="tempat_lahir" required
                                                                                value="<?= $item['tempat_lahir']?>"
                                                                                style="background-color: #b6bdff;padding-left: 10px;                                        "
                                                                                id="recipient-name" />
                                                                        </div>

                                                                        <div class="mb-3">
                                                                            <label for="recipient-name"
                                                                                class="col-form-label">Tanggal
                                                                                Lahir:</label>
                                                                            <input type="date" class="form-control"
                                                                                placeholder="Masukkan Tanggal Lahir"
                                                                                name="tanggal_lahir" required
                                                                                value="<?= $item['tanggal_lahir']?>"
                                                                                style="background-color: #b6bdff;padding-left: 10px;                                        "
                                                                                id="recipient-name" />
                                                                        </div>

                                                                        <div class="mb-3">
                                                                            <label for="recipient-name"
                                                                                class="col-form-label">NIK:</label>
                                                                            <input type="text" class="form-control"
                                                                                placeholder="Masukkan NIK" name="nik"
                                                                                required value="<?= $item['nik']?>"
                                                                                style="background-color: #b6bdff;padding-left: 10px;                                        "
                                                                                id="recipient-name" />
                                                                        </div>

                                                                        <div class="mb-3">
                                                                            <label for="recipient-name"
                                                                                class="col-form-label">TMT:</label>
                                                                            <input type="text" class="form-control"
                                                                                placeholder="Masukkan TMT" name="tmt"
                                                                                required value="<?= $item['tmt']?>"
                                                                                style="background-color: #b6bdff;padding-left: 10px;                                        "
                                                                                id="recipient-name" />
                                                                        </div>

                                                                        <div class="mb-3">
                                                                            <label for="recipient-name"
                                                                                class="col-form-label">Tahun
                                                                                Kerja:</label>
                                                                            <input type="number" class="form-control"
                                                                                placeholder="Masukkan Tahun Kerja"
                                                                                name="tahun_kerja"
                                                                                value="<?= $item['tahun_kerja']?>"
                                                                                required
                                                                                style="background-color: #b6bdff;padding-left: 10px;                                        "
                                                                                id="recipient-name" />
                                                                        </div>

                                                                        <div class="mb-3">
                                                                            <label for="recipient-name"
                                                                                class="col-form-label">Bulan
                                                                                Kerja:</label>
                                                                            <input type="text" class="form-control"
                                                                                placeholder="Masukkan Buan Kerja"
                                                                                name="bulan_kerja"
                                                                                value="<?= $item['bulan_kerja']?>"
                                                                                required
                                                                                style="background-color: #b6bdff;padding-left: 10px;                                        "
                                                                                id="recipient-name" />
                                                                        </div>

                                                                        <div class="mb-3">
                                                                            <label for="recipient-name"
                                                                                class="col-form-label">Status
                                                                                Guru:</label>
                                                                            <input type="text" class="form-control"
                                                                                placeholder="Masukkan Status Guru"
                                                                                name="status_guru"
                                                                                value="<?= $item['status_guru']?>"
                                                                                required
                                                                                style="background-color: #b6bdff;padding-left: 10px;                                        "
                                                                                id="recipient-name" />
                                                                        </div>

                                                                        <div class="mb-3">
                                                                            <label for="recipient-name"
                                                                                class="col-form-label">Alamat
                                                                                Lembaga:</label>
                                                                            <input type="text" class="form-control"
                                                                                placeholder="Masukkan Alamat Lembaga"
                                                                                name="alamat_lembaga" required
                                                                                value="<?= $item['alamat_lembaga']?>"
                                                                                style="background-color: #b6bdff;padding-left: 10px;                                        "
                                                                                id="recipient-name" />
                                                                        </div>

                                                                        <div class="mb-3">
                                                                            <label for="recipient-name"
                                                                                class="col-form-label">Alamat
                                                                                Rumah:</label>
                                                                            <input type="text" class="form-control"
                                                                                placeholder="Alamat Rumah"
                                                                                name="alamat_rumah"
                                                                                value="<?= $item['alamat_rumah']?>"
                                                                                required
                                                                                style="background-color: #b6bdff;padding-left: 10px;                                        "
                                                                                id="recipient-name" />
                                                                        </div>

                                                                        <div class="mb-3">
                                                                            <label for="recipient-name"
                                                                                class="col-form-label">Pendidikan
                                                                                Guru:</label>
                                                                            <input type="text" class="form-control"
                                                                                placeholder="Pendidikan Guru"
                                                                                name="pendidikan_guru" required
                                                                                value="<?= $item['pendidikan_guru']?>"
                                                                                style="background-color: #b6bdff;padding-left: 10px;                                        "
                                                                                id="recipient-name" />
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


                                                    <form action="guru/delete" method="post">
                                                        <input type="hidden" name="id" value="<?=$item['id']?>"
                                                            id="id" />
                                                        <input type="hidden" name="oldImage" value="<?=$item['foto']?>"
                                                            id="foto" />

                                                        <input type="image" src="<?= base_url ?>/tombol/btnhapus.png"
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
                    <br><br>
                    <div class="position-relative">
                        <input type="button" onClick="history.go(-1)" VALUE="Kembali"
                            class="btn btn-primary position-absolute end-0 bottom-0 "
                            style="background-color: #DA2FE9;margin-left:100px"></input>

                    </div>
                </div>
            </div>
            <!-- {{-- Modal Tambah Guru --}} -->
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
                            <form action="guru/insert" method="post" enctype="multipart/form-data">
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
                                    <label for="recipient-name" class="col-form-label">Nama Guru:</label>
                                    <input type="text" class="form-control" placeholder="Masukkan Nama Guru"
                                        name="nama_guru" required
                                        style="background-color: #b6bdff;padding-left: 10px;                                        "
                                        id="recipient-name" />
                                </div>

                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Nama Lembaga:</label>
                                    <textarea class="form-control" name="nama_lembaga" required
                                        id="exampleFormControlTextarea1" rows="3" style="
                                            background-color: #b6bdff;
                                            padding-left: 10px;
                                        "></textarea>
                                </div>

                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Tempat Lahir:</label>
                                    <input type="text" class="form-control" placeholder="Masukkan Tempat Lahir"
                                        name="tempat_lahir" required
                                        style="background-color: #b6bdff;padding-left: 10px;                                        "
                                        id="recipient-name" />
                                </div>

                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Tanggal Lahir:</label>
                                    <input type="date" class="form-control" placeholder="Masukkan Tanggal Lahir"
                                        name="tanggal_lahir" required
                                        style="background-color: #b6bdff;padding-left: 10px;                                        "
                                        id="recipient-name" />
                                </div>

                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">NIK:</label>
                                    <input type="text" class="form-control" placeholder="Masukkan NIK" name="nik"
                                        required
                                        style="background-color: #b6bdff;padding-left: 10px;                                        "
                                        id="recipient-name" />
                                </div>

                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">TMT:</label>
                                    <input type="text" class="form-control" placeholder="Masukkan TMT" name="tmt"
                                        required
                                        style="background-color: #b6bdff;padding-left: 10px;                                        "
                                        id="recipient-name" />
                                </div>

                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Tahun Kerja:</label>
                                    <input type="number" class="form-control" placeholder="Masukkan Tahun Kerja"
                                        name="tahun_kerja" required
                                        style="background-color: #b6bdff;padding-left: 10px;                                        "
                                        id="recipient-name" />
                                </div>

                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Bulan Kerja:</label>
                                    <input type="text" class="form-control" placeholder="Masukkan Buan Kerja"
                                        name="bulan_kerja" required
                                        style="background-color: #b6bdff;padding-left: 10px;                                        "
                                        id="recipient-name" />
                                </div>

                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Status Guru:</label>
                                    <input type="text" class="form-control" placeholder="Masukkan Status Guru"
                                        name="status_guru" required
                                        style="background-color: #b6bdff;padding-left: 10px;                                        "
                                        id="recipient-name" />
                                </div>

                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Alamat Lembaga:</label>
                                    <input type="text" class="form-control" placeholder="Masukkan Alamat Lembaga"
                                        name="alamat_lembaga" required
                                        style="background-color: #b6bdff;padding-left: 10px;                                        "
                                        id="recipient-name" />
                                </div>

                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Alamat Rumah:</label>
                                    <input type="text" class="form-control" placeholder="Alamat Rumah"
                                        name="alamat_rumah" required
                                        style="background-color: #b6bdff;padding-left: 10px;                                        "
                                        id="recipient-name" />
                                </div>

                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Pendidikan Guru:</label>
                                    <input type="text" class="form-control" placeholder="Pendidikan Guru"
                                        name="pendidikan_guru" required
                                        style="background-color: #b6bdff;padding-left: 10px;                                        "
                                        id="recipient-name" />
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