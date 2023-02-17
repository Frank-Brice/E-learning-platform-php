<?php
require_once('/Frank/Project/E-learning-platform/db_connection.php');
if (isset($_POST['solution_title']) && isset($_POST['submit'])) {
    $title = $_POST['solution_title'];

    $pdfOld = $_FILES['solution_pdf']['name'];

    //pdf treating
    $pdf_extension = pathinfo($pdfOld,PATHINFO_EXTENSION); # .pdf , pdf
    $pdf_extension_lowercase = strtolower($pdf_extension); # PDF = pdf
    $pdf = uniqid('solution_pdf',true).'.'.$pdf_extension_lowercase;

    // part 2 queries
    $sql = "INSERT INTO solution(solution_title,solution_pdf) VALUES ('$title','$pdf')";
    $result = mysqli_query($connect,$sql);
    if($result){
           // moving the user selected pdf to the image folder
          $fileDestination = '../solution/'.$pdf;
          move_uploaded_file($_FILES['solution_pdf']['tmp_name'],$fileDestination);

          header("location:/admin/admin.php?solution=Solution set successfully");
    }else{
      echo "no Solution added ";
    }
}else{
  echo "Nothing gotten from the add_solution form";
}
  