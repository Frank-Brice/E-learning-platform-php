<?php 
session_start();

   if ($_SESSION['role']) {
    include('components/instructnavbar.php');
    include('components/banner.php');
    include('components/main.php');
    include('components/footer.php');
   }else{
     header('location:instructindex.php?error=Please login first');
   }
?>