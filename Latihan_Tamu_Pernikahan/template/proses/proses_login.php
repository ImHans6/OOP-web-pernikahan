<?php

include('../../koneksi.php'); // include our database connection

session_start(); // start the session

class Authentication {
    private $koneksi;

    // Constructor untuk menginisialisasi koneksi
    public function __construct($koneksi) {
        $this->koneksi = $koneksi;
    }

    // Method untuk melakukan proses autentikasi
    public function authenticate($username, $password) {
        $query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
        $result = $this->koneksi->query($query);

        if ($result->num_rows > 0) {
            $_SESSION['username'] = $username;
            $_SESSION['status'] = "login";
            echo "login berhasil";
            header("location:../home.php");
        } else {
            header("location:../index.php?pesan=gagal");
        }
    }
}

// Membuat objek Authentication dengan menggunakan koneksi database
$auth = new Authentication($koneksi);

// Mengambil data dari form
$username = $_POST['username'];
$password = $_POST['password'];

// Melakukan proses autentikasi
$auth->authenticate($username, $password);

?>
