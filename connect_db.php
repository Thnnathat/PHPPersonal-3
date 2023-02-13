<?php
$servername = "localhost";
$username = "cpe0001";
$password = "L1qazxsw2";
$db_name = "cpe0001";

// Create connection
$conn = new mysqli($servername, $username, $password, $db_name);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>