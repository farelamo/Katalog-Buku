<?php

$conn = mysqli_connect('localhost', 'root', '','finalproject', 3306);

if (!$conn){
 die("Error koneksi: " . mysqli_connect_errno());
}