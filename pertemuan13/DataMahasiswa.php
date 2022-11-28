<!DOCTYPE html>
<html>
    <head>
        <title>Data Mahasiswa</title>
    </head>
    <body>
        
    <h1>Data Mahasiswa array multidimensi dan variable Global GET</h1>
    <ul>
        <!-- loopinig php -->
        <?php foreach($mahasiswa as $mhs): ?>
        
            <!-- menampilkan gambar -->
            <li>
                <img src="" alt="">
            </li>

            <!-- menampilkan data -->
            <li>
                <!-- <a href="latihan_get.phpx=<?php echo $mhs["Nama"];?>&nim=<?=$mhs["NIM"];?>&jurusan<?=$mhs["jurusan"];?>"> -->
                Nama:<?= $mhs["Nama"];?></a><br>
                Nim:<?= $mhs["Nim"];?></a><br>
                jurusan:<?= $mhs["jurusan"];?>
            </li>

            <?php endforeach; ?>
      
    </ul>
    </body>
</html>