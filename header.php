<?php

//checking what page the user is currently on, and gives the current page the "current" class which makes the categorie link white instead of light gray
function isCurrentPage($path)
{
  $currentPath = $_SERVER["REQUEST_URI"];

  if (str_contains($currentPath, $path)) {
    return "current";
  } else {
    return "";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/header.css" />
  <title>Document</title>
</head>

<body>
  <div class="header">
    <div class="language">
      <p class="language-text">Language:</p>
      <!-- dropdown form to choose language for the website -->
      <form>
        <select class="language-form">
          <option value="English">English</option>
          <option value="Nederlands">Nederlands</option>
        </select>
      </form>
    </div>
    <div class="account-info">
      <p class="about-text accinfo">About us</p>
      <p class="divider">|</p>
      <p class="login-text accinfo">Log in</p>
    </div>
  </div>

  <div class="info-bar">
    <div class="logo">
      <a href="index.php"><img class="logo-white" src="assets/img/whiteTransparent.png" /></a>
    </div>
    <div class="categorie-links">
      <a href="index.php" class="categorie-text headerlink <?= isCurrentPage("index") ?>">HOME</a>
      <a href="ipf-approved.php" class="categorie-text headerlink <?= isCurrentPage("ipf-approved") ?>">IPF APPROVED</a>
      <a href="women.php" class="categorie-text headerlink <?= isCurrentPage("women") ?>">WOMEN'S</a>
      <a href="mens.php" class="categorie-text headerlink <?= isCurrentPage("mens") ?>">MEN'S</a>
      <a href="accessories.php" class="categorie-text headerlink <?= isCurrentPage("accessories") ?>">ACCESSORIES</a>
    </div>
    <div class="search-and-cart">
      <div class="search">
        <!-- text form to make a text field for the search bar -->
        <form>
          <input class="search-bar" type="text" name="searchbar" placeholder="Search" />
        </form>
      </div>
      <div class="cart">
        <!-- a tag to link the other page to this one. whenever you click on the cart image you navigate to the other page -->
        <a href="checkout.php"><img class="item-cart" src="assets/img/shopping-cart.png" /></a>
      </div>
    </div>
  </div>
</body>

</html>