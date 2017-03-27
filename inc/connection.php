<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// sql to create table
$sql = "CREATE TABLE MyGuests (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP)";


$tableExists = mysql_query("DESCRIBE `MyGuests`");
if(mysql_query("DESCRIBE `MyGuests`")) {
    echo "Table already exists.";
} else {
    $conn->query($sql);
    echo "Table created.";
}
var_dump($tableExists);


// if ($conn->query($sql) === TRUE) {
//     echo "Table MyGuests created successfully";
// } else {
//     echo "Error creating table: " . $conn->error;
// }

// $conn->close();

























// $db = new mysqli('localhost', $user, $pass, $db);
// if ($db->connect_errno) {           // Changed to OOP version
//   printf("Connect failed: %s\n", $db->connect_error);
// exit();
// } else {
// 	echo "Connection sucessful.";
// }