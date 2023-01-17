<?php
session_start();
include "./components/navbar.php";
?>

<body class="aboutus">
    <div class="aboutbanner">
        <div class="row about-row">
            <div class="col-lg-6 about-banner ml-5 my-5">
                <h2 style=" color: #fff;"><strong>About Us</strong></h2>
                <p style=" color: #fff;"></p>
                <a href="">
                    <button class="contact-btn">Contact Us</button>
                </a>
            </div>
        </div>
    </div>
    <section id="about" class="about section-bg">
        <div class="container about-container">
            <div class="row about-content">
                <h3 class="title color text-center my-3">About Me</h3>
                <div class="col-lg-6 about-col">
                    <div class="personal-img">
                        <img class="pc-img" src="./images/brice.jpg" alt="personal-image" width="100%" height="100%">
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>