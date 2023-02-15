<?php  
session_start();
require("../db_connection.php");

$id = $_GET['deleteitem'];
// sql to delete a user
$sql = "DELETE FROM users WHERE id = $id";

if ($connect->query($sql) === TRUE) {     // mysqli_query($conn, $sql) or $connect->query($sql)
   header('location: main.admin.php');
} else {
    echo "Error deleting record: " . $connect->error;
}

$connect->close();   // mysqli_close()

// verifying if there is No assignment

?>