<?php
require_once 'koneksi.php';
if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $judul = $_POST['judul'];
    $pengarang = $_POST['pengarang'];
    $tahun_terbit = $_POST['tahun_terbit'];
    $penerbit = $_POST['penerbit'];
    $q = $conn->query("UPDATE buku SET judul = '$judul',pengarang = '$pengarang',tahun_terbit = '$tahun_terbit', penerbit = '$penerbit' WHERE id = '$id'");
    // $q = $conn->query("INSERT INTO buku VALUES ('', '$judul', '$pengarang', '$tahun_terbit','$penerbit')");
    if ($q) {
        // pesan jika data berubah
        echo "<script>alert('Data buku berhasil diubah'); window.location.href='index.php'</script>";
    } else {
        // pesan jika data gagal diubah
        echo "<script>alert('Data buku gagal diubah'); window.location.href='index.php'</script>";
    }
} else {
    // jika coba akses langsung halaman ini akan diredirect ke halaman index
    header('Location: index.php');
}
