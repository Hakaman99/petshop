<?php
include ("../config/connect.php");
$id = $_GET['id'];

$sql= "SELECT * FROM barang WHERE id='$id'";
$r = mysqli_query($con,$sql);
$row = mysqli_fetch_array($r);
$lokasi = "../../images/".$row['gambar'];

if (file_exists($lokasi)) {
	unlink($lokasi);
	$sql = "DELETE FROM barang WHERE id='$id'";
	mysqli_query($con,$sql);
	echo '<script language = "javascript"> 
	alert("Success!");
	document.location="../penjual_daftarProduk.php"</script>';
}else{
	echo '<script language = "javascript"> 
	alert("Fail!");
	document.location="../penjual_daftarProduk.php"</script>';
}




?>