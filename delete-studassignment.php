<?php  
session_start();
require("./db_connection.php");

$id = $_GET['deleteitem'];
// sql to delete a student assignment
$sql = "DELETE FROM studentassignment WHERE id = $id";

if ($connect->query($sql) === TRUE) {     // mysqli_query($conn, $sql) or $connect->query($sql)
   header('location: program-detail.php');
} else {
    echo "Error deleting record: " . $connect->error;
}

$connect->close();   // mysqli_close()

// verifying if there is No student assignment




?>