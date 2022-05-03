<nav style="background-color:#f133ff;" class="navbar navbar-main navbar-expand-lg px-0 shadow-none" id="navbarBlur" navbar-scroll="true">
    <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
            <?php if ($_SESSION["role"] == 0) { ?>
                <a href="<?= base_url ?>/admin">
                    <h5 class="font-weight-bolder mb-0" style="color:white;">ADMIN PAUD ASSIBYAN</h5>
                </a>

            <?php } elseif ($_SESSION["role"] == 1) { ?>
                <a href="<?= base_url ?>/user">
                    <h5 class="font-weight-bolder mb-0" style="color:white;">SISWA PAUD ASSIBYAN</h5>
                </a>

            <?php } ?>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar" style="color:white;">
            <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            </div>
            <ul class="navbar-nav  justify-content-end">
                <?php if ($_SESSION['role'] == 1) { ?>
                    <li class="nav-item d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false" style="color:red;">
                            <i class="fa fa-question-circle me-sm-1"></i>
                            <span class="d-sm-inline d-none">Bantuan</span>
                        </a>
                        <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3" aria-labelledby="dropdownMenuButton" style="margin-right: 100px;background-color:#DA2FE9">
                            <div class="d-flex py-2" style="margin-right: 10px;">
                                <div class="my-auto">
                                    <img src="<?= base_url; ?>/menu/logowa.svg" class="avatar avatar-sm  me-3 ">
                                </div>
                                <div class="d-flex flex-column justify-content-center">
                                    <h6 class="text-md font-weight-normal mb-1">
                                        <span class="font-weight-bold">Chat Via Whatsapp
                                    </h6>
                                </div>
                            </div>

                        </ul>
                    </li>
                    <li class="nav-item px-3 d-flex align-items-center">
                        <i class="fa fa-key me-sm-1"></i>
                        <a href="<?= base_url ?>/gantipassword" style="color: white;" class="d-sm-inline d-none"> Ganti Password</a>
                    </li>
                <?php } ?>
                <li class="nav-item dropdown pe-2 d-flex align-items-center">
                    <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false" style="color:red;">
                        <i class="fa fa-user cursor-pointer"></i>
                    </a>
                    <ul class="dropdown-menu  dropdown-menu-end">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body" style="background-color: #DA2FE9;">
                                <center>
                                    <img src="<?= base_url ?>/img/logopaud.png" alt="" srcset="">
                                    <p style="font-size: 15px;color:black" class="card-text">ASSIBYAN</p>
                                </center>
                            </div>
                            <div class="card-footer">
                                <?php if ($_SESSION['id'] == 0) {
                                ?>
                                    <a href="<?= base_url ?>/editprofil" class="btn" style="background-color:green; color:black">Edit Profil</a>
                                <?php } else { ?>
                                    <a href="<?= base_url ?>/biodata" class="btn" style="background-color:green; color:black">Profil</a>
                                <?php } ?>
                                <a href="<?= base_url ?>/login/logout" class="btn" style="margin-left: 10px;background-color:red;color:black">Logout</a>
                            </div>
                        </div>
                        <!--<li class="mb-2">
                            <a class="dropdown-item border-radius-md" href="javascript:;">
                                <div class="d-flex py-1">
                                    <div class="my-auto">
                                        <img src="<?= base_url; ?>/assets_baru/img/team-2.jpg"
                                            class="avatar avatar-sm  me-3 ">
                                    </div>
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="text-sm font-weight-normal mb-1">
                                            <span class="font-weight-bold">Admin

                                                <?php if ($_SESSION['role'] == 1) { ?>
                                                <span class="font-weight-bold"><?= $_SESSION["nama"] ?>

                                                    <?php } ?>

                                        </h6>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="mb-2">


                            <div class="container">
                                <div class="row">
                                    <div class="col-sm">
                                        <a class="dropdown-item border-radius-md" href="javascript:;">
                                            Profil
                                        </a>
                                    </div>
                                    <div class="col-sm">
                                        <form action="login/logout" method="POST">
                                            <button class="dropdown-item border-radius-md">Log out</button>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </li>-->
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>