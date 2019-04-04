<html>
    <head>
        <title>View Data</title>
        <meta charset="UTF-8">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script></script>   
    </head>
    <body>
<?php
        $servername = "localhost";
        $username = "id9172558_root";
        $password = "Farming@1234";
        $dbname = "id9172558_efffarm";
	 	$dbconn = mysqli_connect($host, $username, $passwd, $dbname);
	 	$sql = "select * from farmer_data";
	 	$res = mysqli_query($dbconn,$sql);
	 	if(mysqli_num_rows($res) > 0)
	 	{
	 		echo "<div style='overflow-x:auto'><table cellpadding='5vw' border=1 align='center' class='table table-striped table-bordered table-hover table-condensed'>
				<tr>
					<th>Shop Name</th>
					<th>Shop ID</th>
					<th>Address</th>
					<th>Contact</th>
					<th>Address</th>
					<th>Taluka</th>
					<th>District</th>
					<th>Pincode</th>
				</tr>";
	 		while($row = mysqli_fetch_assoc($res)) 
	 		{
				echo "<tr>
					<td>",$row['shop_name'],"</td>
					<td>",$row['shop_no'],"</td>
					<td>",$row['contact'], "</td>
					<td>",$row['address'],"</td>
					<td>",$row['taluka'],"</td>
					<td>",$row['district'],"</td>
					<td>",$row['pincode'],"</td>";
			}
				echo "</table></div>";

		}
		else 
		{
		    echo "<h2 align='center' style='font-family:georgia;'> No profiles available. </h2><center>";
		}
?>
</body>
</html>
 	