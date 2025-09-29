<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" crossorigin="anonymous">
    <title>TI UNIMUS | Berita Liga Indonesia</title>
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
      <h2 class="text-center mb-4">Berita Harian Liga Indonesia</h2>
      <p class="text-center text-muted">Update resmi dan terpercaya seputar dunia sepak bola nasional.</p>

      <?php
        $beritaBola = [
          [
            "id" => 1,
            "judul" => "Persija Jakarta Kalahkan PSM Makassar 2-1 di Kandang",
            "ringkasan" => "Persija tampil gemilang saat berhasil membalikkan keadaan melawan PSM Makassar dengan skor 2-1 di GBK.",
            "tanggal" => "29 September 2025",
            "gambar" => "https://i.ytimg.com/vi/vazLIEgDqj0/maxresdefault.jpg"
          ],
          [
            "id" => 2,
            "judul" => "Arema FC Tahan Imbang Bali United di Stadion Dipta",
            "ringkasan" => "Pertandingan berjalan sengit saat Arema menahan imbang Bali United 1-1 dalam lanjutan Liga 1 pekan ke-15.",
            "tanggal" => "28 September 2025",
            "gambar" => "https://cdn0-production-images-kly.akamaized.net/iO9ej2ZLjwo7pB6CHEpWOtoHqis=/640x640/smart/filters:quality(75):strip_icc():format(webp)/kly-media-production/medias/3962067/original/092006400_1647246718-BRI_Liga_1_-_Bali_United_Vs_Arema_FC_copy.jpg"
          ],
          [
            "id" => 3,
            "judul" => "Persebaya Surabaya Naik ke Peringkat 3 Setelah Menang Telak",
            "ringkasan" => "Persebaya Surabaya menunjukkan performa impresif setelah menang 3-0 atas Bhayangkara FC di kandang sendiri.",
            "tanggal" => "27 September 2025",
            "gambar" => "https://tse4.mm.bing.net/th/id/OIP.96P3JNmy38ra2PAavlQw9wHaEK?pid=Api&P=0&h=220"
          ]
        ];
      ?>

      <div class="row">
        <?php foreach ($beritaBola as $berita): ?>
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <img src="<?php echo $berita['gambar']; ?>" class="card-img-top" alt="Gambar Berita" style="height: 200px; object-fit: cover;">
              <div class="card-body">
                <h5 class="card-title">
                  <a href="/berita/<?php echo $berita['id']; ?>" class="text-dark"><?php echo $berita['judul']; ?></a>
                </h5>
                <p class="card-text"><small class="text-muted"><?php echo $berita['tanggal']; ?></small></p>
                <p class="card-text"><?php echo $berita['ringkasan']; ?></p>
                <a href="/berita/<?php echo $berita['id']; ?>" class="btn btn-outline-primary btn-sm">Baca Selengkapnya</a>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>

    <footer class="text-center p-3 bg-dark text-white mt-5">
      &copy; <?php echo date("Y"); ?> TI UNIMUS | Berita Liga Indonesia
    </footer>

  </body>
</html>
