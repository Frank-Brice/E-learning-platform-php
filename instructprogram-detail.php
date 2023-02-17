<?php 
    session_start();
    if ($_SESSION['role']) {
    require("./db_connection.php");
    include('components/instructnavbar.php');
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
    include('./program.php');
include('./programStudAssi.php');
      echo '<body class="aboutus">
    <div class="aboutsolution">
        <div class="row about-row">
            <div class="col-lg-6 about-banner ml-5 my-5">
            </div>
        </div>
    </div>';
include('./solution.php');
 echo '<body class="aboutus">
    <div class="aboutquiz">
        <div class="row about-row">
            <div class="col-lg-6 about-banner ml-5 my-5">
            </div>
        </div>
    </div>';
include "./components/footer.php";
    }else {
        # code...
        header('location:instructindex.php?error=Please login first');
    }
?>