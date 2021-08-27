<style>
    .box {
        text-align: center;
        padding: auto;
        background: #ffffff;
        margin: 10px 0px;
    }
</style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6 ml-auto">
                    <h2><?= $data['title']; ?></h2>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="card">
            <div class="container">
                <div class="row">
                    <div class="col-sm">
                        <div class="box">
                            <img src="<?= base_url; ?>/img/biodata.png" alt="" width="200" height="200"><br>
                            Data Siswa
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="box">
                            <img src="<?= base_url; ?>/img/nilai.png" alt="" width="200" height="200"><br>
                            Nilai Siswa
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="box">
                            <img src="<?= base_url; ?>/img/book.png" alt="" width="200" height="200"><br>
                            Data Siswa
                        </div>
                    </div>


                </div>
                <div class="row">
                    <div class="col-sm">
                        <div class="box">
                            <img src="<?= base_url; ?>/img/uang.png" alt="" width="200" height="200"><br>

                            Keuangan Siswa
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="box">
                            <img src="<?= base_url; ?>/img/absen.png" alt="" width="200" height="200"><br>
                            Absensi
                        </div>
                    </div>
                    <div class="col-sm">
                    </div>

                </div>
            </div>
        </div>
        <!-- /.card -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->