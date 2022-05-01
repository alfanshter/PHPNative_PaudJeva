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

                                <form action="<?= base_url; ?>/datapendaftaran/editsiswa" method="POST">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Nama Siswa</label>
                                        <input type="hidden" name="id" value="<?= $data['detailsiswa']['id']; ?>">
                                        <input type="text" required class="form-control" name="nama" id="exampleInputEmail1" aria-describedby="nama" value="<?= $data['detailsiswa']['nama']; ?>">
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Username</label>
                                        <input type="text" name="username" class="form-control" value="<?= $data['detailsiswa']['username']; ?>" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">NIK</label>
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
                                        <label for="exampleInputPassword1" class="form-label">Jenis Tinggal :</label>
                                        <input type="text" name="jenis_tinggal" class="form-control" value="<?= $data['detailsiswa']['jenis_tinggal']; ?>" required>
                                    </div>


                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Alat Transportasi :</label>
                                        <input type="text" name="alat_transportasi" class="form-control" value="<?= $data['detailsiswa']['alat_transportasi']; ?>" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label"> No. Telepon/HP:</label>
                                        <input type="text" name="nomor_telepon" class="form-control" value="<?= $data['detailsiswa']['nomor_telepon']; ?>" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Status Dalam Keluarga :</label>
                                        <input type="text" name="status_dalam_keluarga" class="form-control" value="<?= $data['detailsiswa']['status_dalam_keluarga']; ?>" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">No KPS</label>
                                        <input type="text" name="no_kps" class="form-control" value="<?= $data['detailsiswa']['no_kps']; ?>">
                                    </div>


                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Foto :</label><br>
                                        <input type="hidden" name="foto" value="<?= $data['detailsiswa']['foto']; ?>">
                                        <center><img src="<?= base_url; ?>/img/<?= $data['detailsiswa']['foto']; ?>" alt="" style="height: 200px; width :200px" id="foto"><br>
                                            <div class="form-group">
                                                <a href="<?= base_url; ?>/datapendaftaran/editfoto/<?= $data['detailsiswa']['nik']; ?>" for="btn_editfoto" class="btn btn-warning">Edit Foto</a>
                                                <input id="btn_editfoto" name="btn_editfoto" type="file" class="form-control-file" accept="image/*" onchange="loadFile(event)">

                                            </div>
                                            <!-- <a href="<?= base_url; ?>/datapendaftaran/detail/<?= $siswa['id']; ?>" class="btn btn-warning "><span style="color: white" class="material-icons">
                                                    remove_red_eye
                                                </span></a> -->

                                            <div class="form-group">
                                                <!-- <a href="<?= base_url; ?>/datapendaftaran/ProsesEditFoto/<?= $data['detailsiswa']['id']; ?>/" id="btn_save" name="btn_save" type="submit" class="btn btn-success">Edit Foto</a> -->
                                                <button id="btn_save" name="btn_save" type="button" class="btn btn-success">Edit Foto</button>

                                            </div>

                                        </center>

                                    </div>
                                    <div class="mb-3">
                                        <input type="hidden" name="foto_kk" value="<?= $data['detailsiswa']['foto_kk']; ?>">
                                        <label for="exampleInputPassword1" class="form-label">Foto KK :</label><br>
                                        <center>
                                            <img src="<?= base_url; ?>/img/<?= $data['detailsiswa']['foto_kk']; ?>" alt="" style="height: 200px; width :200px" id="foto_kk">
                                            <div class="form-group">
                                                <a href="<?= base_url; ?>/datapendaftaran/editkk/<?= $data['detailsiswa']['nik']; ?>" for="btn_editfoto" class="btn btn-warning">Edit KK</a>
                                            </div>

                                        </center>
                                    </div>

                                    <div class="mb-3">
                                        <input type="hidden" name="foto_akte" value="<?= $data['detailsiswa']['foto_akte']; ?>">
                                        <label for="exampleInputPassword1" class="form-label">Foto Akte :</label><br>
                                        <center><img src="<?= base_url; ?>/img/<?= $data['detailsiswa']['foto_akte']; ?>" alt="" style="height: 200px; width :200px" id="foto_akte">
                                            <div class="form-group">
                                                <a href="<?= base_url; ?>/datapendaftaran/editakte/<?= $data['detailsiswa']['nik']; ?>" for="btn_editfoto" class="btn btn-warning">Edit Akte</a>
                                            </div>

                                        </center>
                                    </div>



                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Nama Ayah :</label>
                                        <input type="text" name="nama_ayah" class="form-control" value="<?= $data['detailsiswa']['nama_ayah']; ?>" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Tempat/Tanggal Lahir Ayah :</label>
                                        <div class="input-group input-group-sm mb-3">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">Lahir</span>
                                            <input required type="text" id="tempat_lahir_ayah" name="tempat_lahir_ayah" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" value="<?= $data['detailsiswa']['tempat_lahir_ayah']; ?>">
                                            <input type="date" id="ttl_ayah" name="ttl_ayah" value="<?= $data['detailsiswa']['ttl_ayah']; ?>">
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">NIK Ayah :</label>
                                        <input type="number" name="nik_ayah" class="form-control" value="<?= $data['detailsiswa']['nik_ayah']; ?>" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Pendidikan Terakhir Ayah :</label>
                                        <input type="text" name="pendidikan_terakhir_ayah" class="form-control" value="<?= $data['detailsiswa']['pendidikan_terakhir_ayah']; ?>" required>
                                    </div>


                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Pekerjaan Ayah :</label>
                                        <input type="text" name="pekerjaan_ayah" class="form-control" value="<?= $data['detailsiswa']['pekerjaan_ayah']; ?>" required>
                                    </div>

                                    <div class="input-group input-group-sm mb-3">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Status Ayah</span>
                                        <select id="status_ayah" name="status_ayah" class="form-select" aria-label="Default select example">
                                            <option selected><?= $data['detailsiswa']['status_ayah']; ?></option>
                                            <option value="meninggal">Meninggal</option>
                                            <option value="meninggal">Masih Hidup</option>
                                        </select>
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Penghasilan Ayah :</label>
                                        <input type="number" name="penghasilan_ayah" class="form-control" value="<?= $data['detailsiswa']['penghasilan_ayah']; ?>" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Nama ibu :</label>
                                        <input type="text" name="nama_ibu" class="form-control" value="<?= $data['detailsiswa']['nama_ibu']; ?>" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Tempat/Tanggal Lahir ibu :</label>
                                        <div class="input-group input-group-sm mb-3">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">Lahir</span>
                                            <input required type="text" id="tempat_lahir_ibu" name="tempat_lahir_ibu" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" value="<?= $data['detailsiswa']['tempat_lahir_ibu']; ?>">
                                            <input type="date" id="ttl_ibu" name="ttl_ibu" value="<?= $data['detailsiswa']['ttl_ibu']; ?>">
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">NIK ibu :</label>
                                        <input type="number" name="nik_ibu" class="form-control" value="<?= $data['detailsiswa']['nik_ibu']; ?>" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Pendidikan Terakhir ibu :</label>
                                        <input type="text" name="pendidikan_terakhir_ibu" class="form-control" value="<?= $data['detailsiswa']['pendidikan_terakhir_ibu']; ?>" required>
                                    </div>


                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Pekerjaan ibu :</label>
                                        <input type="text" name="pekerjaan_ibu" class="form-control" value="<?= $data['detailsiswa']['pekerjaan_ibu']; ?>" required>
                                    </div>

                                    <div class="input-group input-group-sm mb-3">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Status ibu</span>
                                        <select id="status_ibu" name="status_ibu" class="form-select" aria-label="Default select example">
                                            <option selected><?= $data['detailsiswa']['status_ibu']; ?></option>
                                            <option value="meninggal">Meninggal</option>
                                            <option value="meninggal">Masih Hidup</option>
                                        </select>
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Penghasilan ibu :</label>
                                        <input type="number" name="penghasilan_ibu" class="form-control" value="<?= $data['detailsiswa']['penghasilan_ibu']; ?>" required>
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


<script>
    $("#btn_save").hide();

    var loadFile = function(event) {
        var image = document.getElementById('foto');
        image.src = URL.createObjectURL(event.target.files[0]);
        $("#btn_save").show();

    };

    $("#btn_save").click(function() {
        var filename = $('#btn_editfoto').val().replace(/C:\\fakepath\\/i, '');
        var pathname = $('#btn_editfoto').val();
        console.log(pathname);
        // var url = "<?= base_url; ?>/datapendaftaran/ProsesEditFoto/"
        // var id_user = "/<?= $data['detailsiswa']['id']; ?>"
        // window.location.href = url + filename + id_user;
    })

    var loadFileKK = function(event) {
        var image = document.getElementById('foto_kk');
        image.src = URL.createObjectURL(event.target.files[0]);
    };


    var loadFileakte = function(event) {
        var image = document.getElementById('foto_akte');
        image.src = URL.createObjectURL(event.target.files[0]);
    };
</script>