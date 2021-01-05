<?php
  require_once "../config.php";
  $family_id = $emp_id = $emp_relation_id = $relation_name = $relation_age = $nominee = "";
  if($_SERVER['REQUEST_METHOD'] == "POST") {
    $family_id = trim($_POST['Family_Id']);
    $emp_id = trim($_POST['Emp_Id']);
    $emp_relation_id = trim($_POST['Emp_Relation_Id']);
    $relation_name = trim($_POST['Relation_Name']);
    $relation_age = trim($_POST['Relation_Age']);
    $nominee = trim($_POST['Nominee']);

    $sql = "INSERT INTO family_details(Family_Id, Emp_Id, Emp_Relation_Id, Relation_Name, Relation_Age, Nominee) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    if($stmt) {
      mysqli_stmt_bind_param($stmt, "ssssss", $family_id, $emp_id, $emp_relation_id, $relation_name, $relation_age, $nominee);
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
        <h1>ENTER THE FAMILY DETAILS</h1>
        
        <div class="float-label">
          <input type="number" name="Family_Id" id="email" placeholder = "Family Id"/>
        </div>
        
        <div class="float-label">
          <input type="number" name="Emp_Id" id="f-name" placeholder = "Employee Id"/>
        </div>
        
        <div class="float-label">
          <input type="number" name="Emp_Relation_Id" id="f-name" placeholder = "Relation Id"/>
        </div>
        
        <!--Row-->
       <div class="float-label">
          <input type="text" name="Relation_Name" id="f-name" placeholder = "Relation Name"/>
        </div>

        <div class="float-label">
            <input type="number" name="Relation_Age" id="f-name" placeholder = "Relation Age"/>
        </div>

        <div class="float-label">
            <input type="number" name="Nominee" id="f-name" placeholder = "Nominee"/>
        </div>
        <!--//row-->
    
        <button class="btn" type="submit">Submit</button><br>
        <a href="account.php" style = "text-decoration: none;  font-size: 18px; color: #2ecc71; text-align: center; font-weight: bold;" class = "btn">Next</a>
        <button class="btn" id="clear" type="reset" value="Reset">Clear</button>
    </form>  
</body>
</html>