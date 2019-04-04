<?php
	$connect = mysqli_connect("localhost","root","","efffarm");
	if(isset($_POST['add']))
	{
		
		$ename = $_POST['ename'];
		$type = $_POST['type'];
		$fn = $_POST['fn'];
		
		$sql = "INSERT INTO equipment VALUES ('$ename','$type','$fn')";
    	$result = $connect->query($sql);
	}
?>