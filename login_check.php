<?php
    session_start();
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $user = clean_input($_POST["user"]);
        $pass = clean_input($_POST["pass"]);

        $servername = "localhost";
        $username = "id9172558_root";
        $password = "Farming@1234";
        $dbname = "id9172558_efffarm";
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
                        
        }

        $sql = "select * from login_creds where user_ID= '$user' and password = '$pass'";
        $res = mysqli_query($conn,$sql);

        $count = mysqli_num_rows($res);
        $row = mysqli_fetch_array($res);
        $nature = $row['nature'];
        if($count > 0)
        {
            if($nature == '0')
            {
                $_SESSION['user'] = $user;
                echo "<script type='text/javascript'> window.alert('Admin Login Successful')
                 window.location = 'farmer_login_landing.php' </script>";
            }
            else if($role == '1')
            {
                $_SESSION['user'] = $user;
                echo "<script type='text/javascript'> window.alert('Login Successful')
                 window.location = 'shop_login_landing.php' </script>";
            }
        }
        else
        {
            echo "<script type='text/javascript'> window.alert('Invalid Username or Password')
                window.location = 'login.php' </script>"; 
        }

    }
    function clean_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
?> 