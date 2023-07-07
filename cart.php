
<?php 
include ='connection.php';
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" type="image/x-icon" href="./img/umt.ico">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <body>
        <div class="Cart-Container">
            <div class="Header">
                <!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
  <h1>Shopping Cart</h1>
  <div id="item-list">
    <ul>
      <li><button class="add-to-cart" onclick="addToCart(1000)">PIZZA 1 - $1000</button></li>
      <li><button class="add-to-cart" onclick="addToCart(1500)">PIZZA 2 - $1500</button></li>
      <li><button class="add-to-cart" onclick="addToCart(1400)">PIZZA 3 - $1400</button></li>
      <li><button class="add-to-cart" onclick="addToCart(1200)">PIZZA 4 - $1200</button></li>
      <li><button class="add-to-cart" onclick="addToCart(1220)">PIZZA 5 - $1000</button></li>
      <li><button class="add-to-cart" onclick="addToCart(1110)">PIZZA 6 - $1000</button></li>
      <li><button class="add-to-cart" onclick="addToCart(1000)">PIZZA 7 - $1000</button></li>
      <li><button class="add-to-cart" onclick="addToCart(1220)">PIZZA 8 - $1000</button></li>
      <li><button class="add-to-cart" onclick="addToCart(1330)">PIZZA 9 - $1000</button></li>
      <li><button class="add-to-cart" onclick="addToCart(1440)">PIZZA 10 - $1000</button></li>
      <li><button class="add-to-cart" onclick="addToCart(1550)">PIZZA 11 - $1000</button></li>
      <li><button class="add-to-cart" onclick="addToCart(1660)">PIZZA 12 - $1000</button></li>
      <li><button class="add-to-cart" onclick="addToCart(1110)">PIZZA 14 - $1000</button></li>  
    </ul>
  </div>
  
  <div id="cart">
    <h2>Shopping Cart</h2>
    <ul id="cart-items"></ul>
    <p id="total-price">Total Price: $0</p>
    <button id="checkout-btn" onclick="checkout()">Checkout</button>
  </div>
  
 


<script >let cartItems = [];
    let totalPrice = 0;
    
    function addToCart(price) {
      cartItems.push(price);
      totalPrice += price;
      updateCart();
    }
    
    function updateCart() {
      const cartItemsElement = document.getElementById('cart-items');
      cartItemsElement.innerHTML = '';
    
      cartItems.forEach((item, index) => {
        const listItem = document.createElement('li');
        listItem.textContent = `Item ${index + 1} - $${item}`;
        cartItemsElement.appendChild(listItem);
      });
    
      document.getElementById('total-price').textContent = `Total Price: $${totalPrice}`;
    }
    
    function checkout() {
      alert(`Total Price: $${totalPrice}`);
      // You can add further logic here, such as redirecting to a payment page or clearing the cart.
    }
    
    
    
    
</script>
 <style>
 h1, h2 {
  text-align: center;
}

#item-list, #cart {
  display: inline-block;
  vertical-align: top;
  margin: 10px;
}

#cart {
  border: 1px solid black;
  padding: 10px;
}

#checkout-btn {
  display: block;
  margin-top: 10px;
}


</style>   
</body>
</html>