<?php
//membuat koneksi
$conn = mysqli_connect("localhost", "root", "", "phpdatabase");

//ambil data dari tabel mahasiswa/query data mahasiswa
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");
//var_dump($result); //melihat alur program apakah data itu berjalan
// die();

// while ($mhs = mysqli_fetch_assoc($result)) {
//     var_dump($mhs);
//     die();
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <table border="1" cellpading="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Email</th>
            <th>Jurusan</th>
            <th>Gambar</th>
            <th>Aksi</th>
        </tr>
        <?php $i = 1; ?>
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
            <tr>
                <td>
                    <?= $i; ?>
                </td>
                <!-- harus sesuai database kalian -->
                <td>
                    <?= $row["Nama"]; ?>
                </td>
                <td>
                    <?= $row["Nim"]; ?>
                </td>
                <td>
                    <?= $row["Email"]; ?>
                </td>
                <td>
                    <?= $row["Jurusan"]; ?>
                </td>
                <td><img src="img/<?php echo $row["Gambar"]; ?>" alt="" height="100"></td>
                <td>
                    <a href="">Edit</a>
                    <a href="hapus.php?id=<?php echo $row["id"];?>"onclick="return confirm('Apakah Anda yakin untuk menghapus data?')">Hapus</a>
                </td>
            </tr>
            <?php $i++ ?>
        <?php endwhile; ?>

    </table>
</body>
</html>