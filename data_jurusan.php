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
				<th>NAMA JURUSAN</th>
				<th>AKSI</th>
			</tr>
		</thead>
		<tbody>
			<h2><center>DATA JURUSAN</center></h2>

			<?php
			include "koneksi.php";
			$qry_jurusan=mysqli_query($koneksi, "select * from jurusan");
			$no=0;
			while ($data_jurusan=mysqli_fetch_array($qry_jurusan)) {
			$no++;?>
			<tr>
				<td><?=$no?></td>
				<td><?=$data_jurusan['nama_jurusan']?></td>
	
				<td> <a href="hapus_jurusan.php?id_jurusan=<?=$data_jurusan['id_jurusan']?>"onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Delete</a></td>
			</tr>
			<?php	
			}
			?>
		</tbody>
	</table>

</body>
</html>

