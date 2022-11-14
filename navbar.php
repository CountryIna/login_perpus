<html>
<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <title>Perpustakaan</title>
</head>
<body>

<nav class="navbar  navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="perpus.php"> PERPUSTAKAAN </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
<div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 mb-1 navbar-nav-scroll" style="--bs-scroll-height: 100px;">

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="data_mahasiswa.php">MAHASISWA</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="data_jurusan.php">JURUSAN</a></li>
        </li>

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="data_dosen.php">DOSEN</a></li>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="data_matkul.php">MATA KULIAH</a></li>
        </li>

         <li class="nav-item">
          <a class="nav-link" href="data_jadwal.php">JADWAL KULIAH</a></li>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="developer.php"> Developer </a>
        </li>
      </ul>
	 
      <form class="d-flex">
        <a href="logout.php" class="btn btn-secondary "> Log Out</a>
      </form>

    </div>
  </div>
</nav>

</body>
</html>