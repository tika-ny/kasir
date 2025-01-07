<?php
//Mengatur data koneksi
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "belajar_php_kelas_kronjo";

//Membuat koneksi
$coon = mysqli_connect($host, $user, $pass, $dbname);

//Cek apakah koneksi berhasil
if(!$coon) 
    die("Koneksi Gagal: " . mysqli_connect_error());
echo "Koneksi Berhasil!";
?>