<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "cms_db";

//Connection
$conn = mysqli_connect($servername, $username, $password, $database);

//Checking connection errors
if ($conn->connect_errno) {
    die("Connection failed: " . $conn->connect_errno);
}
