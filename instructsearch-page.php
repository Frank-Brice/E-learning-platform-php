<?php
session_start();
include('components/instructnavbar.php');

include "db_connection.php";
if(isset($_POST['search-item'])){
    $searchItem = $_POST['search-item'];
    $sql = "SELECT * FROM courses WHERE course_title LIKE '%$searchItem%'";
    $result = mysqli_query($connect,$sql);
}
?>
<h1 class="d-flex align-item-center justify-content-center my-5">Get a Free Online C<span><img
            src="../images/nkap-removebg-preview.png" alt="" width="100%" height="40px"></span>urse</h1>
<div id="box" class="container">
    <form action="search-page.php" method="post">
        &nbsp &nbsp
        <i class="fa-solid fa-magnifying-glass"></i>
        <input type="text" name="search-item" placeholder="Search for Course">
        <a href=""><button type="submit">Search</button></a>
        <!-- <button class="btn btn-md  rounded-pill" style="background-color: #F27137;">Search</button> -->
    </form>
</div> <?php
    if (!isset($_POST['search-item'])) {
        echo ' <div class="container">
    <div class="masonry row my-4">
        <div class="grid-item item-1">
            <img src="./images/couse1.jpg" alt="" width="100%">
        </div>
        <div class="grid-item item-2">
            <img src="./images/couse2.jpg" alt="" width="100%">
        </div>
        <div class="grid-item item-3">
            <img src="./images/couse23.jpg" alt="" width="100%">
        </div>
        <div class="grid-item item-4">
            <img src="./images/couse24.jpg" alt="" width="100%">
        </div>
        <div class="grid-item item-5">
            <img src="./admin/images/courseImg634fdd1eab2215.44602377.jpg" alt="" width="100%">
        </div>
        <div class="grid-item item-6">
            <img src="./admin/images/courseImg636be93e214a67.84921200.jpg" alt="" width="100%">
        </div>
    </div>
</div> ';
    } else {
       if($result){
            if(mysqli_num_rows($result) <= 0){
                echo "<h1 class='text-center no-res text-danger'>No Course With title as : ".$searchItem." </h1>" ;
            }
            while($row = mysqli_fetch_assoc($result)){
                $id = $row['id'];
                $courseTitle = $row['course_title'];
                $image = $row['course_image'];
                $video = $row['course_video'];
                $pdf = $row['pdf'];
                if($_SESSION['name'] == 'Mathurin Wansi' || $_SESSION['role'] == 'instructor'){
                    echo '<div class="col-lg-3 my-3 mx-4">
                    <div class="card d-flex align-items-center justify-content-center" style="width: 18rem;">
                      <video poster="/admin/images/'.$image.'" height="190px" controls class="card-img-top">
                        <source src="/admin/videos/'.$video.'" type="video/mp4">
                      </video>
                        <div class="card-body">
                            <div class="row">
                                <h5 class="card-title text-center color">'.$courseTitle.'</h5>
                                <iframe src="/admin/pdf/' . $pdf . '" width="100%"></iframe>
                                <div class="d-flex align-items-center justify-content-between">
                                <a class="text-danger" href="delete.php?id='.$id.'"><i class="fa-solid fa-trash-can"></i></a>
                                <a href="details.php?id='.$id.'"><i class="fa-solid fa-eye"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>';
                }else{
                    echo '<div class="col-lg-3 my-3 mx-4 ">
                    <div class="card d-flex align-items-center justify-content-center" style="width: 18rem;">
                      <video poster="/admin/images/'.$image.'" height="190px" controls class="card-img-top">
                        <source src="/admin/videos/'.$video.'" type="video/mp4">
                      </video>
                        <div class="card-body">
                            
                                <h5 class="card-title text-center color">'.$courseTitle.'</h5>
                                <iframe src="/admin/pdf/' . $pdf . '" width="100%"></iframe>
                                <div class="d-flex align-item-center justify-content-between" name="id">
                                <a href="details.php?id='.$id.'"><i class="fa-solid fa-eye"></i></a>
                                <a href="download.php?downloaditem='. $video. '"> <i class="fa-solid fa-download text-success"></i></a>
                            </div>
                        </div>
                    </div>
                </div>';
                }
               
            }
           }else{
               echo "nothing gotten from the database";
               }
    }
    
    ?> </div>
<?php
include('components/footer.php');
?>