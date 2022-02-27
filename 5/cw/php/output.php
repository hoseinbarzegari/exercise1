<?php
include 'function.php';
var_dump($_FILES);
echo '<br>';
var_dump($_POST);
$name_file = $_POST['name'];
$name_file_upload = $_FILES['file']['name'];
$inputname = pathinfo($name_file_upload, PATHINFO_EXTENSION);
$finalname = "$name_file.$inputname";
$type = pathinfo($_FILES['file']['type'], PATHINFO_DIRNAME);
$size = $_FILES['file']['size'];
$random = rand(100000, 999999);
$Description =$_POST['Description'];
if (isset($_FILES['file'])) {
    if ($type == 'image' && $_FILES['file']['size'] < 1000000000) {
        if (!($exists = file_exists("./image/$finalname"))) {
            move_uploaded_file($_FILES['file']['tmp_name'], "./image/$finalname");
            echo 'not exists' . '<br>';
            LogChangeName($name_file_upload, $finalname, 'image');
            LogUploadFile($name_file_upload, $finalname, $Description, $size, 'image');
            echo 'upload successful';
        }
        else {
            move_uploaded_file($_FILES['file']['tmp_name'], './image/' . $random . '_' . $finalname);
            echo 'This file existed but was saved again under a different name' . '<br>';
            LogChangeName($name_file_upload, $random . '_' . $finalname, 'image');
            LogUploadFile($name_file_upload, $random . '_' . $finalname, $Description, $size, 'image');
            echo 'upload successful';
        }
    }
    if ($type == 'text' && $_FILES['file']['size'] < 512000) {
        if (!($exists = file_exists("./text/$finalname"))) {
            move_uploaded_file($_FILES['file']['tmp_name'], "./text/$finalname");
            echo 'not exists' . '<br>';
            LogChangeName($name_file_upload, $finalname, 'text');
            LogUploadFile($name_file_upload, $finalname, $Description, $size, 'text');
            echo 'upload successful';
        }
        else {
            move_uploaded_file($_FILES['file']['tmp_name'], './text/' . $random . '_' . $finalname);
            echo 'This file existed but was saved again under a different name' . '<br>';
            LogChangeName($name_file_upload, $random . '_' . $finalname, 'text');
            LogUploadFile($name_file_upload, $random . '_' . $finalname, $Description, $size, 'text');
            echo 'upload successful';
        }
    }
    echo 'type of file is ' . $type . '<br>';
    echo 'size of file is ' . $size . '<br>';
    echo 'upload unsuccessful';
    // if ((!($type == 'image') && $_FILES['file']['size'] > 1000000000) || (!($type == 'text') && $_FILES['file']['size'] > 512000)) {
    //     echo 'upload unsuccessful';
    // }
    // else {
    //     echo 'upload successful';
    // }
}
else {
    echo 'Unselected file';
}
