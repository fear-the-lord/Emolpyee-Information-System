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
        <h1>REGION MASTER</h1>
        
        <div class="float-label">
          <input type="number" name="Region_Id" id="email" />
          <label for="email">Region Id</label>
        </div>
        
        <div class="float-label">
          <input type="number" name="Region_Name" id="f-name" />
          <label for="f-name">Region Name</label>
        </div>

        <div class="float-label">
            <input type="number" name="Region_Status" id="f-name" />
            <label for="f-name">Region Status</label>
        </div>
    
        <button class="btn" type="submit">Submit</button><br>
        <a href="admin_choices.html" style = "text-decoration: none;  font-size: 18px; color: #2ecc71; text-align: center; font-weight: bold;" class = "btn">Back</a><br>
        <button class="btn" id="clear" type="reset" value="Reset">Clear</button>
    </form>  
      
    <script src="../js/main.js"></script>
</body>
</html>