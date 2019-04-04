<?php
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $shopname = clean_input($_POST["shopname"]);
        $contact = clean_input($_POST["contact"]);
        $address = clean_input($_POST["address"]);
        $taluka = clean_input($_POST["taluka"]);
        $district = clean_input($_POST["district"]);
        $pincode = clean_input($_POST["pincode"]);
        $pass = clean_input($_POST["password"]);
        $servername = "localhost";
        $username = "id9172558_root";
        $password = "Farming@1234";
        $dbname = "id9172558_efffarm";

        $conn = mysqli_connect($servername, $username, $password, $dbname);

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        $fetch = "select count(*) from shop_data";
        $res = mysqli_query($conn,$fetch);        
        $row = mysqli_fetch_row($res);
        $row[0]++;

        $transaction_id = "s".$row[0];
        $nature = "1";

        $sql = "INSERT INTO shop_data VALUES ('$shopname', '$transaction_id', '$address', '$taluka', '$district', '$pincode', '$contact')";
        $res = mysqli_query($conn, $sql);
        $sql1 = "INSERT INTO login_creds VALUES ('$transaction_id', '$pass', '$nature')";
        $res1 = mysqli_query($conn, $sql1);
        
        if($res && $res1)
        {
            echo "<script type='text/javascript'> window.alert('Profile Created Successfully')
            window.location = 'http://localhost/efficient_farming/index.php' </script>";
        }
        else
        {
            echo "<script type='text/javascript'> window.alert('Profile creation unsuccessful. Try again later.')
            window.location = 'http://localhost/efficient_farming/shop_add.php' </script>";
             
        }
    }

    function clean_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
?>