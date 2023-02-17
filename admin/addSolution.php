           <?php if (isset($_GET['solution'])) {
            $success = $_GET['solution'];
            echo '<script>
alert("Solution set successfully")
            </script>';
           }?>
           <form method="POST" action="./controller/createSolution.php" class="card p-4" enctype="multipart/form-data">
               <h3 class="text-center text-success">Add Solution</h3>
               <div class="mb-3">
                   <label for="exampleFormControlInput1" class="form-label">Solution title</label>
                   <input type="text" name="solution_title" class="form-control mb-3" id="title"
                       placeholder="Solution title" required>
                   <label for="exampleFormControlInput1" class="form-label">Solution PDF</label>
                   <input class="form-control  mb-3" name="solution_pdf" type="file" id="formFileMultiple" multiple
                       accept="document/*" required>
               </div>
               <button type="submit" class="btn btn-success btn-lg" name="submit">Add solution</button>
           </form>