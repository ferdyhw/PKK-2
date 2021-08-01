<?php
session_start();
require 'functions.php';

//Cek cookie
if(isset($_COOKIE['id']) && isset($_COOKIE['user']) ) {
	$id = $_COOKIE['id'];
	$user = $_COOKIE['user'];

//Ambil username berdasarkan id
	$result = mysqli_query($conn, "SELECT username FROM user WHERE id = $id"); 
	$row = mysqli_fetch_assoc($result);

//Cek cookie dan username
	if($user === hash('sha256', $row['username']) ) {
		$_SESSION['login'] = true;
	}
}

//Session ke Dashboard
if(isset($_SESSION['login'])) {
		header("Location: dashboard");
	exit;
}

//Login
if(isset($_POST['login']) ) {

	$username = $_POST['username'];
	$password = $_POST['password'];

	$result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

	//Cek username
	if(mysqli_num_rows($result) === 1 ) {

	//Cek password
		$row = mysqli_fetch_assoc($result);
		if(password_verify($password, $row['password'])) {

	//Set session
		$_SESSION['login'] = true;

			header("Location: dashboard");
			exit;
		}
	}

		if($password !== $result) {
		echo "<script>
			alert('Username / Password Tidak Sesuai!');
			window.location='login'
		</script>";
		return false;
	}

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>KELAS IOT | LOGIN</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="../img/favicon.ico">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../style/style_2.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script type="text/javascript">
	$(document).ready(function(){		
		$('.form-checkbox').click(function(){
			if($(this).is(':checked')){
				$('#pswrd').attr('type','text');
			}else{
				$('#pswrd').attr('type','password');
			}
		});
	});
</script>
</head>
<body class="bg-dark" style="font-family: Viga;">
	
<form action="" method="post" class="form-signin" autocomplete="off">
	<center>
	  <h1 class="h3 mb-3 font-weight-normal align-items-center text-light">LOGIN</h1>
		<?php if(isset($error) ) : ?>
			<p style="font-family: Courier; color:red;">Username / Password Salah</p>
		<?php  endif; ?>
	  <label for="username" class="sr-only">Username</label>
	  <input type="username" id="username" name="username" class="form-control" placeholder="Username" required autofocus>
	  <label for="password" class="sr-only">Password</label>
	  <input type="password" id="pswrd" name="password" class="form-control" placeholder="Password" required>
	  <div class="checkbox mb-2 text-light" style="margin-top: 10px; margin-bottom: 10px">
	  <input type="checkbox" class="form-checkbox" name="form-checkbox" style="color: white"> Show Password
	  </div>
	  <button class="btn btn-lg btn-primary btn-block" type="submit" name="login">Login</button>
	  <div class="signup">
	  	<p style="color: white;">Belum punya akun?<a href="signup" style="text-decoration: none;"> Buat akun</a></p>
	  </div>
	  <a href="../" style="color: #fff; text-decoration: none; font-size: 13px;">&laquo; KEMBALI &raquo;</a>
	 </center>
</form>

</body>
</html>