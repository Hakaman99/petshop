<?php
	include("config/connect.php");
	$prov_id = $_POST['prov_id'];
	$sql_kota = mysqli_query($con, "SELECT * FROM kota WHERE id_provinsi= $prov_id");

	echo "<option>Pilih Kota</option>";
	while ($row = mysqli_fetch_array($sql_kota)) {
		?>
			<option value="<?=$row['id']; ?>"><?=$row['nama']?></option>
		<?php
	}


?>