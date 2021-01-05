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
        <h1>ENTER THE EMPLOYEE DETAILS</h1>
        
        <div class="float-label">
          <input type="number" name="Emp_Id" id="email" />
          <label for="email">Employee Id</label>
        </div>
        
        <div class="float-label">
          <input type="text" name="Emp_name" id="f-name" />
          <label for="f-name">Name</label>
        </div>
        
        <div class="float-label">
          <input type="number" name="Emp_Dept_Id" id="f-name" />
          <label for="f-name">Department Id</label>
        </div>
        
        <!--Row-->
       <div class="float-label">
          <input type="number" name="Emp_Sex" id="f-name" />
          <label for="f-name">Gender</label>
        </div>

        <div class="float-label">
            <input type="number" name="Emp_Marital_Status" id="f-name" />
            <label for="f-name">Marital Status</label>
        </div>

        <div class="float-label">
            <input type="number" name="Emp_Age" id="f-name" />
            <label for="f-name">Age</label>
        </div>

        <div class="float-label">
            <input type="number" name="Emp_Education_Id" id="f-name" />
            <label for="f-name">Education Id</label>
        </div>

        <div class="float-label">
            <input type="number" name="Emp_Designation_Id" id="f-name" />
            <label for="f-name">Designation Id</label>
        </div>

        <div class="float-label">
            <input type="number" name="Emp_Salary" id="f-name" />
            <label for="f-name">Salary</label>
        </div>

        <div class="float-label">
            <input type="number" name="Emp_Location_Id" id="f-name" />
            <label for="f-name">Location Id</label>
        </div>

        <div class="float-label">
            <input type="number" name="Emp_Active_Status" id="f-name" />
            <label for="f-name">Active Status</label>
        </div>

        <div class="float-label">
            <input type="date" name="Emp_Join_Date" id="f-name" />
            <label for="f-name">Join Date</label>
        </div>

        <div class="float-label">
            <input type="date" name="Emp_Birth_Date" id="f-name"/>
            <label for="f-name">Birth Date</label>
        </div>
        <!--//row-->
    
        <button class="btn" type="submit">Submit</button><br>
        <a href="address.php" style = "text-decoration: none;  font-size: 18px; color: #2ecc71; text-align: center; font-weight: bold;" class = "btn">Next</a>
        <button class="btn" id="clear" type="reset" value="Reset">Clear</button>
    </form>  
      
    <script src="../js/main.js"></script>
</body>
</html>