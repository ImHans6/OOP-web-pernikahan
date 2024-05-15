<?php
include '../../koneksi.php';
$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM tamu_pernikahan WHERE id = $id");
$kolom = mysqli_fetch_assoc($data);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>

    <form class="col-lg-6 offset-lg-3 " action="../proses/proses_edit.php" method="POST">
    <div class="row justify-content-center">

    <div>
        <input type="hidden" name="id" value="<?php echo $kolom['id'] ?>" />
    </div>

    <div class="mb-3">
        <label for="nama" class="form-label">Nama : </label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama">
        <div id="emailHelp" class="form-text"></div>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Isi Amplop : </label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="isi_amplop">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">No Telepon : </label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="no_telp">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Souvenir :</label>
        <select class="form-select" aria-label="Default select example" name="souvenir">
            <option selected disabled>Open this select menu</option>
            <option value="Besi">Besi</option>
            <option value="Emas">Emas</option>
            <option value="Berlian">Berlian</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Alamat : </label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="alamat"></textarea>
    </div>
    
    <label for="exampleFormControlTextarea1" class="form-label">Jenis Kelamin : </label>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="jenis_kelamin" id="flexRadioDefault1" value="pria">
        <label class="form-check-label" for="flexRadioDefault1">
            Pria
        </label>
    </div>
    <div class="form-check mb-3">
    <input class="form-check-input" type="radio" name="jenis_kelamin" id="flexRadioDefault2" value="wanita">
    <label class="form-check-label" for="flexRadioDefault2">
        Wanita
    </label>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Ucapan Selamat : </label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="ucapan_selamat"></textarea>
    </div>

    
    <button type="submit" class="btn btn-primary">Edit</button>
    </div>
    </form>











    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>