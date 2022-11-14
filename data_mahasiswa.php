<?php
include "navbar.php";
include "css.php";
?>

<html>
<body>
	<?php
	session_start();

	if($_SESSION['level']=="petugas"){
		//header("location:index.php?pesan=gagal");
	}
	?>
	
	<table class="table table-hover table-striped">
		<thead>
			<tr>
				<th>NO</th>
				<th>NAMA</th>
				<th>NIM</th>
				<th>ALAMAT</th>
				<th>USERNAME</th>
				<th>PASSWORD</th>
				<th>JURUSAN</th>
				<th>AKSI</th>
			</tr>
		</thead>
		<tbody>
			<h3><center> DATA MAHASISWA </center></h3>

			<?php
			include "koneksi.php";
			$qry_mahasiswa = mysqli_query($koneksi,"select * from mahasiswa join jurusan on jurusan.id_jurusan=mahasiswa.id_jurusan");
			$no=0;
			while ($data_mahasiswa=mysqli_fetch_array($qry_mahasiswa)) {
			$no++;?>

			<tr>
				<td><?=$no?></td>
				<td><?=$data_mahasiswa['nama']?></td>
				<td><?=$data_mahasiswa['nim']?></td>
				<td><?=$data_mahasiswa['alamat']?></td>
				<td><?=$data_mahasiswa['username']?></td>
				<td><?=$data_mahasiswa['password']?></td>
				<td><?=$data_mahasiswa['nama_jurusan']?></td>

				<td> <a href="hapus_mahasiswa.php?id_mahasiswa=<?=$data_mahasiswa['id_mahasiswa']?>"onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Delete</a></td>
			</tr>
			<?php	
			}
			?>

		</tbody>
	</table>

</body>
</html>

