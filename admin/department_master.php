<?php
  require_once "../config.php";
  $dept_id = $dept_name = "";
  if($_SERVER['REQUEST_METHOD'] == "POST") {
    $dept_id = trim($_POST['Dept_Id']);
    $dept_name = trim($_POST['Dept_Name']);
    
    $sql = "INSERT INTO department_master(Dept_Id, Dept_Name) VALUES (?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    if($stmt) {
      mysqli_stmt_bind_param($stmt, "ss", $dept_id, $dept_name);
      mysqli_stmt_execute($stmt);
      header("location: admin_choices.php");
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
        <h1>DEPARTMENT MASTER</h1>
        
        <div class="float-label">
          <input type="number" name="Dept_Id" id="email" placeholder = "Department Id"/>
        </div>
        
        <div class="float-label">
          <input type="number" name="Dept_Name" id="email" placeholder = "Department Name"/>
        </div>
    
        <button class="btn" type="submit">Submit</button><br>
        <a href="admin_choices.php" style = "text-decoration: none;  font-size: 18px; color: #2ecc71; text-align: center; font-weight: bold;" class = "btn">Back</a><br>
        <button class="btn" id="clear" type="reset" value="Reset">Clear</button>
    </form>  
</body>
</html>