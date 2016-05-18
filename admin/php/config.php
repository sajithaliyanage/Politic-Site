<?php
// Create connection
/*
db: b22_18036281_politic
user: b22_18036281
host: sql113.byethost22.com
pw: ulinkxtr94
*/



$conn = new mysqli('localhost', 'root', '', 'politic');

//$conn = new mysqli('sql113.byethost22.com', 'b22_18036281', 'ulinkxtr94', 'b22_18036281_politic');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


?>