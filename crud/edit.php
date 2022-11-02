<?php

include_once("config.php");

if (isset($_POST['update'])) {
    $id = $_POST['id'];

    $judul = $_POST['judul'];
    $pengarang = $_POST['pengarang'];
    $tahun_terbit = $_POST['tahunterbit'];
    $penerbit = $_POST['penerbit'];

    include_once("config.php");

    $result = mysqli_query($mysqli,  "INSERT INTO buku(id,judul,pengarang,tahun_terbit,penerbit) VALUES('$id','$judul','$pengarang','$tahun_terbit','$penerbit')");

    header("Location: index.php");
}
?>
<?php
$id = $_GET['id'];

$result = mysqli_query($mysqli, "SELECT * FROM buku WHERE id=$id");
while ($user_data = mysqli_fetch_array($result)) {
    $id = $_POST['id'];

    $judul = $_POST['judul'];
    $pengarang = $_POST['pengarang'];
    $tahun_terbit = $_POST['tahunterbit'];
    $penerbit = $_POST['penerbit'];
}
?>
<html>

<head>
    <title>Update</title>
</head>

<body>
    <a href="index.php">Main Utama</a>
    <br><br>

    <form action="add.php" method="POST" name="form1">
        <table  border="0">
            <tr>
                <td>Id Buku</td>
                <td><input type="text" name="id"></td>
            </tr>
            <tr>
                <td>Judul</td>
                <td><input type="text" name="judul"></td>
            </tr>
            <tr>
                <td>Pengarang</td>
                <td><input type="text" name="pengarang"></td>
            </tr>
            <tr>
                <td>Tahun Terbit</td>
                <td><input type="text" name="tahun_terbit"></td>
            </tr>
            <tr>
                <td>Penerbit</td>
                <td><input type="text" name="penerbit"></td>
            </tr>
        </table>
    </form>

</body>

</html>