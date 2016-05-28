<?php
include('config.php');

$username= $_POST['username'];
$password =$_POST['password'];




$result = mysqli_query($conn,"SELECT * FROM login WHERE username='$username' and passwrd='$password' ");
$userData = mysqli_fetch_array($result, MYSQL_ASSOC);
if (mysqli_num_rows($result) >0) {
    session_start();
    $_SESSION['user'] = "admin";
    header( 'Location:../profile.php' ) ;
}else {

    header( 'Location: ../index.php' ) ;

}

$conn->close();
?>