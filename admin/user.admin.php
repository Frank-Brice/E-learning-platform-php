<!-- /.card-header -->
<?php
require_once('/Frank/Project/E-learning-platform/db_connection.php');
$sql = "SELECT * FROM users WHERE id > 8";
$result = mysqli_query($connect, $sql);

$sql1 = "SELECT * FROM users WHERE id = 8";
$result1 = mysqli_query($connect, $sql1);



?>
<div class="card-body p-0">
    <ul class="users-list clearfix">

        <?php
        if ($result1) {
  while($row = mysqli_fetch_assoc($result1)){
     $name = $row['names'];
     $image = $row['user_image'];
     $email = $row['email'];
     $id = $row['id'];
    echo '<li>
            <img src="../users/'.$image.'" alt="User Image">
            <a class="users-list-name" href="#">'.$name.'</a>
            <span class="users-list-date">'.$email.'</span>
            <h5 style="color: #F27137;"><b>Admin</b></h5>
        </li>';
  }
} 
        if ($result) {
  while($row = mysqli_fetch_assoc($result)){
     $name = $row['names'];
     $image = $row['user_image'];
     $email = $row['email'];
     $id = $row['id'];
    echo '<li>
            <img src="../users/'.$image.'" alt="User Image">
            <a class="users-list-name" href="#">'.$name.'</a>
            <span class="users-list-date">'.$email.'</span>
            <a href="delete-user.php?deleteitem='. $id. '"> <i class="fa-solid fa-trash-can text-danger"></i></a>
        </li>';
  }
} 
           
        ?>


    </ul>
    <!-- /.users-list -->
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
    integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js"
    integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async>
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js"
    integrity="sha512-6UofPqm0QupIL0kzS/UIzekR73/luZdC6i/kXDbWnLOJoqwklBK6519iUnShaYceJ0y4FaiPtX/hRnV/X/xlUQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
    integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js"
    integrity="sha512-naukR7I+Nk6gp7p5TMA4ycgfxaZBJ7MO5iC3Fp6ySQyKFHOGfpkSZkYVWV5R7u7cfAicxanwYQ5D1e17EfJcMA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="/code.js"></script>