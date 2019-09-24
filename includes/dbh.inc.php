<?php

$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "phploginsystem";

// Connect to the db
$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

// If there is any error connecting to the database
if (!$conn) {
    die("Connection Failed: ".mysqli_connect_error());
}
