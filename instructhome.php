<?php 
session_start();

   if ($_SESSION['role']) {
    include('components/instructnavbar.php');
    include('components/instructbanner.php');
    include('components/instructmain.php');
    include('components/footer.php');
   }else{
     header('location:instructindex.php?error=Please login first');
   }
?>