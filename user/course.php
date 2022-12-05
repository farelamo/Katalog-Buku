<?php
session_start();
@include 'config/koneksi.php';

$sql   = "select * from `buku`";
$query = mysqli_query($conn, $sql);
$count = mysqli_num_rows($query);

$user       = "select * from `user`";
$result     = mysqli_query($conn, $user);
$userCount  = mysqli_num_rows($result);
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
      <link rel="stylesheet" href="../asset/css/style.css">

      <!-- icon -->
      <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

      <!-- font -->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,600;0,800;1,600;1,800&family=Open+Sans:ital,wght@0,400;0,800;1,400;1,800&display=swap" rel="stylesheet">

      <title>List Buku</title>
  </head>
  <body>

      <!-- navbar -->
      <nav class="navbar sticky-top navbar-expand-lg navbar-dark p-md-3 shadow bg-main">
          <div class="container">
            <a class="navbar-brand" href="#">
              <img src="../asset/img/logo/blackbg.png" alt="" width="120" height="40">
            </a>
            <button type="button" class="navbar-toggler color-four" data-bs-target="#navbarNav" data-bs-toggle="collapse" aria-controls="navbarNav" aria-expanded="false" aria-label="toogle navbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                  <li class="nav-item ms-auto">
                      <a href="admin/home.php" class="nav-link color-four">Home</a>
                  </li>
                  <li class="nav-item ms-auto">
                      <a href="new.php" class="nav-link color-four">Publikasi</a>
                  </li>
                  <li class="nav-item ms-auto">
                      <a href="#" class="nav-link color-four">List Buku</a>
                  </li>
                  <li class="nav-item ms-auto">
                    <a href="#" class="btn btn-brand">Profil</a>
                  </li>
                </ul>
            </div>
          </div>
      </nav>

          <!-- statistik -->
          <section class="statistik py-5">
            <div class="container py-5">
                <div class="row">
                    <div class="col-12 bg-acsent rounded-3 py-4">
                        <div class="row align-items-center justify-content-center">
                            <div class=" col-md-6 text-center">
                                <div class="d-flex justify-content-center">
                                    <h4 class="display-6 text-white fw-bold mb-0"><?= $count; ?></h4>
                                </div>
                                <h6 class="text-dark mb-0 fw-bold">Total Buku</h6>
                            </div>
                            <div class=" col-md-6  text-center">
                                <div class="d-flex justify-content-center">
                                    <h4 class="display-6 text-white fw-bold mb-0"><?= $userCount; ?></h4>
                                </div>
                                <h6 class="text-dark mb-0 fw-bold">Total User</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="jenisbuku">
          <div class="container">

            <!-- Title -->
            <div class="row">
              <div class="col-lg-6 col-sm-12 mb-4 d-flex justify-content-start">
                  <h1 class=" display-5 fw-bold text-white">Tipe Buku</h1>
              </div>
              <?php if($_SESSION['role'] != 'Mahasiswa') { ?>
                <div class="col-lg-6 col-sm-12 mb-4 d-flex justify-content-end">
                    <button type="button" class="btn btn-success"><i class="fas fa-plus"></i></button>
                </div>
              <?php } ?>
              <?php 
                if($_GET['gagal'] === 'invalid'){
                  echo '
                    <div class="col-lg-12 mb-4">
                      <div class="alert alert-warning" role="alert">
                        <div class="col-12 d-flex justify-content-center">Maaf, bukan hak akses anda !</div>
                      </div>
                    </div>
                  ';
                }
              ?>
              <?php if (!empty($_GET['delete'])) { 
                if ($_GET['delete'] == 'true') {
              ?>
                  <div class="col-lg-12 mb-4">
                    <div class="alert alert-success d-flex justify-content-center" role="alert">
                      Data Berhasil Dihapus
                    </div>
                  </div>
              <?php }else { ?>
                  <div class="col-lg-12 mb-4">
                    <div class="alert alert-success d-flex justify-content-center" role="alert">
                      Data Gagal Dihapus, Silahkan Coba Lagi
                    </div>
                  </div>
              <?php }} ?>
            </div>

            <div class="row mt-3 tipeall rounded-3">
              <div class="col-12 d-flex justify-content-between py-2" style="padding: 0;">
                <a href="" class="tipe text-center">ALL</a>
                <a href="" class="tipe text-center">Skripsi</a>
                <a href="" class="tipe text-center">Jurnal</a>
                <a href="" class="tipe text-center">Karya Ilmiah</a>
                <a href="" class="tipe text-center">Laporan</a>
                <span style="width: 500px;" class="align-self-center">
                  <!-- Search -->
                  <form class="bg-body rounded">
                    <div class="input-group">
                      <span><i class='bx bx-search color-main mt-2'></i></span>
                      <input class="form-control border-0 mt-1" type="search" placeholder="Search book">
                    </div>
                  </form>
                </span>
              </div>
            </div>
          </div>
        </section>

        <section class="listbuku mt-5">
          <div class="container">
            <div class="row">
              <div class="col-12">
                <table class="table table-hover bg-acsent">
                  <thead>
                    <tr class="">
                      <th>Id</th>
                      <th>Nama</th>
                      <th>Penerbit</th>
                      <th>Jenis</th>
                      <th>Tags</th>
                      <?php if($_SESSION['role'] != 'Mahasiswa') { ?>
                        <th>Action</th>
                      <?php } ?>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                      $i = 1;
                      while ($data = mysqli_fetch_row($query)) {
                        $id_buku    = $data[0];
                        $nama_buku  = $data[1];
                        $penerbit   = $data[2];
                        $jenis_buku = $data[3];
                        $tags       = $data[4];
                    ?>
                      <tr>
                        <td><?= $i++ ?></td>
                        <td id="n<?= $id_buku ?>"><?= $nama_buku ?></td>
                        <td><?= $penerbit ?></td>
                        <td><?= $jenis_buku ?></td>
                        <td><?= $tags ?></td>
                        <?php if($_SESSION['role'] != 'Mahasiswa') { ?>
                          <td>
                            <a href="#" class="btn btn-sm btn-danger" onclick="hapus(<?= $id_buku ?>)" data-bs-toggle="modal" data-bs-target="#hapus">
                              <i class="fa fa-trash"></i>
                            </a>
                          </td>
                      <?php } ?>
                      </tr>
                    <?php }?>
                  </tbody>
                </table>
              </div>
              show x data
            </div>
          </div>
        </section>

        <div class="modal fade" id="hapus" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="ht"></h5>
                <button type="button" class="close btn btn-light rounded-pill" data-bs-dismiss="modal">
                  <i class="fa fa-times"></i>
                </button>
              </div>
              <div class="modal-body">
                <form class="forms-sample" method="post" id="hapusBuku">

                  <p id="hd"></p>
                  <div class="modal-footer px-0 py-2">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger" name="submit" value="delete">
                      <span>Delete</span>
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>                  

      <script src="asset/js/script.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
      <script>
        function hapus(id){
          document.getElementById('hapusBuku').action = `index.php?action=delete-list-buku&id=${id}`
          document.getElementById('ht').innerHTML   = `Hapus ${document.getElementById(`n${id}`).innerHTML}`
          document.getElementById('hd').innerHTML   = `Apakah anda yakin ingin menghapus ${document.getElementById(`n${id}`).innerHTML} ?`;
        }
      </script>
  </body>
  </html>