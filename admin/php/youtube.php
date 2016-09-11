<?php

include_once("checklogin.php");
if(!$islogged || $user != "admin"){
    header( 'Location:../index.php' ) ;
}






include('config.php');

$link1 = $_POST['link1'];
$link2 = $_POST['link2'];
$link3= $_POST['link3'];
$link4 = $_POST['link4'];
$link5 = $_POST['link5'];

$pdo = connect();
$sql = "
UPDATE videos SET link=:link1 WHERE id=:id1;
UPDATE videos SET link=:link2 WHERE id=:id2;
UPDATE videos SET link=:link3 WHERE id=:id3;
UPDATE videos SET link=:link4 WHERE id=:id4;
UPDATE videos SET link=:link5 WHERE id=:id5;
";
$inputs = array(
    'link1'=>$link1,'id1'=>'1',
    'link2'=>$link2,'id2'=>'2',
    'link3'=>$link3,'id3'=>'3',
    'link4'=>$link4,'id4'=>'4',
    'link5'=>$link5,'id5'=>'5',

);
$query = $pdo->prepare($sql);
$query->execute($inputs);
header("Location:../youtube.php?done");