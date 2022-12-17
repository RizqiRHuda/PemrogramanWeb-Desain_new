<?php
// buat koneksi
    $conn=mysqli_connect("localhost","root","","phpdatabase");

    //cek apakah button submit sudah ditekan atau belum
    if(isset($_POST['submit'])){
        // ambil data dari tiap element dalam form yang disimpan di variable baru
        $nama=$data["Nama"];
        $nim=$data["Nim"];
        $email=$data["Email"];
        $jurusan=$data["Jurusan"];
        $gambar=$data["Gambar"];

    //var_dump($result); //melihat alur program apakah data itu berjalan
    // die();

    // query insert data
    $query = " INSERT INTO mahasiswa VALUES ('', '$nama', '$nim','$email','$jurusan','$gambar')";
    mysqli_query($conn,$query);

    //cek sukses data ditambah menggunakan mysqli_affected_rows
    //jika kita var_dump maka akan muncul int(1) jika gagal maka akan muncul int(-1)
    //var_dump(mysqli_affected_rows($conn));
    // die();
    if(mysqli_affected_rows($conn) > 0){
        echo " data berhasil disimpan";
    }
    else{
        echo "gagal!";
        echo "<br>";
        echo mysqli_error($conn);
    }


}
