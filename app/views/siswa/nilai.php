<?php
$id_jadwal = 0;
?>
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
                                <?php
                                Flasher::Message();
                                ?>
                            </div>
                            <div class="container">
                                <table class="table table-stripped">
                                    <thead>
                                        <tr>
                                            <th scope="col">Tgl</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Bermain</th>
                                            <th scope="col">Ikrar Bersama</th>
                                            <th scope="col">Senam Irama</th>
                                            <th scope="col">Bernyanyi</th>
                                            <th scope="col">Berdoa</th>
                                            <th scope="col">Pijakan Sebelum Bermain</th>
                                            <th scope="col">Pijakan Setelah Bermain</th>
                                        </tr>

                                    </thead>
                                    <tbody>

                                        <?php

                                        foreach ($data['detailnilai'] as $nilai) : ?>
                                            <form action="<?= base_url; ?>/nilaisiswa/deletenilai/<?= $nilai['id_nilai']; ?>" method="POST">
                                                <tr>
                                                    <th scope="row"><?php echo $nilai['tanggal_nilai'] ?></th>
                                                    <td style="text-align: center;"><?php echo $nilai['nama'] ?></td>
                                                    <td style="text-align: center;"><?php echo $nilai['bermain'] ?></td>
                                                    <td style="text-align: center;"><?php echo $nilai['ikrar_bersama'] ?></td>
                                                    <td style="text-align: center;"><?php echo $nilai['senam_irama'] ?></td>
                                                    <td style="text-align: center;"><?php echo $nilai['bernyanyi'] ?></td>
                                                    <td style="text-align: center;"><?php echo $nilai['berdoa'] ?></td>
                                                    <td style="text-align: center;"><?php echo $nilai['pijakan_sebelum_bermain'] ?></td>
                                                    <td style="text-align: center;"><?php echo $nilai['pijakan_setelah_bermain'] ?></td>

                                                </tr>

                                            </form>
                                        <?php
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