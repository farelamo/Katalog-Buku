<?php
session_start(); 
@include '../config/koneksi.php';
if(isset($_GET['action'])) {
    $action = $_GET['action'];
    if ($action === 'konfirmasi-login') {
        include 'user/auth/loginProcess.php';
    }else if($action === 'delete-list-buku'){
        @include 'user/admin/deleteBuku.php';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'partials/head.php';?>
</head>
<body>
    <?php 
        if (isset($_GET['page'])) {
            $page = $_GET['page'];

            if($page == 'login'){
                @include './user/login.php';
            }else if($page == 'admin'){
                @include './user/admin/home.php';
            }else if($page == 'penerbit'){
                @include './user/penerbit/home.php';
            }else if($page == 'mahasiswa'){
                @include './user/mahasiswa/home.php';
            }else if($page == 'list-buku'){
                @include './user/course.php';
            }
        }else {
            @include './home.php';
        }
    ?>
</body>
</html>