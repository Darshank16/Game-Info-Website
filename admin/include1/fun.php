<?php 
function upload($file,$path)
{
$target_dir = $path;
$target_file = $target_dir . basename($file["name"]);
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$fileName=bin2hex(random_bytes(20)).".".$imageFileType;
$filepath=$target_dir.$fileName;
  if (move_uploaded_file($file["tmp_name"], $filepath)) {
    return $fileName;
  } else {
    echo "Sorry, there was an error uploading your file.";
  }

}
 ?>