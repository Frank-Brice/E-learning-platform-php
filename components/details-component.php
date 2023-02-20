<?php

$id = $_GET['id'];
require("./db_connection.php");
$sql = "SELECT * FROM courses WHERE id = $id";
$result = mysqli_query($connect, $sql);
// $sideBar = include "couseSideBar.php";
?>
<div class="container">

    <div class="row courses" id="maincourselist">
        <?php
        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                $courseTitle = $row['course_title'];
                $courseDescription = $row['course_desc'];
                $courseRequirements = $row['course_requirements'];
                $image = $row['course_image'];
                $video = $row['course_video'];
                $id = $row['id'];
                $date = date("d/m/Y");

                echo '<div class="container m-3 play-contain">
                           <di class="row">
                              <div class="play-vid">
                                   <video class="video"  controls>
                                  <source src="/admin/videos/' . $video . '" type="video/mp4">
                                   </video> 
                                   <div class="tags">
                                      <a href="/category.php?name=Programming" class="try">#Programming</a>
                                      <a href="/category.php?name=Graphics Design"  class="try">#Graphic Design</a>
                                      <a href="/category.php?name=Marketing" class="try">#Marketing</a>
                                   </div>
                                   <h3>'.$courseTitle.'</h3>
                                   <h5>'.$courseDescription. '</h5>
                                   <h5>4.3 <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star-half-stroke"></i> <a href="">(3,561 ratings)</a> 20,965 students</h5>
                                   <h5>Created by <a href="">Mathurin Wansi, The codex</a></h5>
                                   <h5><i class="fa-solid fa-circle-exclamation"></i> Last updated '.$date. ' &nbsp; <i class="fa-solid fa-earth-americas"></i> &nbsp; English &nbsp; <i class="fa-solid fa-closed-captioning"></i> &nbsp; English </h5> <br>
                                <div class="play-info">
                                    <h4>Requirements</h4>
                                    <ul>
                                      <li>&bull; Windows/Macintosh (OSX) Machine</li>
                                      <li>&bull; Internet Connection</li>
                                      <li>&bull; ' . $courseRequirements . '</li>
                                    </ul>
                                    <h4>Who this course is for:</h4>
                                    <p>&bull; Even if you have not touched coding before, it would not matter. The easy step-to-step lectures will quickly guide you through everything you will need to know about coding, mainly '. $courseTitle.'. This course is here for you to get accustomed and familiar with '. $courseTitle.' and its syntax. And above all, '. $courseTitle. ' is one of the easiest coding languages to learn, and there is a lot you can do with it.</p>
                                </div>
                                <hr>
                                <br>
                                <h4><strong>Instructors</strong></h4>
                                <h5><a href="">Yitemben Frank</a></h5>
                                <div class="owner"><img src="../images/brice.jpg" alt="" >
                                  <div class="icons">
                                    <p><i class="fa-solid fa-star"></i> 3.4 Instructor Rating</p>
                                    <p><i class="fa-solid fa-graduation-cap"></i> 74,842 Reviews</p>
                                    <p><i class="fa-solid fa-person"></i><i class="fa-solid fa-person"></i> 20,000 Students</p>
                                    <p><i class="fa-solid fa-play"></i> 25 Courses</p>
                                    
                                  </div>
                                  
                                </div>
                                <br>
                                <p><span>&nbsp &nbsp &nbsp Yitemben Frank</span> is currently a Junior at IUC logbessou majoring in Software Engineering and Computer Science. He is the CEO and Founder of The Imposition Anonymously, an online educational platform focused on bringing the best programming content to hundreds of thousands of students around the world.</p>
                                <p>His programming journey began at the age of 10, starting off with simple Python scripts to crawl the weather. Since then, he has helped too many Student since the beginning of his intelligence and is professionally experienced in Game Dev, Programming language and Web Development. Additionaly, he has competed and won in several games around the world including Competition.</p>
                              </div> 
                                  <div class="right-sidebar">
       <div class="side-list">
           <a href="" class="small-size"><video controls>
                   <source src="../images/business.mp4" type="video/mp4">
               </video></a>
           <div class="video-info">
               <a>Business</a>
               <p>The webfix</p>
               <p>5k views &bull; 1 days</p>
           </div>
       </div>
       <div class="side-list">
           <a href="" class="small-size"><video controls>
                   <source src="../images/Graphic design.mp4" type="video/mp4">
               </video></a>
           <div class="video-info">
               <a>Graphic Design</a>
               <p>The webfix</p>
               <p>5k views &bull; 1 days</p>
           </div>
       </div>
       <div class="side-list">
           <a href="" class="small-size"><video controls>
                   <source src="../images/Hacking.mp4" type="video/mp4">
               </video></a>
           <div class="video-info">
               <a>Hacking</a>
               <p>The webfix</p>
               <p>5k views &bull; 1 days</p>
           </div>
       </div>
       <div class="side-list">
           <a href="" class="small-size"><video controls>
                   <source src="../images/video.mp4" type="video/mp4">
               </video></a>
           <div class="video-info">
               <a>Photography</a>
               <p>The webfix</p>
               <p>5k views &bull; 1 days</p>
           </div>
       </div>
       <div class="side-list">
           <a href="" class="small-size"><img src="../images/couser3.jpg" class="thumbnail" alt=""></a>
           <div class="video-info">
               <a>programming</a>
               <p>The webfix</p>
               <p>5k views &bull; 1 days</p>
           </div>
       </div>



   </div>
                           </div>
                      </div>';
            }
        } else {
            echo "Nothing gotten from database";
        }
        ?>

    </div>
</div>