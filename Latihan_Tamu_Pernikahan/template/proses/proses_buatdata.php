<?php

include '../../koneksi.php';

class InsertData {
    private $koneksi;

    // Constructor untuk menginisialisasi koneksi
    public function __construct($koneksi) {
        $this->koneksi = $koneksi;
    }

    // Method untuk melakukan proses input data tamu pernikahan
    public function insertTamu($nama, $isi_amplop, $no_telp, $souvenir, $alamat, $jenis_kelamin, $ucapan_selamat) {
        $query = "INSERT INTO tamu_pernikahan VALUES(NULL, '$nama', '$isi_amplop',current_timestamp(), '$no_telp', '$souvenir', '$alamat','$jenis_kelamin', '$ucapan_selamat')";
        $input = $this->koneksi->query($query);

        if ($input) {
            echo "Data Berhasil Masuk Ke Database, Silakan Cek Table. <a href='../tabel_tamu.php'>Kembali ke Tabel</a>";
        } else {
            // handle error
            echo "Gagal memasukkan data ke database: " . $this->koneksi->error;
        }
    }
}

// Membuat objek InsertData dengan menggunakan koneksi database
$insertData = new InsertData($koneksi);

// Mengambil data dari form
$nama = $_POST["nama"];
$isi_amplop = $_POST["isi_amplop"];
$no_telp = $_POST["no_telp"];
$souvenir = $_POST["souvenir"];
$alamat = $_POST["alamat"];
$jenis_kelamin = $_POST["jenis_kelamin"];
$ucapan_selamat = $_POST["ucapan_selamat"];

// Melakukan proses input data tamu pernikahan
$insertData->insertTamu($nama, $isi_amplop, $no_telp, $souvenir, $alamat, $jenis_kelamin, $ucapan_selamat);

?>

<!-- 