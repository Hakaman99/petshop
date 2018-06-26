<?php
	if(!isset($_SESSION['level']) || $_SESSION['level'] !=0){
		echo '<script language = "javascript"> alert("Anda harus login terlebih dahulu !"); document.location="../index.php"</script>';
	}
?>