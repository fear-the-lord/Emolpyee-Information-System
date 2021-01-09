<?php

    require_once "../config.php";

    $sql = "SELECT `employee`.`Emp_Id`, `employee`.`Emp_Name`, `company_location`.`Country_Id` 
    FROM `employee` INNER JOIN `company_location`
    ON `employee`.`Emp_Location_Id` = `company_location`.`Location_Id`
    wHERE `company_location`.`Country_Id` = 21";
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
    echo "<tr><td>Emp_Id</td><td></td<td>Emp_Name</td><td>Country_Id</td></tr>";
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
            <td>{$row['Emp_Id']}</td>
            <td>{$row['Emp_Name']}</td>
            <td>{$row['Country_Id']}</td>
        </tr>";
    }
    echo "</table>";
    ?>

</div>

</body>
</html>


