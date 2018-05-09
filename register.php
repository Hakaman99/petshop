<div id="popupregis">
	<div class="window" style="margin:-3% auto;">
		<img src="images/logo-Pawnclaws2.png" alt="" class="logo">
  		<form action="proses/proses_register.php" method="post">
          <a href="index.php" class="close-button" title="Close" style="text-decoration: none;">X</a>
  				<h3 class="caption">Register</h3>
  				
   				<input type="text" name = "nama" placeholder="Nama...">
          <br>
  				<input type="text"  name="alamat" placeholder="Alamat..."">
  				<br>
          <input type="email"  name="email" placeholder="Email...">
          <br>
          <input type="date"  name="tanggal" placeholder="Tanggal Lahir..." value="<?php echo date('Y-m-d'); ?>">
          <br>
          <input type="text"  name="username" placeholder="Username...">
          <br>
          <input type="password"  name="password" placeholder="Password...">
          <br>
   				<button style="float:right;left: 0px" class="tombol2" name="submit">Daftar</button><br><br>
 		 </form>
	</div>
</div>