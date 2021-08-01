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
  <title>KELAS IOT | MICROCONTROLLER</title>
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
      <h1 class="display-4" style="font-size: 45px;">Mikrocontroller</h1>
      <p class="gb_1">&nbsp;&nbsp;&nbsp;&nbsp;Mikrocontroller adalah suatu peralatan yang berfungsi untuk mendeteksi gejala-gejala atau sinyal-sinyal yang berasal dari perubahan suatu energi seperti energi listrik, energi fisika, energi kimia, energi biologi, energi mekanik dan sebagainya. Mikrokontroler biasa digunakan pada produk dan perangkat yang dapat dikontrol secara otomatis, seperti sistem kontrol mesin mobil (engine control), perangkat medis (medical devices), pengendali jarak jauh (remote control), mesin perkantoran (office machines), dan juga mainan (games). Penggunaan mikrokontroler lebih ekonomis dibandingkan sebuah desain sistem yang berisikan mikroprosesor, memori, dan perangkat input/ouput terpisah. Mikrokontroler adalah komputer mikro dalam satu chip tunggal. Mikrokontroler memadukan CPU, ROM, RWM, I/O paralel, I/O seri, counter-timer, dan rangkaian clock dalam satu chip tunggal seperti terlihat pada Gambar.</p>
      <center><a target="" href="../../img/mic_1.png"><img src="../../img/mic_1.png"></a></center>
      <p class="gb_1 pt-3">&nbsp;&nbsp;&nbsp;&nbsp;Sama halnya dengan mikroprosesor, mikrokontroler adalah perangkat yang dirancang untuk kebutuhan umum (specific purpose). Sesuai dengan fungsinya sebagai pengendali, mikrokontroler berisikan sepaket chip lengkap yang terdiri dari fitur-fitur pengolah data yang juga terdapat dalam mikroprosesor, ditambah RAM, ROM, I/O, dan fitur lain yang terintegrasi di dalamnya. Contohnya dapat ditemui pada perangkat otomotif, mesin industri, elektronik dan perangkat- perangkat lain yang memiliki embedded sistem di dalamnya. Mikrokontroler sebagai sebuah chip telah mengalami perkembangan baik dari sisi arsitektur, teknologi dan kemampuannya. Untuk melihat perbedaan konsep diantara mikroprosesor dan mikrokontroler di bawah ini ditunjukan pada Tabel perbandingan konfigurasi, arsitektur, dan set instruksi diantara mikroprosesor Z-80 CPU dengan mikrokontroler AT89C51</p>
      <center><a target="_blank" href="../../img/mic_2.png"><img src="../../img/mic_2.png" style="width: 300px;"></a></center>
      <p class="gb_1 pt-3">Terdapat perbedaan yang signifikan antara mikrokontroler dan mikroprosessor. Perbedaan yang utama antara keduanya dapat dilihat dari dua faktor utama yaitu arsitektur perangkat keras (hardware architecture) dan aplikasi masing-masing.</p>
      <ol>
        <li>Ditinjau dari segi arsitekturnya, mikroprosesor hanya merupakan single chip CPU, sedangkan mikrokontroler dalam IC-nya selain CPU juga terdapat device lain yang memungkinkan mikrokontroler berfungsi sebagai suatu single chip komputer. Dalam sebuah IC mikrokontroler telah terdapat ROM, RAM, EPROM, serial interface dan paralel interface, timer, interrupt controller, konverter Anlog ke Digital, dan lainnya (tergantung feature yang melengkapi mikrokontroler tersebut).</li>
        <li>Sedangkan dari segi aplikasinya, mikroprosessor hanya berfungsi sebagai Central Processing Unit yang menjadi otak komputer, sedangkan mikrokontroler, dalam bentuknya yang mungil, pada umumnya ditujukan untuk melakukan tugas–tugas yang berorientasi kendali (control) pada rangkaian yang membutuhkan jumlah komponen minimum dan biaya rendah (low cost).</li>
      </ol>
      <h1 class="display-4" style="font-size: 45px;">Konsep Arduino</h1>
      <p class="gb_1">&nbsp;&nbsp;&nbsp;&nbsp;Arduino merupakan papan-tunggal mikrokontroler serba guna yang bisa diprogram dan bersifat open-source. Platform Arduino sekarang ini menjadi sangat populer dengan pertambahan jumlah pengguna baru yang terus meningkat. Hal ini karena kemudahannya dalam penggunaan dan penulisan kode program. Tidak seperti kebanyakan papan sirkuit pemrograman sebelumnya, Arduino tidak lagi membutuhkan perangkat keras terpisah (disebut programmer atau downloader) untuk memuat atau meng-upload kode baru ke dalam mikrokontroler. Cukup dengan menggunakan kabel USB untuk mulai menggunakan Arduino.Selain itu, Arduino IDE menggunakan bahasa pemrograman C++ dengan versi yang telah disederhanakan, sehingga lebih mudah dalam belajar pemrograman. Arduino akhirnya berhasil menjadi papan sirkuit pemrograman paling disukai hingga menjadikannya sebagai bentuk standar dari fungsi mikrokontroler dengan paket yang mudah untuk diakses.</p>
      <p>&nbsp;&nbsp;&nbsp;&nbsp;Hardware dan software Arduino dirancang bagi para seniman, desainer, pehobi, hacker, pemula dan siapapun yang tertarik untuk menciptakan objek interaktif dan pengembangan lingkungan. Arduino mampu berinteraksi dengan tombol, LED, motor, speaker, GPS, kamera, internet, ponsel pintar bahkan dengan televisi. Fleksibilitas ini dihasilkan dari kombinasi ketersediaan software Arduino yang gratis, papan perangkat keras yang murah, dan keduanya yang mudah untuk dipelajari. Hal inilah yang menciptakan jumlah pengguna menjadi sebuah komunitas besar dengan berbagai kontribusinya yang telah dirilis pada berbagai proyek dengan berbasiskan Arduino</p>
      <p>&nbsp;&nbsp;&nbsp;&nbsp;Arduino Uno merupakan versi terbaru dari keluarga Arduino, berbasis mikrokontroler ATmega328, menyempurnakan tipe sebelumnya, Duemilanove. Perbedaan Arduino tersebut adalah tidak menggunakan IC FTDI (Future Technology Devices International) USB to Serial sebagai driver komunikasi USB-nya tetapi menggunakan mikrokontroler ATmega8U2 yang diprogram sebagai konverter USB ke serial. Uno sendiri diambil dari bahasa Italia yang artinya 1 (satu). Gambar dibawah adalah board Arduino Uno dengan spesifikasi hardware :</p>
      <ul>
        <li>Microcontroller : ATmega328</li>
        <li>Tegangan Operasi : 5 V</li>
        <li>Tegangan Input : 7 – 12V</li>
        <li>Digital I/O : 14 pin</li>
        <li>PWM : 6 channel</li>
        <li>Analog Input : 6 channel</li>
        <li>Memory : 32KB Flash PEROM (0,5 KB digunakan oleh bootloader), 2KB SRAM dan 1KB EEPROM</li>
        <li>Frekuensi Clock : 16 MH</li>
      </ul>
     <center><img src="../../img/rangkaian_arduino.png" style="width: 300px;"></center>
     <p class="gb_1 pt-3">Berikut ini adalah penjelasan beberapa bagian utama dari papan Arduino uno, yaitu: </p>
     <ol>
       <li>Power Supply <p>Pada Arduino board, ada 2 (dua) pilihan sumber tegangan yang dapat digunakan, yakni dari port USB maupun dari power supply eksternal. Dengan menghubungkan port USB di komputer/laptop dengan Arduino maka secara otomatis power supply Arduino bersumber dari port USB. Untuk sumber tegangan eksternal (non-USB) yakni dengan menghubungkan Arduino board dengan sumber tegangan DC. Tegangan yang direkomendasikan adalah 7 sampai 12 V, jika kurang dari 7V akan menyebabkan ketidakstabilan tegangan, sedangkan jika lebih dari 12V akan menyebabkan panas dan akibat fatal berupa kerusakan pada board Arduino.</p></li>
       <li>Input – Output <p>Port Arduino berbeda penamaannya dengan sistem minimum mikrokontroler atau microntroller development system. Sebagai contoh pada system minimum ATmega8535 penamaan port adalah PORTA, PORTB, PORTC dan PORTD, untuk akses per-bit maka PORTA.0 s/d PORTA.7, contoh lain pada AT89S51 maka PORT0, PORT1 dan seterusnya. Sistem penamaan port pada Arduino merupakan urutan nomor port, mulai dari nomor nol (0), satu (1) dan seterusnya. Untuk digital I/O dengan nama pin 1, 2 sampai 13, sedangkan untuk analog input menggunakan nama A0, A1 sampai A5. 
       Pada Arduino uno terdapat 14 pin digital input – output. Secara umum berfungsi sebagai port input – output biasa, namun ada beberapa pin yang mempunyai fungsi alternatif. Sebagai contoh, pin 2 dan 3 juga sebagai pin interupsi eksternal. Kemudian pin 5,6,9,10 dan 11 dapat dipakai untuk PWM (Pulse Width Modulation) yang sering dipakai untuk kendali motor DC maupun motor servo. Tabel dibawah menunjukkan nomor dan fungsi pin pada Arduino uno.</p></li>
       <center><img src="../../img/t_arduino.png" style="width: 280px;"></center>
       <li>Analog Input <p>Arduino memiliki 6 pin analog input, berfungsi membaca sinyal masukan analog seperti sensor analog. Meskipun demikian pin analog input dapat pula digunakan untuk keperluan digital I/O. Tabel dibawah menunjukkan nomor dan fungsi pin input analog.</p></li>
       <center><img src="../../img/t2_arduino.png" style="width: 280px;"></center>
       <p class="gb_1 pt-3">Arduino memberikan kemudahan bagi penggunanya untuk membuat berbagai proyek berbasis mikrokontroler. Contohnya yang dapat dibuat dengan Arduino antara lain, untuk membuat simulasi lampu, membuat robot, mengontrol motor dc, mengontrol motor stepper, pengatur suhu, display LCD, dan masih banyak yang lainnya.</p>
     </ol>
     <h1 class="display-4" style="font-size: 45px;">Software Arduino</h1>
     <p>&nbsp;&nbsp;&nbsp;&nbsp;Arduino dapat digunakan untuk mengembangkan objek interaktif, mengambil masukan dari berbagai switch atau sensor, dan mengendalikan berbagai lampu, motor, dan output fisik lainnya. Proyek Arduino dapat berdiri sendiri, atau berkomunikasi dengan perangkat lunak (software) yang berjalan pada komputer (misalnya: Flash, Pengolahan, MaxMSP, database, dsb). Board dapat dirakit sendiri atau dibeli; open-source IDE dapat didownload secara gratis.</p>
     <p>&nbsp;&nbsp;&nbsp;&nbsp;Arduino adalah software open source yang memudahkan untuk menulis kode program dan meng-upload-nya ke board Arduino. Software Arduino dapat berjalan pada Windows, Mac OS X, dan Linux. Software ini ditulis dalam bentuk Java dan berbasis processing, avr-gcc, dan perangkat lunak open source lainnya. </p>
     <p>&nbsp;&nbsp;&nbsp;&nbsp;Software Arduino yang ada dalam situs Arduino <a href="https://www.arduino.cc/">https://www.arduino.cc/</a> telah memiliki versi 1.6.6, seperti terlihat pada Gambar 2.4. Software Arduino IDE (Integrated Development Environment) adalah sebuah perangkat lunak yang memudahkan dalam mengembangkan aplikasi mikrokontroler mulai dari menuliskan source program, kompilasi, upload hasil kompilasi, dan uji coba secara terminal serial. Arduino dapat dijalankan di komputer dengan berbagai macam platform karena didukung atau berbasis Java. Source program yang dibuat untuk aplikasi mikrokontroler adalah bahasa C/C++ dan dapat digabungkan dengan assembly.</p>
     <p>&nbsp;&nbsp;&nbsp;&nbsp;Di samping IDE Arduino sebagai jantungnya, bootloader adalah jantung dari Arduino lainnya yang berupa program kecil yang dieksekusi sesaat setelah mikrokontroler diberi catu daya. Bootloader ini berfungsi sebagai pemonitor aktifitas yang diinginkan oleh Arduino. Jika dalam IDE terdapat file hasil kompilasi yang akan di-upload, bootloader secara otomatis menyambutnya untuk disimpan dalam memori program. Jika pada saat awal mikrokontroler bekerja, bootloader akan mengeksekusi program aplikasi yang telah diupload sebelumnya. Jika IDE hendak mengupload program baru, bootloader seketika menghentikan eksekusi program berganti menerima data program untuk selanjutnya diprogramkan dalam memori program mikrokontroler. </p>
     <p>&nbsp;&nbsp;&nbsp;&nbsp;Hubungan komunikasi data antara IDE arduino dengan board Arduino digunakan komunikasi secara serial dengan protokol RS232. Jika board arduino sudah dilengkapi dengan komunikasi serial RS232 (biasanya USB), maka dapat langsung ditancapkan ke USB komputer. Piranti serial RS232 ini digunakan jika board arduino atau arduino buatan sendiri tidak dilengkapi dengan piranti serial 232. </p>
     <p class="pt-3">Source PDF : <a href="https://drive.google.com/open?id=1N9Ymh33BCD7XS_FabvZOTJlDzSRKzmtT">Modul-Singkat-Arduino-Teori-dan-Praktikum-2019-PakAnton</a></p>
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