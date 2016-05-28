<?php
/**
 * Created by PhpStorm.
 * User: project
 * Date: 5/28/2016
 * Time: 4:26 PM
 */

$islogged = false;
$user = null;
session_start();
if(isset($_SESSION['user']) && $_SESSION['user']== "admin"){
    $user = $_SESSION['user'];
    $islogged = true;
}

?>