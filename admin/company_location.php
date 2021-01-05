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
        <h1>COMPANY LOCATION</h1>

        <div class="float-label">
            <input type="number" name="Location_Id" id="f-name" />
            <label for="f-name">Location Id</label>
        </div>
  
        
        <div class="float-label">
          <input type="number" name="Region_Id" id="email" />
          <label for="email">Region Id</label>
        </div>
        
       
        <div class="float-label">
            <input type="number" name="Country_Id" id="f-name" />
            <label for="f-name">Country Id</label>
        </div>
    
        <button class="btn" type="submit">Submit</button><br>
        <a href="admin_choices.html" style = "text-decoration: none;  font-size: 18px; color: #2ecc71; text-align: center; font-weight: bold;" class = "btn">Back</a><br>
        <button class="btn" id="clear" type="reset" value="Reset">Clear</button>
    </form>  
      
    <script src="../js/main.js"></script>
</body>
</html>