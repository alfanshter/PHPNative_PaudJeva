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

                                <form action="<?= base_url; ?>/detailkeuangan/editkeuangan" method="POST">
                                    <input type="hidden" value="<?= $data['detailkeuangan']['id_keuangan']; ?>" name="id_keuangan">
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Periode</label>
                                        <input type="text" name="periode" class="form-control" value="<?= $data['detailkeuangan']['periode']; ?>" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Jenis Tagihan</label>
                                        <input type="text" name="jenis tagihan" class="form-control" value="<?= $data['detailkeuangan']['jenis_tagihan']; ?>" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Nominal</label>
                                        <input type="number" name="nominal" class="form-control" value="<?= $data['detailkeuangan']['nominal']; ?>" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Status Bayar</label>
                                        <input type="text" name="status_bayar" class="form-control" value="<?= $data['detailkeuangan']['status_bayar']; ?>" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Tanggal Bayar</label>
                                        <input type="date" id="tanggal_bayar" name="tanggal_bayar" value="<?= $data['detailkeuangan']['tanggal_bayar']; ?>">

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