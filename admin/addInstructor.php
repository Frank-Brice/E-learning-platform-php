 <?php 
                  if(isset($_GET['instructerror'])) {
                     $error = $_GET['instructerror'];
                     echo '<script>
alert("Instructor already exist in the system")
            </script>';
                  }elseif(isset($_GET['instructsuccess'])){
                     $success = $_GET['instructsuccess'];
                     echo '<script>
alert("Instructor added successfully in the system")
            </script>';
                  }
               ?>


 <form method="POST" action="./controller/createInstructor.php" class="card p-4" enctype="multipart/form-data">
     <h3 class="text-center text-success">Add an Instructor</h3>
     <div class="mb-3">
         <label for="exampleFormControlInput1" class="form-label">Name</label>
         <input type="text" name="name" class="form-control mb-3" id="name" placeholder="instructor's name..." required>
         <div class="mb-3">
             <label for="exampleFormControlTextarea1 " class="form-label">Image</label>
             <input type="file" id="file" name="file" class="form-control mb-3" placeholder="choose an image" required
                 accept="image/*">
         </div>
         <div class="mb-3">
             <label for="exampleFormControlTextarea1 " class="form-label">Gender</label><br>
             <input type="radio" name="sex" value="M">&nbsp MALE &nbsp
             <input type="radio" name="sex" value="F">&nbsp FEMALE
         </div>
         <div class="mb-3">
             <label for="exampleFormControlTextarea1" class="form-label">email</label>
             <input type="email" id="email" name="email" class="form-control mb-3" placeholder="instructor's email..."
                 required>
         </div>
         <div class="mb-3">
             <label for="exampleFormControlTextarea1" class="form-label">password</label>
             <input type="password" id="password" name="password" class="form-control mb-3"
                 placeholder="instructor's password" required>
         </div>
         <div class="mb-3">
             <label for="exampleFormControlTextarea1" class="form-label">Role</label>
             <input type="role" id="role" name="role" class="form-control mb-3" value="instructor">
         </div>
     </div>
     <select class="form-select form-control mb-3" name="category" aria-label="Default select example">
         <option selected>Choose a category</option>
         <option value="Programming">Programming</option>
         <option value="Marketing">Marketing</option>
         <option value="Photography">Photography</option>
         <option value="Music">Music</option>
         <option value="Business">Business</option>
         <option value="Graphics Design">Graphics Design</option>

     </select>
     <button type="submit" class="btn btn-success btn-lg" name="submit">Add instructor</button>
 </form>