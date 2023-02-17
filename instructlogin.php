<?php
 session_start();
 require('db_connection.php');
 if (isset($_POST['email']) && isset($_POST['password']) && isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $sql = "SELECT * FROM instructor WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($connect,$sql);
   if (mysqli_num_rows($result) == 1 ) {
    $row = mysqli_fetch_assoc($result);
    $_SESSION['name'] = $row['name'];
    $_SESSION['file'] = $row['image'];
    $_SESSION['email'] = $row['email'];
    $_SESSION['role'] = $row['role'];
    header('location:instructhome.php');
    exit();
   }else{
    header('location:index.php?error=no user found');
   }
 }