<?php

if(!isset($_SESSION)){
	session_start();
}

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbName = "jobSkill";

// Create connectionS
$conn = new mysqli($servername, $username, $password,$dbName);



// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 



?>