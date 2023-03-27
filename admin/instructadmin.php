<?php session_start();

if ($_SESSION['role'] == "instructor" ) {
    include "instructmain.admin.php";
}else{
  header('location:/instructhome.php');
}
?>