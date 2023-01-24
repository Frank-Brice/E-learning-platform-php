<?php
require_once('/Frank/Project/E-learning-platform/db_connection.php');
if (isset($_POST['assignment_title'])  && isset($_POST['assignment_category']) && isset($_POST['submit'])) {
    $title = $_POST['assignment_title'];
    $category = $_POST['assignment_category'];

    $pdfOld = $_FILES['assignment_pdf']['name'];

    //pdf treating
    $pdf_extension = pathinfo($pdfOld,PATHINFO_EXTENSION); # .pdf , pdf
    $pdf_extension_lowercase = strtolower($pdf_extension); # PDF = pdf
    $pdf = uniqid('assignment_pdf',true).'.'.$pdf_extension_lowercase;

    // part 2 queries
    $sql = "INSERT INTO assignments(assignment_title,assignment_pdf,assignment_category) VALUES ('$title','$pdf','$category')";
    $result = mysqli_query($connect,$sql);
    if($result){
           // moving the user selected pdf to the image folder
          $fileDestination = '../assignment/'.$pdf;
          move_uploaded_file($_FILES['assignment_pdf']['tmp_name'],$fileDestination);

          header("location:/admin/admin.php");
    }else{
      echo "no assignment added ";
    }
}else{
  echo "Nothing gotten from the add_assignment form";
}
  