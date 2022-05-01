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

                            <form action="<?= base_url; ?>/detailsiswa/editsiswa" method="POST" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Nama Siswa</label>
                                    <input type="hidden" name="id" value="<?= $data['detailsiswa']['id']; ?>">
                                    <input type="text" required class="form-control" name="nama" id="exampleInputEmail1" aria-describedby="nama" value="<?= $data['detailsiswa']['nama']; ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">NISN</label>
                                    <input type="number" name="nik" class="form-control" value="<?= $data['detailsiswa']['nik']; ?>" required>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Tempat/Tanggal Lahir</label>
                                    <div class="input-group input-group-sm mb-3">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Lahir</span>
                                        <input required type="text" id="tempat_lahir" name="tempat_lahir" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" value="<?= $data['detailsiswa']['tempat_lahir']; ?>">
                                        <input type="date" id="ttl" name="ttl" value="<?= $data['detailsiswa']['ttl']; ?>">
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Jenis Kelamin :</label>
                                    <input type="text" name="jk" class="form-control" value="<?= $data['detailsiswa']['jk']; ?>" required>
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Agama : </label>
                                    <input type="text" name="agama" class="form-control" value="<?= $data['detailsiswa']['agama']; ?>" required>
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Alamat :</label>
                                    <input type="text" name="alamat" class="form-control" value="<?= $data['detailsiswa']['alamat']; ?>" required>
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Nama Ayah :</label>
                                    <input type="text" name="nama_ayah" class="form-control" value="<?= $data['detailsiswa']['nama_ayah']; ?>" required>
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Nama Ibu :</label>
                                    <input type="text" name="nama_ibu" class="form-control" value="<?= $data['detailsiswa']['nama_ibu']; ?>" required>
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label"> No. Telepon/HP:</label>
                                    <input type="text" name="nomor_telepon" class="form-control" value="<?= $data['detailsiswa']['nomor_telepon']; ?>" required>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Foto :</label><br>
                                    <input type="hidden" name="foto" value="<?= $data['detailsiswa']['foto']; ?>">
                                    <center><img src="<?= base_url; ?>/img/<?= $data['detailsiswa']['foto']; ?>" alt="" style="height: 200px; width :200px" id="foto"><br>
                                        <div class="form-group">
                                            <label for="btn_editfoto" class="btn btn-warning">Pilih Foto</label>
                                            <input id="btn_editfoto" name="btn_editfoto" type="file" class="form-control-file" accept="image/*" onchange="loadFile(event)">
                                        </div>

                                    </center>

                                </div>
                                <div class="mb-3">
                                    <input type="hidden" name="foto_kk" value="<?= $data['detailsiswa']['foto_kk']; ?>">
                                    <label for="exampleInputPassword1" class="form-label">Foto KK :</label><br>
                                    <center>
                                        <img src="<?= base_url; ?>/img/<?= $data['detailsiswa']['foto_kk']; ?>" alt="" style="height: 200px; width :200px" id="foto_kk">
                                        <div class="form-group">
                                            <label for="btn_editkk" class="btn btn-warning">Pilih KK</label>
                                            <input id="btn_editkk" name="btn_editkk" type="file" class="form-control-file" accept="image/*" onchange="loadFileKK(event)">
                                        </div>

                                    </center>
                                </div>

                                <div class="mb-3">
                                    <input type="hidden" name="foto_akte" value="<?= $data['detailsiswa']['foto_akte']; ?>">
                                    <label for="exampleInputPassword1" class="form-label">Foto Akte :</label><br>
                                    <center><img src="<?= base_url; ?>/img/<?= $data['detailsiswa']['foto_akte']; ?>" alt="" style="height: 200px; width :200px" id="foto_akte">
                                        <div class="form-group">
                                            <label for="btn_editakte" class="btn btn-warning">Pilih Akte</label>
                                            <input id="btn_editakte" name="btn_editakte" type="file" class="form-control-file" accept="image/*" onchange="loadFileakte(event)">
                                        </div>

                                    </center>
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


<script>
    var loadFile = function(event) {
        var image = document.getElementById('foto');
        image.src = URL.createObjectURL(event.target.files[0]);
    };

    var loadFileKK = function(event) {
        var image = document.getElementById('foto_kk');
        image.src = URL.createObjectURL(event.target.files[0]);
    };


    var loadFileakte = function(event) {
        var image = document.getElementById('foto_akte');
        image.src = URL.createObjectURL(event.target.files[0]);
    };


    // $(document).ready(function() {
    //     $("#btn_editfoto").click(function() {
    //         $('img#foto_guru').attr('src', '/path/to/image');
    //     });
    // });
</script>