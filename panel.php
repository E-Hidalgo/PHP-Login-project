<?php
session_start();

$email = $_SESSION["email"];

$cutEmail = explode("@", $email);

$user= $cutEmail[0]
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/index.css">
  <title>Panel</title>
</head>

<body>

  <header class="header">
    <img src="assets/unnamed.png" width="80" alt="logo">
    <nav class="flex-around">
      <ul class="header__navbar flex-row align-center">
        <li>Home</li>
        <li>News</li>
        <li>Portfolio</li>
        <li>Balance</li>
      </ul>
      <div class="flex-row centered">
        <?= $email?>
        <button class="header__logout">Log Out</button>
      </div>
    </nav>
  </header>
  <div class="dashboard">
    <h1>Welcome, <?= $user?></h1>

    <aside>
      <ul class="coins">
        <li>Bitcoin</li>
        <li>Ethereum</li>
        <li>Cardano</li>
        <li>XRP</li>
        <li>Dogecoin</li>
        <li>Shiba Inu</li>
        <li>Algorand</li>
        <li>Solana</li>
        <li>Whatever</li>
      </ul>
    </aside>
  </div>

</body>

</html>