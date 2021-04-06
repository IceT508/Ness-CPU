<?php   session_start();  ?>

<html>
  <head>
       <title> Home </title>
  </head>
  <body>
<?php
      if(!isset($_SESSION['use'])) // If session is not set then redirect to Login Page
       {
           header("Location:Login.php");  
       }

          echo $_SESSION['use'];

          echo "Login Success";

          echo "<a href='logout.php'> Logout</a> "; 
?>
</body>
</html>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Home Page</title>

    <link rel="stylesheet" type="text/css" href="mystyle.css">
  </head>
  <body>
    
    <!-- Header -->
    <div class="header">
      <img src="https://scontent-iad3-2.xx.fbcdn.net/v/t1.0-9/45000277_2213671092234761_7542690882265284608_n.png?_nc_cat=102&ccb=1-3&_nc_sid=973b4a&_nc_ohc=HdNO8WoDf6UAX-q5oUE&_nc_ht=scontent-iad3-2.xx&oh=8fbd80223e31fb41c88c75268cf138cc&oe=60840D7B"  style="width:10%;">
      <div class="content">
        <h1>Ness' CPU</h1>
        <h2>For all your PC repair needs!</h2>
      </div>
    </div>
      <!-- Navigation Bar -->
      <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <a href="index.html" >Home</a>
        <a href="services.html">Services</a>
        <a href="order.html" class="active">Order</a>
        <a href="contact.html" >Contact Us</a>
        <a href="about.html" >About Us</a>
      </nav>
<!-- Text Above Login -->
<div class="row">
</div>
<div class="main center">
  <h1>Welcome to Ness' CPU!</h1>
</div>
</div>


  
  <!-- Footer -->

<div class="footer">
    <div class="subfooter">
            <div class="container">
                <img src="logo.png" alt="logo"style="width:120px;height:120px;">
            </div>
            <div class="footerthird">
                <h1>Contact us at</h1>
                <a href="https://www.facebook.com/nesscpu/">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTu8tkSroODADM34G7rHpf9AXygu5m97Uf6mg&usqp=CAU" alt="logo" style="width:40px;height:40px;">
                    </a>
                <a href="">
                    <img src="https://image.flaticon.com/icons/png/512/60/60580.png" alt="" style="width:40px;height:40px;">
                    </a> 
            </div>
            <div class="footerthird">
                <h1>Our Store</h1>
                <p>(717) 559-0454</p>
                <p>3464 Colonial M73 Ave</p>
                <p>Roanoke, Virginia(VA), 24018</p>
            </div>
            <div class="footerthird">
                <h1>Need help?</h1>
                <a href="services.html">Our Services</a>
                <br>
                <a href="order.html">Order</a>
                <br>
                <a href="employees.html">Employee Log In</a>
            </div>
    </div>
</div>


    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>

