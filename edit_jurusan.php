<?php
include "koneksi.php";
include "css.php";

$qry_get_jurusan=mysqli_query($koneksi,"select * from jurusan where id_jurusan = '".$_GET['id_jurusan']."'");
$jurusan=mysqli_fetch_array($qry_get_jurusan);
?>

<?php
	session_start();

	if($_SESSION['level']=="admin"){
		//header("location:index.php?pesan=gagal");
	}
?>

<h3>Ubah Data Jurusan</h3>
<form action="proses_edit_jurusan.php" method="post">
	<input type="hidden" name="id_jurusan" value="<?=$jurusan['id_jurusan']?>">

	Nama Jurusan :
	<input type="text" name="nama_jurusan" value="<?=$jurusan['nama_jurusan']?>" class = "form-control">
	
	<input type="submit" name="simpan" value="Ubah Jurusan" class="btn btn-primary">
</form>