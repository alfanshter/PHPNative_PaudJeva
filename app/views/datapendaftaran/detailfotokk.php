<?php
$id = 0;
?>
<div class="content mt-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Data KK</h4>
                        <p class="card-category">Selamat Datang</p>
                    </div>
                    <div class="card-body">
                        <div class="container">

                            <center>

                                <form action="<?= base_url; ?>/datapendaftaran/ProsesEditKK" enctype="multipart/form-data" method="POST">
                                    <input type="hidden" value="<?= $data['biodata']['nik']; ?>" name="nik" id="nik">


                                    <img id="foto_guru" src="<?= base_url; ?>/img/<?= $data['biodata']['foto']; ?>" width="300" height="300" alt=""><br>
                                    <div class="form-group">
                                        <label for="btn_editfoto" class="btn btn-warning">Edit KK</label>
                                        <input id="btn_editfoto" name="btn_editfoto" type="file" class="form-control-file" accept="image/*" onchange="loadFile(event)">
                                    </div>

                                    <div class="form-group">
                                        <button id="btn_save" name="btn_save" type="submit" class="btn btn-success">Edit Foto</button>
                                    </div>


                                </form>
                            </center><br>

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