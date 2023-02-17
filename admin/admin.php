<?php session_start();
if(isset($_SESSION['role'])){
   header('location: instructhome.php');
}
if ($_SESSION['name'] == "Mathurin Wansi" ) {
    include "main.admin.php";
}else{
  header('location:/home.php');
}
?>