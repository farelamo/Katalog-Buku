<?php

@include '../../config/koneksi.php';

if(isset($_POST['submit'])){

  $nama = mysqli_real_escape_string($conn, $_POST['nama']);
  $NIM = mysqli_real_escape_string($conn, $_POST['NIM']);
  $pass = md5($_POST['password']);
  $cpass = md5($_POST['cpassword']);
  $tipeUser = $_POST['tipeuser'];

  //operasi ketika input NIM dan password sama maka ada pesan user sudah ada
  $select = " SELECT * FROM user WHERE NIM = '$NIM' && password = '$pass'";
  $result = mysqli_query($conn, $select);

  if(mysqli_num_rows($result) > 0){
    $error[] = ' User Sudah Ada!';
  }else{

    //ketika password tidak sama
    if($pass != $cpass){
      $error[]= 'password tidak sama!';
    }else{

      //input data ke db
      $insert = "INSERT INTO user(nama, NIM, password, userTipe) VALUES('$nama', '$NIM', '$password', '$userTipe')";
      mysqli_query($conn, $insert);

    }
  }

}


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

    <title>Signup Page</title>
</head>
<body>
     <!-- navbar -->

     <nav class="navbar shadow navbar-expand-lg navbar-dark p-md-3">
        <div class="container">
          <a class="navbar-brand" href="#">
            <img src="../asset/img/logo/blackbg.png" alt="" width="120" height="40">
          </a>
            <a href="../index.php" class="nav-link color-four">Home</a>
        </div>
      </nav>
  

      <div class="user d-flex">
        <!-- signup -->
                
          <div class="signup container align-self-center">
            <div class="row align-items-center justify-content-center">
                <div class=" col-9 col-md-4 bg-four shadow">
                  <div class="form-block">
                    <div class="text-center mb-5">
                      <h3 class="mt-4 fw-bold">Sign Up</h3>
                    <!-- <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p> -->
                    </div>
                    <form action="" method="post">

                      <?php
                      if(isset($error)){
                        foreach($error as $error){
                          echo '<span class ="error">".$error."</span>';
                        };
                      };
                      ?>

                      <div class="form-floating mb-3">
                          <input type="text" class="form-control" id="floatingInput" placeholder="Nama" name="Nama">
                          <label for="floatingInput">Nama</label>
                      </div>
                      <div class="form-floating mb-3">
                          <input type="text" class="form-control" id="floatingInput" placeholder="NIM" name="NIM">
                          <label for="floatingInput">NIM</label>
                      </div>
                      <div class="form-floating mb-3">
                          <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
                          <label for="floatingPassword">Password</label>
                      </div>
                      <div class="form-floating mb-3">
                          <input type="password" class="form-control" id="floatingPassword" placeholder=" cPassword" name="cpassword">
                          <label for="floatingCPassword">Confirm Your Password</label>
                      </div>

                      <select class="form-select mb-3" aria-label="Default select example" name="tipeUser">
                        <option selected>Tipe User</option>
                        <option value="Penerbit">Penerbit</option>
                        <option value="Mahasiswa">Mahasiswa</option>
                      </select>
                      
                      <input type="submit" value="Sign Up" class="btn btn-primary">
                      <div class="text-center py-3">
                          <span>Have account? <a href="../index.php?page=login" class="login-account">Login</a></span>
                      </div>
                    </form>
                  </div>
                </div>
            </div>
          </div>
        </div>
      <a href="admin/home.php">homepage</a>
</body>
</html>