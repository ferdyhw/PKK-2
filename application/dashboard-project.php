<?php
require 'functions.php';

session_start();

  if(!isset($_SESSION['login'])) {
    header("Location: login");
  exit;
  } 

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>KELAS IOT | PROJECT IOT</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="../img/favicon.ico">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../style/style_8.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body style="font-family: Viga">

<nav class="navbar sticky-top navbar-expand-md bg-dark navbar-dark pt-0 pb-0">
  <a class="navbar-brand" href="">
    <img src="../img/logo3.png" alt="Logo" style="width:150px;height: 70px; margin-bottom: 10px">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item1">
        <a class="nav-link" href="dashboard">DASHBOARD</a>
      </li>
      <li class="nav-item1">
        <a class="nav-link" href="dashboard-basic">BASIC</a>
      </li>
      <li class="nav-item2">
        <a class="nav-link" href="dashboard-quiz">QUIZ</a>
      </li>
      <li class="nav-item3">
        <a class="nav-link active" href="dashboard-project">PROJECT</a>
      </li>
      <li class="nav-item4">
        <a class="nav-link" style="color: crimson;" href="logout">LOGOUT</a>
      </li>
    </ul>
</nav>

<div class="jumbotron">
    <div class="container">
      <h1 class="display-4" style="font-size: 45px;">Mikrocontroller</h1>
      <p class="gb_1">Mikrocontroller adalah suatu peralatan yang berfungsi untuk mendeteksi gejala-gejala atau sinyal-sinyal yang berasal dari perubahan suatu energi seperti energi listrik, energi fisika, energi kimia, energi biologi, energi mekanik dan sebagainya. Mikrokontroler biasa digunakan pada produk dan perangkat yang dapat dikontrol secara otomatis, seperti sistem kontrol mesin mobil (engine control), perangkat medis (medical devices), pengendali jarak jauh (remote control), mesin perkantoran (office machines), dan juga mainan (games).</p>
      <p><a class="btn btn-info btn-md" href="project/basic-mikrocontroller" role="button">Read More &raquo;</a></p>
      <h1 class="display-4" style="font-size: 45px; padding-top: 20px;">Sensor</h1>
      <p class="gb_1">Sensor adalah suatu peralatan yang berfungsi untuk mendeteksi gejala-gejala atau sinyal-sinyal yang berasal dari perubahan suatu energi seperti energi listrik, energi fisika, energi kimia, energi biologi, energi mekanik dan sebagainya. Dalam iot terdapat banyak sensor yang dapat digunakan, diantaranya sensor suhu dan kelembaban, sensor cahaya, sensor ultrasonik dan masih banyak lagi.</p>
      <p><a class="btn btn-info btn-md" href="project/basic-sensor" role="button">Read More &raquo;</a></p>
    </div>
  </div>

  <hr class=" p-1">
<div class="container">
    <div class="row">
      <div class="heading_1 col-md-4 text-justify">
        <h4 style="color: #16a085;text-align: center; font-weight: bold;">Penggunaan Pin Analog</h4>
        <img class="container mb-3 pt-3" src="../img/arduino.jpg">
        <center style="padding-top: 5px;" ><p><a class="btn btn-info btn-md" href="project/pin-analog" role="button">View &raquo;</a></p></center>
      </div>
      <div class="heading_2 col-md-4 text-justify">
        <h4 style="color: #16a085;text-align: center; font-weight: bold;">Penggunaan Pin Digital</h4>
        <img class="container mb-3 pt-3" src="../img/arduino.jpg">
        <center style="padding-top: 5px;" ><p><a class="btn btn-info btn-md" href="project/pin-digital" role="button">View &raquo;</a></p></center>
      </div>
      <div class="heading_3 col-md-4 text-justify">
        <h4 style="color: #16a085;text-align: center; font-weight: bold;">Penggunaan Pin PWM</h4>
        <img class="container mb-3 pt-3" src="../img/arduino.jpg">
        <center style="padding-top: 5px;" ><p><a class="btn btn-info btn-md" href="project/pin-pwm" role="button">View &raquo;</a></p></center>
      </div>
      <div class="heading_4 col-md-4 text-justify">
        <h4 style="color: #16a085;text-align: center; font-weight: bold;">Penggunaan Sensor DHT-11</h4>
        <img class="container mb-3 pt-3" src="../img/dht11_2.jpg">
        <center style="padding-top: 5px;" ><p><a class="btn btn-info btn-md" href="project/sensor-dht11" role="button">View &raquo;</a></p></center>
      </div>
      <div class="heading_5 col-md-4 text-justify">
        <h4 style="color: #16a085;text-align: center; font-weight: bold;">Penggunaan Sensor LDR</h4>
        <img class="container mb-3 pt-3" src="../img/ldr.png">
        <center style="padding-top: 5px;" ><p><a class="btn btn-info btn-md" href="project/sensor-ldr" role="button">View &raquo;</a></p></center>
      </div>
      <div class="heading_6 col-md-4 text-justify">
        <h4 style="color: #16a085;text-align: center; font-weight: bold;">Penggunaan Sensor HC-SR04</h4>
        <img class="container mb-3 pt-3" src="../img/hcs-r04_2.jpg">
        <center style="padding-top: 5px;" ><p><a class="btn btn-info btn-md" href="project/sensor-hcsr04" role="button">View &raquo;</a></p></center>
      </div>
    </div>
</div>
<hr class=" p-4">

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

