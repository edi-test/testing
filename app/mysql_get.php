<?php

$servername = "edi-docker-stack_mariadb";
$username = "root";
$password = "root";
$dbname = "testna_baza2";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
echo "List of tables inside $dbname is: ";
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql="SHOW TABLES";
   
if (!($result = mysqli_query($conn,$sql))) {
   printf("Error: %s\n", mysqli_error($conn));
}
while( $row = mysqli_fetch_row( $result ) ){
   if (($row[0]!="information_schema") && ($row[0]!="mysql")) {
      echo $row[0]."\r\n";
   }
}
$conn->close();
?>
