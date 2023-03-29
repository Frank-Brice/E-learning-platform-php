<?php
// session_start();
require("./db_connection.php");
// include('components/navbar.php');
$sql = "SELECT * FROM solution";
$result = mysqli_query($connect, $sql);
?>

<div class="container">

    <div class="row courses my-5" id="maincourselist">
        <?php
        if ($result) {
            if (mysqli_num_rows($result) <= 0 ) {       // code to verify if there is no solution in the database or not.
                echo "<h1 class='text-center text-danger'>No Solution Added Yet!!!</h1>";
            }
            while ($row = mysqli_fetch_assoc($result)) {
                $name = $row['solution_title'];
                $date = $row['date'];
                $pdf = $row['solution_pdf'];
                $id = $row['id'];
    
                    echo '<div class="col-lg-3 d-flex justify-content-space-between">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title text-center text-success">' . $name . '</h5>
                        <iframe src="/admin/solution/' . $pdf . '" width="100%"></iframe>
                    </div>
                </div>
            </div>';
                
                
            }
        } else {
            echo "nothing gotten from the database";
        }
        ?>

    </div>
</div>