<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    $pincode = $_POST["pincode"];
    $option = $_POST["equipment"];
    $servername = "localhost";
    $username = "id9172558_root";
    $password = "Farming@1234";
    $dbname = "id9172558_efffarm";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    $sql = $conn->prepare("select equipment_name, price from rent_available, farmer_data where rent_available.equipment_name= ? and farmer_data.pincode= ? and rent_available.renter_ID = farmer_data.farmer_ID)");
    $sql->bind_param("sd", $option, $pincode);
    $sql->execute();
    if($sql->num_rows > 0){
      print_r($sql->fetchassoc());
      echo "<div style='overflow-x:auto;'>
          <table id='table1' class='table table-bordered table-hover thead-dark'>
                  <thead class='thead-dark'>
                  <tr> 
                    <th>Equipment Name</th>
                    <th>Price</th>
                  </tr></thead>";
            while($row = $sql->fetch_assoc()) {
              echo "<tr>";                   
              echo "<td>" . $row["equipment_name"] . "</td>";
              echo "<td>" . $row["price"] . "</td>";         
              echo "</tr>";
          }
          echo "</table></div>";
      } else {
          echo "<h2 align='center'> 0 results </h2>";
      }
      $conn->close();
}

?>