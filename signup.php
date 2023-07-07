<?php
include ('connection.php');
if (isset($_post['submit'])){
  $email = mysqli_real_escape_string($conn,$_post['email']);
  $psw = mysqli_real_escape_string($conn,$_post['psw']);
 $select= mysqli_query($conn,"SELECT*FROM 'food1' where email='$email' AND password='psw' ")or die('query fail');
 if(mysqli_num_row($select)>0){
  $message[] = 'user alredy exist!';
 }
 else {
mysql_query($conn,"insert into'food1'(email,password)values('$email','$psw')") or die ('query failed');
$message[] = 'success';
header('location:signin.php');
 }
}
?>

<!DOCTYPE html>
<html>

<head>
<title>sign up</title>
<link rel="stylesheet" href="stylish1.css" >
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body style="background:black">
<?php
if(isset($message)){
  foreach ( $message as  $message){
    echo'<div class="message" onclick-"this.remove();">'.$message.'</div>';
  }
}
?>
    <nav>
        <ul>
          <li><a href="#"><i class="fa fa-fw fa-home"></i> Home</a></li>
          <li><a href="main.php">Menu</a></li>
          <li><a href="haiqa.php">Contact</a></li>
          <li><a href="signin.php">Sign-in</a></li>
          <li><a href="Feedback.php">Feedback</a></li>

        </div>
      </nav>
    <div class="alert alert-success text-center" id="suc" style="display: none;">
    </div>


    <div class="alert alert-danger text-center" id="fail" style="display: none;">
    </div>
    <div class="bg">
     
<div class="center"style="height: 80%;margin-top:40px">
   <b> <h1>SIGN-IN</h1></b>
   <hr>
   <form action="/action_page.php">
    <label for="email">email</label>
    
    <input type="text" id="email" name="email" required>
    <br> <br> 
    <label for="psw">Password</label>
  
    <input type="password" id="psw" name="psw"  title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
    <br>
    <br> <br>
<a href="home .php">
    <button type="submit" name="submit">signin</button>
   </a>
   <p style="color:black" > <span style="color:white"></span>If you have not an account <a href="signup.html" style="color:brown;">Sign-up</a><span style="color:white"></span></p>
  </form>
</div></div></div>


        
<script src="index.js"></script>
</body>
</html>










