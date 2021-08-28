<div class="content mt-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Data Siswa</h4>
                        <p class="card-category">Selamat Datang</p>
                    </div>
                    <div class="card-body">
                        <div class="container">

                            <div class="container">

                                <form action="<?= base_url; ?>/detailjadwalkegiatansiswa/editjadwal" method="POST">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Jadwal</label>
                                        <input type="hidden" name="id_jadwal" value="<?= $data['detailjadwal']['id_jadwal']; ?>">
                                        <input type="text" required class="form-control" name="waktu_jadwal" id="waktu_jadwal" aria-describedby="nama" value="<?= $data['detailjadwal']['waktu_jadwal']; ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Nama Kegaitan</label>
                                        <textarea required class="form-control" id="nama_kegiatan" name="nama_kegiatan" style="height: 200px"><?= $data['detailjadwal']['kegiatan_jadwal']; ?></textarea>
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