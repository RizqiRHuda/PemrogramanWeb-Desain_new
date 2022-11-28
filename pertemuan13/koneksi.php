<?php
// membuat koneksi
$conn = mysqli_connect("localhost", "root", "", "phpdatabase");

//ambil data dari tabel mahasiswa/query data mahasiswa
$result = mysqli_query($conn, "SELECT * FROMO mahasiswa");

?>

<!DOCTYPE html>
<html lang="en">

</html>