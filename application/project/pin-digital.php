<?php
require "../functions.php";

session_start();

  if(!isset($_SESSION['login'])) {
    header("Location: ../login");
  exit;
  } 

  $tampilkan = query("SELECT * FROM comment_2");

  if(isset($_POST['kirim'])) {

    if(komentar2($_POST) > 0 ) {
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
  <title>KELAS IOT | PIN DIGITAL</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="../../img/favicon.ico">
  <link rel="stylesheet" href="../../css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../../style/style_pin-digital.css">
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
    <div class="container" style="text-align: justify;">
      <h1 class="display-4" style="font-size: 45px">Penggunaan Pin Digital</h1>
      <p class="gb_1" style="text-align: justify;">&nbsp;&nbsp;&nbsp;&nbsp;Pada dasarnya semua pin yang ada pada Arduino (ATMega) berada pada mode input secara default. Jadi ketika kita ingin menggunakan suatu pin sebagai input, maka kita tidak mesti menuliskan <b style="color: crimson">pinMode(nomorPin, INPUT);</b>. Untuk menerima input digital yang masuk ke pin, kita gunakan fungsi <b style="color: crimson">digitalRead(nomorPin);</b>. Fungsi ini menerima satu parameter, yaitu nomor pin mana yang akan dibaca nilai inputnya. Fungsi ini akan mengembalikan nilai 1 dan 0, atau HIGH dan LOW (HIGH adalah konstanta dengan nilai 1 dan LOW adalah konstanta dengan nilai 0). Supaya lebih paham, silakan coba contoh berikut. Skenarionya adalah kita akan menghubungkan pushbutton ke pin 2 dan menyalakan LED yang ada pada board Arduino Uno ketika pushbutton tersebut ditekan.</p>
      <h1 class="display-4" style="font-size: 45px">Tutorial Memakai Pin Digital</h1>
      <p>Pertama siapkan Bahan-bahan dan alat yang diperlukan untuk percobaan ini diantaranya :</p>
      <ol>
        <li>Arduino Uno board</li>
        <li>Software Arduino IDE</li>
        <li>Kabel jumper</li>
        <li>Resistor 220 ohm</li>
        <li>Breadboard</li>
        <li>Pushbutton/switch</li>
        <li>Lampu LED</li>
      </ol>
      <p>Buatlah rangkaian seperti gambar dibawah :</p>
      <img src="../../img/Digital Read Push Button - Kelas Robot.jpg" style="width: 300px;">
      <p class="pt-4">kode yang harus kita upload adalah seperti berikut:</p>
      <div class="container">
      <pre>
byte tombol= 2;
byte led= 13;
int nilai;

void setup(){
  pinMode(led, OUTPUT);
  pinMode(tombol, INPUT);
}

void loop(){
  nilai= digitalRead(tombol);

  if(nilai == 1){
    digitalWrite(led, HIGH);
  }
  else{
    digitalWrite(led, LOW);
  }
}
      </pre>
      </div>
      <p>Hubungkan Arduino ke komputer dan upload program di atas. Apabila rangkaian yang dibuat sudah sesuai dengan gambar di atas dan kode program terupload dengan sukses, maka mestinya LED pada board Arduino akan menyala ketika pushbutton ditekan, dan LED akan mati begitu pushbutton dilepas.</p>
    </div>
  </div>

  <div class="container" style="padding-bottom: 2%;">
    <form method="post" action="" class="pb-4">
          <div class="list-comment">
            <h2>List Comment</h2>
            <hr>
            
            <?php foreach( $tampilkan as $row ) : ?>

              <div class="comments" style="font-family: Calibri Regular; margin-left: 10px; text-align: justify;">
                <h4 style="font-weight: bold"><?= $row['name']; ?> (<?= $row['date']; ?>)</h4>
                <p><?= $row['comment']; ?></p>
              </div>
              <hr>

            
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
        <a href="https:// www.codepolitan.com/analog-input-pada-arduino" style="text-decoration: none; color: white"><p style="padding-top: -20px">https://www.Codepolitan.com</p></a>
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