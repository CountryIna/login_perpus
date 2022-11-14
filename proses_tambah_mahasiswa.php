<?php
if($_POST){
	$nama 		=$_POST['nama'];
	$nim 		=$_POST['nim'];
	$alamat 	=$_POST['alamat'];
	$username 	=$_POST['username'];
	$password 	=$_POST['password'];
	$id_jurusan	=$_POST['id_jurusan'];
	

	if (empty($nama)) {
		echo "<script>alert('nama mahasiswa tidak boleh kosong');location.href='tambah_mahasiswa.php';</script>";

	} else if (empty($nim)){
		echo "<script>alert('nim mahasiswa tidak boleh kosong');location.href='tambah_mahasiswa.php';</script>";

	} else if (empty($alamat)){
		echo "<script>alert('alamat mahasiswa tidak boleh kosong');location.href='tambah_mahasiswa.php';</script>";

	} else if (empty($username)){
		echo "<script>alert('username mahasiswa tidak boleh kosong');location.href='tambah_mahasiswa.php';</script>";

	} else if (empty($password)){
		echo "<script>alert('password mahasiswa tidak boleh kosong');location.href='tambah_mahasiswa.php';</script>";

	} else if (empty($id_jurusan)){
		echo "<script>alert('jurusan mahasiswa tidak boleh kosong');location.href='tambah_mahasiswa.php';</script>";

	}else {
		include "koneksi.php";
		$insert=mysqli_query($koneksi, "insert into mahasiswa (nama, nim, alamat, username, password, id_jurusan) value('".$nama."','".$nim."','".$alamat."','".$username."','".$password."','".$id_jurusan."')") or die(mysqli_error($koneksi));
		if($insert) {
		echo "<script>alert('Sukses menambahkan data mahasiswa');location.href='data_mahasiswa.php';</script>";

		}else {
		echo "<script>alert('Gagal menambahkan siswa');location.href='tambah_mahasiswa.php';</script>";

		}
	}
}
?>