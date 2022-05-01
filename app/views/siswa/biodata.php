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

                                <form action="<?= base_url; ?>/biodata/editsiswa" method="POST">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Nama Siswa</label>
                                        <input type="hidden" name="id" value="<?= $data['biodata']['id']; ?>">
                                        <input type="text" required class="form-control" name="nama"
                                            id="exampleInputEmail1" aria-describedby="nama"
                                            value="<?= $data['biodata']['nama']; ?>">
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Username</label>
                                        <input type="text" name="username" class="form-control"
                                            value="<?= $data['biodata']['username']; ?>" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">NIK</label>
                                        <input type="number" name="nik" class="form-control"
                                            value="<?= $data['biodata']['nik']; ?>" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Tempat/Tanggal
                                            Lahir</label>
                                        <div class="input-group input-group-sm mb-3">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">Lahir</span>
                                            <input required type="text" id="tempat_lahir" name="tempat_lahir"
                                                class="form-control" aria-label="Sizing example input"
                                                aria-describedby="inputGroup-sizing-sm"
                                                value="<?= $data['biodata']['tempat_lahir']; ?>">
                                            <input type="date" id="ttl" name="ttl"
                                                value="<?= $data['biodata']['ttl']; ?>">
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Jenis Kelamin :</label>
                                        <input type="text" name="jk" class="form-control"
                                            value="<?= $data['biodata']['jk']; ?>" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Agama : </label>
                                        <input type="text" name="agama" class="form-control"
                                            value="<?= $data['biodata']['agama']; ?>" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Alamat :</label>
                                        <input type="text" name="alamat" class="form-control"
                                            value="<?= $data['biodata']['alamat']; ?>" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Jenis Tinggal :</label>
                                        <input type="text" name="jenis_tinggal" class="form-control"
                                            value="<?= $data['biodata']['jenis_tinggal']; ?>" required>
                                    </div>


                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Alat Transportasi
                                            :</label>
                                        <input type="text" name="alat_transportasi" class="form-control"
                                            value="<?= $data['biodata']['alat_transportasi']; ?>" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label"> No. Telepon/HP:</label>
                                        <input type="text" name="nomor_telepon" class="form-control"
                                            value="<?= $data['biodata']['nomor_telepon']; ?>" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Status Dalam Keluarga
                                            :</label>
                                        <input type="text" name="status_dalam_keluarga" class="form-control"
                                            value="<?= $data['biodata']['status_dalam_keluarga']; ?>" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">No KPS</label>
                                        <input type="text" name="no_kps" class="form-control"
                                            value="<?= $data['biodata']['no_kps']; ?>">
                                    </div>


                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Foto :</label><br>
                                        <input type="hidden" name="foto" value="<?= $data['biodata']['foto']; ?>">
                                        <center><img src="<?= base_url; ?>/img/<?= $data['biodata']['foto']; ?>" alt=""
                                                style="height: 200px; width :200px" id="foto"><br>

                                        </center>

                                    </div>
                                    <div class="mb-3">
                                        <input type="hidden" name="foto_kk" value="<?= $data['biodata']['foto_kk']; ?>">
                                        <label for="exampleInputPassword1" class="form-label">Foto KK :</label><br>
                                        <center>
                                            <img src="<?= base_url; ?>/img/<?= $data['biodata']['foto_kk']; ?>" alt=""
                                                style="height: 200px; width :200px" id="foto_kk">


                                        </center>
                                    </div>

                                    <div class="mb-3">
                                        <input type="hidden" name="foto_akte"
                                            value="<?= $data['biodata']['foto_akte']; ?>">
                                        <label for="exampleInputPassword1" class="form-label">Foto Akte :</label><br>
                                        <center><img src="<?= base_url; ?>/img/<?= $data['biodata']['foto_akte']; ?>"
                                                alt="" style="height: 200px; width :200px" id="foto_akte">

                                        </center>
                                    </div>



                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Nama Ayah :</label>
                                        <input type="text" name="nama_ayah" class="form-control"
                                            value="<?= $data['biodata']['nama_ayah']; ?>" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Tempat/Tanggal Lahir Ayah
                                            :</label>
                                        <div class="input-group input-group-sm mb-3">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">Lahir</span>
                                            <input required type="text" id="tempat_lahir_ayah" name="tempat_lahir_ayah"
                                                class="form-control" aria-label="Sizing example input"
                                                aria-describedby="inputGroup-sizing-sm"
                                                value="<?= $data['biodata']['tempat_lahir_ayah']; ?>">
                                            <input type="date" id="ttl_ayah" name="ttl_ayah"
                                                value="<?= $data['biodata']['ttl_ayah']; ?>">
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">NIK Ayah :</label>
                                        <input type="number" name="nik_ayah" class="form-control"
                                            value="<?= $data['biodata']['nik_ayah']; ?>" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Pendidikan Terakhir Ayah
                                            :</label>
                                        <input type="text" name="pendidikan_terakhir_ayah" class="form-control"
                                            value="<?= $data['biodata']['pendidikan_terakhir_ayah']; ?>" required>
                                    </div>


                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Pekerjaan Ayah :</label>
                                        <input type="text" name="pekerjaan_ayah" class="form-control"
                                            value="<?= $data['biodata']['pekerjaan_ayah']; ?>" required>
                                    </div>

                                    <div class="input-group input-group-sm mb-3">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Status Ayah</span>
                                        <select id="status_ayah" name="status_ayah" class="form-select"
                                            aria-label="Default select example">
                                            <option selected><?= $data['biodata']['status_ayah']; ?></option>
                                            <option value="meninggal">Meninggal</option>
                                            <option value="meninggal">Masih Hidup</option>
                                        </select>
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Penghasilan Ayah :</label>
                                        <input type="number" name="penghasilan_ayah" class="form-control"
                                            value="<?= $data['biodata']['penghasilan_ayah']; ?>" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Nama ibu :</label>
                                        <input type="text" name="nama_ibu" class="form-control"
                                            value="<?= $data['biodata']['nama_ibu']; ?>" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Tempat/Tanggal Lahir ibu
                                            :</label>
                                        <div class="input-group input-group-sm mb-3">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">Lahir</span>
                                            <input required type="text" id="tempat_lahir_ibu" name="tempat_lahir_ibu"
                                                class="form-control" aria-label="Sizing example input"
                                                aria-describedby="inputGroup-sizing-sm"
                                                value="<?= $data['biodata']['tempat_lahir_ibu']; ?>">
                                            <input type="date" id="ttl_ibu" name="ttl_ibu"
                                                value="<?= $data['biodata']['ttl_ibu']; ?>">
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">NIK ibu :</label>
                                        <input type="number" name="nik_ibu" class="form-control"
                                            value="<?= $data['biodata']['nik_ibu']; ?>" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Pendidikan Terakhir ibu
                                            :</label>
                                        <input type="text" name="pendidikan_terakhir_ibu" class="form-control"
                                            value="<?= $data['biodata']['pendidikan_terakhir_ibu']; ?>" required>
                                    </div>


                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Pekerjaan ibu :</label>
                                        <input type="text" name="pekerjaan_ibu" class="form-control"
                                            value="<?= $data['biodata']['pekerjaan_ibu']; ?>" required>
                                    </div>

                                    <div class="input-group input-group-sm mb-3">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Status ibu</span>
                                        <select id="status_ibu" name="status_ibu" class="form-select"
                                            aria-label="Default select example">
                                            <option selected><?= $data['biodata']['status_ibu']; ?></option>
                                            <option value="meninggal">Meninggal</option>
                                            <option value="meninggal">Masih Hidup</option>
                                        </select>
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Penghasilan ibu :</label>
                                        <input type="number" name="penghasilan_ibu" class="form-control"
                                            value="<?= $data['biodata']['penghasilan_ibu']; ?>" required>
                                    </div>



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