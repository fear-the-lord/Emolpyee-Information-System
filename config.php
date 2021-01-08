<?php
    // Configure the database 
   // Development Connection
    // define('DB_SERVER', 'localhost');
    // define('DB_USERNAME', 'root');
    // define('DB_PASSWORD', '');
    // define('DB_NAME', 'eis');

    // Remote Database Connection
    define('DB_SERVER', 'remotemysql.com');
    define('DB_USERNAME', 'N3xedb91mL');
    define('DB_PASSWORD', 'JHFi1Bv8nR');
    define('DB_NAME', 'N3xedb91mL');

    // Connect to the database
    $conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

    // Check if the connection is established 
    if(!$conn) {
        dir('Error: Cannot connect to the database');
    }
?>