<?php
	include ("../config/connect.php");
	include ("../data.php");

	$sql ="SELECT DISTINCT b.id,b.nama,b.status,c.nama_depan,c.nama_belakang,c.alamat  FROM orderdetail a JOIN orders b ON (a.order_id = b.id) JOIN user c ON (b.id_pembeli = c.id) JOIN user d ON (a.idpenjual = d.id)";
	$result = mysqli_query($con, $sql);
	$i=0;
	while ($row = mysqli_fetch_array($result)) {
		$st='status'.$i++;
		$status = $_POST[$st];
		$idstatus=$row['id'];
		$sql = "UPDATE orders SET status='$status' WHERE id='$idstatus'";
		mysqli_query($con,$sql);
								
	}
	echo '<script language = "javascript"> document.location="../index.php"</script>';



?>