<?php
include "koneksi.php"; 
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Timothy</title>
    <link rel="icon" href="img/logo.png" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <!-- nav begin -->
    <nav
      class="navbar navbar-expand-lg bg-light navbar-light sticky-top"
      id="navbar"
    >
      <div class="container">
        <a class="navbar-brand" href="#">Timothy</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon text-success-emphasis"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#article">Article</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#gallery">Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#schedule">Schedule</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#profile">Profil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php" target="_blank">Login</a>
            </li>
          </ul>
          <button id="nightmode" class="icon-btn rounded-1 bg-dark">
            <i class="bi bi-moon-fill" style="color: white"></i>
          </button>
          <button id="lightmode" class="icon-btn rounded-1">
            <i class="bi bi-sun-fill"></i>
          </button>
        </div>
      </div>
    </nav>
    <!-- nav end -->

    <!-- hero begin -->
    <section
      id="hero"
      class="text-center p-5 bg-primary bg-gradient text-sm-start text-light"
    >
      <div class="container">
        <div class="d-sm-flex flex-sm-row-reverse align-items-center">
          <img src="img/banner.jpg" class="img-fluid" width="300" />
          <div>
            <h1 class="fw-bold display-4">
              Create Memories, Save Memories, Everyday
            </h1>
            <h4 class="lead display-6">
              Mencatat semua kegiatan sehari-hari yang ada tanpa terkecuali
            </h4>
            <h6>
              <span id="tanggal"></span>
              <span id="jam"></span>
            </h6>
          </div>
        </div>
      </div>
    </section>
    <!-- hero end -->

    <!-- article begin -->
    <!-- article begin -->
<section id="article" class="text-center p-5">
  <div class="container">
    <h1 class="fw-bold display-4 pb-3">article</h1>
    <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
      <?php
      $sql = "SELECT * FROM article ORDER BY tanggal DESC";
      $hasil = $conn->query($sql); 

      while($row = $hasil->fetch_assoc()){
      ?>
        <div class="col">
          <div class="card h-100">
            <img src="img/<?= $row["gambar"]?>" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title"><?= $row["judul"]?></h5>
              <p class="card-text">
                <?= $row["isi"]?>
              </p>
            </div>
            <div class="card-footer">
              <small class="text-body-secondary">
                <?= $row["tanggal"]?>
              </small>
            </div>
          </div>
        </div>
        <?php
      }
      ?> 
    </div>
  </div>
</section>
<!-- article end -->
    <!-- article end -->

    <!-- gallery begin -->
    <section
      id="gallery"
      class="text-center p-5 bg-primary bg-gradient text-light"
    >
      <div class="container">
        <h1 class="fw-bold display-4 pb-3">Gallery</h1>
        <div id="carouselExample" class="carousel slide">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img/bunga.jpg" class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item">
              <img src="img/gurun.jpg" class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item">
              <img src="img/hutan.jpg" class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item">
              <img src="img/sungai.jpg" class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item">
              <img src="img/comet.jpg" class="d-block w-100" alt="..." />
            </div>
          </div>
          <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#carouselExample"
            data-bs-slide="prev"
          >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#carouselExample"
            data-bs-slide="next"
          >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </section>
    <!-- gallery end -->

    <!-- schedule begin -->
    <section id="schedule" class="text-center p-5 bg-light">
      <div class="container">
        <h2 class="fw-bold display-4 pb-3">
          Jadwal Kuliah & kegiatan Mahasiswa
        </h2>
        <div class="row row-cols-1 row-cols-md-4 g-4 justify-content-center">
          <div class="col">
            <div class="card border-primary h-100 text-dark">
              <div class="card-header bg-primary text-light">Senin</div>
              <div class="card-body">
                <h5>09.30 - 12.00</h5>
                <p>
                  Logika Informatika <br />
                  Ruang H.5.12
                </p>
                <h5>14.10 - 15.50</h5>
                <p>
                  Basis Data <br />
                  Ruang H.5.10
                </p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card border-success h-100 text-dark">
              <div class="card-header bg-success text-light">Selasa</div>
              <div class="card-body">
                <h5>12.30 - 15.00</h5>
                <p>
                  Rekayasa Perangkat Lunak <br />
                  Ruang H.5.10
                </p>
                <h5>15.30 - 18.00</h5>
                <p>
                  Sistem Operasi <br />
                  Ruang H.3.2
                </p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card border-danger h-100 text-dark">
              <div class="card-header bg-danger text-light">Rabu</div>
              <div class="card-body">
                <h5>09.30 - 12.00</h5>
                <p>
                  Logika Informatika <br />
                  Ruang H.5.12
                </p>
                <h5>12.30 - 14.10</h5>
                <p>
                  Pemrograman Berbasis Web <br />
                  Ruang D.2.J
                </p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card border-warning h-100 text-dark">
              <div class="card-header bg-warning text-light">Kamis</div>
              <div class="card-body">
                <h5>14.10 - 15.50</h5>
                <p>
                  Basis Data <br />
                  Ruang D.2.K
                </p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card border-info h-100 text-dark">
              <div class="card-header bg-info text-light">Jumat</div>
              <div class="card-body">
                <h5>09.30 - 12.00</h5>
                <p>
                  Probabilitas dan Statistik <br />
                  Ruang H.3.2
                </p>
                <h5>12.30 - 15.00</h5>
                <p>
                  Penambangan Data <br />
                  Ruang H.4.3
                </p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card border-danger-subtle h-100 text-dark">
              <div class="card-header bg-danger-subtle text-light">Sabtu</div>
              <div class="card-body">
                <p>Tidak Ada Jadwal</p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card border-dark-subtle h-100 text-dark">
              <div class="card-header bg-dark-subtle text-light">Minggu</div>
              <div class="card-body">
                <p>Tidak Ada Jadwal</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- schedule end -->

    <!-- profile begin -->
    <section
      id="profile"
      class="text-center p-5 bg-primary bg-gradient text-light"
    >
      <div class="container">
        <h1 class="fw-bold display-4 pb-3">Profil Mahasiswa</h1>
        <div class="card" style="border: none">
          <div class="row">
            <div class="col-md-5 mt-5">
              <img
                src="img/TIMOTHY 1x1.jpg"
                class="img-fluid rounded-circle"
                style="max-width: 270px"
                alt="..."
              />
            </div>
            <div class="col-md-7">
              <div class="card-body p-5 h-100">
                <h5 class="card-title">Timothy Giovanny</h5>
                <p class="card-text">Mahasiswa Teknik Informatika <br /></p>
                <div class="table-responsive">
                  <div class="bg-dark p-1 rounded">
                    <table class="table table-borderless mb-0">
                      <tbody>
                        <tr>
                          <th scope="row" class="text-end">NIM :</th>
                          <td class="text-start">A11.2024.15646</td>
                        </tr>
                        <tr>
                          <th scope="row" class="text-end">Program Studi :</th>
                          <td class="text-start">Teknik Informatika</td>
                        </tr>
                        <tr>
                          <th scope="row" class="text-end">Email :</th>
                          <td class="text-start">
                            111202415646@mhs.dinus.ac.id
                          </td>
                        </tr>
                        <tr>
                          <th scope="row" class="text-end">Telepon :</th>
                          <td class="text-start">085753365112</td>
                        </tr>
                        <tr>
                          <th scope="row" class="text-end">Alamat :</th>
                          <td class="text-start">
                            Jl. Kalimusodo Raya, Semarang
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- profile end -->

    <!-- footer begin -->
    <footer class="text-center p-5" id="footer">
      <div>
        <a href="https://www.instagram.com/udinusofficial/"
          ><i class="bi bi-instagram h2 p-2 text-dark" id="icon"></i
        ></a>
        <a href=""><i class="bi bi-twitter h2 p-2 text-dark" id="icon"></i></a>
        <a href=""><i class="bi bi-whatsapp h2 p-2 text-dark" id="icon"></i></a>
      </div>
      <div>Timothy Giovanny &copy; 2025</div>
    </footer>
    <!-- footer end -->

    <!-- script waktu -->
    <script type="text/javascript">
      window.setTimeout("tampilwaktu()", 1000);

      function tampilwaktu() {
        var waktu = new Date();
        var bulan = waktu.getMonth() + 1;

        setTimeout("tampilwaktu()", 1000);
        document.getElementById("tanggal").innerHTML =
          waktu.getDate() + "/" + bulan + "/" + waktu.getFullYear();
        document.getElementById("jam").innerHTML =
          waktu.getHours() +
          ":" +
          waktu.getMinutes() +
          ":" +
          waktu.getSeconds();
      }
    </script>

    <!-- script nightmode/lightmode -->
    <script type="text/javascript">
      const navbar = document.getElementById("navbar");
      const hero = document.getElementById("hero");
      const article = document.getElementById("article");
      const gallery = document.getElementById("gallery");
      const schedule = document.getElementById("schedule");
      const profile = document.getElementById("profile");
      const nightButton = document.getElementById("nightmode");
      const lightButton = document.getElementById("lightmode");
      const footer = document.getElementById("footer");

      const cards = document.querySelectorAll(".card");
      const cardsupdate = document.querySelectorAll(".card-footer");
      const footericon = document.querySelectorAll("footer .bi");

      nightButton.onclick = function () {
        navbar.classList.remove("bg-light", "navbar-light");
        navbar.classList.add("bg-dark", "navbar-dark");

        hero.classList.remove("bg-primary", "bg-gradient", "text-light");
        hero.classList.add("bg-primary-subtle", "text-dark");

        article.classList.remove("bg-light", "text-dark");
        article.classList.add("bg-dark", "text-light");

        gallery.classList.remove("bg-primary", "bg-gradient", "text-light");
        gallery.classList.add("bg-primary-subtle", "text-dark");

        schedule.classList.remove("bg-light", "text-dark");
        schedule.classList.add("bg-dark", "text-light");

        profile.classList.remove("bg-primary", "bg-gradient", "text-light");
        profile.classList.add("bg-primary-subtle", "text-dark");

        footer.classList.remove("bg-light", "text-dark");
        footer.classList.add("bg-dark", "text-light");

        cards.forEach(function (card) {
          card.classList.remove("bg-light", "text-dark");
          card.classList.add("bg-secondary", "text-light");
        });

        cardsupdate.forEach(function (footer) {
          footer.classList.remove("bg-dark-emphasis", "text-dark");
          footer.classList.add("bg-dark", "text-light");
        });

        footericon.forEach(function (icon) {
          icon.classList.remove("text-dark");
          icon.classList.add("text-light");
        });
      };

      lightButton.onclick = function () {
        navbar.classList.remove("bg-dark", "navbar-dark");
        navbar.classList.add("bg-light", "navbar-light");

        hero.classList.remove("bg-primary-subtle", "text-dark");
        hero.classList.add("bg-primary", "bg-gradient", "text-light");

        article.classList.remove("bg-dark", "text-light");
        article.classList.add("bg-light", "text-dark");

        gallery.classList.remove("bg-primary-subtle", "text-dark");
        gallery.classList.add("bg-primary", "bg-gradient", "text-light");

        schedule.classList.remove("bg-dark", "text-light");
        schedule.classList.add("bg-light", "text-dark");

        profile.classList.remove("bg-primary-subtle", "text-dark");
        profile.classList.add("bg-primary", "bg-gradient", "text-light");

        footer.classList.remove("bg-dark", "text-light");
        footer.classList.add("bg-light", "text-dark");

        cards.forEach(function (card) {
          card.classList.remove("bg-secondary", "text-light");
          card.classList.add("bg-light", "text-dark");
        });

        cardsupdate.forEach(function (footer) {
          footer.classList.remove("bg-dark", "text-light");
          footer.classList.add("bg-dark-emphasis", "text-dark");
        });

        footericon.forEach(function (icon) {
          icon.classList.remove("text-light");
          icon.classList.add("text-dark");
        });
      };
    </script>

    <!-- script -->

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
