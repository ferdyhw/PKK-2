<?php
require "../functions.php";

session_start();

  if(!isset($_SESSION['login'])) {
    header("Location: ../login");
  exit;
  } 

  $tampilkan = query("SELECT * FROM comment_5");

  if(isset($_POST['kirim'])) {

    if(komentar5($_POST) > 0 ) {
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
  <title>KELAS IOT | SENSOR LDR</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="../../img/favicon.ico">
  <link rel="stylesheet" href="../../css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../../style/style_sensor-ldr.css">
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
      <h1 class="display-4" style="font-size: 45px">Penggunaan Sensor LDR</h1>
      <p class="gb_1" style="text-align: justify;">&nbsp;&nbsp;&nbsp;&nbsp;Sensor LDR (Light Dependent Resistor) merupakan salah satu komponen elektronika yang masuk ke dalam keluarga resistor yang dimana nilai resistansinya dipengaruhi oleh intensitas cahaya. Pada saat kondisi terang akan berefek pada nilai resistansi LDR yang cenderung menurun sedangkan pada saat kondisi gelap nilai resistansinya pada LDR akan cenderung menjadi tinggi. Sehingga pada saat itu juga, kondisi terang akan beakibat nilai output (tegangan analog) yang dihasilkan akan mengecil sedangkan pada saat kondisi gelap tegangan analog yang dihasilkan akan semakin membesar. Pada umumnya, nilai resistansi LDR mencapai nilai 200 kΩ pada kondisi gelap sedangkan pada saat kondisi terang naik menjadi 500 kΩ.</p>
      <h1 class="display-4" style="font-size: 45px">Tutorial Memakai Sensor LDR</h1>
       <p>Pertama siapkan Bahan-bahan dan alat yang diperlukan untuk percobaan ini diantaranya :</p>
       <ol>
          <li>Arduino Uno board</li>
          <li>Software Arduino IDE</li>
          <li>Kabel jumper</li>
          <li>Sensor LDR</li>
          <li>Breadboard</li>
          <li>Resistor 220 ohm</li>
          <li>Senter (Sumber Cahaya)</li>
       </ol>
       <p>Buatlah rangkaian seperti gambar dibawah :</p>
       <img class="pb-3" src="../../img/Arduino-mengakses-sensor-LDR.jpg" style="width: 300px;">
       <p>kode yang harus kita upload adalah seperti berikut :</p>
       <div class="container">
         <pre>
const int pin_ldr = A0;
 
void setup ()
{
Serial.begin (9600); //inisialisasi port serial
}
 
void loop ()
{
int nilai = analogRead (pin_ldr); //Membaca nilai analog dari pin A0
// Mengkonversi nilai analog tegangan menggunakan ADC
// ADC memiliki resolusi 10bit, sehingga dapat mewakili 2 ^ 10 = 1024
float tegangan_hasil = 5.0 * nilai / 1024;
// Catatan: Ini adalah konversi D-to-A
// Mencetak hasil pada monitor serial
Serial.print ("Vout =");
Serial.print (tegangan_hasil);
Serial.println ("V");
delay (2000); //jeda selama dua detik
} </pre>
       </div>
       <p>Setelah mengupload program diatas, uji coba program yang sudah dibuat pada Arduino IDE dengan membuka Serial Monitor. Lalu arahkan sumber cahaya ke sensor LDR. Kondisi pada saat tersinari cahaya senter maupun tidak, akan terbaca dan tertampil nilainya pada serial monitor.</p>
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
        <a href="https://www.nyebarilmu.com/cara-mengakses-sensor-ldr-menggunakan-arduino/" style="text-decoration: none; color: white"><p style="padding-top: -20px">https://www.Nyebarilmu.com</p></a>
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