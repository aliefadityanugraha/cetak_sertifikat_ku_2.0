<!-- @format -->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Cetak Sertifikat | SMK PGRI 2 Kediri</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css"
    />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="shortcut icon" href="img/logo.png" />
  </head>
  <body>
    <nav
      class="navbar is-fixed-top"
      role="navigation"
      aria-label="main navigation"
    >
      <div class="navbar-brand">
        <a class="navbar-item" href="https://bulma.io">
          <img
            src="https://img.icons8.com/ios-filled/50/000000/bookmark--v2.png"
            width="28"
            height="28"
          />
        </a>
        <a
          role="button"
          class="navbar-burger"
          aria-label="menu"
          aria-expanded="false"
          data-target="navbarBasicExample"
        >
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
        </a>
      </div>

      <div id="navbarBasicExample" class="navbar-menu">
        <div class="navbar-start">
          <a class="navbar-item"> Home </a>
          <div class="navbar-item has-dropdown is-hoverable">
            <a class="navbar-link"> More </a>

            <div class="navbar-dropdown">
              <a href="about.html" class="navbar-item"> About </a>
              <hr class="navbar-divider" />
              <a href="https://api.whatsapp.com/send?phone=6289510067618" class="navbar-item"> Contact & Report an issue </a>
            </div>
          </div>
        </div>

        <div class="navbar-end">
          <div class="navbar-item">
          </div>
        </div>
      </div>
    </nav>

    <div class="card">
      <div class="card-image">
        <figure class="image is-16by5">
          <img src="img/portfolio2.jpg" alt="Placeholder image" />
        </figure>
      </div>
      <div class="card-content">
        <div class="media">
          <div class="media-left"></div>
          <div class="media-content">
            <p class="title is-4">Cetak Sertifikat Pesantren Ramadhan</p>
          </div>
        </div>

        <div class="content">
          <div class="container">
            <div class="columns is-dekstop">
              <div class="column">
                <form method="post" action="cetak.php">
                  <div class="field">
                    <label class="label">Nama</label>
                    <div class="control">
                      <input
                        class="input"
                        type="text"
                        placeholder="Nama"
                        name="nama"
                        autocomplete="off"
                        required
                      />
                    </div>
                  </div>
                  <button class="button is-primary is-outlined" type="submit">
                    Download Sertifikat
                  </button>
                </form>
              </div>
              <div class="column">
                <p>Cara Mendapatkan Sertifikat</p>
                <ul>
                  <li>Isikan Nama dan Kelas mu pada form, jika sudah benar</li>
                  <li>
                    Jika sudah benar klik submit lalu tunggu hingga mucul dialog
                    Success klik oke
                  </li>
                  <li>Seteleh itu lanjut dengan Klik tombol Lanjutkan</li>
                  <li>Isikan Namamu kembali ,isikan dengan lengkap</li>
                  <li>
                    Klik Download dan tunggu prosesnya sampai selesai
                    mendownload
                  </li>
                  <li>Selesi sertifikat Pesantren Ramadhan sudah didapatkan</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
      document.addEventListener("DOMContentLoaded", () => {
        const $navbarBurgers = Array.prototype.slice.call(
          document.querySelectorAll(".navbar-burger"),
          0
        );

        if ($navbarBurgers.length > 0) {
          $navbarBurgers.forEach((el) => {
            el.addEventListener("click", () => {
              const target = el.dataset.target;
              const $target = document.getElementById(target);

              el.classList.toggle("is-active");
              $target.classList.toggle("is-active");
            });
          });
        }
      });
    </script>
  </body>
</html>
