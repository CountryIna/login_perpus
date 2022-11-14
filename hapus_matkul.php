<?php
	if($_GET['id_matkul']){
		include "koneksi.php";

		$qry_hapus=mysqli_query($koneksi,"delete from mata_kuliah where id_matkul='".$_GET['id_matkul']."'");
		if($qry_hapus){
			echo"<script>alert('Sukses hapus mata kuliah');location.href='data_matkul.php';</script>";
		}else {
			echo "<script>alert('Gagal hapus mata kuliah');location.href='data_matkul.php';</script>";
		}
	}
?>
		