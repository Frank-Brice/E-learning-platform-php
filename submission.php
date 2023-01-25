<?php
session_start();
require('db_connection.php');
if (isset($_POST['name'])  && isset($_POST['email']) && isset($_POST['submit'])) {
    $names = $_POST['name'];
    $email = $_POST['email'];

    $pdfOld = $_FILES['assignment_pdf']['name'];

    //pdf treating
    $pdf_extension = pathinfo($pdfOld,PATHINFO_EXTENSION); # .pdf , pdf
    $pdf_extension_lowercase = strtolower($pdf_extension); # PDF = pdf
    $pdf = uniqid('assignment_pdf',true).'.'.$pdf_extension_lowercase;

    // part 2 queries
    $sql = "INSERT INTO studentassignment(names,email,assignment_pdf) VALUES ('$names','$email','$pdf')";
    $result = mysqli_query($connect,$sql);
    if($result){
           // moving the user selected pdf to the image folder
          $fileDestination = '../E-learning-platform/admin/studentAssignment/'.$pdf;
          move_uploaded_file($_FILES['assignment_pdf']['tmp_name'],$fileDestination);

          header("location:program-detail.php?success=Assignment submitted successfully");
    }else{
      echo "no assignment submitted ";
    }
}else{
  echo "Nothing gotten from the submission_assignment form";
}
  