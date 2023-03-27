 <section>
     <?php 
        
            echo '<div class="aboutsubmission">
        <div class="row about-row">
            <div class="col-lg-6 about-banner ml-5 my-5">
            </div>
        </div>

        </div>';
        if (isset($_GET['success'])) {
                        $success = $_GET['success'];
                        echo '<script>alert("Assignment submitted successfully")</script>';
        }
            echo '<section><form method="POST" action="submission.php" class="form-group center-el h-100" enctype="multipart/form-data">
            <!-- enctype is a MIME type of content that is used to submit the form to the server -->
            <div class="div my-2 mx-5">
                <label for="email" class="text-capitalize" style="color: #F27137;"><b>names</b></label>
                <input type="text" id="name" name="name" class="form-control px-3 py-2 my-2"
                    placeholder="enter your name" required>
                <label for="email" class="text-capitalize" style="color: #F27137;"><b>email</b></label>
                <input type="email" id="email" name="email" class="form-control px-3 py-2 my-2"
                    placeholder="enter your email" required>
                <label for="exampleFormControlInput1" class="form-label" style="color: #F27137;"><b>Assignment PDF</b></label>
                <input class="form-control  mb-3" name="assignment_pdf" type="file" id="formFileMultiple" multiple
                    accept="document/*">
                    <input type="submit" class="form-btn btn btn-lg border px-3 py-2 my-1" style="background-color: #F27137; color: #fff;"
                                        value="Submit" name="submit">
        </form></section>';
        
        ?>

 </section>