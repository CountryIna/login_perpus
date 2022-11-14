<?php
include "navbar.php";
include "css.php";
?>

<html lang="en">
  <head>
    <title> PERPUSTAKAAN UNIGA </title>
  </head>
  
  <body>
	<?php
	session_start();

	if($_SESSION['level']==""){
		//header("location:index.php?pesan=gagal");
	}
	?>

	<div class="jumbotron jumbotron-fluid bg-light text-dark">
	  <div class="container text-center">
		<img src="logo.png" width="300" class="rounded-circle">
		<h1 class="display-4"> SELAMAT DATANG </h1>
		<p class="lead">Web Project Perpustakaan Uniga </p>
	  </div>
	</div>

</body>
</html>