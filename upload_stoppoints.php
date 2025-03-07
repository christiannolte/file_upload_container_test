
<?php
// Simple example for handling file upload in PHP
echo '<html><body><button onclick="history.back()">Go Back</button>';

if ($_FILES["file"]["error"] === UPLOAD_ERR_OK) {
    $tmp_name = $_FILES["file"]["tmp_name"];
    echo $tmp_name;
    $name = basename($_FILES["file"]["name"]);
    move_uploaded_file($tmp_name, __DIR__ . "/uploads/stop_points/uploaded_file.csv");
    echo "File successfully uploaded!";
} else {
    echo "File upload error!";
}
echo '</body></html>';
?>
