-- Active: 1666755249241@@127.0.0.1@3306
SHOW DATABASES;
CREATE DATABASE db_penjualan;
use db_penjualan;
CREATE TABLE supplier(
    id_supplier int not null AUTO_INCREMENT PRIMARY KEY,
    nama_supplier VARCHAR(50) NOT NULL,
    phone CHAR(13),
    alamat VARCHAR(100)
);


-- table pembeli
CREATE Table pembeli(
    id_pembeli int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nama_pembeli VARCHAR(30) not NULL,
    phone CHAR(13),
    alamat VARCHAR(120)
);
-- table barang
CREATE Table barang(
    id_barang int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nama_barang VARCHAR(20) not null,
    harga int,
    stok int,
    id_supplier int,
    CONSTRAINT id_supplier FOREIGN KEY(`id_supplier`) REFERENCES `supplier` (`id_supplier`)
);
-- table transaksi
CREATE TABLE transaksi (
    id_transaksi int not null AUTO_INCREMENT PRIMARY key,
    id_barang int,
    id_pembeli int,
    tanggal date,
    keterangan VARCHAR(100),
    CONSTRAINT id_barang FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`),
    CONSTRAINT id_pembeli FOREIGN KEY (`id_pembeli`) REFERENCES `pembeli` (`id_pembeli`)
);

-- table pembayaran
CREATE TABLE pembayaran(
    id_pembayaran int not null auto_increment primary key,
    tgl_bayar date,
    total_bayar int,
    id_transaksi int,
    CONSTRAINT id_transaksi FOREIGN KEY (`id_transaksi`) REFERENCES `transaksi` (`id_transaksi`)
);
use db_penjualan;
DESC pembayaran;

CREATE DATABASE koleksi_buku;
use koleksi_buku;





