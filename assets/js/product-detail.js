const smallImages = document.querySelectorAll("#small-imgs img");
const bigImage = document.getElementById("big-img");
const qtyButton = document.getElementById("qty-btn");
const sizeBasket = document.getElementById("size-basket-txt");
const qtyButtonBottom = document.getElementById("qty-btn-bottom");
let defaultQuantity = 1;

smallImages.forEach((smallImage) => {
  smallImage.addEventListener("click", () => {
    bigImage.src = smallImage.src;
  });
});

function increaseQuantity() {
  defaultQuantity++;
  sizeBasket.innerHTML = defaultQuantity;
}

function decreaseQuantity() {
  if (defaultQuantity == 1) {
    return;
  } else {
    defaultQuantity--;
    sizeBasket.innerHTML = defaultQuantity;
  }
}
