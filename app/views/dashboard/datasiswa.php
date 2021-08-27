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
                            <div class="row">
                                <div class="col-lg-3">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahCustomer">
                                        Tambah
                                    </button>
                                </div>
                                <div class="col-lg-9">
                                    <form action="{{ url('search-customer') }}" method="GET">
                                        <!-- @csrf -->
                                        <div class="input-group mb-3 mt-2">
                                            <input type="text" class="form-control" name="cari" placeholder="Cari Siswa" aria-label="Recipient's username" aria-describedby="button-addon2">
                                            <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Cari</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="container">
                                <table class="table table-stripped">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php $i = 1; ?>
                                        <?php
                                        foreach ($data['datasiswa_all'] as $siswa) : ?>
                                            <tr>
                                                <th scope="row"><?= $i; ?></th>
                                                <td><?php echo $siswa['nama'] ?></td>
                                                <td>
                                                    <form action="{{ route('customer.destroy',$item->Id_Pelanggan) }}" method="POST">
                                                        <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                                            <a href="/admin/detail_pelanggan" class="btn btn-success"><span style="color: white" class="material-icons">
                                                                    remove_red_eye
                                                                </span></a>
                                                            <button onclick="return confirm('Apakah anda yakin akan menghapus?')" type="submit" class="btn btn-danger"><span style="color: white" class="material-icons">
                                                                    delete
                                                                </span></button>
                                                        </div>
                                                    </form>
                                                </td>

                                            </tr>
                                        <?php $i++;
                                        endforeach; ?>

                                    </tbody>
                                </table>
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

<!-- Modal
    <div class="modal fade" id="tambahCustomer" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Pelanggan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama Pelanggan</label>
                        <input type="text" required class="form-control" name="nama" id="exampleInputEmail1" aria-describedby="nama">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">No. Telp</label>
                        <input type="text" name="telepon" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
                        <textarea class="form-control" name="alamat" required id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>