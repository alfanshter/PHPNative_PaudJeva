<div class="row">
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="">
            <div class="">
                <div class="dropdown">
                    <div class="mainmenubtn">
                        <h4 style="color: black;"><i class="fa fa-bars" style="margin-right:10px"></i> Menu Utama</h4>
                        <div class="dropdown-child">
                            <a href="fasilitas"><img src="<?= base_url; ?>/assets_baru/img/menu/imgfasilitas.svg"
                                    alt="fasilitas" width="40" height="40">Fasilitas Paud Assibyan</a>
                            <a href="visimisi"><img src="<?= base_url; ?>/assets_baru/img/menu/imgvisimisi.svg"
                                    alt="Visi-Misi" width="40" height="40">Visi Misi Paud Assibyan</a>
                            <a href="kegiatanluarpaud"><img src="<?= base_url; ?>/assets_baru/img/menu/imgkegiatan.svg"
                                    alt="Kegiatan" width="40" height="40">Kegiatan Luar Paud</a>
                            <?php if($_SESSION['role'] == 0){?>
                            <a href="tambahsiswa"><img
                                    src="<?= base_url; ?>/assets_baru/img/illustrations/imgprofil.svg" alt="Kegiatan"
                                    width="40" height="40"> Buat Akun Siswa</a>
                            <a href="siswa"><img
                                    src="<?= base_url; ?>/assets_baru/img/illustrations/imganggotasiswa.svg" width="40"
                                    height="40"> Anggota Siswa</a>

                            <?php }?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-7 justify-content-center" style="float: center;">
        <div class="">
            <div class="">
                <div class="">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg">

                            </div>
                            <div class="col-lg-7">
                                <h4><img src="<?= base_url; ?>/assets_baru/img/illustrations/logo-paud-assibyan.png"
                                        alt="fasilitas" width="100" height="100">
                                    <?php if($_SESSION["role"] ==0) {?>
                                    :: ADMIN ::
                                    <?php }else{?>
                                    <?= $_SESSION["nama"] ?>
                                    <?php }?>
                                </h4>
                            </div>
                            <div class="col-lg">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>