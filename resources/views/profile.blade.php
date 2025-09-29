<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" crossorigin="anonymous">
    <title>TI UNIMUS | PROFIL</title>
  </head>
  <body style="background-color: #f4f6f7;">

    <!-- NAVBAR -->
    <ul class="nav justify-content-center" style="background-color: #0c424aff;">
      <li class="nav-item"><a class="nav-link text-white" href="/">Home</a></li>
      <li class="nav-item"><a class="nav-link text-white" href="/berita">Berita</a></li>
      <li class="nav-item"><a class="nav-link text-white active" href="/profile">Profil</a></li>
      <li class="nav-item"><a class="nav-link text-white" href="/contact">Kontak</a></li>
    </ul>

    <div class="container mt-5">
      <h2 class="text-center mb-4">Biodata Diri</h2>

      <?php
        $biodata = [
          "Nama" => "Adib Reza Pratama",
          "NIM" => "13242420015",
          "Program Studi" => "Teknologi Informasi",
          "Universitas" => "UNIMUS",
          "Fakultas" => "FTIK",
          "Email" => "adibpratama157@gmail.com"
        ];
      ?>

      <div class="row">
        <!-- FOTO PROFIL -->
        <div class="col-md-4 text-center mb-4">
         <img src="{{ asset('images/profile.jpg') }}" 
         alt="Foto Profil" 
         class="img-thumbnail rounded-circle shadow" 
            style="width: 200px; height: 200px; object-fit: cover;">

        </div>

        <!-- TABEL BIODATA -->
        <div class="col-md-8">
          <table class="table table-bordered table-striped shadow-sm bg-white">
            <tbody>
              <?php
                foreach($biodata as $key => $value){
                  echo "<tr>";
                  echo "<th style='width:35%; background-color:#0c424a; color:white;'>$key</th>";
                  echo "<td>$value</td>";
                  echo "</tr>";
                }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
