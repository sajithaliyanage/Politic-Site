<?php
// Create connection
$conn = new mysqli('localhost', 'root', '', 'politic');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


?>