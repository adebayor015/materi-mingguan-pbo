<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" crossorigin="anonymous">
  <title>Detail Berita | Liga Indonesia</title>
</head>
<body style="background-color: #f4f6f7;">

  <!-- NAVBAR -->
  <ul class="nav justify-content-center" style="background-color: #0c424aff;">
    <li class="nav-item"><a class="nav-link text-white" href="/">Home</a></li>
    <li class="nav-item"><a class="nav-link text-white active" href="/berita">Berita</a></li>
    <li class="nav-item"><a class="nav-link text-white" href="/profile">Profil</a></li>
    <li class="nav-item"><a class="nav-link text-white" href="/contact">Kontak</a></li>
  </ul>

  <div class="container mt-5">
    <h2 class="mb-3"><?php echo $judul; ?></h2>
    <p class="text-muted"><?php echo $tanggal; ?></p>
    <img src="<?php echo $gambar; ?>" class="img-fluid rounded mb-4" alt="Gambar Berita">
    <p style="text-align: justify; font-size: 18px;">
      <?php echo $isi; ?>
    </p>

    <a href="/berita" class="btn btn-secondary mt-3">← Kembali ke Daftar Berita</a>
  </div>

  <footer class="text-center p-3 bg-dark text-white mt-5">
    &copy; <?php echo date("Y"); ?> TI UNIMUS | Berita Liga Indonesia
  </footer>
</body>
</html>
