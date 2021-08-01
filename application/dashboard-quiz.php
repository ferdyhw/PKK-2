<?php

session_start();

	if(!isset($_SESSION['login'])) {
		header("Location: login");
	exit;
	} 

?>

<!DOCTYPE html>
<head>
  <title>KELAS IOT | QUIZ IOT</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="../img/favicon.ico">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../style/style_6.css">
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
        <a class="nav-link active" href="dashboard-quiz">QUIZ</a>
      </li>
      <li class="nav-item3">
        <a class="nav-link" href="dashboard-project">PROJECT</a>
      </li>
      <li class="nav-item4">
        <a class="nav-link" style="color: crimson;" href="logout">LOGOUT</a>
      </li>
    </ul>
</nav>

<div class="soal container">
	<h3 class="display-3 hd_1">Quiz 1 Basic IoT</h3>
<?php 

$pertanyaan = array(
		0 => array(
			'soal' => 'Apa kepanjangan dari IoT ?',
		 	'pilihan' => 'A. Internet of Things |B. Internet of Thinks |C. Internet of Tips',
		 	'jawaban' => 'A'
		),
		1 => array(
			'soal' => 'Pada tahun berapa Internet mulai dikenal ?',
			'pilihan' => 'A. 1995 |B. 1990 |C. 1989',
			'jawaban' => 'C'
		),
		2 => array(
			'soal' => 'Berikut ini yang bukan merupakan pembagian dalam iot adalah ?',
			'pilihan' => 'A. Sektor Kesehatan |B. Sektor Pendidikan |C. Sektor Teknologi dan Jaringan',
			'jawaban' => 'B'
		),
		3 => array(
			'soal' => 'Dibawah ini yang bukan merupakan unsur pembentuk Internet of Things adalah ?',
			'pilihan' => 'A. AI (Artificial Intelligence) |B. Keterlibatan Aktif (Active Engagement) |C. AR (Augmented Reality)',
			'jawaban' => 'C'			
		),
		4 => array(
			'soal' => 'Metode apa yang digunakan pada Internet of Things   ?',
			'pilihan' => 'A. Nirkabel |B. Remote |C. Monitoring',
			'jawaban' => 'A'			
		),
		5 => array(
			'soal' => 'Bahasa pemrograman yang digunakan untuk memprogram microcontroller di Arduino IDE adalah ?',
			'pilihan' => 'A. C |B. C# |C. C++',
			'jawaban' => 'C'			 
		),
		6 => array(
			'soal' => 'Dalam IoT, ada kemungkinan untuk membuat/membuka jaringan baru, dan jaringan khusus IoT, merupakan pengertian dari unsur ?',
			'pilihan' => 'A. Konektivitas |B. Kecerdasan Buatan |C. Sensor',
			'jawaban' => 'A'			
		),
		7 => array(
			'soal' => 'Pada tahun berapakah RFID ditemukan ?',
			'pilihan' => 'A. 1999 |B. 1998 |C. 1997',
			'jawaban' => 'A'			
		),
		8 => array(
			'soal' => 'Apa kepanjangan dari RFID ?',
			'pilihan' => 'A. Radio Frequency Identify |B. Radio Frequency Identification |C. Remote Frequency Identification',
			'jawaban' => 'B'			
		),
		9 => array(
			'soal' => 'Dalam mengirimkan program pada Arduino, harus menggunakan software, yaitu ? ?',
			'pilihan' => 'A. Packet Tracer |B. Arduino IDE |C. Sublime Text',
			'jawaban' => 'B'			
		)

	);
?>

<?php

if(isset($_GET['pilihan'])) {
	$total = 0;

	foreach($_GET['pilihan'] as $a => $b) 
	
		if(substr($b, 0, 1) == $pertanyaan[$a]['jawaban']) 
			$total++;
			echo "
				<script type='text/javascript'>
					alert('Skor anda : ".$total."');
					var jwb = confirm('Kerjakan Quiz Berikutnya ?');
					if(jwb) {
						window.location ='dashboard-quiz-2';
					} else {
						window.location ='dashboard';
					}
				</script>
			";	
}
$no = 1;
$layout = '
	<div>
		<div><br>%s. %s</div>
		<div>%s</div>
	</div>
';

?>



<form>
	<?php
	foreach($pertanyaan as $key => $value) 
	{	
		$pilihan = explode('|', $value['pilihan']);
		$radio = "";
		foreach($pilihan as $h => $i)
		{
			$radio .= '<label><input type="radio" value="'.$i.'" style="margin-right: 10px;" name="pilihan['.$key.']">'.$i. '</label><br>';
		}

		printf($layout, $no++, $value['soal'], $radio);

	}

	?>
<input type="submit" class="mb-4" style="padding-top: 10px;" value="Submit" name="hSkor" onclick="return confirm('Sudah yakin dengan jawabannya ?');">
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

<?php 

if(isset($_GET['hSkor']) == 'Hitung Skor') {
	echo "
	<script type='text/javascript'>
	alert('Tidak boleh kosong');
	</script>
	";
}

?>