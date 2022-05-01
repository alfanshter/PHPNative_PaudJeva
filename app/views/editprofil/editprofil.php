<?php
$this->view('templates/strtemplate',$data);
?>

<body class="g-sidenav-show  bg-gray-200">
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <?php
        $this->view('templates/nav',$data);
        ?>
        <!-- End Navbar -->
        <div class="container-fluid py-4" style="padding-left: 0px;">
            <?php
        $this->view('templates/mainmenu',$data);
        ?>
            <div class="position-relative h-100 m-3 px-7 d-flex flex-column justify-content-center">
                <div class="col-12">
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <h4 class="text-white text-capitalize ps-3">Edit Profil Admin</h4>
                            </div>
                 
                        </div>
                        <div class="card-body px-0 pb-2">
                            <div class="row table-responsive p-0" style="margin-left: 20px;margin-right: 20px;">
                                <center>
                                    <?php
                                        Flasher::Message();
                                        ?>
                                    <form action="<?= base_url ?>/editprofil/prosesedit" method="post" enctype="multipart/form-data">
                                        <input type="hidden" name="id" value="<?= $_SESSION['id'] ?>">
                                        <input type="hidden" name="oldImage" value="<?= $data['admin']['foto'] ?>">
                                        <?php if($data['admin']['foto']){ ?>
                                                                                    <img class="img-preview img-fluid"
                                                                                        src="  <?= base_url ."/img/".$data['admin']['foto']  ?>"
                                                                                        style="width: 154px; height:149px">
                                                                                    <?php }else {?>
                                                                                    <img class="img-preview img-fluid"
                                                                                        src="<?= base_url ?>/img/logopaud.png"
                                                                                        style="width: 154px; height:149px">

                                                                                    <?php }?>
                                        
                                        <label for="foto" class="d-block btn " style="width: 200px;background-color:#FA610B; color:black">Pilih Foto</label>
                                        <input type="file" name="foto" class="btn btn-primary" id="foto" style="visibility: hidden" required
                                                onchange="previewImage()"><br><br>
                                        <script>
                                            function previewImage() {
                                                const image =
                                                    document.querySelector(
                                                        "#foto"
                                                    );
                                                const imgPreview =
                                                    document.querySelector(
                                                        ".img-preview"
                                                    );

                                                imgPreview.style.display =
                                                    "block";

                                                const oFReader =
                                                    new FileReader();
                                                oFReader.readAsDataURL(
                                                    foto.files[0]
                                                );

                                                oFReader.onload = function(
                                                    oFREvent
                                                ) {
                                                    imgPreview.src =
                                                        oFREvent.target.result;
                                                };
                                            }
                                            </script>
                                        <button type="submit"  class="btn btn-primary" >Simpan</button>
                                    </form>
                                </center>
                            </div>
                            <hr>

                        </div>

                    </div>
                    <div class="position-relative">
                        <a  href="<?= base_url ?>/admin"
                            class="btn btn-primary position-absolute top-0 end-0"
                            style="background-color: #DA2FE9;">Kembali</a>

                    </div>
                    <br><br>
                </div>
            </div>

       
            <?php
        $this->view('templates/footer',$data);
        ?>
        </div>
    </main>

    <?php
        $this->view('templates/endtemplate',$data);
        ?>