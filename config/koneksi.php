<?php

$conn = mysqli_connect('localhost', 'root', 'Kalasan3@','finalproject', 3306);

if (!$conn){
 die("Error koneksi: " . mysqli_connect_errno());
}