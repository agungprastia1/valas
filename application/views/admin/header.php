<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard - Admin</title>

    <!-- Fontfaces CSS-->
    <link href="<?= base_url('asset/css/font-face.css') ?>" rel="stylesheet" media="all">
    <link href="<?= base_url('asset/vendor/font-awesome-4.7/css/font-awesome.min.css') ?>" rel="stylesheet" media="all">
    <link href="<?= base_url('asset/vendor/font-awesome-5/css/fontawesome-all.min.css') ?>" rel="stylesheet" media="all">
    <link href="<?= base_url('asset/vendor/mdi-font/css/material-design-iconic-font.min.css') ?>" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="<?= base_url('asset/vendor/bootstrap-4.1/bootstrap.min.css') ?>" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="<?= base_url('asset/vendor/animsition/animsition.min.css') ?>" rel="stylesheet" media="all">
    <link href="<?= base_url('asset/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css') ?>" rel="stylesheet" media="all">
    <link href="<?= base_url('asset/vendor/wow/animate.css') ?>" rel="stylesheet" media="all">
    <link href="<?= base_url('asset/vendor/css-hamburgers/hamburgers.min.css') ?>" rel="stylesheet" media="all">
    <link href="<?= base_url('asset/vendor/slick/slick.css') ?>" rel="stylesheet" media="all">
    <link href="<?= base_url('asset/vendor/select2/select2.min.css') ?>" rel="stylesheet" media="all">
    <link href="<?= base_url('asset/vendor/perfect-scrollbar/perfect-scrollbar.css') ?>" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?= base_url('asset/css/theme.css') ?>" rel="stylesheet" media="all">
    <link rel="shortcut icon" href="<?php echo base_url('asset/img/BJA(1).png') ?>" />

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <?php foreach ($user as $y) { ?>
                            <img src="<?= base_url('asset/img/').$y['gambar'] ?>" />
                        <?php } ?>
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li>
                            <a href="<?php echo site_url('admin') ?>">
                                <i class="fas fa-chart-bar"></i>Curs</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('admin/video') ?>">
                                <i class="fas fa-table"></i>Video</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('admin/profil') ?>">
                                <i class="far fa-check-square"></i>Profil</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->



        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-3 offset-lg-9">
                                <div class="header-wrap">
                            <div class="header-button">
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <?php foreach ($user as $y) { ?>
                                        <div class="image">
                                            <img src="<?= base_url('asset/img/').$y['gambar'] ?>" />
                                        </div>
                                            <div class="content">
                                                <a class="js-acc-btn" href="#"><?php echo $y['username'] ?></a>
                                            </div>
                                            <div class="account-dropdown js-dropdown">
                                                <div class="info clearfix">
                                                    <div class="image">
                                                        <a href="#">
                                                            <img src="<?= base_url('asset/img/').$y['gambar'] ?>" />
                                                        </a>
                                                    </div>
                                                    <div class="content">
                                                        <h5 class="name">
                                                            <a href="#"><?php echo $y['username'] ?></a>
                                                        </h5>
                                                        <span class="email"><?php echo $y['email'] ?></span>
                                                    </div>
                                                </div>
                                                <div class="account-dropdown__body">
                                                    <div class="account-dropdown__item">
                                                        <a href="<?php echo base_url('admin/profil') ?>">
                                                            <i class="zmdi zmdi-account"></i>Account</a>
                                                    </div>
                                                </div>
                                                <div class="account-dropdown__footer">
                                                    <a href="<?php echo base_url('login/logout') ?>">
                                                        <i class="zmdi zmdi-power"></i>Logout</a>
                                                </div>
                                            </div>
                                        <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->


                        