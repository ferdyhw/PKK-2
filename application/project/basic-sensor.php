<?php

session_start();

  if(!isset($_SESSION['login'])) {
    header("Location: ../login");
  exit;
  } 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>KELAS IOT | SENSOR</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="../../img/favicon.ico">
  <link rel="stylesheet" href="../../css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../../style/style_11.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body style="font-family: Viga">

<nav class="navbar sticky-top navbar-expand-md bg-dark navbar-dark pt-0 pb-0">
  <a class="navbar-brand" href="">
    <img src="../../img/logo3.png" alt="Logo" style="width:150px;height: 70px; margin-bottom: 10px">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item1">
        <a class="nav-link" href="../dashboard">DASHBOARD</a>
      </li>
      <li class="nav-item3">
        <a class="nav-link" href="../dashboard-project">PROJECT</a>
      </li>
      <li class="nav-item4">
        <a class="nav-link" style="color: crimson;" href="../logout">LOGOUT</a>
      </li>
    </ul>
</nav>

<div class="jumbotron">
    <div class="container">
      <h1 class="display-4" style="font-size: 45px;">Sensor</h1>
      <p class="gb_1">&nbsp;&nbsp;&nbsp;&nbsp;Perancangan Internet Of Thing tidak lepas dari yang namanya sensor, dan jenis sensor dan fungsinya menjadi penunjang project IOT itu sendiri. Definisi dari Sensor adalah suatu peralatan yang berfungsi untuk mendeteksi gejala-gejala atau sinyal-sinyal yang berasal dari perubahan suatu energi seperti energi listrik, energi fisika, energi kimia, energi biologi, energi mekanik dan sebagainya. Dalam iot terdapat banyak sensor yang dapat digunakan, diantaranya sensor suhu dan kelembaban, sensor cahaya, sensor ultrasonik dan masih banyak lagi.
      <h1 class="display-4" style="font-size: 45px;">Jenis Sensor</h1>
      <p>Ada banyak sekali jenis sensor yang bisa dihubungkan pada arduino. Dengan memiliki fungsi yang beragam juga. Diantaranya adalah :</p>
      <ol>
        <li>Touch Sensor <p>Adalah jenis sensor yang akan mendeteksi ketika disentuh, ibarat kulit. Touch Sensor pada dasarnya adalah saklar yang memiliki berbagai jenis bentuk. Contoh touch sensor yang paling sederhana adalah Push Button.</p></li>
        <center><img src="../../img/Touch Sensor.png" style="width: 280px; height: 180px"></center>
        <li>Light Sensor <p>Sensor ini mendeteksi cahaya atau peka terhadap cahaya disekitarnya. Untuk menentukan gelap dan terang suatu tempat biasa menggunakan LDR Sensor. Sensor cahaya memiliki 3 macam katagori antara lain, fotovoltaic, fotokonduktif, fan fotolistrik.</p></li>
        <center><img src="../../img/LDR dan IR Sensor Kelas Robot.png" style="width: 280px; height: 180px"></center>
        <li>Color Sensor <p>Sama seperti light sensor atau Infra Red sensor, color sensor juga bisa mendeteksi gelap terang dengan menangkap warna hitam dan putih. Tapi selain itu, Color Sensor juga dapat mendeteksi warna lainnya seperti merah, biru, kuning, dan sebagainya.</p></li>
        <center><img src="../../img/Light Sensor Kelas Robot.jpg" style="width: 280px; height: 180px"></center>
        <li>Distance Sensor <p>Adalah jenis sensor yang digunakan untuk mendeteksi objek dengan cara mengukur jarak objek tersebut. Sensor ini bisa mengukur jarak dengan sangat akurat. Salah sensornya adalah sensor ultrasonic atau HCS-R04. Cara kerjanya sama persis seperti mulut dan telinga pada kelelawar.</p></li>
        <center><img src="../../img/Distance Sensor Kelas Robot.jpg" style="width: 280px; height: 180px"></center>
        <li>Sound Sensor <p>Melalui program sensor ini bisa membedakan suara yang nyaring, suara yang tidak nyaring, dan hening. Intensitasnya bisa kita atur manual, atau melalui program, tergantung jenis Sound Sensor yang dipakai. Bahkan untuk jenis Voice Recognition, itu bisa diprogram untuk mendengar kata (bahasa) yang digunakan manusia.</p></li>
        <center><img src="../../img/Sound Sensor Kelas Robot.png" style="width: 280px; height: 180px"></center>
        <li>Gas Sensor <p>Berfungsi untuk mendeteksi berbagai jenis gas atau asap yang ada disekitar. Seperti hidung pada manusia, dapat membedakan yang mana gas yang biasa mana gas yang berbahaya.</p></li>
        <center><img src="../../img/Gas Sensor Kelas Robot.png" style="width: 280px; height: 180px"></center>
        <li>Sensor Suhu <p>Merupakan sensor yang dapat mendeteksi suhu atau kelembaban pada ruangan secara real time. Salah satu sensor suhu adalah DHT11, yang banyak digunakan untuk membuat monitoring suhu ruangan secara otomatis.</p></li>
        <center><img src="../../img/dht11_2.jpg" style="width: 280px; height: 180px"></center>
      </ol>


</p>
</div>
</div>

<footer class="container-fluid bg-dark p-5">
    <div class="row">
      <div class="col-md-3 text-white">
        <h5 style="color: #16a085">WEBMASTER</h5>
        <p style="padding-top: 20px;">Ferdy Hendriawan</p>
        <p style="padding-top: -20px;">SMK NEGERI 1 CIMAHI</p>
        <p style="padding-top: -20px;">XI - Sistem Informasi Jaringan dan Aplikasi B</p>
      </div>
      <div class="col-md-3 text-white">
        <h5 style="color: #16a085">LOCATION</h5>
        <p style="padding-top: 20px">Jln Dirawinata, Desa Tanimulya</p>
        <p style="padding-top: -20px">Kec Ngamprah, Kab Bandung Barat</p>
        <p style="padding-top: -20px">Jawa Barat, Indonesia</p>
      </div>
      <div class="col-md-3 text-white">
        <h5 style="color: #16a085">REFERENCES</h5>
        <a href="https://id.wikipedia.org/wiki/Internet_untuk_Segala" style="text-decoration: none; color: white"><p style="padding-top: 20px">https://www.Wikipedia.com</p></a>
        <a href="https://www.dewaweb.com/blog/internet-of-things/" style="text-decoration: none; color: white"><p style="padding-top: -20px">https://www.Dewaweb.com</p></a>
        <a href="https://kelasrobot.com/category/arduino-project/" style="text-decoration: none; color: white"><p style="padding-top: -20px">https://www.Kelasrobot.com</p></a>
      </div>
      <div class="col-md-3 text-white">
        <h5 style="color: #16a085; margin-bottom: 15px;">CONTACT</h5>
        <a href="https://www.facebook.com/profile.php?id=100008624989032" style="text-decoration: none; color: #fff"><i class="fa fa-facebook-square fb" style="font-size: 30px; color: #fff; padding-bottom: 10px;"></i> &nbsp;Facebook/FerdyHw</a>
        <br>
        <a href="https://www.instagram.com/ferdyhwn/" style="text-decoration: none; color: #fff"><i class="fa fa-instagram" style="font-size: 30px; color: #fff; padding-bottom: 10px;"></i> &nbsp;Instagram/ferdyhwn</a>
        <br>
        <a href="https://api.whatsapp.com/send?phone=6289639399074" style="text-decoration: none; color: #fff"><i class="fa fa-whatsapp" style="font-size: 30px; color: #fff; padding-bottom: 10px;"></i> &nbsp;Whatsapp/+6289639399074</a>
        <br>
      </div>
    </div>
</footer>
<div class="container-fluid" style="background: #e9ecef; padding-top: 15px; padding-bottom: 5px;">
<center><p>Copyright © 2020 <strong style="color: #16a085">KelasIOT</strong></p></center>


</body>
</html>