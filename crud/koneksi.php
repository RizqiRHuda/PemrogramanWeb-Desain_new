<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "akademik";

$koneksi = mysqli_connect($host, $user, $pass, $db);
if (!$koneksi) { //cek koneksi
    die("tidak bisa terkoneksi ke database");
}
// else{
//     echo "koneksi berhasil";
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="styleView.css">
</head>

<body>
    <h2>Data Mahasiswa</h2>

    <div class="container">
        <form action="/action_page.php">
            <div class="row">
                <div class="col-25">
                    <label for="fname">Nama</label>
                </div>
                <div class="col-75">
                    <input type="text" id="fname" name="name" placeholder="" value="  ">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="lname">NIM</label>
                </div>
                <div class="col-75">
                    <input type="text" id="lname" name="nim" placeholder="" value=" >
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="fname">Alamat</label>
                </div>
                <div class="col-75">
                    <input type="text" id="fname" name="alamat" placeholder="" value=">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="fname">Prodi</label>
                </div>
                <div class="col-75">
                    <input type="text" id="fname" name="prodi" placeholder="" value=" >
                </div>
            </div>
            <div class="row">
                <input type="submit" value="Simpan" class="submit">
            </div>
        </form>
    </div>


</body>

</html>