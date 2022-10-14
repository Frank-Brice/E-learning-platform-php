<?php


$id = $_GET['id'];
require("./db_connection.php");
$sql = "SELECT * FROM courses WHERE id = $id";
$result = mysqli_query($connect, $sql);
?>
<div class="container">

    <div class="row courses my-5" id="maincourselist">
        <?php
        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                $courseTitle = $row['course_title'];
                $image = $row['course_image'];
                $video = $row['course_video'];
                $id = $row['id'];
                echo $courseTitle;
                echo '<div class="card-img">
                 <video width="320" height="240" controls>
  <source src="/admin/videos/' . $video . '" type="video/mp4">
</video> 
                
                </div>'; 
            }
        }else{
                echo "Nothing gotten from database";
            }
        ?>

    </div>
</div>