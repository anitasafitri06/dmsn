<?php 
$koneksi = mysqli_connect("localhost","root","","dmsn");

function daftar($data){
	global $koneksi;
	$FirstName = htmlspecialchars($data['FirstName']);
	$LastName = htmlspecialchars($data['LastName']);
	$email = htmlspecialchars($data['email']);
	$Password = htmlspecialchars($data['Password']);

	$query = "INSERT INTO akun
				VALUES
				('','$FirstName','$LastName','$email','$Password','2')
				";
	mysqli_query($koneksi,$query);
	return mysqli_affected_rows($koneksi);
}

function daftaradmin($data){
	global $koneksi;
	$FirstName = htmlspecialchars($data['FirstName']);
	$LastName = htmlspecialchars($data['LastName']);
	$email = htmlspecialchars($data['email']);
	$Password = htmlspecialchars($data['Password']);
	$ConfirmPassword = htmlspecialchars($data['ConfirmPassword']);

	$query = "INSERT INTO admin
				VALUES
				('','1','','$FirstName','$LastName','$email','$Password','ConfirmPassword')
				";
}
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
?>