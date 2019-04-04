<html>
    <head>
        <title>Shop Registration</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <script type="text/javascript">
            function validation()
            {
                var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
                var contact = document.shop.contact.value;
                var pincode = document.shop.pincode.value;

                if(document.shop.shopname.value == "" ||document.shop.contact.value == "" ||document.shop.address.value == "" ||document.shop.taluka.value == "" || document.shop.district.value == "" ||document.shop.pincode.value == "")
                {
                    window.alert("All Marked Fields are Compulsory");
                    return false; 
                }
                if(isNaN(document.shop.contact.value) || contact < 1){
                    window.alert("Enter valid contact number");
                    return false;
                }               

                if(isNaN(document.shop.pincode.value) || pincode.length!=6){
                    window.alert("Enter valid pincode");
                    return false;
                }
                if(document.shop.contact.value.length != 10 ){
                    window.alert("Invalid Contact Number");
                    return false ; 
                }
                if(document.shop.password.value.length < 8 ){
                    window.alert("Password must exceed 8 characters");
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
        <form name='shop' method="POST" action="shop_insert.php"  onsubmit= "return validation()">

        <h1 align="center"> Add Details</h1>
            <table cellpadding="10px" align="center" class="form-group">
                <tr>
                    <td>Shop Name:</td>
                    <td><input type="text" id="shopname" name='shopname' value="" class="form-control"><span class='error'> * </span>
                    </td>
                </tr>
                <tr>
                    <td>Contact Number:</td>
                    <td><input id="contact" name='contact' value="" class="form-control"><span class='error'> * </span></td>
                </tr>
                <tr>
                    <td>Address:</td>
                    <td><textarea rows='5' cols="30" name='address' id='address' class="form-control"></textarea><span class='error'> * </span></td>
                </tr>
                <tr>
                    <td>Taluka </td>
                    <td><input type="text" name="taluka" id='taluka' value="" class="form-control"><span class='error'> * </span></td>
                </tr>               
                <tr>
                    <td>District </td>
                    <td><input type="text" name="district" id='district' value="" class="form-control"><span class='error'> * </span></td>
                </tr>               
                <tr>
                    <td>Pincode </td>
                    <td><input type="text" name="pincode" id='pincode' value="" class="form-control"><span class='error'> * </span></td>
                </tr>
                <tr>
                    <td>Password </td>
                    <td><input type="text" name="password" id='password' value="" class="form-control"><span class='error'> * </span></td>
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