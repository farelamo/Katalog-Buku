<?php
session_start();
@include 'config/koneksi.php';

if (isset($_POST['login'])) {
    $nim        = mysqli_real_escape_string($conn, $_POST['nim']);
    $password   = mysqli_real_escape_string($conn, $_POST['password']);

    $sql    = "select * from `user` where `nim`='$nim' and `password`='$password'";

    $query  = mysqli_query($conn, $sql);
    $jumlah = mysqli_num_rows($query);

    if (empty($nim)) {
        header("Location:index.php?page=login&gagal=nimKosong");
    } else if (empty($password)) {
        header("Location:index.php?page=login&gagal=passKosong");
    } else if ($jumlah == 0) {
        header("Location:index.php?page=login&gagal=nimpassSalah");
    } else {
        //get data
        while ($data = mysqli_fetch_row($query)) {
            $id                 = $data[0];
            $userTipe           = $data[4];
            $_SESSION['id']     = $id;
            $_SESSION['role']   = $userTipe;

            if($userTipe === 'Admin'){
                header("Location:index.php?page=admin");
            }else if ($userTipe === 'Penerbit'){
                header("Location:index.php?page=penerbit");
            }else {
                header("Location:index.php?page=mahasiswa");
            }
        }
    }
}
