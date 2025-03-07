<?php
echo '<html><body><button onclick="history.back()">Go Back</button>';

// Simple example for handling file upload in PHP
if ($_FILES["file"]["error"] === UPLOAD_ERR_OK) {
    $tmp_name = $_FILES["file"]["tmp_name"];
    $name = basename($_FILES["file"]["name"]);
    move_uploaded_file($tmp_name, __DIR__ . "/uploads/Route_Poi/uploaded_file.csv");
    echo "File successfully uploaded!";
} else {
    echo "File upload error!";
}
echo '</body></html>';
?>
