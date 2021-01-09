<?php

    require_once "../config.php";

    $sql = "SELECT * FROM `employee` INNER JOIN `designation_master` 
    ON `employee`.`Emp_Designation_Id` = `designation_master`.`Designation_Id` 
    WHERE `designation_master`.`Designation_Id` = 41";
    $result = mysqli_query($conn, $sql) or die("Bad query: $sql");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="icon" href="employee.png" type="image/icon type">
    <title>Employee Information System</title>
</head>

<body style = "background-color: #2ecc71;">

<div style = " margin: auto; width: 50%;">

    <?php        
    echo "<table border = '10'>";
    echo "<tr><td>Emp_Id</td><td></td<td>Emp_Name</td><td>Emp_Designation_Id</td><td>Emp_Designation_Desc</td></tr>";
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
            <td>{$row['Emp_Id']}</td>
            <td>{$row['Emp_Name']}</td>
            <td>{$row['Designation_Id']}</td>
            <td>{$row['Designation_Desc']}</td>
        </tr>";
    }
    echo "</table>";
    ?>

</div>

</body>
</html>


