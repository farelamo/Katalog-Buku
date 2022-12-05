<?php
    session_start();
    if ($_SESSION['role'] != 'Mahasiswa') {
        header('Location:index.php?page=list-buku&gagal=invalid');
    }else {
        @include 'config/koneksi.php';
        if(isset($_GET['id'])){
            $sql   = "delete from `buku` where id_buku=" . $_GET['id'];
            $query = mysqli_query($conn, $sql);

            header("Location:index.php?page=list-buku&delete=true");
        }else {
            header("Location:index.php?page=list-buku&delete=false");
        }
    }
?>