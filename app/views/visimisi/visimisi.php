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
                                <h4 class="text-white text-capitalize ps-3">VISI DAN MISI PAUD ASSIBYAN</h4>
                            </div>
                            <div class="container">
                                <div class="row">
                                    <?php if($_SESSION["role"] ==0) {?>
                                    <p>
                                        <button type="button" class="btn btn-lg mt-2 btn-lg mb-0"
                                            style="background-color: #b6bdff" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal">
                                            Tambah
                                        </button>
                                    </p>

                                    <?php }?>

                                </div>
                            </div>
                        </div>
                        <div class="card-body px-0 pb-2">
                            <div class="row table-responsive p-0" style="margin-left: 20px;margin-right: 20px;">
                                <table class="table align-items-center mb-0 border-radius-lg"
                                    style="background-color:#b0c4ee;">
                                    <thead>
                                        <tr>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                <img src="assets_baru/img/illustrations/logo-paud-assibyan.png"
                                                    alt="fasilitas" width="80" height="80">
                                            </th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 text-center">
                                                <h4>VISI</h4>
                                            </th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2"
                                                style="float: right;"><img src="assets_baru/img/illustrations/visi.png"
                                                    alt="fasilitas" width="80" height="80"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td colspan="4" class="text-left">
                                                <div class="d-flex px-2 py-1">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h5><?= $data['visimisi']['visi'] ?></h5>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <br>
                            <br>
                            <div class="row table-responsive p-0" style="margin-left: 20px;margin-right: 20px;">
                                <table class="table align-items-center mb-0 border-radius-lg"
                                    style="background-color:#b0c4ee;">
                                    <thead>
                                        <tr>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                <img src="assets_baru/img/illustrations/logo-paud-assibyan.png"
                                                    alt="fasilitas" width="80" height="80">
                                            </th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 text-center">
                                                <h4>MISI</h4>
                                            </th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 "
                                                style="float: right;"><img src="assets_baru/img/illustrations/misi.png"
                                                    alt="fasilitas" width="80" height="80"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td colspan="4" class="text-left">
                                                <div class="d-flex px-2 py-1">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <?= $data['visimisi']['misi'] ?>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <br>
                        </div>
                    </div>
                </div>
            </div>

            <!-- {{-- Modal Tambah VisiMisi --}} -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">
                                TAMBAH VISI DAN MISI
                            </h5>
                            <button type="button" data-bs-dismiss="modal" aria-label="Close">
                                <img src="assets_baru/img/menu/imgclose.svg" alt="" srcset="" />
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="visimisi/insert" method="post">
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Visi:</label>
                                    <textarea class="form-control" name="visi" required id="exampleFormControlTextarea1"
                                        rows="3" style="
                                        background-color: #b6bdff;
                                        padding-left: 10px;
                                    "></textarea>
                                </div>

                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Misi:</label>
                                    <textarea class="form-control" name="misi" required id="exampleFormControlTextarea1"
                                        rows="3" style="
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