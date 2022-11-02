<!-- /.card-header -->
<?php
require_once('/Frank/Project/E-learning-platform/db_connection.php');
$sql = "SELECT * FROM users";
$result = mysqli_query($connect, $sql);

?>
<div class="card-body p-0">
    <ul class="users-list clearfix">

        <?php
        if ($result) {
  while($row = mysqli_fetch_assoc($result)){
     $name = $row['names'];
     $image = $row['user_image'];
     $email = $row['email'];
    echo '<li>
            <img src="../users/'.$image.'" alt="User Image">
            <a class="users-list-name" href="#">'.$name.'</a>
            <span class="users-list-date">'.$email.'</span>
        </li>';
  }
} 
           
        ?>


    </ul>
    <!-- /.users-list -->
</div>