<?php
include_once("config.php");

$result = mysqli_query($mysqli, "SELECT * FROM buku ORDER BY id DESC");
?>

<html>
    <head>
        <title> konfigurasi untuk koneksi database</title>
    </head>

    <body>
        <a href="add.php">Menambahkan Buku Baru</a><br><br>

        <table width='80%' border=1>
            <tr>
                <th>Id Buku</th>
                <th>Judul</th>
                <th>Pengarang</th>
                <th>Tahun Terbit</th>
                <th>Penerbit</th>
            </tr>
            <?php
            while($user_data = mysqli_fetch_array($result)){
                echo "<tr>";
                echo "<td>".$user_data['id']."</td>";
                echo "<td>".$user_data['judul']."</td>";
                echo "<td>".$user_data['pengarang']."</td>";
                echo "<td>".$user_data['tahun_terbit']."</td>";
                echo "<td>".$user_data['penerbit']."</td>";            
                echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>"; 
            }

            ?>
        </table>
    </body>
</html>
