<?php

include_once("config.php");

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $judul = $_POST['judul'];
    $pengarang = $_POST['pengarang'];
    $tahun_terbit = $_POST['tahun_terbit'];
    $penerbit = $_POST['penerbit'];

    include_once("config.php");

    $result = mysqli_query($mysqli,  "INSERT INTO buku(id,judul,pengarang,tahun_terbit,penerbit) VALUES('$id','$judul','$pengarang','$tahun_terbit','$penerbit')");

    header("Location: index.php");
}
?>
<?php
$id = $_GET['id'];

$result = mysqli_query($mysqli, "SELECT * FROM buku WHERE id=$id");
while ($buku_data = mysqli_fetch_array($result)) {
    $id = $_POST['id'];
    $judul = $_POST['judul'];
    $pengarang = $_POST['pengarang'];
    $tahun_terbit = $_POST['tahun_terbit'];
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

    <a href="index.php">Home</a>
    <br/><br/>
    
    <form name="update_user" method="post" action="edit.php">
        <table border="0">
            <tr> 
                <td>Id Buku</td>
                <td><input type="text" name="id" value=<?php echo $id;?>></td>
            </tr>
            <tr> 
                <td>judul</td>
                <td><input type="text" name="judul" value=<?php echo $judul;?>></td>
            </tr>
            <tr> 
                <td>pengarang</td>
                <td><input type="text" name="pengarang" value=<?php echo $pengarang;?>></td>
            </tr>
            <tr> 
                <td>Tahun Terbit</td>
                <td><input type="text" name="tahun_terbit" value=<?php echo $tahun_terbit;?>></td>
            </tr>
            <tr> 
                <td>Penerbit</td>
                <td><input type="text" name="penerbit" value=<?php echo $penerbit;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>

</body>

</html>