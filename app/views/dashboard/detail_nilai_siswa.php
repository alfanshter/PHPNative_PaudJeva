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

                                <form action="<?= base_url; ?>/detailnilaisiswa/editNilai" method="POST">
                                    <input type="hidden" value="<?= $data['detailnilai']['id_nilai']; ?>" name="id_nilai">
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Nama</label>
                                        <input type="text" name="nik" class="form-control" disabled value="<?= $data['detailnilai']['nama']; ?>" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Bermain</label>
                                        <input type="number" name="bermain" class="form-control" value="<?= $data['detailnilai']['bermain']; ?>" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Ikrar Bersama</label>
                                        <input type="number" name="ikrar_bersama" class="form-control" value="<?= $data['detailnilai']['ikrar_bersama']; ?>" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Senam Irama</label>
                                        <input type="number" name="senam_irama" class="form-control" value="<?= $data['detailnilai']['senam_irama']; ?>" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Bernyanyi</label>
                                        <input type="number" name="bernyanyi" class="form-control" value="<?= $data['detailnilai']['bernyanyi']; ?>" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Berdoa</label>
                                        <input type="number" name="berdoa" class="form-control" value="<?= $data['detailnilai']['berdoa']; ?>" required>
                                    </div>


                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Pijakan Sebelum Bermain</label>
                                        <input type="number" name="pijakan_sebelum_bermain" class="form-control" value="<?= $data['detailnilai']['pijakan_sebelum_bermain']; ?>" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Pijakan Setelah Bermain</label>
                                        <input type="number" name="pijakan_setelah_bermain" class="form-control" value="<?= $data['detailnilai']['pijakan_setelah_bermain']; ?>" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Komentar Nilai</label><br>
                                        <textarea required id="komentar_nilai" name="komentar_nilai" rows="4" cols="50"> <?= $data['detailnilai']['komentar_nilai']; ?></textarea>
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