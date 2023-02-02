<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>My TECHANIC Platform pencarian tempat reparasi / service mudah & terpercaya | TECHANIC Business Platform manajemen transaksi untuk alat elektronik   </title>

    <!-- Favicon -->
    <link rel="icon" href="<?= base_url() ?>assets/img/favicon.png">
    <!-- Bootstrap CSS -->
    <link href="<?= base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Slick Slider -->
    <link href="<?= base_url() ?>assets/css/slick.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/css/slick-theme.css" rel="stylesheet">

    <!-- AOS CSS -->
    <link href="<?= base_url() ?>assets/css/aos.css" rel="stylesheet">

    <!-- Lity CSS -->
    <link href="<?= base_url() ?>assets/css/lity.min.css" rel="stylesheet">

    <!-- Satoshi CSS -->
    <link href="<?= base_url() ?>assets/css/satoshi.css" rel="stylesheet">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/fontawesome-all.min.css">

    <!-- linearicons CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/linearicons.css">

    <!-- Our Min CSS -->
    <link href="<?= base_url() ?>assets/css/main.css" rel="stylesheet">

    <link id="themes_colors" href="<?= base_url() ?>assets/css/color-1.css" rel="stylesheet">
    <style>
        .bg-primary-customer{
            background: url('assets/img/bg-mytechanic.png') no-repeat center center/cover!important;
            background-size: 100% 100%!important;
            margin: 20px;
        }
        .bg-primary-pengusaha{
            background: url('assets/img/bg-techanic business.png') no-repeat center center/cover!important;
            background-size: 100% 100%!important;
            margin: 20px;
        }
        .bg-primary-pengusaha .content-bottom {
            padding-top: 160px;
            position: relative;
            z-index: 1;
            height: 700px;
            /* height: 850px; */
            /* height: 790px; */
        }
    </style>
</head>

<body data-spy="scroll" data-target="#main_menu" data-offset="70">
    <div id="Whatsapp" style="position: fixed; z-index: 9999;"></div>
    <!-- Start Preloader -->
    <!-- <div class="preloader">
        <div class="loader-wrapper">
            <div class="loader"></div>
        </div>
    </div> -->
    <!-- End Preloader -->

    <!-- Start Header -->
    <header class="foxapp-header">
        <nav class="navbar navbar-expand-lg navbar-light" id="foxapp_menu">
            <div class="container">
                <?php
                    $logoBlack = 'logo-techanic-general-black.png';
                    $logoWhite = 'logo-techanic-general.png';
                    $url = $this->uri->segment(1);
                    $title_produk = $this->input->get('title',true);
                    if($title_produk == 'my-techanic'){
                        $logoBlack = 'my-techanic-logo-hitam.png';
                        $logoWhite = 'my-techanic-logo-putih.png';
                    }

                    if($title_produk == 'techanic-business'){
                        $logoBlack = 'techanic-business-logo-hitam.png';
                        $logoWhite = 'techanic-business-logo-putih.png';
                    }
                ?>
                <a class="navbar-brand" href="<?= site_url() ?>">
                    <img src="assets/img/<?= $logoWhite ?>" class="white img-fluid" alt="">
                    <img src="assets/img/<?= $logoBlack ?>" class="black img-fluid" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_menu"
                    aria-controls="main_menu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav ml-auto navbar-nav col-md-10 justify-content-end" id="main_menu">
                        <li class="nav-item">
                            <a class="nav-link anchor <?= $url == '' ? 'active': '' ?>" href="<?= site_url() ?>">Home
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle <?= $url == 'product' ? 'active': '' ?>" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Product
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item anchor" href="<?= site_url().'product?title=my-techanic' ?>">My TECHANIC</a>
                                <a class="dropdown-item anchor" href="<?= site_url().'product?title=techanic-business' ?>">TECHANIC Business</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link anchor <?= $url == 'about-us' ? 'active': '' ?>" href="<?= site_url().'about-us' ?>">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link anchor <?= $url == 'join-a-team' ? 'active': '' ?>" href="<?= site_url().'join-a-team' ?>">Join a Team</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link anchor <?= $url == 'faq' ? 'active': '' ?>" href="<?= site_url().'faq' ?>">FAQ ?</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-globe mr-2"></i>ID
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item anchor" href="<?= site_url().'?lang=id-id' ?>">Bahasa Indonesia</a>
                                <a class="dropdown-item anchor" href="<?= site_url().'?lang=en-id' ?>">English</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- End Header -->