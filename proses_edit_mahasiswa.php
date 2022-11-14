<?php
if($_POST){
	$nama 		=$_POST['nama'];
	$nim 		=$_POST['nim'];
	$alamat 	=$_POST['alamat'];
	$username 	=$_POST['username'];
	$password 	=$_POST['password'];
	$id_jurusan	=$_POST['id_jurusan'];
	$id_mahasiswa	=$_POST['id_mahasiswa'];

	if(empty($nama)){
		echo "<script>alert('Nama tidak boleh kosong');location.href='edit_mahasiswa.php';</script>";

	}else if(empty($nim)){
		echo "<script>alert('Nim tidak boleh kosong');location.href='edit_mahasiswa.php';</script>";

	}else if(empty($alamat)){
		echo "<script>alert('Alamat tidak boleh kosong');location.href='edit_mahasiswa.php';</script>";

	}else if(empty($username)){
		echo "<script>alert('Username tidak boleh kosong');location.href='edit_mahasiswa.php';</script>";

	}else if(empty($password)){
		echo "<script>alert('Password tidak boleh kosong');location.href='edit_mahasiswa.php';</script>";

	}else if(empty($id_jurusan)){
		echo "<script>alert('Jurusan tidak boleh kosong');location.href='edit_mahasiswa.php';</script>";

	} else {
		include "koneksi.php";

		if(empty($password)){
			$update=mysqli_query($koneksi, "update mahasiswa set nama='".$nama."', nim='".$nim."', alamat='".$alamat."', username='".$username."' , password='".$password."', id_jurusan='".$id_jurusan."' where id_mahasiswa = '".$id_mahasiswa."'") or die(mysqli_error($koneksi));

		if($update){
			echo "<script>alert('Sukses update mahasiswa');location.href='data_mahasiswa.php';</script>";

		} else {
			echo "<script>alert('Gagal update mahasiswa');location.href='data_mahasiswa.php?id_mahasiswa=".$id_mahasiswa."';</script>";

		}
		} else {
			$update=mysqli_query($koneksi,"update mahasiswa set nama='".$nama."', nim='".$nim."', alamat='".$alamat."', username='".$username."', password='".$password."', id_jurusan='".$id_jurusan."' where id_mahasiswa = '".$id_mahasiswa."'") or die(mysqli_error($koneksi));

			if($update){
				echo "<script>alert('Sukses update mahasiswa');location.href='data_mahasiswa.php';</script>";

			}else{
				echo "<script>alert('Gagal update mahasiswa');location.href='data_mahasiswa.php';</script>";
			}
		}
	}
}
?>