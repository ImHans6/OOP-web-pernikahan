<?php

class Logout {
    // Method untuk melakukan proses logout
    public function doLogout() {
        // Mengaktifkan session
        session_start();

        // Menghapus semua session
        session_destroy();

        // Mengalihkan halaman sambil mengirim pesan logout
        header("location:../index.php?pesan=logout");
    }
}

// Membuat objek Logout
$logout = new Logout();

// Melakukan proses logout
$logout->doLogout();

?>
