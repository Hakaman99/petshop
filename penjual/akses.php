<?php
	if(!isset($_SESSION['level']) || $_SESSION['level'] !=1){
		echo '<script language = "javascript"> alert("Anda harus login terlebih dahulu !"); document.location="../index.php"</script>';
	}
?>