<?php
if($_POST){
	$id_matkul 	=$_POST['id_matkul'];
	$nama 		=$_POST['nama_matkul'];
	
	if(empty($nama)){
		echo "<script>alert('nama mata kuliah tidak boleh kosong');location.href=edit_matkul.php';</script>";

	
	} else {
		include "koneksi.php";

		if(empty($password)){
			$update=mysqli_query($koneksi, "update mata_kuliah set nama_matkul='".$nama."'where id_matkul = '".$id_matkul."'") or die(mysqli_error($koneksi));
		if($update){
			echo"<script>alert('Sukses update mata kuliah');location.href='data_matkul.php';</script>";
		} else {
			echo "<script>alert('Gagal update mata kuliah');location.href='data_matkul.php?id_matkul=".$id_matkul."';</script>";
		}
		} else {
			$update=mysqli_query($koneksi,"update matakuliah set nama_matkul='".$nama."' where id_matkul = '".$id_matkul."'") or die(mysqli_error($koneksi));
			if($update){
				echo "<script>alert('Sukses update mata kuliah');location.href='data_matkul.php';</script>";

			}else{
				echo "<script>alert('Gagal update mata kuliah');location.href='data_matkul.php';</script>";
			}
		}
	}
}
?>