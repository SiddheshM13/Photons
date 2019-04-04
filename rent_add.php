<!DOCTYPE html>
<html lang="en">

<head>
  <title>Krishi Sahayak</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
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

  <script type="text/javascript">
	function validation()
	{
		if(document.rent.ename.value == "" ||document.rent.price.value == "" ||document.rent.quantity.value == "")
		{
			window.alert("All Marked Fields are Compulsory");
			return false;
		}
		
		if(isNaN(document.rent.price.value) || document.rent.price.value < 1 || /^[a-zA-Z]*$/g.test(document.rent.price.value)){
	    	window.alert("Enter valid price");
	    	return false;
	    }
	    if(document.rent.quantity.value < 0 ){
            window.alert("Renting atleast 1 equipment is necessary");
            return false ; 
        }

        if(/^[a-zA-Z]*$/g.test(document.rent.quantity.value)){
        	window.alert("Quantity needs to be a numeric value");
        	return false
        }
        
        
		return confirm("Are you sure you want to insert the details?");
	}
	</script>
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
        <li><a href="rent_add.php">Rent</a></li>
        <li><a href="rent_items.php">Borrow</a></li>
        <li><a href="rent_display.php">Status</a></li>        
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
      </ul>
    </div>
  </div>
</nav>

	<center>
		<form name='rent' method="POST" action="rent_insert.php"  onsubmit= "return validation()">

		<h1 align="center"> Add Renting Details </h1>
			<table cellpadding="10px" align="center" class="form-group">
				<tr>
					<td>Equipment Name:</td>
					<td>
						<select name='ename' class="form-control" >
						  
						  <option value="" disabled selected>Select Equipment</option>
						  <?php
			    	        $servername = "localhost";
					        $username = "id9172558_root";
					        $password = "Farming@1234";
					        $dbname = "id9172558_efffarm";

						  $connect = mysqli_connect($servername,$username,$password,$dbname);
						  $sql = "SELECT * FROM equipment";
    $result = $connect->query($sql);
    if($result->num_rows >0)
    {
        //to fetch one row at a time
        while($row = $result->fetch_assoc())
        {
						  ?>
						  <option value='<?php echo $row["equipment_name"]?>'><?php echo $row["equipment_name"]?></option>
	<?php 
		}
	}

	?>
						  
						</select>
					</td>
				</tr>
				<tr>
					<td>Price : </td>
					<td><input type="text" name="price" id='price' value="" class="form-control"></td>
				</tr>
				<tr>
					<td>Quantity:</td>
					<td><input name='quantity' id='quantity' value="" class="form-control"></td>
				</tr>
				
			</table><br>

				<input type="submit" class='btn btn-info' name="add" value="Add">
				

			</center><br>
			<footer class="container-fluid bg-4 text-center">
  <p> © 2019, All Rights Reserved By Krishi Sahayak</p> 
</footer>
</body>
</html>
