<?php
	include ("../config/connect.php");
	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$kategori = $_POST['kategori'];
	$fungsi = $_POST['fungsi'];
	$harga = $_POST['harga'];
	$stok = $_POST['stok'];
	$deskripsi = $_POST['deskripsi'];

	$gbr = $_POST['gbr'];
	$lokasi = $_FILES['gambar']['tmp_name'];
	$nama_gambar = $_FILES['gambar']['name'];
	$direktori = "../../images/$nama_gambar";
	$lokasi_gbr = "../../images/".$gbr;
	if (!empty($lokasi)) {
		
		if (file_exists($lokasi_gbr)) {
			unlink($lokasi_gbr);
		}

		$sql="UPDATE barang SET nama ='$nama', kategori = '$kategori', fungsi ='$fungsi', harga ='$harga', deskripsi = '$deskripsi', stok = '$stok', gambar ='$nama_gambar' WHERE id ='$id'";
		$q = mysqli_query($con,$sql);

		if ($q) {
			move_uploaded_file($lokasi, $direktori);
			echo '<script language = "javascript"> 
			alert("Success!");
			document.location="../penjual_daftarProduk.php"</script>';
		}else{
			echo '<script language = "javascript"> 
			alert("Fail!");
			document.location="../penjual_daftarProduk.php"</script>';
		}


	}else {
		$sql="UPDATE barang SET nama ='$nama', kategori = '$kategori', fungsi ='$fungsi', harga ='$harga', deskripsi = '$deskripsi', stok = '$stok' WHERE id ='$id'";
		$q = mysqli_query($con,$sql);

		if ($q) {
			move_uploaded_file($lokasi, $direktori);
			echo '<script language = "javascript"> 
			alert("Success!");
			document.location="../penjual_daftarProduk.php"</script>';
		}else{
			echo '<script language = "javascript"> 
			alert("Fail!");
			document.location="../penjual_daftarProduk.php"</script>';
		}
	}



?>

?>