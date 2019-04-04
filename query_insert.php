<?php
	$connect = mysqli_connect("localhost","root","","efffarm");
	if(isset($_POST['query'])){
	$type = $_POST['type'];
	$msg = $_POST['query'];
	$cno = $_POST['contact'];

        $servername = "localhost";
        $username = "id9172558_root";
        $password = "Farming@1234";
        $dbname = "id9172558_efffarm";

        $conn = mysqli_connect($servername, $username, $password, $dbname);
    $result = mysqli_query($connect,$sql);
        if($result)
        {
            echo "<script type='text/javascript'> window.alert('Profile Created Successfully')
            window.location = 'http://localhost/efficient_farming/index.php' </script>";
        }
        else
        {
            echo "<script type='text/javascript'> window.alert('Profile creation unsuccessful. Try again later.')
            window.location = 'http://localhost/efficient_farming/index.php' </script>";
             
        }
}
    
?>