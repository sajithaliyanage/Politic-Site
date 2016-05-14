<?php
include('config.php');

$name = $_POST['heading'];
$date= $_POST['date'];
$des = $_POST['content'];
$small = $_POST['small'];


$sql = "INSERT INTO news (heading,date,small,content,headimage)
VALUES ('$name','$date','$small','$des','null')";
$conn->query($sql);

$newsid =  mysqli_insert_id($conn);

//upload image
mkdir('../uploads/news/' . $newsid . '/', 0777, true);
$target_dir = "../uploads/news/". $newsid ."/";

if(!empty($_FILES["fileToUpload"]["name"])){
    $target_file = $target_dir .basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;

    if ($_FILES["fileToUpload"]["size"] > 3000000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "The file " . basename($_FILES["fileToUpload"]["name"]) . " has been uploaded.";
            $sql2 = "UPDATE news SET headimage='$target_file' where id='$newsid'";
            $conn->query($sql2);
        } else {
            echo "Sorry, there was an error uploading your file.";
            header("Location:../profile.php?fail");
        }
    }
}
if(!empty($_FILES['more_images']['name'])) {
    $total = count($_FILES['more_images']['name']);
    for ($x = 0; $x < $total; $x++) {
        $target_file = $target_dir . basename($_FILES["more_images"]["name"][$x]);
        $uploadOk = 1;

        if ($_FILES["more_images"]["size"][$x] > 3000000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }

        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["more_images"]["tmp_name"][$x], $target_file)) {
                echo "The file " . basename($_FILES["more_images"]["name"][$x]) . " has been uploaded.";
                $sql2 = "INSERT INTO news_image (news_id,image) VALUES ('$newsid','$target_file')";
                $conn->query($sql2);
                echo "Done";
            }
        }

    }
}
header("Location:../profile.php?done");
$conn->close();
?>