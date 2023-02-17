<?php 
session_start();

if(isset($_SESSION['role'])){
   header('location: instructhome.php');
}
   if ($_SESSION['name']) {
    include('components/navbar.php');
    include('components/banner.php');
    include('components/main.php');
    include('components/footer.php');
   }else{
     header('location:index.php?error=Please login first');
   }
?>