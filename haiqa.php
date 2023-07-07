<?php 
include ='connection.php';
?><!DOCTYPE html>
<html>
<head>
  <head>
    <title>Contact Us</title>
<link rel="stylesheet" href="stylish1.css" >
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body
 {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}.fa-google {
  background: #dd4b39;
  color: white;
}
f{
 margin-left: 7%;
}
</style>
</head>
<body style="background:darkred">
  <header>
    <div class="position"></div>
      <nav>
        <ul>
          <li><a href="home .php"><i class="fa fa-fw fa-home"></i> Home</a></li>
          <li><a href="main.php">Menu</a></li>
          <li><a href="haiqa.php">Contact</a></li>
          <li><a href="signin.php">Sign-in</a></li>
          <li><a href="Feedback.php">Feedback</a></li>

        </div>
      </nav>
    </header>
    <div class="bg">
      <br>
      <br><br>
      <br><br><br>
      <br>
  
    <br>
      <br>
    <div class="center"  style="margin-top: 30px;">
      

<h3>Contact Form</h3>

<div class="container">
  <form action="/action_page.php">
    <label for="fname" style="text-align: left ;">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="city">city</label>
    <select id="country" name="country">
      <option value="islamabad">islamabad</option>
      <option value="sialkot">sialkot</option>
      <option value="larkana">larkana</option>
    <option value="karachi">karachi</option>
   <option value="lahore">lahore</option>
    </select>

    <label for="subject">complain box</label>
    <textarea id="subject" name="complain box" placeholder="Write something.." style="height:60px"></textarea>

    <input type="submit" value="Submit">
  </form>
 

</div>
</div></div>
</div>
</body>
</html>
