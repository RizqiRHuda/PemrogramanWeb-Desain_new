<!DOCTYPE html>
<html>

<head>
    <title>Add Book</title>
    <link rel="stylesheet" href="styleView.css" type="text/css">
</head>

<body>
    <a href="index.php">
        <h2>Menu Utama</h2>
    </a>
    <br><br>

    <div class="container">
        <form action="add.php" method="POST" name="form1">
            <!-- Id  -->
            <div class="row">
                <div class="col-25">
                    <label for="fname">Id</label>
                </div>
                <div class="col-75">
                    <input type="text" id="fname" name="id" placeholder=" ">
                </div>
            </div>
            <!-- Judul -->
            <div class="row">
                <div class="col-25">
                    <label for="fname">Judul</label>
                </div>
                <div class="col-75">
                    <input type="text" id="fname" name="judul" placeholder=" ">
                </div>
            </div>
            <!-- Pengarang -->
            <div class="row">
                <div class="col-25">
                    <label for="fname">Pengarang</label>
                </div>
                <div class="col-75">
                    <input type="text" id="fname" name="pengarang" placeholder=" ">
                </div>
            </div>
            <!-- Tahun terbit -->
            <div class="row">
                <div class="col-25">
                    <label for="fname">Tahun Terbit</label>
                </div>
                <div class="col-75">
                    <input type="text" id="fname" name="tahun_terbit" placeholder=" ">
                </div>
            </div>
            <!-- Penerbit -->
            <div class="row">
                <div class="col-25">
                    <label for="fname">Penerbit</label>
                </div>
                <div class="col-75">
                    <input type="text" id="fname" name="penerbit" placeholder=" ">
                </div>
            </div>
            <br><br>
            <div class="row">
                <input type="submit" value="Submit" name="Submit">
            </div>
        </form>
    </div>

    <?php

    if (isset($_POST['Submit'])) {
        $id = $_POST['id'];
        $judul = $_POST['judul'];
        $pengarang = $_POST['pengarang'];
        $tahun_terbit = $_POST['tahun_terbit'];
        $penerbit = $_POST['penerbit'];

        include_once("config.php");

        $result = mysqli_query($mysqli,  "INSERT INTO buku(id,judul,pengarang,tahun_terbit,penerbit) VALUES('$id','$judul','$pengarang','$tahun_terbit','$penerbit')");
        echo "User added successfully. <a href='index.php'>View Users</a>";
    }
    ?>

</body>

</html>

<!-- <table width="25%" border="0">
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