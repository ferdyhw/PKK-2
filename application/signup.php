<?php 
require 'functions.php';


if(isset($_POST['register']) ) {

	if(registrasi($_POST) > 0 ) {
		echo "<script>
				alert('Akun Berhasil Ditambahkan!');
				window.location='login'
				</script>";
	} else {
		echo mysqli_error($conn);
	}


}

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>KELAS IOT | SIGN UP</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="../img/favicon.ico">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../style/style_3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script type="text/javascript">
	$(document).ready(function(){		
		$('.form-checkbox').click(function(){
			if($(this).is(':checked')){
				$('#password').attr('type','text');
			}else{
				$('#password').attr('type','password');
			}
			if($(this).is(':checked')){
				$('#password2').attr('type','text');
			}else{
				$('#password2').attr('type','password');
			}
		});
	});
</script>

</head>
<body class="bg-dark" style="font-family: Viga;">
	
<form action="" method="post" class="form-signin" autocomplete="off">
	<center>
	  <h1 class="h3 mb-3 font-weight-normal align-items-center text-light">SIGN UP</h1>
	  <label for="username" class="sr-only">Username</label>
	  <input type="username" id="username" name="username" class="form-control" placeholder="Username" required autofocus>
	  <label for="password" class="sr-only">Password</label>
	  <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
	  <label for="password2" class="sr-only">Verify</label>
	  <input type="password" id="password2" name="password2" class="form-control" placeholder="Verify Password" required>
	  <div class="checkbox mb-2 text-light" style="margin-top: 10px; margin-bottom: 10px">
	  <input type="checkbox" class="form-checkbox" name="form-checkbox" style="color: white"> Show Password
	  </div>
	  <button class="btn btn-lg btn-primary btn-block mt-0" type="submit" name="register">Sign Up</button>
	  <div class="login">
	  <p style="color: white;">Sudah punya akun?<a href="login" style="text-decoration: none;"> Masuk</a></p>
	  </div>
	  <a href="../" style="color: #fff; text-decoration: none; font-size: 13px;">&laquo; KEMBALI &raquo;</a>
	 </center>
</form>

</body>
</html>