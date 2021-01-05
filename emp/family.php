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
        <h1>ENTER THE FAMILY DETAILS</h1>
        
        <div class="float-label">
          <input type="number" name="Famliy_Id" id="email" />
          <label for="email">Family Id</label>
        </div>
        
        <div class="float-label">
          <input type="number" name="Emp_Id" id="f-name" />
          <label for="f-name">Employee Id</label>
        </div>
        
        <div class="float-label">
          <input type="number" name="Emp_Relation_Id" id="f-name" />
          <label for="f-name">Relation Id</label>
        </div>
        
        <!--Row-->
       <div class="float-label">
          <input type="text" name="Relation_Name" id="f-name" />
          <label for="f-name">Relation Name</label>
        </div>

        <div class="float-label">
            <input type="number" name="Relation_Age" id="f-name" />
            <label for="f-name">Relation Age</label>
        </div>

        <div class="float-label">
            <input type="number" name="Nominee" id="f-name" />
            <label for="f-name">Nominee</label>
        </div>
        <!--//row-->
    
        <button class="btn" type="submit">Submit</button><br>
        <a href="account.php" style = "text-decoration: none;  font-size: 18px; color: #2ecc71; text-align: center; font-weight: bold;" class = "btn">Next</a>
        <button class="btn" id="clear" type="reset" value="Reset">Clear</button>
    </form>  
      
      <script src="../js/main.js"></script>
</body>
</html>