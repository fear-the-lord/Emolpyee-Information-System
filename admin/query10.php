<?php

    require_once "../config.php";

    $sql = "SELECT `department_master`.`Dept_Id`, `department_master`.`Dept_Name` as Department, SUM(`employee`.`Emp_Salary`) AS `EXPENDITURE`
    FROM `employee` INNER JOIN `department_master`
    ON `employee`.`Emp_Dept_Id` = `department_master`.`Dept_Id`
    GROUP BY `department_master`.`Dept_Id`";
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
    echo "<tr><td>Department</td><td>Department Name</td><td>Expenditure</td></tr>";
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
            <td>{$row['Dept_Id']}</td>
            <td>{$row['Department']}</td>
            <td>{$row['EXPENDITURE']}</td>
        </tr>";
    }
    echo "</table>";
    ?>

</div>

</body>
</html>


