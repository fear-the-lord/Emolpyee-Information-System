<?php
  require_once "../config.php";
  $emp_id = $account_no = $bank_id = $account_type = "";
  if($_SERVER['REQUEST_METHOD'] == "POST") {
    $emp_id = trim($_POST['Emp_Id']);
    $account_no = trim($_POST['Account_No']);
    $bank_id = trim($_POST['Bank_Id']);
    $account_type = trim($_POST['Account_Type']);

    $sql = "INSERT INTO account_details(Emp_Id, Account_No, Bank_Id, Account_Type) VALUES (?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    if($stmt) {
      mysqli_stmt_bind_param($stmt, "ssss", $emp_id, $account_no, $bank_id, $account_type);
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
        <h1>ENTER THE BANK ACCOUNT DETAILS</h1>
        
        <div class="float-label">
          <input type="number" name="Emp_Id" id="f-name" placeholder = "Employee Id"/>
        </div>

        <div class="float-label">
            <input type="number" name="Account_No" id="email" placeholder = "Account Number"/>
          </div>
        
        <div class="float-label">
          <input type="number" name="Bank_Id" id="f-name" placeholder = "Bank Id"/>
        </div>
        
        <!--Row-->
        <div class="float-label">
          <input type="number" name="Account_Type" id="f-name" placeholder = "Account Type"/>
        </div>
        <!--//row-->
    
        <button class="btn" type="submit">Submit</button>
        <button class="btn" id="clear" type="reset" value="Reset">Clear</button>
        <a href="../index.html" style = "text-decoration: none;  font-size: 18px; color: #2ecc71; text-align: center; font-weight: bold;" class = "btn">Back To Home Page</a>
    </form>  
</body>
</html>