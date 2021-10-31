<?php
require_once("./modules/sessioncontrol.php");
checkSession();

$email = $_SESSION["email"];
$cutEmail = explode("@", $email);
$user= $cutEmail[0];
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
        <a class="header__logout" href="./modules/close_session.php">Log Out</a>
      </div>
    </nav>
  </header>
  <div class="dashboard">
    <h1>Welcome, <?= $user?></h1>

    <aside>
      <ul class="coins">
        <li><img src="assets/1200px-BTC_Logo.svg.png" width="30" alt="bitcoin" />Bitcoin</li>
        <li><img src="assets/1200px-Ethereum-icon-purple.svg.png" width="30" alt="ethereum" />Ethereum</li>
        <li><img src="assets/cardano-logo.webp" width="30" alt="cardano" />Cardano</li>
        <li><img src="assets/xrp-icon-freelogovectors.net_.png" width="30" alt="XRP" />XRP</li>
        <li><img src="assets/1200px-Ethereum-icon-purple.svg.png" width="30" alt="ethereum" />Dogecoin</li>
        <li><img src="assets/1200px-Ethereum-icon-purple.svg.png" width="30" alt="ethereum" />Shiba Inu</li>
        <li><img src="assets/1200px-Ethereum-icon-purple.svg.png" width="30" alt="ethereum" />Algorand</li>
        <li><img src="assets/1200px-Ethereum-icon-purple.svg.png" width="30" alt="ethereum" />Solana</li>
        <li><img src="assets/1200px-Ethereum-icon-purple.svg.png" width="30" alt="ethereum" />Whatever</li>
      </ul>
    </aside>

  </div>

</body>

</html>