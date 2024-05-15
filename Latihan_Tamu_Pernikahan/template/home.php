<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/nav.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Nikahan Fabio</title>
</head>
<body>
<?php 
    session_start();
	if($_SESSION['status']!="login"){
		header("location:index.php?pesan=belum_login");
	}
	?>

<div class="navigation mb-4">
        <div class="container">
            <div class="navbar">
                <ul class="menu">
                    <li><a href="home.php">Home</a></li>
                    <li><a href="tabel_tamu.php">Table</a></li>
                    <li><a href="profile.php">Profile</a></li>
                    <li><a href="proses/logout.php" id="logout">Log Out</a></li>
                </ul>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/code.js"></script>

    <center>
    <img src="images/foto nikahan jess no limit.png" alt="" srcset="" width="200px">
    <h2>Pernikahan Tobias Justin & Fransisca Fortunata</h2>
    <p>
Terima kasih yang sebesar-besarnya atas kehadiran Anda dalam momen istimewa kami. Kehadiran serta doa restu yang tulus dari Anda semua telah mengisi hari ini dengan kebahagiaan yang tak terlukiskan bagi kami berdua. Setiap senyuman, setiap ucapan selamat yang Anda berikan sangatlah berarti dan telah menjadi bagian yang tak terpisahkan dari kenangan indah ini.

Kami bersyukur atas kasih sayang dan dukungan yang telah Anda berikan kepada kami selama ini. Semoga kebaikan dan kebahagiaan yang telah Anda bawa hari ini menjadi balasan yang berlipat ganda bagi Anda semua. Doa-doanya akan kami simpan dalam hati, sebagai sumber kekuatan dalam mengarungi bahtera kehidupan yang baru bagi kami berdua.

Kami berharap hubungan baik ini akan terus terjalin, bukan hanya dalam satu peristiwa indah ini, tetapi juga dalam setiap langkah perjalanan hidup yang akan kami lalui bersama. Semoga keberkahan senantiasa menghampiri setiap langkah kita dan cinta serta kasih sayang selalu mengalir di antara kita semua.

Terima kasih sekali lagi, atas kehadiran, dukungan, dan kasih sayang yang telah Anda berikan. Semoga kebaikan yang Anda berikan kepada kami hari ini menjadi bagian dari cerita kehidupan Anda yang penuh berkah.
</p>
    </center>
   
	

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>