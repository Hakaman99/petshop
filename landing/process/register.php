<?php
	include ("../config/connect.php");
	if(isset($_POST['submit'])){
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$alamat = $_POST['alamat'];
		$email = $_POST['email'];
		$lahir = $_POST['lahir'];
		$password = md5($_POST['password']);
		$password_confirm = md5($_POST['password-confirm']);
		$province = $_POST['provinsi'];
		$city = $_POST['city'];
		$postal_code = $_POST['postal_code'];

		if (empty($first_name) || empty($last_name) || empty($email) || empty($password) || empty($password_confirm) || empty($lahir) || empty($alamat) || empty($province) || empty($city) || empty($postal_code) || $password != $password_confirm) {
			echo '<script language = "javascript"> 
			alert("Isi Data Dengan Benar");
			document.location="../register.php"</script>';
		} else{
			mysqli_query($con,"INSERT INTO user (`nama_depan`, `nama_belakang`, `alamat`, `email`, `tanggal_lahir`, `password`, `id_provinsi`, `id_kota`, `level`) VALUES ('$first_name','$last_name','$alamat','$email','$lahir', '$password','$province','$city',0) ");
			echo '<script language = "javascript"> 
			alert("Register Success!");
			document.location="../index.php"</script>';
		}
	}


?>