<?php

session_start();
 require('db_connection.php');
 if (isset($_POST['email']) && isset($_POST['submit'])) {
    $email = $_POST['email'];
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($connect,$sql);
   if (mysqli_num_rows($result) == 1 ) {
    
    header('location:home.php');
    exit();
   }else{
    header('location:forget-password.php?error=no user found');
   }
 }