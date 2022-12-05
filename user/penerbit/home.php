<?php
session_start();
if ($_SESSION['role'] != 'Penerbit') {
    header('Location:index.php?page=login&gagal=invalid');
} else {
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

        <!-- css -->
        <link rel="stylesheet" href="../../asset/css/style.css">

        <!-- icon -->
        <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

        <!-- font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,600;0,800;1,600;1,800&family=Open+Sans:ital,wght@0,400;0,800;1,400;1,800&display=swap" rel="stylesheet">

        <title>Penerbit Page</title>
    </head>
    <body>

        <!-- navbar -->
        <nav class="navbar sticky-top navbar-expand-lg navbar-dark p-md-3 shadow bg-main">
            <div class="container">
            <a class="navbar-brand" href="#">
                <img src="asset/img/logo/blackbg.png" alt="" width="120" height="40">
            </a>
            <button type="button" class="navbar-toggler color-four" data-bs-target="#navbarNav" data-bs-toggle="collapse" aria-controls="navbarNav" aria-expanded="false" aria-label="toogle navbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item ms-auto">
                        <a href="#" class="nav-link color-four">Home</a>
                    </li>
                    <li class="nav-item ms-auto">
                        <a href="../../new.php" class="nav-link color-four">Publikasi</a>
                    </li>
                    <li class="nav-item ms-auto">
                        <a href="index.php?page=list-buku" class="nav-link color-four">List Buku</a>
                    </li>
                    <li class="nav-item ms-auto">
                    <a href="#" class="btn btn-brand">Profil</a>
                    </li>
                </ul>
            </div>
            </div>
        </nav>

        <!-- homepage -->
        <section class="homepage" id="homepage">
            <div class="container position-relative">
                <div class="row">
                    <div class="col-12">
                        <div class="row align-items-center">

                            <!-- Image -->
                            <div class="col-6 col-md-3 text-center order-1">
                                <img src="../../asset/img/ilustrasi/homel.svg" alt="">
                            </div>

                            <!-- Content -->
                            <div class="col-md-6 px-md-5 text-center position-relative order-md-2 mb-5 mb-md-0">

                                <!-- Title -->
                                <h1 class="fs-2 mb-2 fw-bold text-white">HALAMAN PENERBIT</h1>
                                <p class="mb-3 fw-bold text-white">Book as a course of Knowledge</p>

                                <!-- Search -->
                                <form class="bg-body rounded p-2">
                                    <div class="input-group">
                                        <input class="form-control border-0 me-1" type="search" placeholder="Search book">
                                        <button type="button" class="btn bg-main text-white mb-0 rounded">Search</button>
                                    </div>
                                </form>
                            </div>

                            <!-- Image -->
                            <div class="col-6 col-md-3 text-center order-3">
                                <img src="../../asset/img/ilustrasi/homer.svg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- statistik -->
        <section class="statistik py-5">
            <div class="container py-5 bg-acsent position-relative rounded-3">
                <div class="d-none d-md-block position-absolute bottom-0 start-0 ms-5">
                    <img src="../../asset/img/ilustrasi/orang.png" alt="Image">
                </div>
                <div class="row">
                    <div class="col-12">

                        <div class="row align-items-end justify-content-end position-relative">
                            <div class=" col-md-3  text-center">
                                <div class="d-flex justify-content-center">
                                    <h4 class="purecounter display-6 text-white fw-bold mb-0" data-purecounter-start="0" data-purecounter-end="12" data-purecounter-delay="200" data-purecounter-duration="0">69</h4>
                                </div>
                                <h6 class="text-dark mb-0 fw-bold">Total User</h6>
                            </div>
                            <div class=" col-md-3  text-center">
                                <div class="d-flex justify-content-center">
                                    <h4 class="purecounter display-6 text-white fw-bold mb-0" data-purecounter-start="0" data-purecounter-end="12" data-purecounter-delay="200" data-purecounter-duration="0">69</h4>
                                </div>
                                <h6 class="text-dark mb-0 fw-bold">Total Buku</h6>
                            </div>
                            <div class=" col-md-3  text-center">
                                <div class="d-flex justify-content-center">
                                    <h4 class="purecounter display-6 text-white fw-bold mb-0" data-purecounter-start="0" data-purecounter-end="12" data-purecounter-delay="200" data-purecounter-duration="0">69</h4>
                                </div>
                                <h6 class="text-dark mb-0 fw-bold">Total Penerbit</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="tipebuku py-5 position-relative overflow-hidden">
            <div class="container position-relative py-5">
                <!-- Title -->
                <div class="row">
                    <div class="col-lg-8 mb-4">
                        <h1 class=" display-5 fw-bold text-white">Tipe Buku</h1>
                    </div>
                </div>
                <div class="row">

                    <!-- Item -->
                    <div class="py-2 col-sm-6 col-xl-3">
                        <div class=" item bg-four shadow rounded-3 text-center p-4 position-relative">
                            <!-- Image -->
                            <img src="../../asset/img/book/2.png" class="h-100px mb-3" alt="">
                            <!-- Title -->
                            <h5 class="mb-2 fw-bold">Skripsi</h5>
                            <p class="text-truncate-2  fw-bold">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellat blanditiis, expedita cumque voluptate quod fugit.</p>
                            <a href="#" class="btn btn-primary stretched-link">Go somewhere</a>
                        </div>
                    </div>

                    <!-- Item -->
                    <div class="py-2 col-sm-6 col-xl-3">
                        <div class="item bg-four shadow rounded-3 text-center p-4 position-relative">
                            <!-- Image -->
                            <img src="../../asset/img/book/2.png" class="h-100px mb-3" alt="">
                            <!-- Title -->
                            <h5 class="mb-2 fw-bold">Jurnal</h5>
                            <p class="text-truncate-2 mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore quis mollitia veniam cupiditate consequuntur expedita!</p>
                            <a href="#" class="btn btn-primary stretched-link">Go somewhere</a>
                        </div>
                    </div>

                    <!-- Item -->
                    <div class="py-2 col-sm-6 col-xl-3">
                        <div class="item bg-four shadow rounded-3 text-center p-4 position-relative">
                            <!-- Image -->
                            <img src="../../asset/img/book/2.png" class="h-100px mb-3" alt="">
                            <!-- Title -->
                            <h5 class="mb-2 fw-bold">Karya Ilmiah</h5>
                            <p class="text-truncate-2 mb-2">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellat blanditiis, expedita cumque voluptate quod fugit.</p>
                            <a href="#" class="btn btn-primary stretched-link">Go somewhere</a>
                        </div>
                    </div>

                    <!-- Item -->
                    <div class="py-2 col-sm-6 col-xl-3">
                        <div class="item bg-four shadow rounded-3 text-center p-4 position-relative">
                            <!-- Image -->
                            <img src="../../asset/img/book/2.png" class="h-100px mb-3" alt="">
                            <!-- Title -->
                            <h5 class="mb-2 fw-bold">Laporan</h5>
                            <p class="text-truncate-2 mb-2">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellat blanditiis, expedita cumque voluptate quod fugit.</p>
                            <a href="#" class="btn btn-primary stretched-link">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 100"><path fill="#FEB139" fill-opacity="1" d="M0,64L120,53.3C240,43,480,21,720,26.7C960,32,1200,64,1320,80L1440,96L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path></svg>
        <footer class="pt-0 bg-acsent position-relative overflow-hidden">

                <div class="row">
                    <div class="col-lg-6 mx-auto text-center mb-5">
                        <!-- Logo -->
                        <a> <img class="h-40px" src="../../asset/img/logo/whitebg.png" alt="logo" width="200"> </a>
                        <p class="mt-3 text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt molestiae tempora est esse. Odio natus, rerum omnis ab voluptas magnam.</p>

                        <!-- Bottom footer link -->
                        <div class="text-white text-primary-hover mt-3"> Copyrights <a href="#" class="text-reset">©2021 Rifqi Arul Fauzi</a>. All rights reserved. </div>
                    </div>
                </div>
            </div>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    </body>
    </html>
<?php } ?>