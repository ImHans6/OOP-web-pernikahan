<?php

include('../../koneksi.php'); // include our database connection

class UserRegistration {
    private $koneksi;

    // Constructor untuk menginisialisasi koneksi
    public function __construct($koneksi) {
        $this->koneksi = $koneksi;
    }

    // Method untuk melakukan proses registrasi user
    public function registerUser($username, $password) {
        $query = "INSERT INTO user(username, password) VALUES ('$username', '$password')";
        $result = $this->koneksi->query($query);

        if ($result) {
            header("location:../index.php?pesan=register");
        } else {
            // handle error
            echo "Registrasi gagal: " . $this->koneksi->error;
        }
    }
}

// Membuat objek UserRegistration dengan menggunakan koneksi database
$registration = new UserRegistration($koneksi);

// Mengambil data dari form
$username = $_POST['username'];
$password = $_POST['password'];

// Melakukan proses registrasi
$registration->registerUser($username, $password);

?>
