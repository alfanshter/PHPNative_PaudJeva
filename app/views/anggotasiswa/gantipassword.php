<?php
$id = 0;
?>
<div class="content mt-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Ganti Password Siswa</h4>
                        <p class="card-category">Selamat Datang</p>
                    </div>
                    <div class="card-body">
                        <div class="container">

                            <div class="row">
                                <?php
                                Flasher::Message();
                                ?>
                                <div class="col-lg-9">
                                    <form action="<?= base_url; ?>/anggotasiswa/prosesgantipassword" method="POST">
                                        <div class="input-group mb-3 mt-2">
                                            <input type="hidden" value="<?= $data['datasiswa_all']['username']; ?>" name="username">
                                            <input type="text" class="form-control" name="password" placeholder="Masukkan Password Baru" aria-label="Recipient's username" aria-describedby="button-addon2"><br>
                                            <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Ganti Password</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
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

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ganti Password Siswa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url; ?>/anggotasiswa/gantipassword" method="POST">
                    <input type="hidden" value="">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Masukkan Password</label>
                        <input type="text" class="form-control" id="password" name="password">
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Send message</button>
            </div>
        </div>
    </div>
</div>