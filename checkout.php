<!DOCTYPE html>
<html lang="en">
  <head>
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Questrial&display=swap");
    </style>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Powerlifting Apparel - Checkout</title>
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/checkout.css" />
    <link rel="icon" href="/favicon.png" />
  </head>
  <body>
    <?php include 'header.php'; ?>

    <div class="checkout-page-forms">
      <div class="contact-checkout">
        <p class="form-text-big">Contact</p>
        <form class="checkout-all-forms">
          <input
            class="checkout-form"
            type="email"
            name="email"
            placeholder="E-Mail"
          />

          <input
            class="checkout-form"
            type="number"
            name="phone"
            placeholder="Mobile No."
          />

          <label class="checkbox">
            <input
              class="checkout-checkbox"
              type="checkbox"
              name="offers and news"
            />
            Email me with news and offers
          </label>
        </form>
      </div>

      <div class="delivery-checkout-upper">
        <p class="form-text-big">Delivery</p>
        <form class="checkout-all-forms">
          <div class="delivery-row">
            <select class="checkout-dropdown">
              <option value="Female">Female</option>
              <option value="Male">Male</option>
              <option value="Rather not say">I'd rather not say</option>
            </select>

            <input
              class="checkout-form-small"
              type="text"
              name="first name"
              placeholder="First name"
            />
          </div>

          <div class="delivery-row">
            <input
              class="checkout-form"
              type="text"
              name="last name"
              placeholder="Last Name"
            />
          </div>
        </form>
      </div>

      <div class="delivery-checkout-lower">
        <form class="checkout-all-forms">
          <div class="delivery-row">
            <input class="checkout-form-small" type="date" name="dob" />

            <input
              class="checkout-form-small"
              type="text"
              name="city"
              placeholder="City"
            />
          </div>

          <div class="delivery-row">
            <input
              class="checkout-form"
              type="text"
              name="address"
              placeholder="Address"
            />
          </div>

          <div class="delivery-row">
            <input
              class="checkout-form-small"
              type="text"
              name="po. code"
              placeholder="Postal code"
            />

            <input
              class="checkout-form-small"
              type="text"
              name="country"
              placeholder="Country"
            />
          </div>

          <label class="checkbox">
            <input
              class="checkout-checkbox"
              type="checkbox"
              name="terms of use"
            />
            I agree with the terms of use
          </label>
        </form>
      </div>

      <div class="continue">
        <form>
          <input
            class="continue-button"
            type="submit"
            value="Continue to payment"
          />
        </form>
      </div>
    </div>

    <?php include 'footer.php'; ?>
  </body>
</html>
