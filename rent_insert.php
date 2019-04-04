<?php
    session_start();
	if(isset($_POST['add']))
	{
		$i = 1;
		$ename = $_POST['ename'];
		$price = $_POST['price'];
		$quant = $_POST['quantity'];
		$sid = $_SESSION['user'];
        $servername = "localhost";
        $username = "id9172558_root";
        $password = "Farming@1234";
        $dbname = "id9172558_efffarm";

        $connect = mysqli_connect($servername, $username, $password, $dbname);

		$sql = "INSERT INTO rent_available VALUES ('$ename','$sid','$price','$quant')";
    	$result = mysqli_query($connect,$sql);
        if($result)
        {
            echo "<script type='text/javascript'> window.alert('Inserted Successfully')
            window.location = 'farmer_login_landing.php' </script>";
        }
        else
        {
            echo "<script type='text/javascript'> window.alert('Insertion Unsuccessful')
            window.location = 'rent_add.php' </script>";
             
        }

	}
?>