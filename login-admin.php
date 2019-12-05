<!DOCTYPE html>
<html>
<head>
	<title> - LOGIN ADMIN </title>
	<link rel="stylesheet" type="text/css" href="css/admin.css">
</head>
<body>
	<br/>
	<br/>
	<h2><b>ADMINISTRATOR</b></h2>
	<br/>
	<div class="login-admin">
	<br/>
		<form action="cek-loginadmin.php" method="POST" onSubmit="return validasi()">
			<div>
				<label><b> Email:</b></label>
				<input type="text" name="email" id="Email" placeholder="masukkan email" autocomplete="off" />
			</div>
			<div>
				<label><b>Password:</b></label>
				<input type="password" name="password" id="password" placeholder="masukkan password" autocomplete="off" />
			</div>			
			<div>
				<input type="submit" value="Login" class="tombol"> 
			</div>
		</form>
	</div>
</body>


 
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