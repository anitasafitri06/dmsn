<?php 
// mengaktifkan session php
session_start();
error_reporting("~EAL^Deprecated"); 

// menghubungkan dengan koneksi
include 'koneksi.php';
 
// menangkap data yang dikirim dari form
$email = $_POST['email'];
$password = $_POST['password'];
 
// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi,"SELECT * FROM akun WHERE email='$email' AND password='$password'");
if(mysqli_num_rows($data) < 0) {
	echo "<div align='center'>Email tidak terdaftar! <a href='login-admin.php'>Back</a></div>";
} else {
	$datas = mysqli_fetch_array($data);
	$pas = $datas['password'];
	if($password == $pas) {
		$_SESSION['user'] = $datas['email'];
		header('location: index.html');
	} else {
		echo "<div align='center'>Password salah<a href='login-admin.php'>Back</a></div>";
	}
}
?>