<?php
	$n =$_SESSION['id'];
	$q = "SELECT * FROM user WHERE id = '$n'";
	$r = mysqli_query($con,$q);
	$data = mysqli_fetch_array($r);

?>