<?php
session_start();
require("./db_connection.php");

    if (!empty($_GET['downloaditem'])) {
$fileName = basename($_GET['downloaditem']);
$filePath = "admin/videos/".$fileName;

if (!empty($fileName) && file_exists($filePath)) {
# define header
header("Cache-Control: public");
header("Content-Description: File Transfer");
header("Content-Disposition: attachment; course_video=$fileName");
header("Content-Type: application/zip");
header("Content-Transfer-Emcoding: binary");

//read file

readfile($filePath);
exit;
}
else{
echo "file not exist";
}
}