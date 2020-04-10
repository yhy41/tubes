<!DOCTYPE html>
<html lang="en">
<head>
  <title>Kontak</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="<?= site_url('pilihan/InformasiKlinik') ?>">Klinik Bona</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Info<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="<?= site_url('pilihan/Pasien') ?>">Pasien</a></li>
          <li><a href="<?= site_url('pilihan/DaftarDokter') ?>">Dokter</a></li>
          <li><a href="<?= site_url('pilihan/DaftarPerawat') ?>">Perawat</a></li>
        </ul>
      </li>
       <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Masukan<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="<?= site_url('pilihan/FormSaran') ?>">Saran</a></li>
          <li><a href="<?= site_url('pilihan/Formkomentar') ?>">Komentar</a></li>
          <li><a href="<?= site_url('pilihan/FormKritik') ?>">Kritik</a></li>
        </ul>
      </li>
      <li><a href="#">Kontak</a></li>
      <li><a href="#">apa ???</a></li>
    </ul>
     <ul class="nav navbar-nav navbar-right">
      <li><a href="<?= site_url('pilihan/index') ?>"><span class="glyphicon glyphicon-log-in"></span> Keluar</a></li>
    </ul>
  </div>
</nav>
  
<div class="container">
  <h3>Selamat datang di Klinik Bona Dan Semoga Harimu menyenangkan</h3>
  <p>Kontak kami</p>
</div>

</body>
</html>
