<?php
$id = 0;
?>
<div class="content mt-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Edit Foto Siswa</h4>
                        <p class="card-category">Selamat Datang</p>
                    </div>
                    <div class="card-body">
                        <div class="container">
                            <div class="row">
                                <?php
                                Flasher::Message();
                                ?>
                            </div>
                            <div class="container">
                                <center>
                                    <form action="<?= base_url; ?>/siswa/ProsesEditFoto" enctype="multipart/form-data" method="POST">
                                        <img id="foto_guru" src="<?= base_url; ?>/img/<?= $data['foto']['foto']; ?>" width="300" height="300" alt=""><br>
                                        <div class="form-group">
                                            <label for="edit_foto" class="btn btn-warning">Pilih Foto</label>
                                            <input id="edit_foto" name="edit_foto" type="file" class="form-control-file" accept="image/*" onchange="loadFile(event)">
                                        </div>

                                        <div class="form-group">
                                            <button id="btn_save" name="btn_save" type="submit" class="btn btn-success">Edit Foto</button>
                                        </div>


                                    </form>
                                </center><br>

                                <!-- <center>
                                    <form action="<?= base_url; ?>/siswa/ProsesEditFoto" enctype="multipart/form-data" method="POST">
                                        <img class="center" src="<?= base_url; ?>/img/<?= $data['foto']['foto']; ?>" height="200" width="200">
                                        <br>
                                        <input type="file" id="edit_foto" name="edit_foto" required><br>
                                        <button type="submit" class="mt-5 btn btn-primary">Submit</button>


                                    </form>


                                </center> -->
                            </div>
                            <hr class=" mt-2">
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

<!-- Modal Tambah siswa -->
<div class="modal fade" id="tambahCustomer" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Guru</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form role="form" action="<?= base_url; ?>/dataguru/tambahguru" method="POST" enctype="multipart/form-data">
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Nama Guru</span>
                        <input required type="text" id="nama_guru" name="nama_guru" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>

                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Nama Lembaga</span>
                        <input required type="text" id="nama_lembaga" name="nama_lembaga" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>

                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Tempat/tanggal lahir</span>
                        <input required type="text" id="tempatlahir_guru" name="tempatlahir_guru" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                        <input type="date" id="ttl_guru" name="ttl_guru">
                    </div>

                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">KTP Guru</span>
                        <input required type="number" id="ktp_guru" name="ktp_guru" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>

                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">TMT</span>
                        <input required type="text" id="tmt" name="tmt" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>

                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Tahun Kerja</span>
                        <input required type="number" id="tahun_kerja" name="tahun_kerja" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>

                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Bulan Kerja</span>
                        <input required type="number" id="bulan_kerja" name="bulan_kerja" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>

                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Status Guru</span>
                        <input required type="text" id="status_guru" name="status_guru" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>

                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Alamat Lembaga</span>
                        <input required type="text" id="alamat_lembaga" name="alamat_lembaga" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>

                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Alamat Rumah</span>
                        <input required type="text" id="alamat_rumah" name="alamat_rumah" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>

                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Pendidikan Guru</span>
                        <input required type="text" id="pendidikan_guru" name="pendidikan_guru" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>




            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </form>

        </div>
    </div>
</div>

<script>
    $("#btn_save").hide();

    var loadFile = function(event) {
        var image = document.getElementById('foto_guru');
        image.src = URL.createObjectURL(event.target.files[0]);
        $("#btn_save").show();
    };

    // $(document).ready(function() {
    //     $("#btn_editfoto").click(function() {
    //         $('img#foto_guru').attr('src', '/path/to/image');
    //     });
    // });
</script>