<?php
  include 'koneksi.php';
  $first_name = $_POST['first_name_reg'];
  $last_name = $_POST['last_name_reg'];
  $email = $_POST['email_reg'];
  $password1 = $_POST['passwords'];
  $password2 = $_POST['password_reg'];

  mysqli_query($koneksi, "SELECT * FROM akun WHERE email = '$email'");

  if(mysqli_affected_rows($koneksi) > 0){
    echo "<div align='center'>Email Sudah Terdaftar! <a href='register.php'>Back</a></div>";
   } else {
     if(!$email || !$password1) {
       echo "<div align='center'>Masih ada data yang kosong! <a href='register.php'>Back</a>";
     } elseif ($_POST['password_reg'] <> $_POST['passwords']) {
      echo "<div align='center'>Data password tidak Sama! <a href='register.php'>Back</a>";
    }  
      $simpan = mysqli_query($koneksi, "INSERT INTO akun VALUES('','$first_name','$last_name','$email','$password1')");
      if($simpan == true) {
        echo "<div align='center'>berhasil mendaftarkan akun anda, silahkan <a href='index.php'>Login</a></div>";
      } else {
        echo "ada kesalahan dalam menginput data!";
      }
    }
  ?>