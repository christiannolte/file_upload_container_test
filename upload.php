<?php
// Simple example for handling file upload in PHP
if ($_FILES["file"]["error"] === UPLOAD_ERR_OK) {
    $tmp_name = $_FILES["file"]["tmp_name"];
    $name = basename($_FILES["file"]["name"]);
    if  (file_exists(__DIR__ . "/uploads/uploaded_file.csv")) {
      unlink(__DIR__ . "/uploads/uploaded_file.csv");
    }
    move_uploaded_file($tmp_name, __DIR__ . "/uploads/uploaded_file.csv");
    echo "File successfully uploaded!";
} else {
    echo "File upload error!";
}
?>
