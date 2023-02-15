<?php
require("./db_connection.php");
$sql = "SELECT * FROM assignments";
$result = mysqli_query($connect, $sql);
?>

<div class="container">

    <div class="row courses my-5" id="maincourselist">
        <?php
        if ($result) {
            if (mysqli_num_rows($result) <= 0 ) {       // code to verify if there is no assignment in the database or not.
                echo "<h1 class='text-center text-danger'>No Assignment Added Yet!!!</h1>";
            }
            while ($row = mysqli_fetch_assoc($result)) {
                $assignmentTitle = $row['assignment_title'];
                $pdf = $row['assignment_pdf'];
                $id = $row['id'];
                if ($_SESSION['name'] == 'Mathurin Wansi') {
                    $trash = '<i class="fa-solid fa-trash-can"></i>';
                    $eye = '<i class="fa-solid fa-eye"></i>';
                    $download ='<i class="fa-solid fa-download"></i>'; 
                    echo '<div class="col-lg-3 d-flex justify-content-space-between">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title text-center text-success">' . $assignmentTitle . '</h5>
                        <iframe src="/admin/assignment/' . $pdf . '" width="100%"></iframe>
                        <div class="d-flex align-item-center justify-content-between" name="id">
                            <a href="delete-assignment.php?deleteitem='. $id. '" onclick="return checkdelete()"> <i class="fa-solid fa-trash-can text-danger"></i></a>
                            
                            
                        </div>
                    </div>
                </div>
            </div>';
            
                } else {
                    echo '<div class="col-lg-3 d-flex justify-content-space-between">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                    
                        <h5 class="card-title text-center text-danger">' . $assignmentTitle . ' </h5>
                        <iframe src="/admin/assignment/' . $pdf . '" width="100%"></iframe>
                        <div class="d-flex align-item-center justify-content-between" name="id">
                        
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
    return confirm('Are you sure you want to Delete this Assignment ?');
}
</script>