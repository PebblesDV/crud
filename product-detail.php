<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Questrial&display=swap");
        /*adding certain font*/
    </style>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/product-detail.css" />

    <title>Document</title>
</head>

<body>
    <?php
    include "products.php";
    $product = getProductByID(($_GET["id"]));
    ?>


    <?php include 'header.php'; ?>

    <div class="detail-container">
        <div class="product-info-top">
            <div class="product-imgs">
                <img class="big-img" id="big-img" src="<?= $product["images"][0] ?>" />
                <div class="small-imgs" id="small-imgs">
                    <img class="small-img" id="img1" src="<?= $product["images"][2] ?>" />
                    <img class="small-img" id="img2" src="<?= $product["images"][1] ?>" />
                    <img class="small-img" id="img3" src="<?= $product["images"][0] ?>" />
                </div>
            </div>
            <div class="product-details">
                <div>
                    <p class="product-detail-txt"><?= $product["category"] ?></p>
                    <p class="product-detail-txt ipf-approved"><?= $product["title"] ?></p>
                    <p class="product-detail-txt product-price"><?= $product["price"] ?></p>
                </div>
                <div class="sizing-and-basket">
                    <div class="sizing">
                        <p class="size-basket-txt main-size-txt">Size:</p>
                        <div class="size-boxes">
                            <div class="sizing-box">
                                <p class="size-basket-txt">XS</p>
                            </div>
                            <div class="sizing-box">
                                <p class="size-basket-txt">S</p>
                            </div>
                            <div class="sizing-box">
                                <p class="size-basket-txt">M</p>
                            </div>
                            <div class="sizing-box">
                                <p class="size-basket-txt">L</p>
                            </div>
                            <div class="sizing-box">
                                <p class="size-basket-txt">XL</p>
                            </div>
                        </div>
                    </div>

                    <div class="basket">
                        <div class="sizing-box quantity">
                            <button onclick="increaseQuantity()" class="qty-btn" id="qty-btn">boven</button>
                            <p class="size-basket-txt" id="size-basket-txt">1</p>
                            <button onclick="decreaseQuantity()" class="qty-btn bottom" id="qty-btn-bottom">onder</button>
                        </div>
                        <div class="in-cart-box">
                            <a class="size-basket-txt" href="checkout.php">Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-info-bottom">
            <div class="product-info">
                <p class="info-txt-big">Product information:</p>
                <br>
                <p class="info-txt-small">
                    Introducing our new singlet, a pinnacle of performance and style for powerlifting enthusiasts. Crafted with precision and designed to meet the stringent standards of the International Powerlifting Federation (IPF), this singlet is a must-have for serious athletes.
                    <br> <br>
                    Engineered with comfort and functionality in mind, this singlet provides the perfect blend of flexibility and support during intense training sessions and competitions. Its sleek and form-fitting design offers maximum freedom of movement, allowing you to focus solely on your lifts without any distractions.
                </p>
            </div>
            <div class="size-chart">
                <p class="info-txt-big">
                    Size chart:
                </p>
                <br>
                <img class="size-chart-img" src="assets\img\sizechart.jpg">
            </div>
        </div>
    </div>

    <?php include 'footer.php'; ?>
    <script src="assets/js/product-detail.js"></script>

</body>

</html>