<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title><?= $judul ?></title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.3/css/unicons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.2.0/ekko-lightbox.css" />
    <link rel='stylesheet' type='text/css' media='screen' href='<?php echo base_url('assets/') ?>css/styles.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='<?php echo base_url('assets/') ?>css/media.css'>
    <script src="https://kit.fontawesome.com/03774beff9.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="bg-list">
        <nav class=" container d-none d-lg-block">
            <div class="d-flex justify-content-between">
                <!-- left nav -->
                <div class="logo-section d-flex mt-5">
                    <p class="text-light ml-3 p-2">
                        <a href="<?= site_url('User/') ?>" class="text-light">E-WARUNG</a>
                    </p>
                </div>
                <!-- right nav-->
                <ul class="nav mt-5">
                    <li class="">
                        <a class="nav-link text-light" href="<?= site_url('User/') ?>">Home</a>
                    </li>
                    <li class="">
                        <a class="nav-link text-light ml-2" href="<?= site_url('User/produk') ?>">List Produk</a>
                    </li>
                    <li class="">
                        <a class="nav-link text-light ml-2" href="<?php echo base_url() . 'auth/logout' ?>">Logout</a>
                    </li>
                    <li class="border-round  text-center ml-3 pt-1">
                        <a class="nav-link " href="<?= base_url('User/pembelian') ?>">
                            <i class="fas fa-heart text-white "></i>
                            <span class="badge badge-danger badge-counter">!
                            </span>
                        </a>
                    </li>
                    <li class=" border-round bg-danger ml-4 text-center pt-1">
                        <a class="nav-link" href="<?= base_url('User/detail'); ?>">
                            <i class="fas fa-shopping-cart  text-light"></i>
                            <span class="badge badge-danger badge-counter">
                                <?= $jlh ?>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- small screen  -->
        <nav class="container d-none d-lg-none d-sm-block d-md-block d-xs-none justify-content-around">
            <div class="d-flex justify-content-between small-device">
                <!-- left nav -->
                <div class="logo-section d-flex mt-5">
                    <a href="#">
                        <i class="fas fa-fan text-light fa-2x p-2"></i>
                    </a>
                    <p class="text-light ml-3 pt-3">
                        <a href="index.html" class="text-light ">Fleur flowers</a>
                    </p>
                </div>
                <!-- right nav-->
                <ul class="nav mt-5">
                    <li>
                        <button class="navbar-toggler border-round" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class=" ">
                                <i class=" fas fa-bars bar text-light"></i>
                            </span>
                        </button>
                        <div class=" dropdown-menu nava" id="navNavbar" aria-labelledby="dropdownMenuButton">
                            <ul class="navbar-nav mr-auto ">
                                <li><a href="index.html" class=" text-dark dropdown-item">Main Page</a></li>
                                <li><a href="productlist.html" class=" text-dark dropdown-item">Product List</a></li>
                                <li><a href="productpage.html" class=" text-dark dropdown-item">Product Page</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="border-round  text-center ml-3 pt-1">
                        <a class="nav-link " href="#">
                            <i class="fas fa-heart text-white "></i>
                        </a>
                    </li>
                    <li class=" border-round bg-danger ml-4 text-center pt-1">
                        <a class="nav-link" href="#">
                            <i class="fas fa-shopping-cart  text-light"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- xs -->
        <nav class="container d-lg-none d-md-none d-sm-none d-xs-block ">

            <!-- left nav -->
            <div class="logo-section d-flex mx-auto text-center">
                <div class="text-center mx-auto">
                    <a href="#">
                        <i class="fas fa-fan text-light fa-2x p-2 text-center"></i>
                    </a>
                    <a href="index.html" class="text-light ">Fleur flowers</a>
                </div>
            </div>
            <!-- right nav-->

            <ul class="nav mx-auto text-center justify-content-around">
                <li class="nav-item">
                    <button class="navbar-toggler border-round" type="button" id="dropMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class=" ">
                            <i class=" fas fa-bars bar text-light"></i>
                        </span>
                    </button>
                    <div class=" dropdown-menu nava" aria-labelledby="dropMenuButton">
                        <ul class="navbar-nav mr-auto ">
                            <li><a href="index.html" class=" text-dark dropdown-item">Main Page</a></li>
                            <li><a href="productlist.html" class=" text-dark dropdown-item">Product List</a></li>
                            <li><a href="productpage.html" class=" text-dark dropdown-item">Product Page</a></li>
                        </ul>
                    </div>
                </li>
                <li class="border-round  text-center ml-3 pt-1 nav-item">
                    <a class="nav-link " href="#">
                        <i class="fas fa-heart text-white "></i>
                    </a>
                </li>
                <li class=" border-round bg-danger ml-4 text-center pt-1 nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-shopping-cart  text-light"></i>
                    </a>
                </li>
            </ul>
        </nav>
    </div>