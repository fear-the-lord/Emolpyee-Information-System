<?php
  require_once "../config.php";
  $location_id = $region_id = $country_id = "";
  if($_SERVER['REQUEST_METHOD'] == "POST") {
    $location_id = trim($_POST['Location_Id']);
    $region_id = trim($_POST['Region_Id']);
    $country_id = trim($_POST['Country_Id']);

    $sql = "INSERT INTO company_location(Location_Id, Region_Id, Country_Id) VALUES (?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    if($stmt) {
      mysqli_stmt_bind_param($stmt, "sss", $location_id, $region_id, $country_id);
      mysqli_stmt_execute($stmt);
      header("location: admin_choices.html");
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" href="../employee.png" type="image/icon type">
    <title>Employee Information System</title>
</head>
<body>
    <form action="" method = "post">
        <h1>COMPANY LOCATION</h1>

        <div class="float-label">
            <input type="number" name="Location_Id" placeholder = "Location Id"/>
        </div>
  
        
        <div class="float-label">
          <input type="number" name="Region_Id" placeholder = "Region Id"/>
        </div>
        
       
        <div class="float-label">
            <input type="number" name="Country_Id" placeholder = "Country Id"/>
        </div>
    
        <button class="btn" type="submit">Submit</button><br>
        <a href="admin_choices.html" style = "text-decoration: none;  font-size: 18px; color: #2ecc71; text-align: center; font-weight: bold;" class = "btn">Back</a><br>
        <button class="btn" id="clear" type="reset" value="Reset">Clear</button>
    </form>  
</body>
</html>