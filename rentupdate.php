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
		<form name='rent' method="POST" action="rent_update.php" onsubmit= "return validation()">

		<h1 align="center">Update Renting Details</h1>
			<table cellpadding="5vw" align="center" class="form-group">
				<tr>
					<td>Equipment Name: </td>
					<td><input type="text" id="name" name='name' value="" class="form-control"></td>
				</tr>
				<tr>
					<td>Price: </td>
					<td><input type="text" id="price" name='price' value="" class="form-control"></td>
				</tr>

                <tr>
                    <td>Quantity: </td>
                    <td><input type="text" id="quantity" name='quantity' value="" class="form-control"></td>
                </tr>
			</table>
			<input type="submit" name="Update" value="Update" class='btn btn-info'> <input type="Submit" name="Delete" value="Delete" class='btn btn-info'>
		</center>
         <?php            
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "efffarm";

            $conn = mysqli_connect($servername, $username, $password, $dbname);
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            $sql = "SELECT * from rent_available";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                echo "
                    <div style='overflow-x:auto;'>
					<table id='table1' class='table table-bordered table-hover thead-dark'>
                	<thead class='thead-dark'>
                	<tr>
                		<th> Equipment Name </th>
                		<th> Price </th>
                        <th> Quantity </th>
                	</tr>
                	</thead>";
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";                   
                    echo "<td>" . $row["equipment_name"] . "</td>";
                    echo "<td>" . $row["price"] . "</td>";         
                    echo "<td>" . $row["quantity"] . "</td>";         
                    echo "</tr>";
                }
                echo "</table></div>";
            } else {
                echo "<h2 align='center'> 0 results </h2>";
            }
            $conn->close();
        ?>        
        
        <script type='text/javascript'>
            let table = document.getElementById('table1'), iIndex;
            for(let i = 0; i < table.rows.length; i++){
                table.rows[i].onclick = function() {
                    rIndex = this.rowIndex;
                    document.getElementById('name').value = this.cells[0].innerHTML;
                    document.getElementById('price').value = this.cells[1].innerHTML;
                    document.getElementById('quantity').value = this.cells[2].innerHTML;
                }
            }
        </script>
	</body>
</html>