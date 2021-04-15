<?php 

session_start();

if (!$_SESSION['weslogin']) {
	header("Location: login.php");
	die();
}

require __DIR__ . '/vendor/autoload.php';

$client = new Google_Client();
    $client->setApplicationName('Google Sheets API PHP Quickstart');
    $client->setScopes(Google_Service_Sheets::SPREADSHEETS_READONLY);
    $client->setAuthConfig('credentials.json');
    $client->setAccessType('offline');
    $client->setPrompt('select_account consent');
$service = new Google_Service_Sheets($client);

$spreadsheetId = '1ZOpaTErZEc2QeUqEYJ4NpKlC9N_r5aR6aT3rT4CCRfs';
$range = 'Sheet1!A2:C100';
$response = $service->spreadsheets_values->get($spreadsheetId, $range);
$values = $response->getValues();

$jumlahdata = count($values);
?>

!DOCTYPE html>
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
          <p class="navbar-item"> SMK PGRI 2 Kediri </p>
          <p class="navbar-item"> Jumlah Data Masuk <?= $jumlahdata ?> </p>
          <div class="navbar-item has-dropdown is-hoverable">
            <a class="navbar-link"> More </a>

            <div class="navbar-dropdown">
              <a href="about.html" class="navbar-item"> About </a>
              <hr class="navbar-divider" />
              <a href="https://api.whatsapp.com/send?phone=6289510067618" class="navbar-item">Contact & Report an issue </a>
            </div>
          </div>
        </div>

        <div class="navbar-end">
          <div class="navbar-item">
            <div class="buttons">
              <a href="login.php" class="button is-primary">
                <strong>Log Out</strong>
              </a>
            </div>
          </div>
        </div>
      </div>
    </nav>
<br>
<br>
<div class="container">
<div class="card">
<div class="card-content">
<div class="content">
<table class="table">
  <thead>
    <tr>
      <th>No</th>
      <th>Timestamp</th>
      <th>Nama</th>
      <th>Kelas</th>
    </tr>
  </thead>
<?php $i = 1; ?>
<?php foreach($values as $data):  ?>
  <tbody>
    <tr>
      <td><?= $i ?></td>
      <td><?= $data[0]; ?></td>
      <td><?= $data[1]; ?></td>
      <td><?= $data[2]; ?></td>
    </tr>
  </tbody>
<?php $i++; ?>
<?php endforeach; ?>
</div>
</div>
</div>
</div>
</table>
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