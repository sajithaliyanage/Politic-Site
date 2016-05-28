<?php
/**
 * Created by PhpStorm.
 * User: project
 * Date: 5/28/2016
 * Time: 7:22 PM
 */

$language = $_GET['language'];
if($language == "SI" || $language == "EN"){
    session_start();
    $_SESSION['language'] = $language;
}
header( 'Location:index.php' ) ;

