<?php
  require "../config.php";
  $region_id = $region_name = $region_status = "";
  if($_SERVER['REQUEST_METHOD'] == "POST") {
    $region_id = trim($_POST["Region_Id"]);
    $region_name = trim($_POST["Region_Name"]);
    $region_status = trim($_POST["Region_Status"]);
    
    $sql = "INSERT INTO region_master(Region_Id, Region_Name, Region_Status) VALUES (?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    if($stmt) {
      mysqli_stmt_bind_param($stmt, "sss", $param_region_id, $param_region_name, $param_region_status);
      $param_region_id = $region_id;
      $param_region_name = $region_name;
      $param_region_status = $region_status;
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
        <h1>REGION MASTER</h1>
        
        <div class="float-label">
          <input type="number" name="Region_Id" id="email" placeholder = "Region Id"/>
        </div>
        
        <div class="float-label">
          <input type="number" name="Region_Name" id="f-name" placeholder = "Region Name"/>
        </div>

        <div class="float-label">
            <input type="number" name="Region_Status" id="f-name" placeholder = "Region Status"/>
        </div>
    
        <button class="btn" type="submit">Submit</button><br>
        <a href="admin_choices.html" style = "text-decoration: none;  font-size: 18px; color: #2ecc71; text-align: center; font-weight: bold;" class = "btn">Back</a><br>
        <button class="btn" id="clear" type="reset" value="Reset">Clear</button>
    </form>  
</body>
</html>