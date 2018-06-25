<?php
	include("../config/connect.php");
	$email = $_POST['email'];
	$password = md5($_POST['password']);


	if (isset($_POST['submit'])) {
		$sql = "SELECT * FROM user WHERE email= '$email' AND password='$password'";
		$query = mysqli_query($con,$sql);
		$result = mysqli_fetch_array($query);
		$jumlah = mysqli_num_rows($query);

		if($jumlah == 1){
			if ($result == 1) {
				$_SESSION['level'] = 1;
				$_SESSION['email'] = $result['email'];
				echo '<script language = "javascript"> alert("Login Success!"); document.location="../../admin/index.php"</script>';
			} else{
				$_SESSION['level'] = 0;
				$_SESSION['email'] = $result['email'];
				echo '<script language = "javascript"> alert("Login Success!"); document.location="../../penjual/index.php"</script>';
			}

		}else{
			echo '<script language = "javascript"> 
			alert("Login Fail!");
			document.location="../login.html"</script>';
		}
	}


?>