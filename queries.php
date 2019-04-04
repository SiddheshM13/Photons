<!DOCTYPE html>
<html lang="en">

<head>
  <title>Krishi Sahayak : Complaint Box</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script type="text/javascript">
			function validation()
			{
				if(document.query.ename.value == "" ||document.query.address.value == "" || document.query.contact.value == "")
				{
					window.alert("All Marked Fields are Compulsory");
					return false;
				}
				
				if(isNaN(document.query.contact.value) || contact < 1){
			    	window.alert("Enter valid contact number");
			    	return false;
			    }
			    if(document.query.contact.value.length != 10 ){
                    window.alert("Invalid Contact Number");
                    return false ; 
                }
                
                
				return confirm("Are you sure you want to insert the details?");
			}
		</script>
</head>
<body>
	<center>
		<form name='query' method="POST" action="query_insert.php"  onsubmit= "return validation()">

		<h1 align="center"> Query Area </h1>
			<table cellpadding="10px" align="center" class="form-group">
				<tr>
					<td>You want to post a :</td>
					<td>
						<select name='type' class="form-control" >
						  
						  <option value='feedback'>Feedback</option>
						  <option value='complaint'>Complaint</option>
						  <option value='suggestion'>Suggestion</option>
				  
						</select><span class='error'> * </span>
					</td>
					
					
				</tr>
				<tr>
					<td>Contact Number:</td>
					<td><input id="contact" name='contact' value="" class="form-control"><span class='error'> * </span></td>
				</tr>
				<tr>
					<td>Query :</td>
					<td><textarea rows='5' cols="30" name='query' id='address' class="form-control"></textarea><span class='error'> * </span></td>
				</tr>
				
				
			</table><br>

				<input type="submit" class='btn btn-info' name="query" value="File">

			</center><br>
</body>
</html>
