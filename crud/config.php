<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "koleksi_buku";

$mysqli = mysqli_connect($host, $user, $pass, $db);
if (!$mysqli) { //cek koneksi
    die("tidak bisa terkoneksi ke database");
}
// else{
//     echo "koneksi berhasil";
// }
?>