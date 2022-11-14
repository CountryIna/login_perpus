<?php
include "koneksi.php";
include "css.php";

$qry_get_matkul=mysqli_query($koneksi,"select * from mata_kuliah where id_matkul = '".$_GET['id_matkul']."'");
$nama=mysqli_fetch_array($qry_get_matkul);
?>

<?php
	session_start();

	if($_SESSION['level']=="admin"){
		//header("location:index.php?pesan=gagal");
	}
?>

<h3>Ubah Mata Kuliah</h3>
<form action="proses_edit_matkul.php" method="post">
	<input type="hidden" name="id_matkul" value="<?=$nama['id_matkul']?>">
	
	Nama Mata Kuliah :
	<input type="text" name="nama_matkul" value="<?=$nama['nama_matkul']?>" class = "form-control">
	
	<input type="submit" name="simpan" value="Ubah Mata Kuliah" class="btn btn-primary">
</form>