<?php 
    session_start();
    if(isset($_SESSION['role'])){
   header('location: instructhome.php');
}
    if ($_SESSION['name'] ) {
    require("./db_connection.php");
    include('components/navbar.php');
    echo '<body class="aboutus">
    <div class="aboutassignment">
        <div class="row about-row">
            <div class="col-lg-6 about-banner ml-5 my-5">
                <!-- <h2 style=" color: #fff;"><strong>About Us</strong></h2>
                <p style=" color: #fff;"></p>
                <a href="">
                    <button class="contact-btn">Contact Us</button>
                </a> -->
            </div>
        </div>
    </div>
    <!-- <section>ASSIGNMENT BANNER</section> -->';
    include('./studprogram.php');
include('./studprogramStudAssi.php');
      echo '<body class="aboutus">
    <div class="aboutsolution">
        <div class="row about-row">
            <div class="col-lg-6 about-banner ml-5 my-5">
            </div>
        </div>
    </div>';
include('./studsolution.php');
 echo '<body class="aboutus">
    <div class="aboutquiz">
        <div class="row about-row">
            <div class="col-lg-6 about-banner ml-5 my-5">
            </div>
        </div>
    </div>';
include "./quiz.php";
echo "<br><br>";
include "./components/footer.php";
    }else {
        # code...
        header('location:index.php?error=Please login first');
    }
?>