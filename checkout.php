<?php 
include ='connection.php';
?>

<!DOCTYPE html>
<html>

<head>
<title>menu</title>
<link rel="stylesheet" href="checkout.css" >
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <header>
        <div class="position"></div>
          <nav>
            <ul>
              <li><a href="home .php"><i class="fa fa-fw fa-home"></i> Home</a></li>
              <li><a href="main.php">Menu</a></li>
              <li><a href="haiqa.php">Contact</a></li>
              <li><a href="signin.php">Sign-in</a></li>
              <li><a href="Feedback.php">Feedback</a></li>
              <li><a href="checkout.php">checkout</a></li>
          </ul>
            </div>
          </nav>
    </header>
    
    <div class="row">
  <div class="col-75">
    <div class="container">
      <form action="/action_page.php">
        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="firstname" placeholder="Enter name here">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="Enter email here">
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="Enter address here">
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="Enter city here">

            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" id="state" name="state" placeholder="Enter state here">
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" placeholder="Enter zip here">
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="Enter card name here">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="Enter cardno here">
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="Enter ex month here">

            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="Enter ex year here">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="Enter cvv here">
              </div>
            </div>
          </div>

        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>
        <input type="submit" value="Continue to checkout" class="btn">
      </form>
    </div>
  </div>
  </style> 
</body>
</html>
































<!-- 
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
              <li><a href="home .html"><i class="fa fa-fw fa-home"></i> Home</a></li>
              <li><a href="main.html">Menu</a></li>
              <li><a href="haiqa.html">Contact</a></li>
              <li><a href="signin.html">Sign-in</a></li>
              <li><a href="Feedback.html">Feedback</a></li>
              <li><a href="checkout.html">checkout</a></li>
          
            </div>
          </nav>
        </header>
 <div class="bgmenu"style="height: ;">
    
      <br><br><br>
      <h1 style="color:aliceblue">BILLING</h1>
          <div class="row">
                 <div class="columnn" >
                 </div>
            <div class="columnn" >
          
             
                
              </div>
            <div class="columnn" >
             
              <div id="cart">
                <h2 style="color: aliceblue;">TOTAL PAYMENT</h2>
                <ul id="cart-items" style="color: aliceblue;"></ul>
                <p id="total-price"style="color: aliceblue;" >Total Price: $0</p>
                <button id="checkout-btn" onclick="checkout()" style="color: black;">bill</button>
                 
           
           
          </div> 
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
</body>
</html>

















 -->
