<!DOCTYPE html>
<html lang="en">

<head>
  <title>Krishi Sahayak : New Equipment</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script type="text/javascript">
			function validation()
			{
				if(document.equipment.ename.value == "" ||document.equipment.type.value == "" || document.equipment.fn.value == "")
				{
					window.alert("All Marked Fields are Compulsory");
					return false;
				}
				if(!(/^[a-zA-Z]*$/g.test(document.equipment.fn.value)){
					window.alert("Enter valid equipment name");
			    	return false;
				}
				// if(isNaN(document.equipment.fn.value) ||  (/^[a-zA-Z]*$/g).test(document.equipment.fn.value)){
			 //    	window.alert("Enter valid file name");
			 //    	return false;
			 //    }
				return confirm("Are you sure you want to insert the details?");
			}
		</script>
</head>
<body>
	<center>
		<form name='equipment' method="POST" action="equip_add.php"  onsubmit= "return validation()">

		<h1 align="center"> Add Equipments </h1>
			<table cellpadding="10px" align="center" class="form-group">
				<tr>
					<td>New Equipment:</td>
					<td><input id="ename" name='ename' value="" class="form-control"><span class='error'> * </span></td>
				</tr>
				<tr>
					<td>Type:</td>
					<td>
						<select name='type' id="type" class="form-control" >
						 
						  
						  <option value="" disabled selected>Select season</option>
						  
						  <option value='normal'>Normal</option>
						  <option value='rabi'>Rabi</option>
						  <option value='kharif'>Kharif</option>
				  
						</select><span class='error'> * </span>
					</td>
				</tr>
				<tr>
					<td>FileName :</td>
					<td><input id="fn" name='fn' value="" class="form-control" placeholder="only .jpg and .png files"><span class='error'> * </span></td>
				</tr>
				
				
			</table><br>

				<input type="submit" class='btn btn-info' name="add" value="Add New">

			</center><br>
</body>
</html>