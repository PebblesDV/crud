<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/sidebar.css" />
    <title>Document</title>
</head>

<body>

    <div class="sidebar">
        <div class="type, box">
            <p class="box-name">Type</p>
            <!-- radio buttons form to be able to choose categories -->
            <form class="buttons-form">
                <label class="button-text block">
                    <input class="typebuttons" type="radio" name="typeselector" value="shirts" />
                    Meet Tees - IPF Approved
                </label>
                <label class="button-text block">
                    <input class="typebuttons" type="radio" name="typeselector" value="singlet" />
                    Singlets - IPF Approved
                </label>
                <label class="button-text block">
                    <input class="typebuttons" type="radio" name="typeselector" value="socks" />
                    Deadlift Socks - IPF Approved
                </label>
            </form>
        </div>
        <div class="color, box">
            <p class="box-name">Color</p>
            <form class="colors-form">
                <label class="block">
                    <input class="colorbuttons redbutton" type="radio" name="colorselector" value="red" />Red
                </label>
                <label class="block">
                    <input class="colorbuttons lbluebutton" type="radio" name="colorselector" value="lightblue" />Light Blue
                </label>
                <label class="block">
                    <input class="colorbuttons pinkbutton" type="radio" name="colorselector" value="pink" />Pink
                </label>
                <label class="block">
                    <input class="colorbuttons blackbutton" type="radio" name="colorselector" value="black" />Black
                </label>
                <label class="block">
                    <input class="colorbuttons whitebutton" type="radio" name="colorselector" value="white" />White
                </label>
                <label class="block">
                    <input class="colorbuttons dbluebutton" type="radio" name="colorselector" value="darkblue" />Dark Blue
                </label>
                <label class="block">
                    <input class="colorbuttons orangebutton" type="radio" name="colorselector" value="orange" />Orange
                </label>
            </form>
        </div>
        <div class="price, box">
            <p class="box-name">Price</p>
            <!-- slider form to be able to choose how much money you want to spend -->
            <form>
                <input class="priceslider" type="range" min="0" max="100" value="50" step="5" />
            </form>
            <div class="prices">
                <p class="lowestprice">€0,00</p>
                <p class="highestprice">€100,00</p>
            </div>
        </div>
        <div class="newsletter, box">
            <p class="box-name">Newsletter</p>
            <form>
                <input class="news-mail" type="text" name="mailbox" placeholder="E-mail" />
                <input class="signup-button" type="submit" value="Sign Up" />
            </form>
        </div>
    </div>

</body>

</html>