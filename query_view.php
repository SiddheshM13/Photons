<!DOCTYPE html>
<html lang="en">

<head>
  <title>Krishi Sahayak</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
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
	<center>
		<form name='rent' method="POST" action=""  onsubmit= "return validation()">

		<h1 align="center"> Update Renting Details </h1>
			
		<div class="bs-example">
    <table cellpadding="10px" align="center" class="table table-striped">
        <thead>
            <tr>
                <th>Type</th>
                <th>Query </th>
                <th>Phone Number</th>
                
                
            </tr>
        </thead>
        <?php
				$connect = mysqli_connect("localhost","root","","efffarm");
				$sql = "SELECT * FROM queries";
    			$result = $connect->query($sql);
    			if($result->num_rows >0)
    			{
        			//to fetch one row at a time
        				while($row = $result->fetch_assoc())
        					{
						  ?>
        <tbody>
            <tr>
                <td><?php echo $row["type"]?></td>
                <td><?php echo $row["query"]?></td>
                <td><?php echo $row["contact_number"]?></td>
            </tr>
            
        </tbody>
        <?php
        	}
        }
        ?>

    </table>
</div>
</body>
</html>