<html>
	<head>
		<title>User Registration</title>
	  	<meta charset="utf-8">
	  	<meta name="viewport" content="width=device-width, initial-scale=1">
	  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
		<script type="text/javascript">
			function validation()
			{
				var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
				var contact = document.farmer.contact.value;
				var aadhar = document.farmer.aadhar.value;
				var pincode = document.farmer.pincode.value;

				if(document.farmer.firstname.value == "" ||document.farmer.lastname.value == "" ||document.farmer.aadhar.value == "" ||document.farmer.contact.value == "" ||document.farmer.address.value == "" ||document.farmer.taluka.value == "" || document.farmer.district.value == "" ||document.farmer.pincode.value == "" || document.farmer.password.value == "")
				{
					window.alert("All Marked Fields are Compulsory");
					return false;
				}
				if (!/^[a-zA-Z]*$/g.test(document.farmer.firstname.value)){
			        window.alert("Name must only contain characters");
			        return false;
			    }
			    if (!/^[a-zA-Z]*$/g.test(document.farmer.lastname.value)){
			        window.alert("Name must contain only characters");
			        return false;
			    }

				if(isNaN(document.farmer.contact.value) || contact < 1){
			    	window.alert("Enter valid contact number");
			    	return false;
			    }				
			    if(isNaN(document.farmer.aadhar.value) || aadhar.length!=12){
			    	window.alert("Enter valid aadhar number");
			    	return false;
			    }
			    if(isNaN(document.farmer.pincode.value) || pincode.length!=6){
			    	window.alert("Enter valid pincode");
			    	return false;
			    }
			    if(document.farmer.contact.value.length != 10 ){
                    window.alert("Invalid Contact Number");
                    return false ; 
                }
			    if(document.farmer.password.value.length < 8 ){
                    window.alert("Password must be greater than 8 characters.");
                    return false ; 
                }

				return confirm("Are you sure you want to insert the details?");
			}
		</script>
		<style>
		  body {
    font: 20px Montserrat, sans-serif;
    line-height: 1.8;
  }
  p {font-size: 16px; color:black; }
  h2{color:black;}
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
    height: 10px;
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
        <li><a href="index.php">Home</a></li>
        <li><a href="#">Equipment</a></li>
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span>Login</a></li>
      </ul>
    </div>
  </div>
</nav>
		<center>
		<form name='farmer' method="POST" action="farmer_insert.php"  onsubmit= "return validation()">

		<h1 align="center"> Add Details</h1>
			<table cellpadding="10px" cellspacing="10px" align="center" class="form-group">
				<tr>
					<td>Firstname: </td>
					<td><input type="text" id="firstname" name='firstname' value="" class="form-control">
					</td>
				</tr>
				<tr>
					<td>Lastname: </td>
					<td><input type="text" id="lastname" name='lastname' value="" class="form-control"></td>
				</tr>
				<tr>
					<td>Aadhar Card number: </td>
					<td><input type="text" name="aadhar" id='aadhar' value="" class="form-control"></td>
				</tr>
				<tr>
					<td>Contact Number: </td>
					<td><input id="contact" name='contact' value="" class="form-control"></td>
				</tr>
				<tr>
					<td>Address: </td>
					<td><textarea rows='5' cols="30" name='address' id='address' class="form-control"></textarea></td>
				</tr>
				<tr>
					<td>Taluka: </td>
					<td><input type="text" name="taluka" id='taluka' value="" class="form-control"></td>
				</tr>				
				<tr>
					<td>District: </td>
					<td><input type="text" name="district" id='district' value="" class="form-control"></td>
				</tr>				
				<tr>
					<td>Pincode: </td>
					<td><input type="text" name="pincode" id='pincode' value="" class="form-control"></td>
				</tr>								
				<tr>
					<td>Password: </td>
					<td><input type="password" name="password" id='password' value="" class="form-control"></td>
				</tr>	
			</table><br>

				<input type="submit" class='btn btn-info' value="Add">

			</center><br>
		</form></b>
		<footer class="container-fluid bg-4 text-center">
  <p> © 2019, All Rights Reserved By Krishi Sahayak</p> 
</footer>

	</body>
</html>