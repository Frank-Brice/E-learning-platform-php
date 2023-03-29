<?php 
session_start();

$category = $_GET['names'];
include "./components/instructnavbar.php";



require("./db_connection.php");
$sql = "SELECT * FROM courses WHERE category = '$category'";
$result= mysqli_query($connect,$sql);
?>
<div class="container">
    <div class="row catBanner mt-2">
        <img src="images/banners/catbanner/<?php echo $category ?>.jpg" alt="<?php echo $category ?>" width=" 100%">
    </div>
    <div id="mainCourse" class="row courses my-3 d-flex align-items-center justify-content-center">
        <?php 
           if($result){
             if(mysqli_num_rows($result)>=1){
                while($row = mysqli_fetch_assoc($result)){
                    $id = $row['id'];
                    $courseTitle = $row['course_title'];
                    $image = $row['course_image'];
                    $video = $row['course_video'];
                    $pdf = $row['pdf'];
                    if($_SESSION['name'] == 'Mathurin Wansi' || $_SESSION['role'] == 'instructor'){
                        echo '<div class="col-lg-3 mx-3">
                        <div class="card" style="width: 18rem;">
                          <video poster="/admin/images/'.$image.'" height="190px" controls class="card-img-top">
                            <source src="/admin/videos/'.$video.'" type="video/mp4">
                          </video>
                            <div class="card-body">
                                <div class="row">
                                    <h5 class="card-title text-center color">'.$courseTitle.'</h5>
                                    <iframe src="/admin/pdf/' . $pdf . '" width="100%"></iframe>
                                    <div class="d-flex align-items-center justify-content-between">
                                    <a class="text-danger" href="delete.php?id='.$id.'"  onclick="return checkdelete()"><i class="fa-solid fa-trash-can"></i></a>
                                    <a href="instructdetails.php?id='.$id.'"><i class="fa-solid fa-eye"></i></a>
                                    <a href="download.php?downloaditem='. $video. '"> <i class="fa-solid fa-download text-success"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>';
                    }else{
                        echo '<div class="col-lg-3 mx-3">
                        <div class="card" style="width: 18rem;">
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
                   
                };
             }else{
                echo '
                   <h1 class="text-danger text-center">No course yet for this category</h1>
                ';
             }
           }else{
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
<?php include "./components/footer.php"; ?>