<!DOCTYPE html>
<html>
    <head>
    <title>Add Book</title>
    </head>
    <body>
        <a href="index.php">Main Utama</a>
        <br><br>

        <form action="add.php" method="POST" name="form1">
        <table width="25%" border="0" >
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

        <?php

        if(isset($_POST['submit'])){
            $id= $_POST['id'];
            $judul= $_POST['judul'];
            $pengarang= $_POST['pengarang'];
            $tahun_terbit= $_POST['tahunterbit'];
            $penerbit= $_POST['penerbit'];

            include_once("config.php");

            $result = mysqli_query($mysqli,  "INSERT INTO buku(id,judul,pengarang,tahun_terbit,penerbit) VALUES('$id','$judul','$pengarang','$tahun_terbit','$penerbit')");
            echo "User added successfully. <a href='index.php'>View Users</a>";
            
        }
        ?>
      
    </body>

</html>