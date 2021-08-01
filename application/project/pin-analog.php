<?php
require "../functions.php";

session_start();

  if(!isset($_SESSION['login'])) {
    header("Location: ../login");
  exit;
  } 

  $tampilkan = query("SELECT * FROM comment_1");

  if(isset($_POST['kirim'])) {

    if(komentar($_POST) > 0 ) {
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
  <title>KELAS IOT | PIN ANALOG</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="../../img/favicon.ico">
  <link rel="stylesheet" href="../../css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../../style/style_pin-analog.css">
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
      <h1 class="display-4" style="font-size: 45px">Penggunaan Pin Analog</h1>
      <div class="materi">
      <p>&nbsp;&nbsp;&nbsp;&nbsp;Pin analog pada Arduino (dan mikrokontroller lain pada umumnya) dapat digunakan untuk input dan output digital. Hanya saja pin analog memiliki fitur untuk dapat mengubah sinyal analog yang masuk menjadi nilai digital yang mudah diukur. Pin digital hanya dapat mengenali sinyal 0 volt sebagai nilai LOW dan 5 volt sebagai nilai HIGH. Sedangkan Pin analog dapat mengenali sinyal pada rentang nilai voltase tersebut. Hal ini sangat berguna ketika kita hendak mengukur sesuatu dari sensor dan menggunakan nilai masukan tersebut untuk keperluan lain. </p>
      <p>&nbsp;&nbsp;&nbsp;&nbsp;Pin analog ini terhubung dengan converter pada mikrokontroller yang dikenal dengan istilah analog-to-digital converter (disingkat ADC atau A/D). Converter ini mengubah nilai analog berbentuk sinyal voltase ke dalam bentuk digital/angka supaya nilai analog ini dapat digunakan dengan lebih mudah dan aplikatif. Pada Arduino (mikrokontroller ATMega) converter ini memiliki resolusi 10 bit, artinya nilai hasil konversi berkisar dari 0 hingga 1023. Pada Arduino UNO, pin analog ditandai dengan label A0 sampai A5. Pada board lainnya, pin-pin yang diberi tanda A, Analog, ADC adalah pin analog. Fungsi yang kita gunakan untuk membaca nilai analog pada Arduino adalah <b style="color: crimson;">analogRead([nomorPin])</b>. Pada contoh kasus berikut, kita akan menghubungkan potensiometer pada pin analog A5 dan hasil konversi nilai analog akan kita lihat pada jendela Serial Monitor pada Arduino IDE.</p>
      <h1 class="display-4" style="font-size: 45px">Tutorial Memakai Pin Analog</h1>
      <p>Pertama siapkan Bahan-bahan dan alat yang diperlukan untuk percobaan ini diantaranya :</p>
      <ol>
        <li>Arduino Uno board</li>
        <li>Software Arduino IDE</li>
        <li>Kabel jumper</li>
        <li>Potensiometer</li>
        <li>Breadboard</li>
      </ol>
      <p>Buatlah rangkaian seperti gambar dibawah :</p>
      <img class="pb-3" src="../../img/Potensiometer Kelas Robot.jpg" style="width: 300px;">
      <p>&nbsp;&nbsp;&nbsp;&nbsp;Potensiometer adalah kenop yang menghasilkan resistansi/hambatan variabel. Potensiometer memiliki 3 kaki (ada yang memiliki lebih dari 3 kaki, tapi biasanya kelipatan 3 dan pada dasarnya ada 3 jenis kaki), yakni dua kaki terluar yang masing-masing dihubungkan dengan 5V dan GND, dan kaki tengah yang menghasilkan keluaran nilai analog. Pada rangkaian di atas, kaki tengah potensiometer dihubungkan ke pin A5. Pin A5 akan menerima sinyal voltase dengan besaran sesuai dengan putaran kenop potensiometer. Semakin dekat putaran ke arah 5V, maka nilai resistansi akan semakin kecil sehingga nilai voltase yang keluar akan semakin besar mendekati 5V. Begitu pula sebaliknya. Sinyal tersebut akan dikonversi ke nilai angka dan ditampilkan pada jendela Serial Monitor.</p>
      <p>kode yang harus kita upload adalah seperti berikut:</p>
      <div class="container">
      <pre>
int pinPot = A5;   // pin untuk menerima sinyal analog dari potensiometer
int val = 0;       // variabel untuk menyimpan nilai konversi analog ke digital

void setup()
{
 Serial.begin(9600);  // setup koneksi serial
}

void loop() {
val = analogRead(pinPot);    // baca nilai analog dari potensiometer
Serial.println(val);         // kirim nilai val ke koneksi serial
delay(100);                  // beri jeda hingga pengulangan selanjutnya
}
      </pre>
    </div>
    <p>Hubungkan Arduino ke komputer dan upload program di atas. Apabila rangkaian yang dibuat sudah sesuai dengan gambar di atas dan kode program terupload dengan sukses, maka mestinya LED pada board Arduino akan menyala ketika potensiometer diputar searah jarum jam dan mati bila diputar berlawanan arah jarum jam.</p>
    </div>
  </div>
</div>

  <div class="container" style="padding-bottom: 2%;">
    <form method="post" action="" class="pb-4">
          <div class="list-comment">
            <h2>List Comment</h2>
            <hr>
            <?php $i=1; ?>
            <?php foreach( $tampilkan as $row ) : ?>

              <div class="comments" style="font-family: Calibri Regular; margin-left: 10px; text-align: justify;">
                <h5 style="font-weight: bold; font-size: 17px; color:  #16a085"><?= $row['name']; ?> (<?= $row['date']; ?>)</h5>
                <p><?= $row['comment']; ?></p>
              </div>
              <hr>

            <?php $i++; ?>
            <?php endforeach; ?>
          </div>

          <br>

          <div class="comment">
            <h2>Comment Here</h2>
            <input type="text" name="nama" class="form-control" placeholder="Masukan Username" required>
            <br>  
            <textarea name="komentar" class="form-control" placeholder="Masukan Komentar" required></textarea>
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
        <a href="https://kelasrobot.com/category/arduino-project" style="text-decoration: none; color: white"><p style="padding-top: -20px">https://www.Kelasrobot.com</p></a>
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