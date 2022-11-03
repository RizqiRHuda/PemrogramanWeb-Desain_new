<?php
include_once("config.php");

$result = mysqli_query($mysqli, "SELECT * FROM buku ORDER BY id DESC");
?>

<html>

<head>
    <title> konfigurasi untuk koneksi database</title>
    <link rel="stylesheet" href="styleIndex.css">
</head>

<body>
    <h3>Menambahkan Buku</h3>
    <a href="add.php"> <img src="img/addbuku.png" alt="" class="icon"> </a><br><br>

    <table width='80%' border=1>
        <tr>
            <th>Id Buku</th>
            <th>Judul</th>
            <th>Pengarang</th>
            <th>Tahun Terbit</th>
            <th>Penerbit</th>
        </tr>
        <tr>
            
        </tr>
    </table>


    <?php
    while ($buku_data = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $buku_data['id'] . "</td>";
        echo "<td>" . $buku_data['judul'] . "</td>";
        echo "<td>" . $buku_data['pengarang'] . "</td>";
        echo "<td>" . $buku_data['tahun_terbit'] . "</td>";
        echo "<td>" . $buku_data['penerbit'] . "</td>";
        echo "<td><a href='edit.php?id=$buku_data[id]'>Edit</a> | <a href='delete.php?id=$buku_data[id]'>Delete</a></td></tr>";
    }

    ?>
    </table>
</body>

</html>