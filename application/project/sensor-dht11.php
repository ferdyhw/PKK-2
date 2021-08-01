<?php
require "../functions.php";

session_start();

  if(!isset($_SESSION['login'])) {
    header("Location: ../login");
  exit;
  } 

  $tampilkan = query("SELECT * FROM comment_4");

  if(isset($_POST['kirim'])) {

    if(komentar4($_POST) > 0 ) {
      echo "<script>
              alert('Komentar berhasil dikirim!');
              document.location.href='';
           </script>
      ";
    } else{
      echo "<script>
          alert('Komentar gagal dikirim!');
          document.location.href='';
        </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>KELAS IOT | SENSOR DHT11</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="../../img/favicon.ico">
  <link rel="stylesheet" href="../../css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../../style/style_sensor-dht11.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
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
      <h1 class="display-4" style="font-size: 45px">Penggunaan Sensor DHT11</h1>
      <p class="gb_1" style="text-align: justify;">&nbsp;&nbsp;&nbsp;&nbsp;Sensor DHT11 adalah module sensor yang berfungsi untuk mensensing objek suhu dan kelembaban yang memiliki output tegangan analog yang dapat diolah lebih lanjut menggunakan mikrokontroler.
      Module sensor ini tergolong kedalam elemen resistif seperti perangkat pengukur suhu seperti contohnya yaitu NTC.
      Kelebihan dari module sensor ini dibanding module sensor lainnya yaitu dari segi kualitas pembacaan data sensing yang lebih responsif yang memliki kecepatan dalam hal sensing objek suhu dan kelembaban, dan data yang terbaca tidak mudah terinterverensi.
      Sensor DHT11 pada umumya memiliki fitur kalibrasi nilai pembacaan suhu dan kelembaban yang cukup akurat.
      Penyimpanan data kalibrasi tersebut terdapat pada memori program OTP yang disebut juga dengan nama koefisien kalibrasi.
      Sensor ini memiliki 4 kaki pin, dan terdapat juga sensor DHT11 dengan breakout PCB yang terdapat hanya memilik 3 kaki pin seperti gambar dibawah ini</p>
      <img class="pb-3" src="../../img/Sensor-DHT11.png" style="width: 300px;">
      <h1 class="display-4" style="font-size: 45px">Tutorial Memakai Sensor DHT11</h1>
       <p>Pertama siapkan Bahan-bahan dan alat yang diperlukan untuk percobaan ini diantaranya :</p>
      <ol>
        <li>Arduino Uno board</li>
        <li>Software Arduino IDE</li>
        <li>Kabel jumper</li>
        <li>Sensor DHT11</li>
        <li>Breadboard</li>
        <li>Resistor 220 ohm</li>
      </ol>
      <p>Buatlah rangkaian seperti gambar dibawah :</p>
      <img class="pb-3" src="../../img/Arduino-sensor-DHT11.png" style="width: 300px;">
      <p>Hal yang perlu diperhatikan yaitu dikarenakan pada software IDE arduino tidak ada library DHT11 maka perlu ditambahkan dahulu untuk memudahkan dalam pemrogramannya. <a href="https://www.nyebarilmu.com/?file=1566">Download Library DHT11</a></p>
      <p>kode yang harus kita upload adalah seperti berikut :</p>
      <div class="container">
        <pre>
#include "DHT.h" //library sensor yang telah diimportkan
 
#define DHTPIN A2     //Pin apa yang digunakan
 
#define DHTTYPE DHT11   // DHT 11
 
DHT dht(DHTPIN, DHTTYPE);
 
void setup() {
  Serial.begin(9600); //baud komunikasi serial
  Serial.println("Pengujian DHT11!"); //penulisan di serial monitor
  dht.begin(); //prosedur memulai pembacaan module sensor
}
 
void loop() {
  delay(2000);  //menunggu beberapa detik untuk pembacaan
 
  //pembacaan sensor membutuhkan waktu 250ms
 
  //Pembacaan untuk data kelembaban
  float humidity_1 = dht.readHumidity();
  //Pembacaan dalam format celcius (c)
  float celcius_1 = dht.readTemperature();
  //pembacaan dalam format Fahrenheit
  float fahrenheit_1 = dht.readTemperature(true);
 
  //mengecek pembacaan apakah terjadi kegagalan atau tidak
  if (isnan(humidity_1) || isnan(celcius_1) || isnan(fahrenheit_1)) {
    Serial.println("Pembacaan data dari module sensor gagal!");
    return;
  }
 
  float htof = dht.computeHeatIndex(fahrenheit_1, humidity_1); 
  //Prosedur pembacaaan data indeks panas dalam bentuk fahreheit
  float htoc = dht.computeHeatIndex(celcius_1, humidity_1, false);
 //Prosedur pembacaaan data indeks panas dalam bentuk celcius
 
  //pembacaan nilai pembacaan data kelembaban
  Serial.print("Kelembaban: ");
  Serial.print(humidity_1);
  Serial.print(" %\t");
  
  //pembacaan nilai pembacaan data suhu
  Serial.print("Suhu : ");
  Serial.print(celcius_1); //format derajat celcius
  Serial.print(" 'C ");
  Serial.print(fahrenheit_1); //format derajat fahrenheit
  Serial.print(" 'F\t");
 
  Serial.print("Indeks Panas: ");
  Serial.print(htof); 
  Serial.println(" *F");
 
  Serial.print(htoc);
  Serial.print(" *C ");
 
}</pre>
      </div>
      <p>Setelah mengupload program diatas, untuk menampilkan perubahan suhu dan kelembaban ruangan caranya dengan membuka fungsi “Serial Monitor” software IDE, dan dapat diujicoba untuk memberikan monitoring suhu dan kelembaban ruangan secara realtime.</p>
    </div>
  </div>

  <div class="container" style="padding-bottom: 2%;">
    <form method="post" action="" class="pb-4">
          <div class="list-comment">
            <h2>List Comment</h2>
            <hr>
            <?php $i=1; ?>
            <?php foreach( $tampilkan as $row ) : ?>

              <h4><?= $row['name']; ?> (<?= $row['date']; ?>)</h4>
              <p><?= $row['comment']; ?></p>
              <hr>

            <?php $i++; ?>
            <?php endforeach; ?>
          </div>

          <br>

          <div class="comment">
            <h2>Comment Here</h2>
            <input type="text" name="nama" class="form-control" placeholder="Masukan Username">
            <br>  
            <textarea name="komentar" class="form-control" placeholder="Masukan Komentar"></textarea>
            <br>
            <input type="submit" name="kirim" class="btn btn-lg btn-primary btn-block mb-4">
          </div>
    </form>
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
        <a href="https://www.nyebarilmu.com/cara-mengakses-sensor-dht11/" style="text-decoration: none; color: white"><p style="padding-top: -20px">https://www.Nyebarilmu.com</p></a>
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