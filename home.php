<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tech Library</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!-- css -->
    <link rel="stylesheet" href="asset/css/style.css">

    <!-- icon -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,600;0,800;1,600;1,800&family=Open+Sans:ital,wght@0,400;0,800;1,400;1,800&display=swap" rel="stylesheet">

  </head>
  <body>

    <!-- navbar -->

    <nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3">
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
                  <a href="#about" class="nav-link color-four">About</a>
              </li>
              <li class="nav-item ms-auto">
                  <a href="#team" class="nav-link color-four">Team</a>
              </li>
              <li class="nav-item ms-auto">
                <a href="index.php?page=login" class="btn btn-brand">Login</a>
              </li>
            </ul>
        </div>
      </div>
    </nav>

    <!-- homepage -->
    <div class="home w-100 vh-100" id="home">
      <div class="container ">
        <div class="row ">
            <div class="col-12 text-center">
                <h4 class="fw-bold color-four">TECH LIBRARY</h4>
                <h1 class="display-2 text-uppercase fw-bold color-four">Knowledge Source</h1>
                <a href="user/signup.php" class="btn btn-brand">Daftar Sekarang</a>
            </div>
        </div>
      </div>
    </div>

    <!-- about -->
    <div class="about bg-main" id="about">
      <hr class="garis">
      <div class="container-fluid ">
        <div class="container">
          <div class="row ">
              <div class="col-12 text-center mt-4">
                  <h2 class="fw-bold color-four">ABOUT</h2>
                  <hr class="garis-oren">
              </div>

              <div class="col-lg-6">
                <img src="asset/img/logo/blackbg.png" alt="logoblack" width="600" height="200">
              </div>
              <div class="col-lg-6">
                <p class="mt-5 color-four">Tech Library adalah Perpustakaan digital yang berisi jurnal bacaan dan bisa untuk melakukan peminjaman buku perpustakaan. Website ini di buat dengan tujuan memenuhi tugas akhir Semester kelompok kami di Universitas Buana Perjuangan Karawang</p>
               <div class="row mb-3 ">
                 <div class="col-1 fw-bold">
                  ―――
                 </div>
                 <div class="col-11 text-uppercase fw-bold">
                   kelompok 5 Final Project UBP Karawang
                 </div>
               </div>
              </div>
          </div>
        </div>
      </div>
    </div>


  <!-- team -->
    <section class="team" id="team">
      <hr class="garis">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center color-four">
            <h2 class="fw-bold">TEAM</h2>
            <hr class="garis-oren">
          </div>

          <!-- orang 1 -->
          <div class="col-lg-3 text-white">
            <div class="card-fitur position-relative">
              <img src="asset/img/org/arul.png" alt="arul">

              <div class="overlay position-absolute top-0 bottom-0 start-0 end-0 w-100 h-100">
                <div class="position-absolute top-50 start-50 translate-middle">
                  <div class="items">

                    <h3 class="fw-bold">RIFQI ARUL FAUZI</h3>
                    <div class="icons">
                      <a href="#">
                        <i class='bx bxl-facebook-circle'></i>
                      </a>
                      <a href="#">
                        <i class='bx bxl-linkedin-square'></i>
                      </a>
                      <a href="#">
                        <i class='bx bxl-instagram' ></i>
                      </a>
                      <a href="#">
                        <i class='bx bx-envelope' ></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>


          <!-- orang 2 -->
          <div class="col-lg-3 text-white">
            <div class="card-fitur position-relative">
              <img src="asset/img/org/arul.png" alt="arul">

              <div class="overlay position-absolute top-0 bottom-0 start-0 end-0 w-100 h-100">
                <div class="position-absolute top-50 start-50 translate-middle">
                  <div class="items">

                    <h3 class="fw-bold">RIFQI ARUL FAUZI</h3>
                    <div class="icons">
                      <a href="#">
                        <i class='bx bxl-facebook-circle'></i>
                      </a>
                      <a href="#">
                        <i class='bx bxl-linkedin-square'></i>
                      </a>
                      <a href="#">
                        <i class='bx bxl-instagram' ></i>
                      </a>
                      <a href="#">
                        <i class='bx bx-envelope' ></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>


          <!-- orang 3 -->
          <div class="col-lg-3 text-white">
            <div class="card-fitur position-relative">
              <img src="asset/img/org/arul.png" alt="arul">

              <div class="overlay position-absolute top-0 bottom-0 start-0 end-0 w-100 h-100">
                <div class="position-absolute top-50 start-50 translate-middle">
                  <div class="items">

                    <h3 class="fw-bold">RIFQI ARUL FAUZI</h3>
                    <div class="icons">
                      <a href="#">
                        <i class='bx bxl-facebook-circle'></i>
                      </a>
                      <a href="#">
                        <i class='bx bxl-linkedin-square'></i>
                      </a>
                      <a href="#">
                        <i class='bx bxl-instagram' ></i>
                      </a>
                      <a href="#">
                        <i class='bx bx-envelope' ></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>


          <!-- orang 4 -->
          <div class="col-lg-3 text-white">
            <div class="card-fitur position-relative">
              <img src="asset/img/org/arul.png" alt="arul">

              <div class="overlay position-absolute top-0 bottom-0 start-0 end-0 w-100 h-100">
                <div class="position-absolute top-50 start-50 translate-middle">
                  <div class="items">

                    <h3 class="fw-bold">RIFQI ARUL FAUZI</h3>
                    <div class="icons">
                      <a href="#">
                        <i class='bx bxl-facebook-circle'></i>
                      </a>
                      <a href="#">
                        <i class='bx bxl-linkedin-square'></i>
                      </a>
                      <a href="#">
                        <i class='bx bxl-instagram' ></i>
                      </a>
                      <a href="#">
                        <i class='bx bx-envelope' ></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <p class="mb-5"></p>
        </div>
      </div>
    </section>

    <!-- footer -->
    <footer class="bg-main">
      <hr class="garis">
      <div class="footer-top text-center">
          <div class="container">
              <div class="row justify-content-center">
                  <div class="col-lg-6 text-center color-four">
                      <img src="asset/img/logo/blackbg.png" alt="" width="120" height="40">
                      <h2 class="fw-bold text-uppercase">Knowledge Resource</h2>
                      <p class="text-center">Copyright@2022. All rights Reserved</p>
                  </div>
              </div>
          </div>
      </div>
  </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <!-- scroll navbar -->
    <script type="text/javascript">
      var nav = document.querySelector('nav');

      window.addEventListener('scroll', function () {
        if (window.pageYOffset > 100) {
          nav.classList.add('bg-main', 'shadow');
        } else {
          nav.classList.remove('bg-main', 'shadow');
        }
      });
    </script>


  </body>
</html>