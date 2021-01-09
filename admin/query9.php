<?php

    require_once "../config.php";

    $sql = "SELECT `employee`.`Emp_Dept_Id` AS 'DEPARTMENT', COUNT(*) AS 'No:of Technical Managers' 
    FROM `employee` INNER JOIN `designation_master`
    ON `employee`.`Emp_Designation_Id` = `designation_master`.`Designation_Id`
    WHERE `designation_master`.`Designation_Desc` = 'Technical Manager'
    GROUP BY `employee`.`Emp_Dept_Id`";
    $result = mysqli_query($conn, $sql) or die("Bad query: $sql");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="icon" href="../employee.png" type="image/icon type">
    <title>Employee Information System</title>
</head>

<body style = "background-color: #2ecc71;">

<div style = " margin: auto; width: 50%;">

    <?php        
    echo "<table border = '10'>";
    echo "<tr><td>Department</td><td>No:of Technical Managers</td></tr>";
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
            <td>{$row['DEPARTMENT']}</td>
            <td>{$row['No:of Technical Managers']}</td>
        </tr>";
    }
    echo "</table>";
    ?>

</div>

</body>
</html>


