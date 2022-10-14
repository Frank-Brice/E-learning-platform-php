<?php  
session_start();
require("./db_connection.php");


$id = $_GET['deleteitem'];

// sql to delete a course
$sql = "DELETE FROM courses WHERE id = $id";

if ($connect->query($sql) === TRUE) {     // mysqli_query($conn, $sql) or $connect->query($sql)
   header('location: courses.php');
} else {
    echo "Error deleting record: " . $connect->error;
}

$connect->close();   // mysqli_close()

// verifying if there is No Course




?>