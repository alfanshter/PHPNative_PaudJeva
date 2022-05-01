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
                    <div class="card my-4"style="background: rgba(255, 254, 254, 0.83);">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <h4 class="text-white text-capitalize ps-3">Jadwal Kegiatan Siswa</h4>
                            </div>
                            <?php 
                            if ($_SESSION["role"] == 0) {
                            
                            ?>
                            <div class="container">
                                <div class="row">
                                    <p><button type="button" class="btn btn-lg mt-2 btn-lg mb-0"
                                            style="background-color: #B6BDFF" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal">Tambah</button></p>
                                    <?php
                                        Flasher::Message();
                                        ?>
                                </div>

                            </div>

                            <?php 
                            }
                            ?>
                        </div>
                        <div class="card-body px-0 pb-2">
                            <div class="row table-responsive p-0" style="margin-left: 20px;margin-right: 20px;">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr class="border-radius-lg" style="background-color:#b0c4ee;">
                                            <th
                                                class="text-uppercase  text-dark text-xxs font-weight-bolder text-center">
                                                Jadwal</th>
                                            <th
                                                class="text-uppercase text-dark text-xxs font-weight-bolder  ps-2 text-center">
                                                Kegiatan</th>
                                                <?php if ($_SESSION['role'] ==0) {?>
                                                    <th
                                                    class="text-uppercase text-dark text-xxs font-weight-bolder  ps-2 text-center">
                                                    Aksi</th>
                                                 <?php } ?>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        <?php
                                         foreach ($data['jadwal'] as $jadwal) :
                                        ?>
                                         
                                        <tr>
                                       
                                            <td class="text-center text-dark" style="border-right:1pt solid black;border-bottom:1pt solid black"><?= $jadwal['jadwal'] ?></td>
                                            <td class="text-center text-dark" style="border-right:1pt solid black;border-bottom:1pt solid black"><?= $jadwal['kegiatan'] ?></td>
                                            <?php if($_SESSION['role'] ==0){ ?>
                                                <td class="align-middle text-center" style="border-right:1pt solid black;border-bottom:1pt solid black">
                                                    <div class="d-flex justify-content-sm-center mt-2">
                                                        <input type="image" src="tombol/btnedit.png" data-bs-toggle="modal"
                                                            data-bs-target="#editmodal<?= $jadwal['id'] ?>" name="button"
                                                            width="50" height="37" alt="submit" />
                                                        <!-- {{-- Modal Edit Siswa --}} -->

                                                        <div class="modal fade" id="editmodal<?= $jadwal['id'] ?>"
                                                            tabindex="-1" aria-labelledby="editmodallabel"
                                                            aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="editmodallabel">EDIT
                                                                            JADWAL KEGIATAN</h5>
                                                                        <button type="button" data-bs-dismiss="modal"
                                                                            aria-label="Close"> <img
                                                                                src="assets_baru/img/menu/imgclose.svg"
                                                                                alt="" srcset=""> </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <form
                                                                            action="<?= base_url ?>/jadwalkegiatansiswa/update"
                                                                            method="post">
                                                                            <input type="hidden" name="id"
                                                                                value="<?= $jadwal['id'] ?>">
                                                                            <div class="mb-3">
                                                                                <label for="recipient-name"
                                                                                    class="col-form-label">Jadwal:</label>
                                                                                <input type="text" class="form-control"
                                                                                    placeholder="Masukkan Jadwal"
                                                                                    name="jadwal" required
                                                                                    style="background-color: #B6BDFF"
                                                                                    id="recipient-name"
                                                                                    value="<?= $jadwal['jadwal'] ?>">
                                                                            </div>

                                                                            <div class="mb-3">
                                                                                <label for="recipient-name"
                                                                                    class="col-form-label">Kegiatan
                                                                                    Siswa:</label>
                                                                                <input type="text" class="form-control"
                                                                                    placeholder="Masukkan Kegiatan"
                                                                                    name="kegiatan" required
                                                                                    style="background-color: #B6BDFF"
                                                                                    id="recipient-name"
                                                                                    value="<?= $jadwal['kegiatan'] ?>">
                                                                            </div>


                                                                            <div class="modal-footer">
                                                                                <button type="button"
                                                                                    class="btn btn-secondary"
                                                                                    data-bs-dismiss="modal">Close</button>
                                                                                <button type="submit"
                                                                                    class="btn btn-primary">Submit</button>
                                                                            </div>

                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <input type="hidden" name="id" value="{{$data->id}}" id="id">
                                                        <a
                                                            href="<?= base_url ?>/jadwalkegiatansiswa/hapus/<?= $jadwal['id'] ?>">
                                                            <input type="image" src="tombol/btnhapus.png"
                                                                onclick="return confirm('Apakah anda akan menghapus data ?')"
                                                                name="submit" width="50" height="37" alt="submit" />

                                                        </a>
                                                    </div>
                                                </td>
                                            <?php } ?>

                                        </tr>
                                        
                                        <?php
                                        endforeach;
                                         ?>
                                    </tbody>
                                </table>
                            </div>
                            <hr>

                            <br>


                            <br>
                        </div>

                    </div>
                    <div class="position-relative">
                        <input type="button" onClick="history.go(-1)" VALUE="Kembali"
                            class="btn btn-primary position-absolute top-0 end-0"
                            style="background-color: #DA2FE9;"></input>

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
                            <h5 class="modal-title" id="exampleModalLabel">TAMBAH JADWAL KEGIATAN</h5>
                            <button type="button" data-bs-dismiss="modal" aria-label="Close"> <img
                                    src="{{asset('assets/img/menu/imgclose.svg')}}" alt="" srcset=""> </button>


                        </div>
                        <div class="modal-body">

                            <form action=" <?= base_url ?>/jadwalkegiatansiswa/tambah_jadwal" method="post">
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Jadwal:</label>
                                    <input type="text" class="form-control" placeholder="Masukkan Jadwal" name="jadwal"
                                        required style="background-color: #B6BDFF; padding-left :10px"
                                        id="recipient-name">
                                </div>

                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Kegiatan Siswa:</label>
                                    <input type="text" class="form-control" placeholder="Masukkan Kegiatan"
                                        name="kegiatan" required style="background-color: #B6BDFF; padding-left :10px"
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
        ?>