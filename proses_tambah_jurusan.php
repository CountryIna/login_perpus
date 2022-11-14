<?php 
if($_POST){
	$nama	= $_POST['nama_jurusan'];

	if(empty($nama)){
		echo "<script>alert('nama jurusan tidak boleh kosong');location.href='tambah_jurusan.php';</script>";	
	}else {
		include "koneksi.php";
		$insert=mysqli_query($koneksi,"insert into jurusan (nama_jurusan) value ('".$nama."')") or die(mysqli_error($koneksi));
		if($insert){
			echo "<script>alert('Sukses menambahkan data jurusan');location.href='data_jurusan.php';</script>";

		}else {
			echo "<script>alert('Gagal menambahkan jurusan');location.href='tambah_jurusan.php';</script>";
		}
	}
}
?>