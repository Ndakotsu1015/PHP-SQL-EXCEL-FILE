<?php
// Database configuration
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$daName = 'pegates';

//Creating database connection
$db = mysqli_connect($dbHost, $dbUsername, $dbPassword, $daName);

//Checking connection
if($db->connect_error) {
    die("connection failed: " . $db->connect_error);


}

// $result = $db->query("SELECT * FROM student");

// print_r($result);die;
// if ($result->num_rows > 0) {
//     echo "Record found: " . $result;
// } else {
//     echo "Record not found";
// }

// die;