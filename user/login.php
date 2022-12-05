<nav class="navbar shadow navbar-expand-lg navbar-dark p-md-3">
        <div class="container">
          <a class="navbar-brand" href="#">
            <img src="asset/img/logo/blackbg.png" alt="" width="120" height="40">
          </a>
        <a href="index.php" class="nav-link color-four">Home</a>
    </div>
</nav>

<div class="user d-flex">
  <!-- login -->
  <div class="login container align-self-center">
      <div class="row align-items-center justify-content-center">

        <!-- login -->
        <div class="col-9 col-md-4 bg-four shadow">
          <div class="form-block">
            <div class="text-center mb-5">
              <h3 class="mt-4 fw-bold">Login</h3>
            </div>
            <form action="index.php?action=konfirmasi-login" method="post">
              <?php
                if (!empty($_GET['gagal'])) {
                    if($_GET['gagal'] === 'invalid'){
                      echo '
                        <div class="alert alert-warning" role="alert">
                          <div class="row">
                            <div class="col-12 d-flex justify-content-center">Maaf, bukan hak akses anda !</div>
                            <div class="col-12 d-flex justify-content-center">Silahkan login lagi !!</div>
                          </div>
                        </div>
                      ';
                    }
                    if ($_GET['gagal'] === 'nimpassSalah') {
                      echo '
                        <div class="alert alert-warning d-flex justify-content-center" role="alert">
                          nim / password salah
                        </div>
                      ';
                    }
                    if ($_GET['gagal'] === 'nimKosong') {
                      echo '
                        <div class="alert alert-warning d-flex justify-content-center" role="alert">
                          Nim harus diisi
                        </div>
                      ';
                    }
                    if ($_GET['gagal'] === 'passKosong') {
                      echo '
                        <div class="alert alert-warning d-flex justify-content-center" role="alert">
                          Password harus diisi
                        </div>
                      ';
                    }
                  }
              ?>
              <div class="form-floating mb-3">
                  <input type="text" class="form-control" id="floatingInput" placeholder="NIM" name="nim">
                  <label for="floatingInput">NIM</label>
              </div>
              <div class="form-floating mb-3">
                  <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
                  <label for="floatingPassword">Password</label>
              </div>
              <input type="submit" name="login" value="Login" class="btn btn-primary">
              <div class="text-center py-3">
                  <span>No account? <a href="user/signup.php" class="create-account">Create one</a></span>
                  </div>
            </form>
            </div>
          </div>
        </div>
    </div>
</div>
