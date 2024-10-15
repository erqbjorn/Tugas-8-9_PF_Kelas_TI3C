<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> <?php echo $judul; ?></title>
  </head>
  <body>
  <nav class="navbar fixed-top navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="Beranda">Penjadwalan</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="Beranda">Beranda</a>
        <a class="nav-link" href="Mahasiswa">Mahasiswa</a>
        <a class="nav-link" href="<?= base_url()?>Dosen">Dosen</a>
        <a class="nav-link" href="<?= base_url()?>login/logout">Logout</a>
      </div>
    </div>
  </div>
</nav>
