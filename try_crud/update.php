<?php
require_once 'koneksi.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $q = $conn->query("SELECT * FROM buku WHERE id = '$id'");
    foreach ($q as $dt) :
?>
<html>
    <head>
        <link rel="stylesheet" href="styleUpdate.css">
    </head>
    <body>
            
        <form action="proses_update.php" method="post">
            <div class="container">
            <h2>Halaman Update Data</h2>
            <input type="hidden" name="id" value="<?= $dt['id'] ?>">
            <label for="fname" ><span style="text-align: left;">Judul Buku</span></label>
            <input type="text" id="fname" name="judul" placeholder=" ">
            <label for="fname">Pengarang</label>
            <input type="text" id="fname" name="pengarang" placeholder=" ">
            <label for="fname">Tahun Terbit</label>
            <input type="text" id="fname" name="tahun_terbit" placeholder=" ">
            <label for="fname">Penerbit</label>
            <input type="text" id="fname" name="penerbit" placeholder=" ">

            <input type="submit" name="submit" class="tombolReg" value="submit">
            </div>

          
            
        </form>
    </body>

</html>
         
<?php
    endforeach;
}
