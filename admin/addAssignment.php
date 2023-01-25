            <form method="POST" action="./controller/createAssignment.php" class="card p-4"
                enctype="multipart/form-data">
                <h3 class="text-center text-success">Add an Assignment</h3>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Assignment title</label>
                    <input type="text" name="assignment_title" class="form-control mb-3" id="title"
                        placeholder="Course title" required>
                    <label for="exampleFormControlInput1" class="form-label">Assignment PDF</label>
                    <input class="form-control  mb-3" name="assignment_pdf" type="file" id="formFileMultiple" multiple
                        accept="document/*" required>
                </div>
                <select class="form-select form-control mb-3" name="assignment_category"
                    aria-label="Default select example">
                    <option selected>Choose a category</option>
                    <option value="Programming">Programming</option>
                    <option value="Marketing">Marketing</option>
                    <option value="Photography">Photography</option>
                    <option value="Music">Music</option>
                    <option value="Business">Business</option>
                    <option value="Graphics Design">Graphics Design</option>

                </select>
                <button type="submit" class="btn btn-success btn-lg" name="submit">Add assignment</button>
            </form>