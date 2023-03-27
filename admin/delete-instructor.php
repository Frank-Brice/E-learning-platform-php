<?php  
session_start();
require("../db_connection.php");

$id = $_GET['deleteinstruct'];
// sql to delete an instructor
$sql = "DELETE FROM instructor WHERE id = $id";

if ($connect->query($sql) === TRUE) {     // mysqli_query($conn, $sql) or $connect->query($sql)
   header('location: main.admin.php');
} else {
    echo "Error deleting record: " . $connect->error;
}

$connect->close();   // mysqli_close()



?>