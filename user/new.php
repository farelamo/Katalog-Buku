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

    <title>New Book</title>
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
                    <a href="#" class="nav-link color-four">Publikasi</a>
                </li>
                <li class="nav-item ms-auto">
                    <a href="course.php" class="nav-link color-four">List Buku</a>
                </li>
                <li class="nav-item ms-auto">
                  <a href="#" class="btn btn-brand">Profil</a>
                </li>
              </ul>
          </div>
        </div>
    </nav>

    <section class="new">
        <div class="container">
                      <!-- Title -->
          <div class="row mt-5">
            <div class="col-12">
                <h1 class=" display-5 fw-bold text-white text-center">Upload Buku Baru</h1>
            </div>
          </div>

          <div class="row mt-2">
              <div class="col-12 bg-acsent rounded-3 py-3">
                <form action="" method="post">
                    <div class="row">
                        <div class="col-md-6">
                            <h5>Nama Buku</h5>
                            <div class="input-group flex-nowrap">
                                <input type="text" class="form-control" placeholder="Nama Buku" aria-label="Username" aria-describedby="addon-wrapping">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h5>Jenis Buku</h5>
                            <div class="input-group mb-3">
                                <select class="form-select" id="inputGroupSelect01">
                                    <option selected>Pilih</option>
                                    <option value="1">Skripsi</option>
                                    <option value="2">Jurnal</option>
                                    <option value="3">Karya Ilmiah</option>
                                    <option value="4">Laporan</option>
                                </select>
                            </div>
                        </div>
                    </div>
                
                    <div class="mb-3">
                        <h5>Deskripsi Buku</h5>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                
                    <div class="row">
                        <div class="col-md-6">
                            <h5>Tags Buku</h5>
                            <div class="input-group flex-nowrap">
                                <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <h5>Upload Buku</h5>
                            <div class="input-group mb-3">
                                <input type="file" class="form-control" id="inputGroupFile01">
                            </div>
                        </div>
                    </div>

                    <div class="row py-3 submitt">
                        <div class="col-6">
                            <input type="button" value="reset" class="btn btn-primary">
                        </div>
                        <div class="col-6 d-flex justify-content-end">
                            <input type="button" value="submit" class="btn btn-primary">
                        </div>
                    </div>

                </form>
                </div>
          </div>
        </div>
    </section>
  
      

    <script src="../asset/js/script.js"></script>
</body>
</html>