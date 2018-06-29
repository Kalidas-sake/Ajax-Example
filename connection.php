<?php

$host = "localhost";
$user = "root";
$pass = "";


$conn = new mysqli($host, $user, $pass);

if ($conn->connect_error ) {
	die("MySQL Connection Failed.");
}
else{
	//echo "MySQL Connection Successfull. ";
	mysqli_select_db($conn,"test");
    $sql = CREATE TABLE IF NOT EXISTS ajaxTable (
    id INT NOT NULL, name VARCHAR(20),age VARCHAR(20), addr VARCHAR(20) );
    mysqli_query($conn, $sql);
}
