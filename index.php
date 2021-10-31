<?php
require_once("./modules/sessioncontrol.php");

$isLogout = $_GET["logout"];
$alert =checkSession();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login PHP Project</title>
  <link rel="stylesheet" href="./css/index.css">
</head>

<body>

  <main>
    <img src="assets/unnamed.png" width="150" alt="logo_pineapple">
    <div class="form">
      <form method="POST" action="./modules/validate.php" class="form__content">
        <label for="email" class="form__label">User Name</label>
        <input type="email" id="email" name="email" class="form__input">
        <label for="password" class="form__label">Password</label>
        <input type="password" id="password" name="password" class="form__input">

        <?= ($alert) ? "<div class='alert alert-$alert[type] role='alert'>$alert[text]</div>" : "" ?>

        <button type="submit" class="form__button">Log In</button>
      </form>
    </div>


  </main>

</body>

</html>