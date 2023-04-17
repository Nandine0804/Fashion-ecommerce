const product = [
  {
    id: 0,
    image:
      "https://images.pexels.com/photos/5559986/pexels-photo-5559986.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2",
    title: "Kids cloth",
    price:150,
  },
  {
    id: 1,
    image:
      "https://images.pexels.com/photos/1620769/pexels-photo-1620769.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2",
    title: "Kid cloth +3 age , green",
    price: 260,
  },
  {
    id: 2,
    image:
      "https://images.pexels.com/photos/5560019/pexels-photo-5560019.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=",
    title: "Kids Cloth",
    price: 290,
  },
  {
    id: 3,
    image:
      "https://images.pexels.com/photos/1493108/pexels-photo-1493108.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2",
    title: "Kids cloth",
    price: 200,
  },
];
const categories = [
  ...new Set(
    product.map((item) => {
      return item;
    })
  ),
];
let i = 0;
document.getElementById("root").innerHTML = categories
  .map((item) => {
    var { image, title, price } = item;
    return (
      `
      <div class="row mx-auto container-fluid box">
      <div class="border-0 col-sm">
                <img class='img-fluid mb-3' src=${image}></img>
            <div class="star ">
                    <i class="fas fa-star "></i>
                    <i class="fas fa-star "></i>
                    <i class="fas fa-star "></i>
                    <i class="fas fa-star "></i>
                    <i class="fas fa-star "></i>
                </div>
        <div class='bottom'>
        <p class='card__title'>${title}</p>
        <h2 class='card__price'>$ ${price}.00</h2>` +
      "<button onclick='addtocart(" +
      i++ +
      ")'>Add to cart</button>" +
      `</div>
        </div></div>`
    );
  })
  .join("");

var cart = [];

function addtocart(a) {
  cart.push({ ...categories[a] });
  displaycart();
}
function delElement(a) {
  cart.splice(a, 1);
  displaycart();
}

function displaycart() {
  let j = 0,
    total = 0;
  document.getElementById("count").innerHTML = cart.length;
  if (cart.length == 0) {
    document.getElementById("cartItem").innerHTML = "Your cart is empty";
    document.getElementById("total").innerHTML = "$ " + 0 + ".00";
  } else {
    document.getElementById("cartItem").innerHTML = cart
      .map((items) => {
        var { image, title, price } = items;
        total = total + price;
        document.getElementById("total").innerHTML = "$ " + total + ".00";
        return (
          `<div class='cart-item'>
                <div class='row-img'>
                    <img class='rowimg' src=${image}>
                </div>
                <p style='font-size:12px;'>${title}</p>
                <h2 style='font-size: 15px;'>$ ${price}.00</h2>` +
          "<i class='fa-solid fa-trash' onclick='delElement(" +
          j++ +
          ")'></i></div>"
        );
      })
      .join("");
  }
}




















const products = [
  {
    id: 0,
    image:
      "https://images.pexels.com/photos/914668/pexels-photo-914668.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2",
    title: "Cool Women Coat , black ",
    price: 240,
  },
  {
    id: 1,
    image:
      "https://images.pexels.com/photos/3195979/pexels-photo-3195979.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2",
    title: "Women cloth",
    price: 220,
  },
  {
    id: 2,
    image:
      "https://images.pexels.com/photos/1375736/pexels-photo-1375736.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2",
    title: "Women clothing",
    price: 230,
  },
  {
    id: 3,
    image:
      "https://images.pexels.com/photos/12821062/pexels-photo-12821062.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2",
    title: "Cool fashion, men",
    price: 100,
  },
];
const categorie = [
  ...new Set(
    products.map((item) => {
      return item;
    })
  ),
];
let j = 0;
document.getElementById("root_1").innerHTML = categorie
  .map((item) => {
    var { image, title, price } = item;
    return (
      `
      <div class="row mx-auto container-fluid box">
      <div class="border-0 col-sm">
                <img class='img-fluid mb-3' src=${image}></img>
            <div class="star ">
                    <i class="fas fa-star "></i>
                    <i class="fas fa-star "></i>
                    <i class="fas fa-star "></i>
                    <i class="fas fa-star "></i>
                    <i class="fas fa-star "></i>
                </div>
        <div class='bottom'>
        <p class='card__title'>${title}</p>
        <h2 class='card__price'>$ ${price}.00</h2>` +
      "<button onclick='addtocart(" +
      j++ +
      ")'>Add to cart</button>" +
      `</div>
        </div></div>`
    );
  })
  .join("");

var cart = [];

function addtocart(a) {
  cart.push({ ...categorie[a] });
  displaycart();
}
function delElement(a) {
  cart.splice(a, 1);
  displaycart();
}

function displaycart() {
  let m = 0,
    total = 0;
  document.getElementById("count").innerHTML = cart.length;
  if (cart.length == 0) {
    document.getElementById("cartItem").innerHTML = "Your cart is empty";
    document.getElementById("total").innerHTML = "$ " + 0 + ".00";
  } else {
    document.getElementById("cartItem").innerHTML = cart
      .map((items) => {
        var { image, title, price } = items;
        total = total + price;
        document.getElementById("total").innerHTML = "$ " + total + ".00";
        return (
          `<div class='cart-item'>
                <div class='row-img'>
                    <img class='rowimg' src=${image}>
                </div>
                <p style='font-size:20px;'>${title}</p>
                <h2 style='font-size: 21px;'>$ ${price}.00</h2>` +
          "<i class='fa-solid fa-trash' onclick='delElement(" +
          m++ +
          ")'></i></div>"
        );
      })
      .join("");
  }
}










const productss = [
  {
    id: 0,
    image:
      "https://images.pexels.com/photos/4352249/pexels-photo-4352249.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2",
    title: "Cool Women Coat , black ",
    price: 240,
  },
  {
    id: 1,
    image:
      "https://images.pexels.com/photos/5651312/pexels-photo-5651312.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2",
    title: "Women cloth",
    price: 260,
  },
  {
    id: 2,
    image:
      "https://images.pexels.com/photos/9154696/pexels-photo-9154696.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2",
    title: "Men coat clothing",
    price: 330,
  },
  {
    id: 3,
    image:
      "https://images.pexels.com/photos/9459406/pexels-photo-9459406.png?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2",
    title: "Cool fashion, men",
    price: 300,
  },
];
const categoriess = [
  ...new Set(
    productss.map((item) => {
      return item;
    })
  ),
];
let n = 0;
document.getElementById("root_2").innerHTML = categoriess
  .map((item) => {
    var { image, title, price } = item;
    return (
      `
      <div class="row mx-auto container-fluid box">
      <div class="border-0 col-sm">
                <img class='img-fluid mb-3' src=${image}></img>
            <div class="star ">
                    <i class="fas fa-star "></i>
                    <i class="fas fa-star "></i>
                    <i class="fas fa-star "></i>
                    <i class="fas fa-star "></i>
                    <i class="fas fa-star "></i>
                </div>
        <div class='bottom'>
        <p class='card__title'>${title}</p>
        <h2 class='card__price'>$ ${price}.00</h2>` +
      "<button onclick='addtocart(" +
      n++ +
      ")'>Add to cart</button>" +
      `</div>
        </div></div>`
    );
  })
  .join("");

var cart = [];

function addtocart(a) {
  cart.push({ ...categorie[a] });
  displaycart();
}
function delElement(a) {
  cart.splice(a, 1);
  displaycart();
}

function displaycart() {
  let x = 0,
    total = 0;
  document.getElementById("count").innerHTML = cart.length;
  if (cart.length == 0) {
    document.getElementById("cartItem").innerHTML = "Your cart is empty";
    document.getElementById("total").innerHTML = "$ " + 0 + ".00";
  } else {
    document.getElementById("cartItem").innerHTML = cart
      .map((items) => {
        var { image, title, price } = items;
        total = total + price;
        document.getElementById("total").innerHTML = "$ " + total + ".00";
        return (
          `<div class='cart-item'>
                <div class='row-img'>
                    <img class='rowimg' src=${image}>
                </div>
                <p style='font-size:20px;'>${title}</p>
                <h2 style='font-size: 21px;'>$ ${price}.00</h2>` +
          "<i class='fa-solid fa-trash' onclick='delElement(" +
          x++ +
          ")'></i></div>"
        );
      })
      .join("");
  }
}
