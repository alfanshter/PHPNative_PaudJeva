<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76"
        href="<?= base_url; ?>/assets_baru/img/illustrations/logo-paud-assibyan.png">
    <link rel="icon" type="image/png" href="<?= base_url; ?>/assets_baru/img/illustrations/logo-paud-assibyan.png">
    <title>
        Paud Assibyan
    </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link href="<?= base_url; ?>/assets_baru/css/nucleo-icons.css" rel="stylesheet" />
    <link href="<?= base_url; ?>/assets_baru/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="<?= base_url; ?>/assets_baru/css/material-dashboard.css?v=3.0.2" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
    .input-icons i {
        position: absolute;
    }

    .input-icons {
        width: 100%;
        margin-bottom: 10px;
    }

    .icon {
        padding: 10px;
        min-width: 40px;
    }

    .input-field {
        width: 100%;
        padding: 10px;
        text-align: center;
    }
    </style>
</head>

<body class="">
    <main class="main-content  mt-0">
        <div class="page-header min-vh-100">
            <div class="container">
                <div class="row">
                    <div class="col-7 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 start-0 text-center justify-content-center flex-column"
                        style="padding-left: 0px;">
                        <div class="position-relative bg-gradient-primary h-100 m-3 px-7 d-flex flex-column justify-content-center"
                            style="background-image: url('<?= base_url; ?>/assets_baru/img/illustrations/back-paud-assibyan.jpg'); background-size: cover;">
                            <div class="col-12">
                                <div class="card my-4">
                                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                            <h6 class="text-white text-capitalize ps-3">Jadwal Kegiatan Siswa</h6>
                                        </div>
                                    </div>
                                    <div class="card-body px-0 pb-2">
                                        <div class="table-responsive p-0">
                                            <table class="table align-items-center mb-0">
                                                <thead>
                                                    <tr>
                                                        <th
                                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                            Jadwal</th>
                                                        <th
                                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                            Kegiatan</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php

                                                foreach ($data['jadwal'] as $jadwal) : ?>
                                                    <form
                                                        action="<?= base_url; ?>/jadwalkegiatansiswa/deletejadwal/<?= $jadwal['id']; ?>"
                                                        method="POST">
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex px-2 py-1">
                                                                    <div
                                                                        class="d-flex flex-column justify-content-center">
                                                                        <h6 class="mb-0 text-sm">
                                                                            <?php echo $jadwal['jadwal'] ?></h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <p class="text-xs font-weight-bold mb-0">
                                                                    <?php echo $jadwal['kegiatan'] ?>
                                                                </p>
                                                            </td>
                                                        </tr>

                                                    </form>
                                                    <?php
                                                endforeach; ?>



                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-5 col-md-7 d-flex flex-column ms-auto me-auto ms-lg-auto me-lg-5">
                        <div class="card card-plain">
                            <div class="card-header">
                                <h7 class="font-weight-bolder"><img
                                        src="<?= base_url; ?>/assets_baru/img/illustrations/logo-paud-assibyan.png"
                                        alt="logo-paud-assibyan" width="100" height="100"></h7>
                                <h6>PAUD ASSIBYAN</h6>
                            </div>
                            <hr>
                            <div class="card-body">
                                <?php
                                        Flasher::Message();
                                        ?>

                                <form role="form" action="<?= base_url; ?>/login/proseslogin" method="POST">
                                    <p>
                                        <center>Silakan Login Disini</center>
                                    </p>
                                    <div class="input-group input-group-outline mb-3">
                                        <label class="form-label">Username</label>
                                        <input type="text" class="form-control" name="username" id="username" required>
                                        <i class="fa fa-envelope-o icon"></i>
                                    </div>
                                    <div class="input-group input-group-outline mb-3">
                                        <label class="form-label">Password</label>
                                        <input type="password" class="form-control" id="password" name="password"
                                            required>
                                        <i class="fa fa-lock icon"></i>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit"
                                            class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0">Login</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </main>
    <!--   Core JS Files   -->
    <script src="<?= base_url; ?>/assets_baru/js/core/popper.min.js"></script>
    <script src="<?= base_url; ?>/assets_baru/js/core/bootstrap.min.js"></script>
    <script src="<?= base_url; ?>/assets_baru/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="<?= base_url; ?>/assets_baru/js/plugins/smooth-scrollbar.min.js"></script>
    <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
            damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="<?= base_url; ?>/assets_baru/js/material-dashboard.min.js?v=3.0.2"></script>
</body>

</html>