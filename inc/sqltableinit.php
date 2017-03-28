<?php
// sql to create table for login data
$sql = "CREATE TABLE IF NOT EXISTS MyGuests (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP)";

$conn->query($sql);

// sql to create table for 'notes'
$sql = "CREATE TABLE IF NOT EXISTS UserNotes (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
log_summ VARCHAR(30) NOT NULL,
log_body VARCHAR(1000) NOT NULL,
log_date TIMESTAMP)";

$conn->query($sql);
?>