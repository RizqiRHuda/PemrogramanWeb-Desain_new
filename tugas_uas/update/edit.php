<?php
    require 'functions.php';
    $id = $_GET["id"];
    $mhs = query("SELECT * FROM mahasiswa WHERE id=$id")[0];

    if (isset($_POST['submit'])) {
        if(edit($_POST)>0) {
            echo "
            <script>
                alert('data berhasil diperbaharui');
                document.location.href='index.php';
            <?script>";

        } else {
            echo "
            <script>
                alert('data gagal diperbaharui');
                document.location.href='index.php';
            <?script>
            ";
            echo "<br>";
            echo mysqli_error($conn);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>
</head>
<body>
<h1>Update Data Mahasiswa</h1>
    <form action="" method="post">
        <li>
            <input type="hidden" name="id" value="<?= $mhs["id"]?>">
        </li>
        
        <ul>
            <li>
                <label for="nama">Nama :</label>
                <input type="text" name="nama" id="nama" value="<?= $mhs["nama"]?>">
            </li>
            <li>
                <label for="nim">NIM :</label>
                <input type="text" name="nim" id="nim" required value="<?= $mhs["nim"]?>">
            </li>
            <li>
                <label for="email">Email :</label>
                <input type="text" name="email" id="email" required value="<?= $mhs["email"]?>">
            </li>
            <li>
                <label for="jurusan">Jurusan :</label>
                <input type="text" name="jurusan" id="jurusan" required value="<?= $mhs["jurusan"]?>">
            </li>
            <li>
                <label for="gambar">Gambar :</label>
                <input type="text" name="gambar" id="gambar" required value="<?= $mhs["gambar"]?>">
            </li>
            <li>
                <button type="submit" name="submit">Update</button>
            </li>
        </ul>
    </form>
</body>
</html>