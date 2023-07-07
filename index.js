
function goToBilling() {
  window.location.href = "billing.html";
}

document.getElementById("billingForm").addEventListener("submit", function(event) {
  event.preventDefault();
  var name = document.getElementById("name").value;
  var email = document.getElementById("email").value;
  var address = document.getElementById("address").value;

  // Perform any necessary validation or processing
  // Here, we are just logging the values
  console.log("Name: " + name);
  console.log("Email: " + email);
  console.log("Address: " + address);

  // You can redirect the user to a confirmation page or perform any other action here
});


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
    
/////////////////////
var myInput = document.getElementById("psw");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
/////////////////////////////////////////
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
// ///////////////////////////////////////////
// signup
// //////////////////////////////////////////////
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
  

const names = document.getElementById("username");
const pwd = document.getElementById("password");
const cName = document.getElementById("cname");
const email = document.getElementById("email");
const sub = document.getElementById("txt");
const comment = document.getElementById("comment");

const array = [
  {
    name: "Ali",
    passwrod: "123",
  },
  {
    name: "Ahmad",
    passwrod: "456",
  },
  {
    name: "Usman",
    passwrod: "789",
  },
];

function check() {
  let count = 0;
  for (let i = 0; i < array.length; i++) {
    if (names.value == array[i].name) {
      if (pwd.value == array[i].passwrod) {
        count++;
      }
    }
  }
  if (count == 1) {
    display(event);
  } else {
    failed(event);
  }
}

function display(event) {
  event.preventDefault();
  document.getElementById("suc").innerHTML = "<b>Login Successfully!!!</b>";
  document.getElementById("suc").style.display = "block";
  setTimeout(function () {
    document.getElementById("suc").innerHTML = "";
    document.getElementById("suc").style.display = "none";
    location.reload();
  }, 5000);
}

function failed(event) {
  event.preventDefault();
  document.getElementById("fail").innerHTML = "<b>Login Failed!!!</b>";
  document.getElementById("fail").style.display = "block";
  setTimeout(function () {
    document.getElementById("fail").innerHTML = "";
    document.getElementById("fail").style.display = "none";
    location.reload();
  }, 5000);
}

function userDetails(event) {
  event.preventDefault();
  if (
    cName.value != "" &&
    email.value != "" &&
    sub.value != "" &&
    comment.value != ""
  ) {
    document.getElementById("print").innerHTML =
      cName.value +
      "<br>" +
      email.value +
      "<br>" +
      sub.value +
      "<br>" +
      comment.value;
    document.getElementById("print").style.display = "block";
    setTimeout(function () {
      document.getElementById("print").style.display = "none";
      document.getElementById("suc").style.display = "none";
    }, 5000);
  }
}


    ///////////////////////////////////
    // slideset
    /////////////////////////////////////
    let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}