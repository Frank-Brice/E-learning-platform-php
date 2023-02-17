<?php 

session_start();
session_unset();
session_destroy();

 header("location:instructindex.php?success=You have logged out successfully");