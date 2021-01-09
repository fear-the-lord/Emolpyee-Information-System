<?php

    require_once "../config.php";

    $sql = "SELECT `employee`.`Emp_Name`, `family_details`.`Emp_Id`, COUNT(*) AS `dependents`
    FROM `family_details` INNER JOIN `employee`
    ON `family_details`.`Emp_Id` = `employee`.`Emp_Id`
    WHERE `family_details`.`Emp_Relation_Id` = 64
    GROUP BY `family_details`.`Emp_Id`
    HAVING COUNT(*) >= 2";
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
    echo "<tr><td>Emp_Id</td><td></td<td>Emp_Name</td><td>Dependents</td></tr>";
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
            <td>{$row['Emp_Id']}</td>
            <td>{$row['Emp_Name']}</td>
            <td>{$row['dependents']}</td>
        </tr>";
    }
    echo "</table>";
    ?>

</div>

</body>
</html>


