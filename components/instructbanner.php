<section class="banner-area">
    <div class="container d-flex align-items-center justify-content-center  h-100">
        <div class="row ">
            <div class="col-lg-6 text-light ">
                <?php 

require('db_connection.php');


$sql = "SELECT * FROM instructor";
$result = mysqli_query($connect, $sql);


if ($result) {
     if (mysqli_num_rows($result) <= 0 ) {       // code to verify if there is no course in the database or not.
                echo '';
            }else{
                 echo '<h1><strong>WELCOME Mr/Mrs. '.$_SESSION['name'].' to the world best institutions</strong></h1>
        <p>Build skills with courses, certificates and degrees. Online from world class universities</p>';
            }
        } ?>

                <button class="btn btn-lg btn-dark rounded-pill"> Here we are!</button>
            </div>
            <div class="col-lg-6">
                <img src="/images/bann1.png" alt="">
            </div>
        </div>
    </div>

</section>
<h1 class="text-center my-3"><strong>Explore Top Categories</strong></h1>