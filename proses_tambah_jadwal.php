<?php
if($_POST){
	$hari 	=$_POST['hari'];
	$jam 	=$_POST['jam'];
	$id_matkul =$_POST['id_matkul'];
	$id_dosen  =$_POST['id_dosen'];
	

	if (empty($hari)) {
		echo "<script>alert('Hari tidak boleh kosong');location.href='tambah_jadwal.php';</script>";

	} else if (empty($jam)){
		echo "<script>alert('Jam tidak boleh kosong');location.href='tambah_jadwal.php';</script>";

	} else if (empty($id_matkul)){
		echo "<script>alert('Mata kuliah tidak boleh kosong');location.href='tambah_jadwal.php';</script>";

	} else if (empty($id_dosen)){
		echo "<script>alert('Dosen tidak boleh kosong');location.href='tambah_jadwal.php';</script>";

	}else {
		include "koneksi.php";
		$insert=mysqli_query($koneksi, "insert into jadwal (hari, jam, id_matkul, id_dosen) value('".$hari."','".$jam."','".$id_matkul."','".$id_dosen."')") or die(mysqli_error($koneksi));
		if($insert) {
		echo "<script>alert('Sukses menambahkan jadwal kuliah');location.href='data_jadwal.php';</script>";

		}else {
		echo "<script>alert('Gagal menambahkan jadwal kuliah');location.href='tambah_jadwal.php';</script>";

		}
	}
}
?>