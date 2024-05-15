<?php

include '../../koneksi.php';

class DeleteData {
    private $koneksi;

    // Constructor untuk menginisialisasi koneksi
    public function __construct($koneksi) {
        $this->koneksi = $koneksi;
    }

    // Method untuk melakukan proses penghapusan data tamu pernikahan
    public function deleteTamu($id) {
        $hapus = mysqli_query($this->koneksi, "DELETE FROM tamu_pernikahan WHERE id = '$id'");
        if ($hapus) {
            echo "Data berhasil terhapus, kembali ke <a href='../tabel_tamu.php'>TABEL</a>";
        } else {
            // handle error
            echo "Gagal menghapus data: " . $this->koneksi->error;
        }
    }
}

// Membuat objek DeleteData dengan menggunakan koneksi database
$deleteData = new DeleteData($koneksi);

// Mengambil id yang akan dihapus dari parameter GET
$id = $_GET['id'];

// Melakukan proses penghapusan data tamu pernikahan
$deleteData->deleteTamu($id);

?>
