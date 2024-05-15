<?php

class Database {
    private $host;
    private $username;
    private $password;
    private $dbname;
    private $koneksi;

    // Constructor untuk menginisialisasi nilai
    public function __construct($host, $username, $password, $dbname) {
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->dbname = $dbname;
        $this->connect();
    }

    // Method untuk membuat koneksi
    private function connect() {
        $this->koneksi = new mysqli($this->host, $this->username, $this->password, $this->dbname);

        // Periksa apakah ada kesalahan koneksi
        if ($this->koneksi->connect_error) {
            die("Koneksi database gagal: " . $this->koneksi->connect_error);
        }
    }

    // Method untuk mendapatkan koneksi
    public function getConnection() {
        return $this->koneksi;
    }

    // Method untuk menutup koneksi
    public function closeConnection() {
        if ($this->koneksi) {
            $this->koneksi->close();
        }
    }
}

// Contoh penggunaan
$database = new Database("localhost", "root", "", "pernikahan");
$koneksi = $database->getConnection();

// Sekarang Anda dapat menggunakan koneksi ini untuk melakukan query ke database.
// Misalnya:
// $result = $koneksi->query("SELECT * FROM tabel");
// ...
// Setelah selesai, pastikan untuk menutup koneksi.
// $database->closeConnection();

?>

