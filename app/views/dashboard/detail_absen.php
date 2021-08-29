<div class="content mt-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Detail Absen</h4>
                        <p class="card-category">Selamat Datang</p>
                    </div>
                    <div class="card-body">
                        <div class="container">
                            <div class="container">

                                <form action="<?= base_url; ?>/detailabsen/editabsen" method="POST">
                                    <input type="hidden" value="<?= $data['detailabsen']['id_absen']; ?>" name="id_absen">
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Tanggal</label>
                                        <input type="date" id="tanggal_absen" name="tanggal_absen" value="<?= $data['detailabsen']['tanggal_absen']; ?>">
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Hadir/Tidak Hadir</label>
                                        <input type="text" name="kehadiran" class="form-control" value="<?= $data['detailabsen']['kehadiran']; ?>" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Keterangan</label>
                                        <input type="text" name="keterangan" class="form-control" value="<?= $data['detailabsen']['keterangan']; ?>" required>
                                    </div>

                                    <center>
                                        <button type="submit" class="btn btn-primary">
                                            Edit
                                        </button>

                                    </center>



                                </form>
                            </div>
                            <hr class="mt-2">
                            <div class="d-flex justify-content-center">
                                <!-- {{ $data->links('vendor.pagination.simple-tailwind') }} -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>