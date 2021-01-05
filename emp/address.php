<?php
require_once "../config.php";
  $address_id = $emp_id = $address1 = $address2 = $tel_no = $address_type = "";
  if($_SERVER['REQUEST_METHOD'] == "POST") {
    $address_id = trim($_POST['Address_Id']);
    $emp_id = trim($_POST['Emp_Id']);
    $address1 = trim($_POST['Address1']);
    $address2 = trim($_POST['Address2']);
    $tel_no = trim($_POST['Tel_No']);
    $address_type = trim($_POST['Address_Type']);

    $sql = "INSERT INTO address(Address_Id, Emp_Id, Address1, Address2, Tel_No, Address_Type) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    if($stmt) {
      mysqli_stmt_bind_param($stmt, "ssssss", $address_id, $emp_id, $address1, $address2, $tel_no, $address_type);
      mysqli_stmt_execute($stmt);
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
        <h1>ENTER THE ADDRESS DETAILS</h1>
        
        <div class="float-label">
          <input type="number" name="Address_Id" id="email" placeholder = "Address_Id"/>
        </div>
        
        <div class="float-label">
          <input type="number" name="Emp_Id" id="f-name" placeholder = "Employee Id"/>
        </div>
        
        <div class="float-label">
          <input type="text" name="Address1" id="f-name" placeholder = "Address 1"/>
        </div>
        
        <!--Row-->
       <div class="float-label">
          <input type="text" name="Address2" id="f-name" placeholder = "Address 2"/>
        </div>

        <div class="float-label">
            <input type="text" name="Tel_No" id="f-name" placeholder = "Telephone Number"/>
        </div>

        <div class="float-label">
            <input type="number" name="Address_Type" id="f-name" placeholder = "Address Type"/>
        </div>
        <!--//row-->
    
        <button class="btn" type="submit">Submit</button><br>
        <a href="family.php" style = "text-decoration: none;  font-size: 18px; color: #2ecc71; text-align: center; font-weight: bold;" class = "btn">Next</a>
        <button class="btn" id="clear" type="reset" value="Reset">Clear</button>
    </form>  
</body>
</html>