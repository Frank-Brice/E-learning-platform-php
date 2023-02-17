<?php
session_start();
if(isset($_SESSION['role'])){
   header('location: instructhome.php');
}
if ($_SESSION['name']) {
require("./db_connection.php");

include "./components/navbar.php";
include "./components/course-slide.php";
include "./components/mainCoursesList.php";
include "./components/footer.php";

}else {
    # if he log out from the course.php page, he can't go back directly except he login
    header('location:index.php?error=Please login first');
}