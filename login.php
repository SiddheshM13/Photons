<!DOCTYPE html>
<html lang="en">
<head>
<!-- 	<?php
		session_start();
	    if(isset($_SESSION['user']))
	    {
	       header('Location: admin_login_landing.php');
		}
	?> -->
 <title>Efficient Farming</title>
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
    background-color: black; /* White */
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
		<script type="text/javascript">
			function validation()
			{
				if(document.f1.user.value == "")
				{
					window.alert("Please enter username");
					document.f1.user.focus();
					return false;
				}
				else if(document.f1.pass.value == "")
				{
					window.alert("Please enter password");
					document.f1.pass.focus()
					return false;
				}
				return true;
			}

		</script>
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
        <li><a href="#">Home</a></li>
        <li><a href="#">Equipment</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
	</head>
	<body>
			<h2 align="center" style="font-family: yatra one; padding-top: 10px; color: black">LOGIN </h2><hr><br>
			<center>
			<form name='f1' method="POST" action='login_check.php' onsubmit="return validation()">
				<table cellpadding="10px" class='form-group'>
					<tr>
						<td>Username:&nbsp;&nbsp;</td>
						<td><input type="text" name="user" id="user" class='form-control'></td>
					</tr>
					<tr>
						<td>Password:&nbsp;&nbsp;</td>
						<td><input type="Password" name="pass" id="pass" class='form-control'></td>
						<td>&nbsp;<label for="button" onclick="myFunction()" value=&#x1f441; class="eye1">&#x1f441;</label></td>
					</tr>

					</table>
					<script>
					function myFunction() {
					    var x = document.getElementById("pass");
					    if (x.type === "password") {
					        x.type = "text";
					    } else {
					        x.type = "password";
					    }
					}</script>
					<br>
					<input type="submit" class='btn btn-info' name='submit' value="Login">
				<br>
				</form></center>
			</div>
			<footer class="container-fluid bg-4 text-center" style="bottom: 0; position: fixed; width: 100%">
  <p> © 2019, All Rights Reserved By Krishi Sahayak</p> 
</footer>

 	</body>
</html>