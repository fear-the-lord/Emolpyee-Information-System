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
    <form action="#">
        <h1>ENTER THE BANK ACCOUNT DETAILS</h1>
        
        <div class="float-label">
          <input type="number" name="Emp_Id" id="f-name" />
          <label for="f-name">Employee Id</label>
        </div>

        <div class="float-label">
            <input type="number" name="Account_No" id="email" />
            <label for="email">Account Number</label>
          </div>
        
        <div class="float-label">
          <input type="number" name="Bank_Id" id="f-name" />
          <label for="f-name">Bank Id</label>
        </div>
        
        <!--Row-->
       <div class="float-label">
          <input type="number" name="Account_Type" id="f-name" />
          <label for="f-name">Account Type</label>
        </div>
        <!--//row-->
    
        <button class="btn" type="submit">Submit</button>
        <button class="btn" id="clear" type="reset" value="Reset">Clear</button>
        <a href="../index.html" style = "text-decoration: none;  font-size: 18px; color: #2ecc71; text-align: center; font-weight: bold;" class = "btn">Back To Home Page</a>
    </form>  
      
    <script src="../js/main.js"></script>
</body>
</html>