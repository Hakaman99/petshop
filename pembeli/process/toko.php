<?php
	include ("../config/connect.php");
	include ("../data.php");
	$nama = $_POST['nama_toko'];
	$alamat = $_POST['alamat_toko'];
	$provinsi = $_POST['provinsi'];
	$telp = $_POST['telp'];
	$city = $_POST['city'];
	$postal_code = $_POST['postal_code'];
	$_SESSION['level'] = 1;


	if (empty($nama) || empty($alamat) || empty($provinsi) || empty($telp) || empty($city) || empty($postal_code)) {
		echo '<script language = "javascript"> 
		alert("Isi Data Dengan Benar!");
		document.location="../toko.php"</script>';
	} else{
		$id = $data['id'];
		$sql = "INSERT INTO toko (`nama`, `alamat`, `no_telp`, `postal_code`, `id_provinsi`, `id_kota`,`id_user`) VALUES ('$nama', '$alamat', '$telp','$postal_code', '$provinsi', '$city','$id')";
		mysqli_query($con,$sql);
		$sql = "UPDATE user SET level = '1' WHERE id = '$id'";
		mysqli_query($con,$sql);
		echo '<script language = "javascript"> 
		alert("Success !!");
		document.location="../../penjual"</script>';

	}


?>