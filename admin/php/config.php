<?php
// Create connection
/*
db: b22_18036281_politic
user: b22_18036281
host: sql113.byethost22.com
pw: ulinkxtr94
*/

$host = 'localhost';
$dbuser = 'root';
$dbpass = '';
$db = 'politic';
$conn = new mysqli($host, $dbuser, $dbpass, $db);

//$conn = new mysqli('sql113.byethost22.com', 'b22_18036281', 'ulinkxtr94', 'b22_18036281_politic');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

function connect() {
    global $host;
    global $dbuser;
    global $dbpass;
    global $db;
    return new PDO(
        "mysql:host=$host;dbname=$db",
        $dbuser,
        $dbpass,
        array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
    );
}
?>