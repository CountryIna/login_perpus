<html>
<head>
	<title>Halaman Admin</title>
</head>

<body>
	<?php
	session_start();

	if($_SESSION['level']=="petugas"){
		//header("location:index.php?pesan=gagal");
	}
	?>

	<h1> Halaman Admin</h1>

	<p> Halo <b> <?php echo $_SESSION['username']; ?></b> Anda Telah Login sebagai
		<b><?php echo $_SESSION['level']; ?></b>.</p>
		<a href="logout.php">LOGOUT</a>
		</br>
		</br>
</body>
</html>