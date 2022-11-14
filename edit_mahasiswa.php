<?php
include "koneksi.php";
include "css.php";

$qry_mahasiswa=mysqli_query($koneksi, "select * from mahasiswa join jurusan on jurusan.id_jurusan=mahasiswa.id_jurusan");
$data_mahasiswa=mysqli_fetch_array($qry_mahasiswa);
?>

<?php
	session_start();

	if($_SESSION['level']=="admin"){
		//header("location:index.php?pesan=gagal");
	}
?>

<h3>Ubah Data Mahasiswa</h3>
<form action="proses_edit_mahasiswa.php" method="post">
	<input type="hidden" name="id_mahasiswa" value="<?=$data_mahasiswa['id_mahasiswa']?>">

	Nama :
	<input type="text" name="nama" value="<?=$data_mahasiswa['nama']?>" class = "form-control">

	NIM :
	<input type="text" name="nim" value="<?=$data_mahasiswa['nim']?>" class = "form-control">

	Alamat :
	<input type="text" name="alamat" value="<?=$data_mahasiswa['alamat']?>" class = "form-control">

	Username :
	<input type="text" name="username" value="<?=$data_mahasiswa['username']?>" class = "form-control">

	Password :
	<input type="text" name="password" value="<?=$data_mahasiswa['password']?>" class = "form-control">

	Jurusan :
	<select name="nama_jurusan" value="<?= $data_jurusan['nama_jurusan']?>" class="form-select from-control" aria-label=".form-select-sm example">
		<option>Pilih Jurusan</option>

		<?php
		include "koneksi.php";
		$qry_jurusan=mysqli_query($koneksi,"select * from jurusan");
		while($data_jurusan=mysqli_fetch_array($qry_jurusan)){
			echo'<option value="'.$data_jurusan['nama_jurusan'].'">'.$data_jurusan ['nama_jurusan'].'</option>';
		};
		?>
	</select>

	<br>
	<input type="submit" name="simpan" value="Ubah Mahasiswa" class="btn btn-primary">
</form>