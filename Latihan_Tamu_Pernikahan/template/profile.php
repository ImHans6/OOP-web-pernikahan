<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="css/nav.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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







    <div class="container-fluid mb-5">
    <div class="row">
    <div class="col-sm-12 mb-3 mb-sm-0 d-flex justify-content-center">

    <?php
        $name_array = array("Raihan Ramadhan","Febri Hamdani","Fabio Navaro Giola Safioeddin");
        $image_array = array("hanganteng.jpg","pebri ganteng.jpg","igorcut.png");
        $quote_array = array("Terus Maju Kedepan Sekalipun Dunia Melawan","-----Bikin AI Gitu Aja Juara Satu------","Ahhhhhh AHhhhhhhhhhhhh AHhhhhhhhhhhhhhhhh");
        $class_array = array("XI Tel 11","XI Tel 09","XI Tel 09");
        $school_array = array("SMK Telkom Jakarta","SMK Telkom Jakarta","SMK Telkom Jakarta");
        $ig_array = array("https://www.instagram.com/raihanramadhan_/?hl=id","https://www.instagram.com/febri.hma/?hl=id","https://www.instagram.com/fabio_navaro/?hl=id");
        $array_legth = count($name_array);
        for($x = 0; $x < $array_legth; $x++) {
    ?>
    <div class="card me-5" style="width: 18rem;">
    <div class="card-body">
        <img src="images/profile/<?php
        echo $image_array[$x];
        ?>" class="card-img-top" alt="...">

    <div class="card-body">
        <h5 class="card-title text-center"><?php
        echo $name_array[$x];
        ?></h5>
        <p class="card-text text-center">"<?php
        echo $quote_array[$x];
        ?>"</p>
    </div>

    <ul class="list-group list-group-flush">
        <li class="list-group-item"><?php
        echo $class_array[$x];
        ?></li>
        <li class="list-group-item"><?php
        echo $school_array[$x];
        ?></li>
    </ul>
    <div class="card-body d-flex justify-content-center" >
        <a href="<?php
        echo $ig_array[$x];
        ?>" class="card-link "><img src="images/profile/instagram.svg" alt="" srcset=""></a>
    </div>
    </div>
    </div>
      <?php
        }
    ?>

    </div>
    </div>
    </div>



    <div class="container-fluid mb-5">
    <div class="row">
    <div class="col-sm-12 mb-3 mb-sm-0 d-flex justify-content-center">

    <?php
        $name_array = array("Muhammad Nabil Fauzan","Very Wardhana","Muhammad Rayszidane Putrama Chalik");
        $image_array = array("ojanimut.jpg","peri.jpg","zi.jpg");
        $quote_array = array("Rejeki Orang Masih Aja Sirik (Bales Komen Febri)","Idihhhh Sebelllllllll","StarBoy Telkom");
        $class_array = array("XI Tel 10","XI Tel 08","XI Tel 09");
        $school_array = array("SMK Telkom Jakarta","SMK Telkom Jakarta","SMK Telkom Jakarta");
        $ig_array = array("https://www.instagram.com/mnfauzan19/","https://www.instagram.com/verywhrdana?igsh=MTN2bTh2aXRoeGZwaQ==","https://www.instagram.com/rayszidane/");
        $array_legth = count($name_array);
        for($x = 0; $x < $array_legth; $x++) {
    ?>
    <div class="card me-5" style="width: 18rem;">
    <div class="card-body">
        <img src="images/profile/<?php
        echo $image_array[$x];
        ?>" class="card-img-top" alt="...">

    <div class="card-body">
        <h5 class="card-title text-center"><?php
        echo $name_array[$x];
        ?></h5>
        <p class="card-text text-center">"<?php
        echo $quote_array[$x];
        ?>"</p>
    </div>

    <ul class="list-group list-group-flush">
        <li class="list-group-item"><?php
        echo $class_array[$x];
        ?></li>
        <li class="list-group-item"><?php
        echo $school_array[$x];
        ?></li>
    </ul>
    <div class="card-body d-flex justify-content-center" >
        <a href="<?php
        echo $ig_array[$x];
        ?>" class="card-link "><img src="images/profile/instagram.svg" alt="" srcset=""></a>
    </div>
    </div>
    </div>
      <?php
        }
    ?>

    </div>
    </div>
    </div>












    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>