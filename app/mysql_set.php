<?php
$servername = "edi-docker-stack_mariadb";
$username = "root";
$password = "root";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
} 

// Create database
$sql = "CREATE DATABASE testna_baza2";
if ($conn->query($sql) === TRUE) {
echo "Database has been created! ";
} else {
echo "Error creating database: " . $conn->error;
}

$conn->close();

$servername = "edi-docker-stack_mariadb";
$username = "root";
$password = "root";
$dbname = "testna_baza2";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}

// sql to create table
$sql2 = "CREATE TABLE testna_tablica_1 (id INT(6))";
if ($conn->query($sql2) === TRUE) {
echo "Table has been created!";
} else {
echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
