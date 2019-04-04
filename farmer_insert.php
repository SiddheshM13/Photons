<?php
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $firstname = clean_input($_POST["firstname"]);
        $lastname = clean_input($_POST["lastname"]);
        $aadhar = clean_input($_POST["aadhar"]);
        $contact = clean_input($_POST["contact"]);
        $address = clean_input($_POST["address"]);
        $taluka = clean_input($_POST["taluka"]);
        $district = clean_input($_POST["district"]);
        $pincode = clean_input($_POST["pincode"]);
        $pass = clean_input($_POST["password"]);
        $nature = "0";

        session_start();

        $servername = "localhost";
        $username = "id9172558_root";
        $password = "Farming@1234";
        $dbname = "id9172558_efffarm";
        $conn = mysqli_connect($servername, $username, $password, $dbname);

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        $fetch = "select count(*) from farmer_data";
        $res = mysqli_query($conn,$fetch);        
        $row = mysqli_fetch_row($res);
        $row[0]++;

        $transaction_id = "f".$row[0];
        echo $transaction_id;

        $sql = "INSERT INTO farmer_data VALUES ('$firstname', '$lastname', '$aadhar', '$contact', '$address', '$taluka', '$district', '$pincode', '$transaction_id')";
        $sql1 = "INSERT INTO login_creds VALUES ('$transaction_id', '$pass', '$nature')";
        $res = mysqli_query($conn, $sql);
        $res1 = mysqli_query($conn, $sql1);

        if($res && $res1)
        {
            echo "<script type='text/javascript'> window.alert('Profile Created Successfully')
            window.location = 'http://localhost/efficient_farming/index.php' </script>";
        }
        else
        {
            echo "<script type='text/javascript'> window.alert('Profile creation unsuccessful. Try again later.')
            window.location = 'http://localhost/efficient_farming/farmer_add.php' </script>";
             
        }
    }

    function clean_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
?>