<?php

$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "root";
$dBName = "loginsystem";

// Connect to the db
$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

// If there is any error connecting to the database
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
