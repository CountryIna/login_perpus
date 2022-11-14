<?php
include "koneksi.php";
include "css.php";

$qry_jadwal=mysqli_query($koneksi, "select * from jadwal join mata_kuliah on mata_kuliah.id_matkul=jadwal.id_matkul join dosen on dosen.id_dosen=jadwal.id_dosen");
$data_jadwal=mysqli_fetch_array($qry_jadwal);
?>

<?php
	session_start();

	if($_SESSION['level']=="admin"){
		//header("location:index.php?pesan=gagal");
	}
?>

<h3>Ubah Jadwal Kuliah</h3>
<form action="proses_edit_jadwal.php" method="post">
	<input type="hidden" name="id_jadwal" value="<?=$data_jadwal['id_jadwal']?>">
	
	Hari :
	<input type="text" name="hari" value="<?=$data_jadwal['hari']?>" class = "form-control">
	
	Jam :
	<input type="text" name="jam" value="<?=$data_jadwal['jam']?>" class = "form-control">

	Mata Kuliah :
	<select name="id_matkul" value="<?= $data_matkul['id_matkul']?>" class="form-select from-control" aria-label=".form-select-sm example">
		<option>Pilih Mata Kuliah</option>

		<?php
		include "koneksi.php";
		$qry_matkul=mysqli_query($koneksi,"select * from mata_kuliah");
		while($data_matkul=mysqli_fetch_array($qry_matkul)){
			echo'<option value="'.$data_matkul['id_matkul'].'">'.$data_matkul ['nama_matkul'].'</option>';
		};
		?>
	</select>

	Nama Dosen :
	<select name="id_dosen" value="<?= $data_dosen['id_dosen']?>" class="form-select from-control" aria-label=".form-select-sm example">
		<option>Pilih Nama Dosen</option>

		<?php
		include "koneksi.php";
		$qry_dosen=mysqli_query($koneksi,"select * from dosen");
		while($data_dosen=mysqli_fetch_array($qry_dosen)){
			echo'<option value="'.$data_dosen['id_dosen'].'">'.$data_dosen ['nama_dosen'].'</option>';
		};
		?>
	</select>
	<br>
	<input type="submit" name="simpan" value="Ubah Dosen" class="btn btn-primary">
</form>