<?php
$home = [
  "judul" => "Selamat Datang di Website Kami",
  "deskripsi" => "Ini adalah halaman home yang menampilkan informasi singkat, dan sedikit kisah kita. Semoga kalian suka dengan Website ini.",
  "link" => "#",
  "tombol" => "Pelajari Lebih Lanjut"
];
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <title>TI UNIMUS | HOME</title>

    <style>
      html, body {
        height: 100%;
        margin: 0;
      }
      body {
        display: flex;
        flex-direction: column;
        background: url('images/abstract.jpg') no-repeat center center fixed;
        background-size: cover;
      }
      main {
        flex: 1;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
      }
      .hero {
        background: rgba(255, 255, 255, 0.85);
        padding: 40px;
        border-radius: 15px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.2);
      }
      footer {
        background-color: #0c424a;
        color: white;
        text-align: center;
        padding: 15px 0;
      }
      .nav-link {
        color: white !important;
        font-weight: 500;
      }
      .nav-link:hover {
        text-decoration: underline;
      }
    </style>
  </head>

  <body>
    <!-- Menu -->
    <ul class="nav justify-content-center" style="background-color: #0c424aff;">
      <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
      <li class="nav-item"><a class="nav-link" href="berita">Berita</a></li>
      <li class="nav-item"><a class="nav-link" href="profile">Profil</a></li>
      <li class="nav-item"><a class="nav-link" href="contact">Kontak</a></li>
    </ul>

    <!-- Konten Utama -->
    <main>
      <section class="hero">
        <h1><?php echo $home['judul']; ?></h1>
        <p><?php echo $home['deskripsi']; ?></p>
        <a href="<?php echo $home['link']; ?>" class="btn btn-primary">
          <?php echo $home['tombol']; ?>
        </a>
      </section>
    </main>

    <!-- Footer -->
    <footer>
      &copy; <?php echo date("Y"); ?> TI UNIMUS. All Rights Reserved.
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
