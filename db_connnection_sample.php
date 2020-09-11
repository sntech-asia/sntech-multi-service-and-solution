<?php
 session_start();
$servername = "localhost";
$username = "your_username";#usually  'root' for , Check Carefully
$password = "your_password"; #usually blank for xampp and 'root' for mamp, Check Carefully
$dbname = "your_database_name";
$conn = new mysqli($servername, $username, $password, $dbname);
global $conn;
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo 'Connected Succesfully';

// INSERT INTO admin (Username, Email, Password) VALUES('sn_admin','siddanta.sntech@gmail.com','sntech123')