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
				<th>HARI</th>
				<th>JAM</th>
				<th>MATA KULIAH</th>
				<th>NAMA DOSEN</th>
				<th>AKSI</th>
			</tr>
		</thead>
		<tbody>
			<h3><center>JADWAL KULIAH</center></h3>

			<?php
			include "koneksi.php";
			$qry_jadwal=mysqli_query($koneksi, "select * from jadwal join mata_kuliah on mata_kuliah.id_matkul=jadwal.id_matkul join dosen on dosen.id_dosen=jadwal.id_dosen");
			$no=0;
			while ($data_jadwal=mysqli_fetch_array($qry_jadwal)) {
			$no++;?>
			<tr>
				<td><?=$no?></td>
				<td><?=$data_jadwal['hari']?></td>
				<td><?=$data_jadwal['jam']?></td>
				<td><?=$data_jadwal['nama_matkul']?></td>
				<td><?=$data_jadwal['nama_dosen']?></td>

				<td> <a href="hapus_jadwal.php?id_jadwal=<?=$data_jadwal['id_jadwal']?>"onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Delete</a></td>
			</tr>
			<?php	
			}
			?>
		</tbody>
	</table>

</body>
</html>

