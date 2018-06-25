<?php
	$n =$_SESSION['email'];
	$q = "SELECT * FROM user WHERE email = '$n'";
	$r = mysqli_query($con,$q);
	$data = mysqli_fetch_array($r);

?>