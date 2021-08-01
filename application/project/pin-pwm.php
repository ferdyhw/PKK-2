<?php
require "../functions.php";

session_start();

  if(!isset($_SESSION['login'])) {
    header("Location: ../login");
  exit;
  } 

  $tampilkan = query("SELECT * FROM comment_3");

  if(isset($_POST['kirim'])) {

    if(komentar3($_POST) > 0 ) {
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
  <title>KELAS IOT | PIN PWM</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="../../img/favicon.ico">
  <link rel="stylesheet" href="../../css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../../style/style_pin-pwm.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
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
      <h1 class="display-4" style="font-size: 45px">Penggunaan Pin PWM</h1>
      <p class="gb_1" >&nbsp;&nbsp;&nbsp;&nbsp;Analog input dihasilkan oleh teknik yang dikenal dengan istilah PWM atau Pulse Width Modulation. PWM memanipulasi keluaran digital sedemikian rupa sehingga menghasilkan sinyal analog. Mikrokontroler mengeset output digital ke HIGH dan LOW bergantian dengan porsi waktu tertentu untuk setiap nilai keluarannya. Durasi waktu untuk nilai HIGH disebut pulse width atau panjang pulsa. Variasi nilai output analog didapatkan dari perubahan panjang pulsa yang diberikan pada satu periode waktu dan dilakukan berulang-ulang. Untuk lebih jelasnya perhatikan ilustrasi berikut:</p>
      <img src="../../img/pwm.jpg" style="width: 300px">
      <p class="pt-3">&nbsp;&nbsp;&nbsp;&nbsp;Kondisi HIGH adalah kondisi ketika sinyal berada di atas grafik (5V) dan LOW adalah ketika sinyal berada di bawah (0V). Duty cycle adalah persentasi panjang pulsa HIGH dalam satu periode sinyal. Ketika duty cyclenya 0% atau sinyal LOW penuh, maka nilai analog yang dikeluarkan adalah 0V atau setara dengan GND. Ketika duty cyclenya 100% atau sinyal HIGH penuh maka sinyal yang dikeluarkan adalaah 5V. Untuk mengatur nilai duty cycle, kita gunakan fungsi analogWrite([nomorPin], [nilai]). Nilai pada parameter kedia berkisar antara 0 hingga 255. Bila kita hendak mengeset duty cycle ke 0%, maka kita set nilai parameter ke 0, dan untuk duty cycle 100%, maka kita set nilai parameter ke 255. Jadi bila misalkan kita hendak mengeset duty cycle ke 50%, berarti nilai yang harus kita set adalah 127 (50% x 255).</p>
      <p>&nbsp;&nbsp;&nbsp;&nbsp;Sebenarnya berdasarkan konsep PWM di atas, kita dapat mensimulasikan PWM pada semua pin digital. Tapi khusus penggunaan fungsi digitalWrite() kita hanya bisa menggunakannya pada pin-pin PWM. Seperti pada Arduino Uno, pin yang dapat menggunakan fungsi ini hanya pin 3, 5, 6, 9, 10 dan 11. Biasanya pin PWM disimbolkan dengan karakter '~'. Itulah sekilas tentang teori PWM. Supaya lebih paham tentang analog output, kita coba implementasikan ke dalam rangkaian.</p>
      <h1 class="display-4" style="font-size: 45px">Tutorial Memakai Pin PWM</h1>
      <p>Pertama siapkan Bahan-bahan dan alat yang diperlukan untuk percobaan ini diantaranya :</p>
      <ol>
        <li>Arduino Uno board</li>
        <li>Software Arduino IDE</li>
        <li>Breadboard</li>
        <li>kabel jumper</li>
        <li>Lampu LED</li>
        <li>Resistor 220 ohm</li>
      </ol>
      <p>Buat rangkaian seperti pada gambar di bawah ini :</p>
      <img src="../../img/pwm.png" style="width: 300px">
      <p class="pt-3">Pada rangkaian di atas, kita menghubungkan pin 3 ke kaki anoda (positif) LED dengan melalui resistor 220 ohm dan menghubungkan kaki yang lain ke GND. Alih-alih menyalakan dan mematikan LED menggunakan digitalWrite() seperti pada artike Digital Input Output, kita akan menyalakan LED dengan intensitas yang terus naik hingga titik maksimum dan kemudian menurunkan intensitasnya terus hingga mati. Demikian seterusnya. Berikut adalah kode programnya :</p>
      <div class="container">
        <pre>
int pinLed = 3; // LED terhubung dengan pin 3

void setup(){}

void loop() {
// buat iterasi dari 0 sampai 255 dengan kelipatan 5
for (int nilai = 0; nilai = 0; nilai -= 5) {
// set nilai analog menggunakan iterasi di atas
analogWrite(pinLed, nilai);
// beri jeda waktu 3 milidetik
delay(30);
   }
}       </pre>
      </div>
      <p>Hubungkan Arduino ke komputer dan upload program di atas. Apabila rangkaian yang dibuat sudah sesuai dengan gambar di atas dan kode program terupload dengan sukses, maka mestinya LED pada board Arduino akan menyala terang dan perlahan redup, begitu seterusnya.</p>
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