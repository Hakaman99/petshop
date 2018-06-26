<?php
	include ("../config/connect.php");
	$nama = $_POST['nama'];
	$kategori = $_POST['kategori'];
	$fungsi = $_POST['fungsi'];
	$harga = $_POST['harga'];
	$stok = $_POST['stok'];
	$deskripsi = $_POST['deskripsi'];

	$lokasi = $_FILES['gambar']['tmp_name'];
	$nama_gambar = $_FILES['gambar']['name'];
	$direktori = "../../images/$nama_gambar";

	if (!empty($lokasi)) {
		$id = $_SESSION['id'];
		$sql = "INSERT INTO barang (`nama`, `kategori`, `fungsi`, `harga`, `deskripsi`, `stok`, `gambar`, `id_user`) VALUES ('$nama', '$kategori', '$fungsi','$harga','$deskripsi','$stok','$nama_gambar','$id')";
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


	}elseif (condition) {
		echo '<script language = "javascript"> 
		alert("Fail!");
		document.location="../penjual_daftarProduk.php"</script>';
	}



?>