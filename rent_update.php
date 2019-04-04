<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = clean_input($_POST["name"]);
        $price = clean_input($_POST["price"]);
        $quantity = clean_input($_POST["quantity"]);
      
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "efffarm";
        $renter_ID = "s1";

        $conn = mysqli_connect($servername, $username, $password, $dbname);
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        
        if(isset($_POST['Update'])) {
            $stmt = $conn->prepare("UPDATE rent_available set equipment_name = ?, price = ?, quantity = ? where renter_ID = ?");
            $stmt->bind_param("sdds", $name, $price, $quantity, $renter_ID);    
            $stmt->execute();
            echo "<script type='text/javascript'> window.alert('Notice Updated Successfully')
            window.location = 'noticeupddel.php' </script>";
        } else if (isset($_POST['Delete'])) {
            $stmt = $conn->prepare("DELETE from rent_available where renter_ID = ?");
            $stmt->bind_param("s", $renter_ID);    
            $stmt->execute();
            echo "<script type='text/javascript'> window.alert('Record Deleted Successfully')
            window.location = 'noticeupddel.php' </script>";
        } else{
           echo "<script type='text/javascript'> window.alert('Operation Unsuccessful')
            window.location = 'noticeupddel.php' </script>";
        }
    }
    
    function clean_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
?>