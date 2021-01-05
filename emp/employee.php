<?php
  require_once "../config.php";
  $emp_id = $emp_name = $emp_dept_id = $emp_sex = $emp_marital_status = $emp_age = $emp_education_id = $emp_designation_id = $emp_salary = $emp_location_id = $emp_active_status = $emp_join_date = $emp_birth_date = "";
  if($_SERVER['REQUEST_METHOD'] == "POST") {
    $emp_id = trim($_POST['Emp_Id']);
    $emp_name = trim($_POST['Emp_Name']);
    $emp_dept_id = trim($_POST['Emp_Dept_Id']);
    $emp_sex = trim($_POST['Emp_Sex']);
    $emp_marital_status = trim($_POST['Emp_Marital_Status']);
    $emp_age = trim($_POST['Emp_Age']);
    $emp_education_id = trim($_POST['Emp_Education_Id']);
    $emp_designation_id = trim($_POST['Emp_Designation_Id']);
    $emp_salary = trim($_POST['Emp_Salary']);
    $emp_location_id = trim($_POST['Emp_Location_Id']);
    $emp_active_status = trim($_POST['Emp_Active_Status']);
    $emp_join_date = trim($_POST['Emp_Join_Date']);
    $emp_birth_date = trim($_POST['Emp_Birth_Date']);

    $sql = "INSERT INTO employee(Emp_Id, Emp_Name, Emp_Dept_Id, Emp_Sex, Emp_Marital_Status, Emp_Join_Date, Emp_Birth_Date, Emp_Age, Emp_Education_Id, Emp_Designation_Id, Emp_Salary, Emp_Location_Id, Emp_Active_Status) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    if($stmt) {
      mysqli_stmt_bind_param($stmt, "sssssssssssss", $emp_id, $emp_name, $emp_dept_id, $emp_sex, $emp_marital_status, $emp_join_date, $emp_birth_date, $emp_age, $emp_education_id, $emp_designation_id, $emp_salary, $emp_location_id, $emp_active_status);
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
        <h1>ENTER THE EMPLOYEE DETAILS</h1>
        
        <div class="float-label">
          <input type="number" name="Emp_Id" id="email" placeholder = "Employee Id"/>
        </div>
        
        <div class="float-label">
          <input type="text" name="Emp_Name" id="f-name" placeholder = "Name"/>
        </div>
        
        <div class="float-label">
          <input type="number" name="Emp_Dept_Id" id="f-name" placeholder = "Department ID"/>
        </div>
        
        <!--Row-->
       <div class="float-label">
          <input type="number" name="Emp_Sex" id="f-name" placeholder = "Gender"/>
        </div>

        <div class="float-label">
            <input type="number" name="Emp_Marital_Status" id="f-name" placeholder = "Marital Status"/>
        </div>

        <div class="float-label">
            <input type="number" name="Emp_Age" id="f-name" placeholder = "Age"/>
        </div>

        <div class="float-label">
            <input type="number" name="Emp_Education_Id" id="f-name" placeholder = "Education Id"/>
        </div>

        <div class="float-label">
            <input type="number" name="Emp_Designation_Id" id="f-name" placeholder = "Designation Id"/>
        </div>

        <div class="float-label">
            <input type="number" name="Emp_Salary" id="f-name" placeholder = "Salary"/>
        </div>

        <div class="float-label">
            <input type="number" name="Emp_Location_Id" id="f-name" placeholder = "Location Id"/>
        </div>

        <div class="float-label">
            <input type="number" name="Emp_Active_Status" id="f-name" placeholder = "Active Status"/>
        </div>

        <div class="float-label">
            <input type="date" name="Emp_Join_Date" id="f-name" placeholder = "Join Date"/>
        </div>

        <div class="float-label">
            <input type="date" name="Emp_Birth_Date" id="f-name"  placeholder = "Birth Date"/>
        </div>
        <!--//row-->
    
        <button class="btn" type="submit">Submit</button><br>
        <a href="address.php" style = "text-decoration: none;  font-size: 18px; color: #2ecc71; text-align: center; font-weight: bold;" class = "btn">Next</a>
        <button class="btn" id="clear" type="reset" value="Reset">Clear</button>
    </form>  
</body>
</html>