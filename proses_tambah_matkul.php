<?php 
if($_POST){
	$nama=$_POST['nama_matkul'];

	if(empty($nama)){
		echo "<script>alert('nama mata kuliah tidak boleh kosong');location.href='tambah_matkul.php';</script>";	

	}else {
		include "koneksi.php";

		$insert=mysqli_query($koneksi,"insert into mata_kuliah (nama_matkul) value ('".$nama."')") or die(mysqli_error($koneksi));
		if($insert){

			echo "<script>alert('Sukses menambahkan mata kuliah');location.href='data_matkul.php';</script>";

		}else {
			echo "<script>alert('Gagal menambahkan mata kuliah');location.href='tambah_matkul.php';</script>";
		}
	}
}
?>