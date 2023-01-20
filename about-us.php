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
    <section id="about" class="about ">
        <div class="container about-container">
            <div class="row about-content">
                <h3 class="title color text-center my-3">About Me</h3>
                <div class="col-lg-6 about-col">
                    <div class="personal-img">
                        <img class="pc-img" src="./images/brice.jpg" alt="personal-image" width="100%" height="100%">
                    </div>
                </div>
                <div class="col-lg-6 about-col pt-4 pt-lg-0">
                    <p class="about-p">Everyday I am hustling... <br><br> <b>Hello!</b> <br><br> <b
                            style="color: #F27137; font-family: Kurale;">Yitemben
                            Frank</b>
                        here, <b>CEO</b>
                        of <b>Nkap-Learning.</b>
                        <br><br> I'm a Software Engineering student involved in <b>a variety of
                            projects</b>. Like any project, it has it
                        ups and
                        downs, which can be stressful, but I learn
                        something new every day. <br> I Master Web development languages such as <b
                            style="color: #F27137; font-family: Kurale;">HTML, CSS,
                            JS(Jquery,Json,Es6), PHP, MySQL, Bootstrap(all versions).</b> <br><br> I
                        started this
                        site because <b>I believe in the
                            hustle</b>,
                        but not
                        the
                        burn-yourself-out-working-24/7 variety.
                        <br><br>
                    <ul>
                        <b style="color: #F27137; font-family: Kurale; ">Qualities :</b>
                        <li><i class="fa-solid fa-key" style="color: #F27137; "></i>&nbsp Good at
                            working
                            with pressure with
                            efficient
                            output
                            release</li>
                        <li><i class="fa-solid fa-key" style="color: #F27137; "></i>&nbsp Good
                            designer with UX and UI
                            design
                            tools such as
                            Figma</li>
                        <li><i class="fa-solid fa-key" style="color: #F27137; "></i>&nbsp Good in team
                            work</li>
                    </ul>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section id="team" class="team section-bg">
        <div class="container about-container">
            <div class="section-title">
                <h2>Team</h2>
                <p>our hardworking team</p>
            </div>
            <div class="row about-content">
                <div class="col-lg-6 about-team">
                    <div class="member d-flex align-items-start">
                        <div class="pic">
                            <img class="img-fluid" src="./images/brice.jpg" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Yitemben Frank</h4>
                            <span>Chief Executive Officer</span>
                            <p>Game Dev</p>
                            <div class="social">
                                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                <a href="#"><i class="fa-brands fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="testimonials" class="testimonials">
        <div class="container about-container">
            <div class="row about-content">
                <div class="col-lg-6">
                    <div class="testimonial-item mt-4">
                        <img class="testimonial-img" src="./images/Fokam.jpg" alt="">
                        <h3>Mr Fokam Michel</h3>
                        <h4>Programmer</h4>
                        <p><i class="fa-solid fa-quote-left"></i> As a Programmer, I really love the work done by
                            yitemben frank (ceo of nkap-learning). He is so smart and collaborative. He performs good
                            work, with
                            proper delays of execution. I also by the way love his team. <i
                                class="fa-solid fa-quote-right"></i></p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="testimonial-item mt-4">
                        <img class="testimonial-img" src="./images/Math.jpeg" alt="">
                        <h3>Mr Wansi Mathurin</h3>
                        <h4>CEO @CodeWithGeeks</h4>
                        <p><i class="fa-solid fa-quote-left"></i> As the CEO of @CodeWithGeeks, I really love the work
                            done by
                            yitemben frank (ceo of nkap-learning). He is so smart and collaborative. He performs good
                            work, with
                            proper delays of execution. I also by the way love his team. <i
                                class="fa-solid fa-quote-right"></i></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="skills" class="skills">
        <div class="container about-container">
            <div class="section-title">
                <h2>Our Skills</h2>
                <p>Check our Skills</p>
            </div>
            <div class="row skills-content about-content">
                <div class="col-lg-6">
                    <div class="progress">
                        <span class="skill">
                            HTML
                            <i class="val">100%</i>
                        </span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" style="width: 100%;"></div>
                        </div>
                    </div>
                    <div class="progress">
                        <span class="skill">
                            CSS
                            <i class="val">90%</i>
                        </span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" style="width: 90%;"></div>
                        </div>
                    </div>
                    <div class="progress">
                        <span class="skill">
                            JAVASCRIPT
                            <i class="val">50%</i>
                        </span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" style="width: 50%;"></div>
                        </div>
                    </div>
                    <div class="progress">
                        <span class="skill">
                            PHP & MySQL
                            <i class="val">90%</i>
                        </span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" style="width: 90%;"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="progress">
                        <span class="skill">
                            PHP
                            <i class="val">95%</i>
                        </span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" style="width: 95%;"></div>
                        </div>
                    </div>
                    <div class="progress">
                        <span class="skill">
                            WORDPRESS/CMS
                            <i class="val">0%</i>
                        </span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" style="width: 0%;"></div>
                        </div>
                    </div>
                    <div class="progress">
                        <span class="skill">
                            PHOTOSHOP
                            <i class="val">20%</i>
                        </span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" style="width: 20%;"></div>
                        </div>
                    </div>
                    <div class="progress">
                        <span class="skill">
                            JQUERY
                            <i class="val">50%</i>
                        </span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" style="width: 50%;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
<?php
include "./components/footer.php";
?>