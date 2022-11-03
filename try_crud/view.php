<?php
// panggil koneksinya
require_once 'koneksi.php';

?>
<!DOCTYPE html>
<html>

<head>
    <title>View</title>
    <link rel="stylesheet" href="styleIndex.css">
</head>

<body>
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