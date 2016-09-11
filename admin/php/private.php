<?php
include("config.php");
include_once("checklogin.php");
if(!$islogged || $user != "admin"){
    header( 'Location:../index.php' ) ;
}
$target_dir = "../uploads/private/";

if(!empty($_FILES['fileToUpload']['name'])) {
    $total = count($_FILES['fileToUpload']['name']);
    for ($x = 0; $x < $total; $x++) {
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"][$x]);
        $uploadOk = 1;

        if ($_FILES["fileToUpload"]["size"][$x] > 3000000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }

        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"][$x], $target_file)) {
                echo "The file " . basename($_FILES["fileToUpload"]["name"][$x]) . " has been uploaded.";
                $sql = "INSERT INTO private_image (image) VALUE ('$target_file')";
                $conn->query($sql);
                echo "Done";
            }
        }

    }
}
header('Location:../pri.php?done');

?>

