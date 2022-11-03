<?php
// panggil koneksinya
require_once 'koneksi.php';
include_once('index.php');
?>
<!DOCTYPE html>
<html>

<head>
    <title>CRUD</title>
    <link rel="stylesheet" href="styleIndex.css">
</head>

<body>
    <h2>Koleksi Buku</h2>

    <!-- 
  Create atau menambahkan data baru 
  Data akan dikirimkan ke add.php untuk diproses
  -->
    <!-- <form method="post" action="add.php">
        <input type="text" name="judul" placeholder="Judul Buku">
        <input type="text" name="pengarang" placeholder="Nama Pengarang">
        <input type="text" name="tahun_terbit" placeholder="Tahun Terbit">
        <input type="text" name="penerbit" placeholder="Penerbit">
        <input type="submit" name="submit" value="Tambah Data">
    </form><br /> -->

    <div class="container">
        <form action="add.php" method="post">
            <div class="row">
                <div class="col-25">
                    <label for="fname">Judul Buku</label>
                </div>
                <div class="col-75">
                    <input type="text" id="fname" name="judul" placeholder=" ">
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label for="lname">Pengarang</label>
                </div>
                <div class="col-75">
                    <input type="text" id="lname" name="pengarang" placeholder=" ">
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label for="lname">Tahun Terbit</label>
                </div>
                <div class="col-75">
                    <input type="text" id="lname" name="tahun_terbit" placeholder=" ">
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label for="lname">Penerbit</label>
                </div>
                <div class="col-75">
                    <input type="text" id="lname" name="penerbit" placeholder=" ">
                </div>
            </div>
            <div class="row">
                <input type="submit" value="Submit" name="submit">
            </div>
        </form>
    </div>

    <!-- Read atau menampilkan data dari database -->
    <table border="1">
        <tr>
            <th>Id Buku</th>
            <th>Judul</th>
            <th>Pengarang</th>
            <th>Tahun Terbit</th>
            <th>Penerbit</th>
            <th colspan="2">Aksi</th>
        </tr>
        <?php
        // Tampilkan semua data
        $q = $conn->query("SELECT * FROM buku");
        $no = 1; // nomor urut
        while ($dt = $q->fetch_assoc()) :
        ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $dt['judul'] ?></td>
                <td><?= $dt['pengarang'] ?></td>
                <td><?= $dt['tahun_terbit'] ?></td>
                <td><?= $dt['penerbit'] ?></td>
                <td><a href="update.php?id=<?= $dt['id'] ?>">Ubah</a></td>
                <td><a href="delete.php?id=<?= $dt['id'] ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a></td>
            </tr>
        <?php
        endwhile;
        ?>
    </table>
</body>

</html>