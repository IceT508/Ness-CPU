<?php   session_start();  ?>

<html>
  <head>
       <title> Home </title>
  </head>
  <body>
<?php
      // redirects when there is no session
      if(!isset($_SESSION['use']))
       {
           header("Location:Login.php");  
       }

          echo $_SESSION['use'];

          echo " Login Success";

          echo "<a href='logout.php'> Logout</a> "; 
?>

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
  <a href="order.php"class="active" >Order</a>
  <a href="contact.html" >Contact Us</a>
  <a href="about.html" >About Us</a>
  </nav>

<!-- Forms -->
<div class="row">
</div>
<div class="main">

<!-- All previous orders listed here -->
<h3>All Current Orders</h3>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Job ID</th>
      <th scope="col">Date Submitted</th>
      <th scope="col">Technician</th>
      <th scope="col">Repair Type</th>
      <th scope="col">Cost</th>
      <th scope="col">Date Completed</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>4/01/2021</td>
      <td>Christian Williams</td>
      <td>Broken Screen</td>
      <td>$85.99</td>
      <td>4/03/2021</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>4/03/2021</td>
      <td>Darlene Gutierrez</td>
      <td>Data Transfer</td>
      <td>$20.00</td>
      <td>4/04/2021</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>4/05/2021</td>
      <td>Thomas Mikkelson</td>
      <td>Virus Removal</td>
      <td>$81.99</td>
      <td>TBA</td>
    </tr>
  </tbody>
</table>

<!-- Personal Info -->
<br>
<br>
<h3> Create New Order</h3>
<form class="needs-validation" novalidate>
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationTooltip01">First name</label>
      <input type="text" class="form-control" id="validationTooltip01" placeholder="First name" value="" required>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationTooltip02">Last name</label>
      <input type="text" class="form-control" id="validationTooltip02" placeholder="Last name" value="" required>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationTooltipUsername">Username</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
        </div>
        <input type="text" class="form-control" id="validationTooltipUsername" placeholder="Username" aria-describedby="validationTooltipUsernamePrepend" required>
        <div class="invalid-tooltip">
          Please choose a unique and valid username.
        </div>
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationTooltip03">City</label>
      <input type="text" class="form-control" id="validationTooltip03" placeholder="City" required>
      <div class="invalid-tooltip">
        Please provide a valid city.
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationTooltip04">State</label>
      <input type="text" class="form-control" id="validationTooltip04" placeholder="State" required>
      <div class="invalid-tooltip">
        Please provide a valid state.
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationTooltip05">Zip</label>
      <input type="text" class="form-control" id="validationTooltip05" placeholder="Zip" required>
      <div class="invalid-tooltip">
        Please provide a valid zip.
      </div>
    </div>
  </div>
  <br>
  <div class="form-group">
    <select class="custom-select" required>
      <option value="">Please select a service type</option>
      <option value="1">Broken Screen</option>
      <option value="2">Virus Removal</option>
      <option value="3">Data Transfer</option>
      <option value="4">Build Computer</option>
      <option value="5">Operating System Upgrade</option>
      <option value="6">Battery Replacement</option>
      <option value="7">Data Recovery</option>
      <option value="8">Port Repair</option>
    </select>
    <div class="invalid-feedback">Please select a service</div>
  </div>
<br>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Please describe your issue in greater detail</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <br>
  <div class="invalid-feedback">
        Please describe your issue
    </div>

  <div class="form-check">
      <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" required>
      <label class="form-check-label" for="invalidCheck3">
        Agree to terms and conditions
      </label>
       <div class="invalid-feedback">
        You must agree before submitting.
    </div>
  </div>
<br>
  <button class="btn btn-primary" type="submit">Submit form</button>
</form>

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
                <a href="order.php">Order</a>
                <br>
                <a href="employees.php">Employee Log In</a>
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

