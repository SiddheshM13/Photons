<?php
  session_start();  
  $username = $_SESSION['user'];
?>

<!DOCTYPE html>
<html lang="en">
<head>

  <title>Efficient Farming</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
  .container {
  position: relative;
  font-family: Arial;
  float: left;
  left: 0;
  width: 100%;
}

.text-block {
  position: absolute;
  top: 20px;
  left: 20px;
  background-color: black;
  color: white;
  padding-left: 20px;
  padding-right: 20px;
}
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
/*  .container-fluid {
    padding-top: 70px;
    padding-bottom: 70px;
  }*/
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
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="container">
<img src="https://res.cloudinary.com/farming123/image/upload/v1554390076/farmer.jpg" style="width: 100%; height: auto; ">
<div class='text-block'>
  <h4>Welcome, <?php echo $username; ?></h4>
</div></div>
<div class="row">

	<div class="col-md-7">
    <h2 align="center"> About Us </h2>
		<p style="color: black; text-align: justify; margin: 3vw; font-size: 1.2vw;">We aim to help our farmers produce good yield by renting different equipments at subsidised rates thereby bridging the gap between the government and our farmers. Our main motive includes providing farming equipments on weekly basis so that farmers need not buy these items at a very high cost.
		<p style="color: black; text-align: justify; margin: 3vw; font-size: 1.2vw;">Our future scope includes collaborating with the government and NGO'S to locate the different ration shops which rent equipments. This is made to eliminate the middlemen, reducing corruption and allowing equal access to everyone and thereby making the lifes of our farmers much easier and more fruitful.</p>
    </div>
    <div class="col-md-5">	
    	<img src="https://res.cloudinary.com/farming123/image/upload/v1554357033/farmer1.jpg" style="float:right">
    </div>
</div>
<footer class="container-fluid bg-4 text-center">
  <p> © 2019, All Rights Reserved By Krishi Sahayak</p> 
</footer>

</body>
</html>
