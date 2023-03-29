<?php
require("./db_connection.php");
$sql = "SELECT * FROM courses";
$result = mysqli_query($connect, $sql);
?>

<div class="container">

    <div class="row courses my-5" id="maincourselist">
        <?php
        if ($result) {
            if (mysqli_num_rows($result) <= 0 ) {       // code to verify if there is no course in the database or not.
                echo "<h1 class='text-center text-danger'>No Course Added Yet!!!</h1>";
            }
            while ($row = mysqli_fetch_assoc($result)) {
                $courseTitle = $row['course_title'];
                $image = $row['course_image'];
                $video = $row['course_video'];
                $pdf = $row['pdf'];
                $id = $row['id'];
                if ($_SESSION['name'] == 'Mathurin Wansi') {
                    $trash = '<i class="fa-solid fa-trash-can"></i>';
                    $eye = '<i class="fa-solid fa-eye"></i>';
                    $download ='<i class="fa-solid fa-download"></i>'; 
                    $edit ='<i class="fa-solid fa-pen-to-square text-info"></i>'; 
                    echo '<div class="col-lg-3 d-flex justify-content-space-between">
                <div class="card" style="width: 18rem;">
                    <video poster="/admin/images/' . $image . '" height="173px"  controls class="card-img-top">
                    <source src="/admin/videos/' . $video . '" type="video/mp4">
                    </video>
                    <div class="card-body">
                        <h5 class="card-title text-center">' . $courseTitle . '</h5>
                        <iframe src="/admin/pdf/' . $pdf . '" width="100%"></iframe>
                        <div class="d-flex align-item-center justify-content-between" name="id">
                            <a href="delete.php?deleteitem='. $id. '" onclick="return checkdelete()"> <i class="fa-solid fa-trash-can text-danger"></i></a>
                            <a href="details.php?id='. $id. '"> <i class="fa-solid fa-eye"></i></a>
                            <a href="edit.php?id='. $id. '"> <i class="fa-solid fa-pen-to-square text-info"></i></a>
                            
                        </div>
                    </div>
                </div>
            </div>';
            
                } else {
                    echo '<div class="col-lg-3 d-flex justify-content-space-between">
                <div class="card" style="width: 18rem;">
                    <video poster="/admin/images/' . $image . '" height="173px"  controls class="card-img-top">
                    <source src="/admin/videos/' . $video . '" type="video/mp4">
                    </video>
                    <div class="card-body">
                    
                        <h5 class="card-title text-center">' . $courseTitle . ' </h5>
                        <iframe src="/admin/pdf/' . $pdf . '" width="100%"></iframe>
                        <div class="d-flex align-item-center justify-content-between" name="id">
                        <a href="details.php?id=' . $id . '"> <i class="fa-solid fa-eye"></i></a>
                        <a href="download.php?downloaditem='. $video. '"> <i class="fa-solid fa-download text-success"></i></a>
                        </div>
                    </div>
                </div>
            </div>';
                }
                
            }
        } else {
            echo "nothing gotten from the database";
        }
        ?>

    </div>
</div>
<script>
function checkdelete() {
    return confirm('Are you sure you want to Delete this Course ?');
}
</script>