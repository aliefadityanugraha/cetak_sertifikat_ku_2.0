<?php
error_reporting(0);
session_start();


if(isset($_POST['login'])){

    $password = $_POST["username"];
    $username = $_POST["password"];

  if($password == "Admin" && $username == "123"){
    session_start();
		$_SESSION['weslogin'] = true;

    header("Location:tampil.php");

  }
  else{
    $salahkaprah = '<p style="color:red; text-align:center;">Maaf Username atau Password SALAH!</p>';
  }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css"/>
  <link rel="shortcut icon" href="img/logo.png" />
  <link rel="stylesheet" href="css/style.css">
  <title>Login</title>
</head>
<body>
  <div class="container">
    <br>
    <br>
  <div class="card is-dark">
  <div class="card-content">
  <div class="content">
        <div class="media">
          <div class="media-content">
            <p class="title is-4">
                 <img style="display: block; margin: auto ; border-radius:50%;" src="img/person.png">
              Log In  <?= $salahkaprah; ?> 
            </p>        
        </div>
        </div>
  <div class="columns is-dekstop">
    <div class="column">
      <form action="" method="post">
        <div class="field">
        <label for="username">Username
          <input class="input is-rounded" type="text" placeholder="Enter Username" autocomplete="off" id="username" name="username" required>
        </label>
        </div>
        <div class="field">
        <label for="password">Password
          <input class="input is-rounded" type="text" placeholder="Enter Password" autocomplete="off" id="password" name="password" required>
        </label>
        </div>
      <button class="button is-primary is-outlined" type="submit" name="login">Log In</button>
      </form>
    </div>
    <div class="column">
      Lorem, ipsum dolor sit amet consectetur adipisicing elit. At quos suscipit consequatur voluptatum, repellendus quisquam dolore ipsum? Cumque, consequuntur voluptatem. Quidem et veritatis suscipit illum eos minus iure incidunt voluptate.
      
    </div>
  </div>
  <br>
  <br>
  <p> &copy; Copyright 2021 | Alief Aditya Nugraha</p>
  </div>
  </div>
  </div>
 </div>
</body>
</html>

