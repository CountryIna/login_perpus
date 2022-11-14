<?php
	if($_GET['id_jurusan']){
		include "koneksi.php";
		$qry_hapus=mysqli_query($koneksi,"delete from jurusan where id_jurusan='".$_GET['id_jurusan']."'");
		if($qry_hapus){
			echo"<script>alert('Sukses hapus jurusan');location.href='data_jurusan.php';</script>";
		}else {
			echo "<script>alert('Gagal hapus jurusan');location.href='data_jurusan.php';</script>";
		}
	}
?>
		