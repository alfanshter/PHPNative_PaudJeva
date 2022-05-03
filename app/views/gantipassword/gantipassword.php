<?php
$this->view('templates/strtemplate', $data);
?>

<body class="g-sidenav-show  bg-gray-200">
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <?php
        $this->view('templates/nav', $data);
        ?>
        <!-- End Navbar -->
        <div class="container-fluid py-4" style="padding-left: 0px;">
            <?php
            $this->view('templates/mainmenu', $data);
            ?>
            <div class="position-relative h-100 m-3 px-7 d-flex flex-column justify-content-center">
                <div class="col-12">
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <h4 class="text-white text-capitalize ps-3">Ganti Password</h4>
                            </div>
                        </div>
                        <div class="card-body px-0 pb-2">
                            <div class="row table-responsive p-0" style="margin-left: 20px;margin-right: 20px;">
                                <p><button type="button" class="btn btn-lg btn-lg w-auto  mb-0" style="background-color:#b0c4ee;">Data Induk</button></p>
                                <?php
                                Flasher::Message();
                                ?>
                                <hr>

                                <form action="<?= base_url ?>/gantipassword/update" method="POST">
                                    <div>
                                        <p class="text-dark">Password Lama</p>

                                        <input type="text" name="password_lama" id="password_lama" class="form-control" required style="background-color: #B6BDFF; padding-left:10px">
                                    </div>
                                    <div class="mt-2">
                                        <p class="text-dark">Password Baru</p>
                                        <input type="text" name="password_baru" id="password_baru" class="form-control" required style="background-color: #B6BDFF; padding-left:10px">
                                    </div>
                                    <div class="mt-2">
                                        <p class="text-dark">Ulangi Password</p>
                                        <input type="text" name="ulangi_password" id="ulangi_password" class="form-control" required style="background-color: #B6BDFF; padding-left:10px">
                                    </div>
                                    <div class="modal-footer">
                                        <a href="<?= base_url ?>/gantipassword" class="btn btn-secondary" type="button" data-dismiss="modal">Reset</a>
                                        <button type="submit" class="btn btn-primary">Edit</button>
                                    </div>


                                </form>


                            </div>
                            <br>


                            <br>
                        </div>
                    </div>
                    <br><br>
                    <div class="position-relative">
                        <input type="button" onClick="history.go(-1)" VALUE="Kembali" class="btn btn-primary position-absolute end-0 bottom-0 " style="background-color: #DA2FE9;margin-left:100px"></input>

                    </div>

                </div>
            </div>
        </div>

        </div>



        <?php
        $this->view('templates/footer', $data);
        ?>


        </div>
    </main>

    <?php
    $this->view('templates/endtemplate', $data);
    ?>