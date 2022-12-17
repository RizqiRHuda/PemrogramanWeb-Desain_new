<?php
//membuat koneksi
$conn=mysqli_connect("localhost", "root", "", "phpdatabase");

//ambil data dari tabel mahasiswa/query data mahasiswa
$result=mysqli_query($conn,"SELECT * FROM mahasiswa");
//var_dump($result);
// die();

// function query akan menerima isi paramater dari string query yang ada pada index2.php (line 3)
function query($query_kedua){

    // dikarenakan $conn diluar function query maka dibutuhkan scope global $conn
    global $conn;
    $result = mysqli_query($conn,$query_kedua);

    // wadah kosong untuk menampung isi array pada saat looping line 16
    $rows = [];
    //var_dump($rows);
    // die();

    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
       // var_dump($rows);
    }
    return $rows;
}

function tambah ($data){
    global $conn;

    $nama=htmlspecialchars($data["Nama"]);
    $nim=htmlspecialchars($data["Nim"]);
    $email=htmlspecialchars($data["Email"]);
    $jurusan=htmlspecialchars($data["Jurusan"]);
    $gambar=htmlspecialchars($data["Gambar"]);

    // $nama=$data["Nama"];
    // $nim=$data["Nim"];
    // $email=$data["Email"];
    // $jurusan=$data["Jurusan"];
    // $gambar=$data["Gambar"];

    $query = " INSERT INTO mahasiswa VALUES ('', '$nama', '$nim','$email','$jurusan','$gambar')";

    mysqli_query($conn,$query);

    return mysqli_affected_rows($conn);
}

function hapus ($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");
    return mysqli_affected_rows($conn);
}
?>