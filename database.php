<?php

//Params to connect to a database
$dbHost = "localhost:3307";
$dbUser = "root";
$dbPass = "";
$dbName = "details";

//Connection to database
$conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

if (!$conn) {
    die("Database connection failed!");
}
else{
    echo "Database connected successfully";
}

?>
