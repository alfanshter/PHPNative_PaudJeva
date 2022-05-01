<!--
=========================================================
Material Dashboard - v2.1.2
=========================================================

Product Page: https://www.creative-tim.com/product/material-dashboard
Copyright 2020 Creative Tim (https://www.creative-tim.com)
Coded by Creative Tim

=========================================================
The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en">
<?php
if (!empty($_SESSION['role'])) {
    $role = $_SESSION['role'];
} else {
    $role = $_SESSION['role'] = 0;
}

if ($role == 2) {
    $foto = $data['biodata'] = $this->model('SiswaModel')->getbiodata($_SESSION['id']);
}

?>

<head>


    <meta charset="utf-8" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Dashboard
    </title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <!-- <link rel="stylesheet" href="'assets/css1/bootstrap.min.css'" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous" /> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link rel="stylesheet" href="<?= base_url; ?>/assets/css/material-dashboard.css?v=2.1.2'" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="<?= base_url; ?>/assets/demo/demo.css'" rel="stylesheet" />

    <script src="<?= base_url; ?>/assets/js/jquery.min.js"></script>

    <style type="text/css">

    </style>

</head>



<body class="">
    <div class="wrapper ">
        <div class="sidebar" data-color="purple" data-background-color="white" data-image="assets/img/sidebar-1.jpg'">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
            <?php
            if ($role == 0) {
            ?>
                <div class="logo"><a href="<?= base_url; ?>/home" class="simple-text logo-normal">
                        PAUD ASSBIYAN
                    </a></div>

            <?php     } ?>

            <?php
            if ($role == 1) {
            ?>
                <div class="logo"><a href="<?= base_url; ?>/home" class="simple-text logo-normal">
                        PAUD ASSIBYAN
                    </a></div>

            <?php     } ?>

            <?php
            if ($role == 2) {
            ?>
                <div class="logo"><a href="<?= base_url; ?>/siswa" class="simple-text logo-normal">
                        PAUD ASSIBYAN
                    </a>
                </div>
                <div class="sidebar-wrapper">
                    <ul class="nav">

                        <li class="nav-item ">
                            <a class="nav-link" href="<?= base_url; ?>/siswa">
                                <p>Dashboard</p>
                            </a>
                        </li>

                        <li class="nav-item ">
                            <a class="nav-link" href="<?= base_url; ?>/fasilitaspaud">
                                <p>Fasilitas PAUD</p>
                            </a>
                        </li>
                    </ul>
                </div>
            <?php     } ?>


            <div class="sidebar-wrapper">
                <ul class="nav">

                    <?php
                    if ($role == 0) {
                    ?>
                        <li class="nav-item ">
                            <a class="nav-link" href=" <?= base_url; ?>/pendaftaran">
                                <i class="material-icons"></i>
                                <p>Pendaftaran</p>
                            </a>
                        </li>

                        <li class="nav-item ">
                            <a class="nav-link" href="<?= base_url; ?>/aktifasi">
                                <p>Aktivasi Akun</p>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="<?= base_url; ?>/login">
                                <p>Login</p>
                            </a>
                        </li>

                    <?php               } else if ($role == "1") {
                    ?>
                        <li class="nav-item ">
                            <a class="nav-link" href=" <?= base_url; ?>/dashboard">
                                <i class="material-icons"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>

                        <li class="nav-item ">
                            <a class="nav-link" href="<?= base_url; ?>/admin">
                                <p>Admin</p>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="<?= base_url; ?>/anggotasiswa">
                                <p>Anggota Siswa</p>
                            </a>
                        </li>

                        <li class="nav-item ">
                            <a class="nav-link" href="<?= base_url; ?>/datapendaftaran">
                                <p>Data Pendaftaran</p>
                            </a>
                        </li>

                        <li class="nav-item ">
                            <a class="nav-link" href="<?= base_url; ?>/dataguru">
                                <p>Data Guru</p>
                            </a>
                        </li>

                        <li class="nav-item ">
                            <a class="nav-link" href="<?= base_url; ?>/fasilitaspaud">
                                <p>Fasilitas PAUD</p>
                            </a>
                        </li>



                    <?php                     }
                    ?>

                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                    <i class="material-icons">person</i>
                                    <p class="d-lg-none d-md-block">
                                        Account
                                    </p>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                                    <?php
                                    if ($role == 2) {
                                    ?>
                                        <img src="<?= base_url; ?>/img/<?= $foto['foto']; ?>" height="200" width="200">

                                    <?php } ?>
                                    <a class="dropdown-item" href="<?= base_url; ?>/login/logout">Log out</a>
                                    <?php
                                    if ($role == 2) {
                                    ?>
                                        <a class="dropdown-item" href="<?= base_url; ?>/siswa/editfoto">Edit Foto</a>

                                    <?php } ?>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>