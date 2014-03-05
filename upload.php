<?php
$filename = iconv('UTF-8', 'GBK', $_FILES['file']['name']); 
$key = $_POST['key'];
$key2 = $_POST['key2'];
if ($filename) {
    move_uploaded_file($_FILES["file"]["tmp_name"],
      "uploads/" . $filename);
}
echo $key;
echo $key2;
echo $filename;
?>