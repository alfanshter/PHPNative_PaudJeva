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
                            <!-- @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <i class="material-icons">close</i>
                                </button>
                                <span>
                                    <b>{{$message}}</span>
                            </div>
                            @endif
                            @if ($message = Session::get('gagal'))
                            <div class="alert alert-warning">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <i class="material-icons">close</i>
                                </button>
                                <span>
                                    <b>{{$message}}</span>
                            </div>
                            @endif
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif -->
                            <div class="container">

                                <form action="<?= base_url; ?>/detailsiswa/editsiswa" method="POST">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Nama Siswa</label>
                                        <input type="hidden" name="id_siswa" value="<?= $data['detailsiswa']['id_siswa']; ?>">
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