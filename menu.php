<?php 
include ='connection.php';
?>
<!DOCTYPE html>
<html>

<head>
<title>menu</title>
<link rel="stylesheet" href="stylish1.css" >
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="background-color: black;">
    <header>
        <div class="position"></div>
          <nav>
            <ul>
              <li><a href="home .php"><i class="fa fa-fw fa-home"></i> Home</a></li>
              <li><a href="main.php">Menu</a></li>
              <li><a href="haiqa.php">Contact</a></li>
              <li><a href="signin.php">Sign-in</a></li>
              <li><a href="Feedback.php">Feedback</a></li>
              <li ><a href="checkout.php" > <button id="checkout-btn" onclick="checkout()" style="color:white;">Checkout</button></a>
              </li> 
            </ul>
            </div>
          </nav>
        </header>
 <div class="bgmenu"  style="background-image:url('bg5.jpg')">
    <br><br>
 
      <a href="#d"  style="color:aliceblue;font-family: fantasy;font-size:60px;">PIZZA</a><br>
        <a href="#b" style="color:aliceblue;font-family: fantasy;font-size:60px;">BURGER</a><br>
        <a href="#a" style="color:aliceblue;font-family: fantasy;font-size:60px;">SHAWARMA</a><br>
        <a href="#z" style="color:aliceblue;font-family: fantasy;font-size:60px;">SALAD</a><br>
        <a href="#a" style="color:aliceblue;font-family: fantasy;font-size:60px;">SHAWARMA</a><br>
        </div>
     
      <h1 id="d" style="color:red;text-align: center;">PIZZA</h1>
          <div class="row">
                 <div class="columnn" >
                 </div>
            <div class="columnn"style="width: 40%;" >
          
              <div id="item-list">
              
                <ul>
                  <li><button class="add-to-cart" onclick="addToCart(1000)">Pizza ai funghi, Sicilian Pizza, 1 - $1000</button></li>
                  <li><button class="add-to-cart" onclick="addToCart(1500)">Pizza ai funghi, Sicilian Pizza,  - $1500</button></li>
                  <li><button class="add-to-cart" onclick="addToCart(1400)">Pizza ai funghi, Sicilian Pizza, - $1400</button></li>
                  <li><button class="add-to-cart" onclick="addToCart(1200)">Pizza ai funghi, Sicilian Pizza,- 1200</button></li>
                  <li><button class="add-to-cart" onclick="addToCart(1220)">Pizza ai funghi, Sicilian Pizza,- $1220</button></li>
                  <li><button class="add-to-cart" onclick="addToCart(1110)">Pizza ai funghi, Sicilian Pizza,- $1100</button></li>
                  <li><button class="add-to-cart" onclick="addToCart(1000)">Pizza ai funghi, Sicilian Pizza, - $1000</button></li>
                  <li><button class="add-to-cart" onclick="addToCart(1220)">Pizza ai funghi, Sicilian Pizza,- $1220</button></li>
                  <li><button class="add-to-cart" onclick="addToCart(1330)">Pizza ai funghi, Sicilian Pizza,- $1330</button></li>
                  <li><button class="add-to-cart" onclick="addToCart(1440)">Pizza ai funghi, Sicilian Pizza,- $1440</button></li>
                  <li><button class="add-to-cart" onclick="addToCart(1550)">Pizza ai funghi, Sicilian Pizza, - $1550</button></li>
 
<!-- ////////////////////////////////////////////////////////////////////// -->
                  <h1  id="a" style="color: red">SHAWARMA</h1>
                <ul style="color:white">
                   <li ><button class="add-to-cart" onclick="addToCart(10)">BBQ Chicken Shawarma</button></li>
                  <li><button class="add-to-cart" onclick="addToCart(15)">Chicken ShawarmaAdd to Cart</button></li>
                  <li><button class="add-to-cart" onclick="addToCart(20)">Full Meat Shawarma_</button></li>
                  <li><button class="add-to-cart" onclick="addToCart(25)">BBQ Chicken Shawarma</button></li>
                  <li><button class="add-to-cart" onclick="addToCart(30)">Full Meat Shawarma_</button></li>
                  <li><button class="add-to-cart" onclick="addToCart(35)">Chicken Shawarma</button></li>
                  <li><button class="add-to-cart" onclick="addToCart(40)">Full Meat Shawarma_</button></li>
                  <li><button class="add-to-cart" onclick="addToCart(45)">BBQ Chicken Shawarma</button></li>
             
                </ul>
                    </ul>
                    <!-- //////////////////////////////////////////// -->
                    <h1 id="b" style="color:red;">BURGER</h1>
                    <ul style="color:white">
                       <li ><button class="add-to-cart" onclick="addToCart(10)">BBQ Chicken BURGER</button></li>
                      <li><button class="add-to-cart" onclick="addToCart(150)">Chicken BURGER</button></li>
                      <li><button class="add-to-cart" onclick="addToCart(200)">Full MeatBURGER</button></li>
                      <li><button class="add-to-cart" onclick="addToCart(250)">BBQ Chicken BURGER</button></li>
                      <li><button class="add-to-cart" onclick="addToCart(300)">Full Meat BURGER</button></li>
                      <li><button class="add-to-cart" onclick="addToCart(350)">ChickenBURGER</button></li>
                      <li><button class="add-to-cart" onclick="addToCart(400)">Full Meat BURGER</button></li>
                      <li><button class="add-to-cart" onclick="addToCart(45)">BBQ Chicken BURGER</button></li>
                      
                    </ul>
                    <!-- /////////////////////////////////////// -->
                    <h1 id="z" style="color:red">salad</h1>
                    <ul style="color:white;background-color: black;">
    
                      <li ><button class="add-to-cart" onclick="addToCart(10)">Tabbouleh Salad</button></li>
                     <li><button class="add-to-cart" onclick="addToCart(15)">Russian Salad </button></li>
                     <li><button class="add-to-cart" onclick="addToCart(20)">Turkish Salad</button></li>
                     <li><button class="add-to-cart" onclick="addToCart(25)">Aloo Bukhara Chutney</button></li>
                     <li><button class="add-to-cart" onclick="addToCart(30)">Chicken Wings with Hot Sauce_</button></li>
                     <li><button class="add-to-cart" onclick="addToCart(35)">Chicken Shawarma</button></li>
                     <li><button class="add-to-cart" onclick="addToCart(40)">Full Meat Shawarma_</button></li>
                     <li><button class="add-to-cart" onclick="addToCart(45)">BBQ Chicken Shawarma</button></li>
                         </ul>

              </div></div>
            <div class="columnn" >
              <br><br>
              
              <div id="cart">
                <h2 style="color: aliceblue;">Shopping Cart</h2>
                <ul id="cart-items" style="color: aliceblue;"></ul>
                <p id="total-price"style="color: aliceblue;">Total Price: $0</p>
                
              </div>
           
           
          </div> 
          
 </div> 
  
     
<script >
let cartItems = [];
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
</body>
</html>


