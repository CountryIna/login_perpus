<?php
if($_POST){
	$hari 		=$_POST['hari'];
	$jam 		=$_POST['jam'];
	$id_matkul 	=$_POST['id_matkul'];
	$id_dosen 	=$_POST['id_dosen'];
	$id_jadwal 	=$_POST['id_jadwal'];

	if(empty($hari)){
		echo "<script>alert('Hari tidak boleh kosong');location.href='edit_jadwal.php';</script>";

	}else if(empty($jam)){
		echo "<script>alert('Jam tidak boleh kosong');location.href='edit_jadwal.php';</script>";

	}else if(empty($id_matkul)){
		echo "<script>alert('Mata Kuliah tidak boleh kosong');location.href='edit_jadwal.php';</script>";

	}else if(empty($id_dosen)){
		echo "<script>alert('Dosen tidak boleh kosong');location.href='edit_jadwal.php';</script>";

	} else {
		include "koneksi.php";

		if(empty($password)){
			$update=mysqli_query($koneksi, "update jadwal set hari='".$hari."', jam='".$jam."', id_matkul='".$id_matkul."', id_dosen='".$id_dosen."' where id_jadwal = '".$id_jadwal."'") or die(mysqli_error($koneksi));

		if($update){
			echo "<script>alert('Sukses update jadwal kuliah');location.href='data_jadwal.php';</script>";

		} else {
			echo "<script>alert('Gagal update jadwal kuliah');location.href='data_jadwal.php?id_jadwal=".$id_jadwal."';</script>";

		}
		} else {
			$update=mysqli_query($koneksi,"update jadwal set hari='".$hari."', jam='".$jam."', id_matkul='".$id_matkul."' , id_dosen='".$id_dosen."' where id_jadwal = '".$id_jadwal."'") or die(mysqli_error($koneksi));

			if($update){
				echo "<script>alert('Sukses update jadwal kuliah');location.href='data_jadwal.php';</script>";

			}else{
				echo "<script>alert('Gagal update jadwal kuliah');location.href='data_jadwal.php';</script>";
			}
		}
	}
}
?>