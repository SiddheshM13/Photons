<?php 
session_start();
$username = $_SESSION['user'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Krishi Sahayak</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
  body {
    font: 20px Montserrat, sans-serif;
    line-height: 1.8;
  }
  p {font-size: 16px;}
  .margin {margin-bottom: 45px;}
  .bg-1 { 
    background-color: #1abc9c; /* Green */
    color: #ffffff;
  }
  .bg-2 { 
    background-color: #474e5d; /* Dark Blue */
    color: #ffffff;
  }
  .bg-3 { 
    background-color: #ffffff; /* White */
    color: #555555;
  }
  .bg-4 { 
    background-color: #2f2f2f; /* Black Gray */
    color: #fff;
  }
  .container-fluid {
    padding-top: 70px;
    padding-bottom: 70px;
  }
  .navbar {
    padding-top: 15px;
    padding-bottom: 15px;
    border: 0;
    border-radius: 0;
    margin-bottom: 0;
    font-size: 12px;
    letter-spacing: 5px;
  }
  .navbar-nav  li a:hover {
    color: #1abc9c !important;
  }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Krishi Sahayak</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="rent_add.php">Rent</a></li>
        <li><a href="rent_items.php">Borrow</a></li>
        <li><a href="#">Status</a></li>
        <li><a href="logout.php">Logout</a></li>
        <li></li>
      </ul>
    </div>
    <!-- Logic section -->
    <div class="container">
      <h3>Welcome <?php echo $_SESSION["user"] ?></h3>
      <div class="row">
        <div class="col-md-6">
          <form name="rentitems" action="rent_items_main.php" method=POST>
          <label>Enter Postal Code</label>
          <input type="text" name="pincode" id="pincode" class='form-control'><br>
          <label>Choose equipments</label>
          <select name="equipment" class='form-control'>
            <option>Tractor</option>            
            <option>Cultivator</option>            
            <option>Axle</option>            
            <option>Rake</option>            
            <option>Sickle</option>            
            <option>Hoe</option>            
          </select>
        </div><br>
        <div class="col-md-6">
          <input type="submit" name="Choose" id="choose" value="Choose" class="btn btn-info">
        </div></form>
      </div>
    </div>
  </div>

<footer class="container-fluid bg-4 text-center">
  <p> © 2019, All Rights Reserved By Krishi Sahayak</p> 
</footer>
</body>
</html>
