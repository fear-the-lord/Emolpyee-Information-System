<?php
    // Configure the database 
   // Development Connection
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'eis');

    // Remote Database Connection
    // define('DB_SERVER', 'remotemysql.com');
    // define('DB_USERNAME', 'izLyeZOuK8');
    // define('DB_PASSWORD', 'ZhUV3v342A');
    // define('DB_NAME', 'izLyeZOuK8');

    // Connect to the database
    $conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

    // Check if the connection is established 
    if(!$conn) {
        dir('Error: Cannot connect to the database');
    }
?>