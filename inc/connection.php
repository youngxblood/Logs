<?php


$user = 'root';
$pass = '';
$db = 'testdb';
$host = 'localhost';

try {
    $db = new PDO("mysql:host=$host;dbname=testdb",$user,$pass);

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // <== add this line
    echo 'Connected to Database.<br/>';
}
catch(PDOException $e)
    {
    echo $e->getMessage();
    }

$con = mysql_connect($host,$user,$pass);

if (!$db){
	echo 'Cannot connect.'; //DEPRECATED
} else {
	echo "Connected.<br>";
}

$query = "CREATE TABLE IF NOT EXISTS MyGuests (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP
)";

if ($db->query($query) == TRUE) {
    echo "Table MyGuests created successfully<br>";
} else {
    echo "Error creating table:<br>";
}




























// $db = new mysqli('localhost', $user, $pass, $db);
// if ($db->connect_errno) {           // Changed to OOP version
//   printf("Connect failed: %s\n", $db->connect_error);
// exit();
// } else {
// 	echo "Connection sucessful.";
// }