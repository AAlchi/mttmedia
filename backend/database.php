<?php

$dbhost = "localhost";
$dbname = "mttmedia";
$dbusername = "root";
$dbpassword = "";

$conn = mysqli_connect($dbhost, $dbusername, $dbpassword, $dbname);

if (!$conn) {
    echo "No Connect";
} 