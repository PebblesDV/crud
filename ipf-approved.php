<!DOCTYPE html>
<html class="no-js" lang="">

<head>
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Questrial&display=swap");
    /*adding certain font*/
  </style>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Powerlifting Apparel - IPF-Approved</title>
  <link rel="stylesheet" href="assets/css/style.css" />
  <link rel="stylesheet" href="assets/css/sidebar.css" />
  <link rel="stylesheet" href="assets/css/products.css" />
  <script src="assets/js/app.js"></script>

  <meta name="description" content="" />
  <meta property="og:title" content="" />
  <meta property="og:type" content="" />
  <meta property="og:url" content="" />
  <meta property="og:image" content="" />
  <meta property="og:image:alt" content="" />
  <link rel="icon" href="/favicon.png" />
  <link rel="manifest" href="site.webmanifest" />
  <meta name="theme-color" content="#fafafa" />
</head>

<body>
  <div class="container">
    <?php include 'header.php'; ?>

    <div class="page-link">
      <div class="link-full-text">
        <p class="page-link-text">Home</p>
        <img class="page-link-img" src="assets/img/angle-right.png" />
        <p class="page-link-text">IPF Approved</p>
      </div>
    </div>

    <div class="sidebar-and-products">

      <?php include "sidebar.php"; ?>

      <div class="product-layout">
        <div class="products-sort">
          <p class="sort-text-products">Products</p>
          <div class="sorting">
            <p class="sort-text">Sort by:</p>
            <form>
              <select class="sorting-form">
                <option value="newest">Newest</option>
                <option value="low-high">Price lowest to highest</option>
                <option value="high-low">Price highest to lowest</option>
              </select>
            </form>
          </div>
        </div>

        <?php include 'products.php'; ?>

        <div class="items-top">
          <p class="items-text"><?= count($products) ?> item(s)</p>
        </div>
        <div class="products">

          <!-- loops through all products in product array found in "products.php" and shows each products info -->
          <?php foreach ($products as $key => $product) : ?>
            <a href="product-detail.php?id=<?= $product["id"] ?>" class="product-link">
              <div class="product-card">
                <img class="card-image" src="<?= $product["images"][0] ?>" />
                <p class="product-text"><?= $product["category"] ?></p>
                <p class="product-text"><?= $product["title"] ?></p>
                <p class="product-text"><?= $product["price"] ?></p>
              </div>
            </a>
          <?php endforeach; ?>

        </div>
        <div class="items-bottom">
          <p class="items-text"> <?= count($products) ?> item(s)</p>
        </div>
      </div>
    </div>

    <?php include 'footer.php'; ?>
  </div>
</body>

</html>