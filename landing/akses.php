<?php
	

	if(isset($_SESSION['level']) && $_SESSION['level'] ==0){
		echo '<script language = "javascript"> document.location="../pembeli"</script>';
	} else if(isset($_SESSION['level']) &&$_SESSION['level'] ==1){
		echo '<script language = "javascript"> document.location="../penjual"</script>';
	} else if(isset($_SESSION['level']) && $_SESSION['level'] ==2){
		echo '<script language = "javascript"> document.location="../admin"</script>';
	}
?>