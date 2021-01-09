<?php

    require_once "../config.php";

    $sql = "SELECT `account_details`.`Bank_Id`, COUNT(*) AS `No:of Savings Account`
    FROM `account_details`
    WHERE `account_details`.`Account_Type` = 1
    GROUP BY `account_details`.`Bank_Id`";
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
    echo "<tr><td>Bank_Id</td><td></td<td>No:of Savings Account</td></tr>";
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
            <td>{$row['Bank_Id']}</td>
            <td>{$row['No:of Savings Account']}</td>
        </tr>";
    }
    echo "</table>";
    ?>

</div>

</body>
</html>


