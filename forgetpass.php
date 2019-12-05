<!DOCTYPE html>
<html>
<head>
	<title> - Forgot Password</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<br/>
	<br/>
	<h2><b>Lupa Password ?</b></h2>	
	<br/>
	<div class="login">
		<div style="margin-top: 40px"></div>
		<form action="cek_login.php" method="post" onSubmit="return validasi()">
			<div>
				<label><b> Email:</b></label>
				<input type="text" name="email" id="email" placeholder="masukkan username" autocomplete="off" />
			</div>
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
</body>

 
<script type="text/javascript">
	function validasi() {
		var username = document.getElementById("username").value;
		var password = document.getElementById("password").value;		
		if (username != "" && password!="") {
			return true;
		}else{
			alert('Username dan Password harus di isi !');
			return false;
		}
	}
 
</script>
</html>