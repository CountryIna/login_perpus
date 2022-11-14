<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<title>Perpustakaan</title>
</head>

<body>
	<h3>Tambah Data Dosen</h3>
	<form action="proses_tambah_dosen.php" method="post">
		
		Nama:
		<input type="text" name="nama_dosen" value="" class="form-control">
		
		Alamat :
		<input type="text" name="alamat" value="" class="form-control">
		
		Telepon :
		<input type="text" name="telepon" value="" class="form-control">
		<br>
		
		<input type="submit" name="simpan" value="Tambah Dosen" class="btn btn-primary">
	</form>
</body>
</html>