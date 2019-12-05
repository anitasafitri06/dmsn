<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
	<title> - Login DMSN Cloth</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<br/>
	<br/>
	<h2><b>DMSN CLOTH</b></h2>	
	<br/>
	
	<div class="login">
		<div style="margin-top: 40px"></div>
		<form action="cek_login.php" method="post" onSubmit="return validasi()">
			<div>
				<label><b> Email:</b></label>
				<input type="text" name="email" id="email" placeholder="masukkan email" autocomplete="off" />
			</div>
			<div>
				<label><b>Password:</b></label>
				<input type="password" name="password" id="password" placeholder="masukkan password" autocomplete="off" />
			</div>			
			<div>
				<input  type="submit" value="Login" class="tombol"> 
			</div>
		</form>
		<div>
               <a class="tombol-center" href="register.php">Create an Account</a>
            </div>
        <div>
        	<h4 class="forget"><a href="forgetpass.php"> Forget Password </a></h4>
        </div>
	</div>


	<!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  
  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>
</body>

 <form action="cek_login.php" method="post">
<script type="text/javascript">
	function validasi() {
		var email = document.getElementById("email").value;
		var password = document.getElementById("password").value;		
		if (email != "" && password!="") {
			return true;
		}else{
			alert('Email dan Password harus di isi !');
			return false;
		}
	}
 
</script>
</html>