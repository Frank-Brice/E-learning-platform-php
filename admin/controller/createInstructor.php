<?php
session_start();
require_once('/Frank/Project/E-learning-platform/db_connection.php');
if( isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['role']) && isset($_POST['category']) && isset($_POST['submit'])) {
  // isset $_post 'name' checks if the name has been set and so on...
    $names = $_POST['name']; // it gives the name you have filled to the variable "$names"
    $image = $_FILES['file']['name']; // it gives the image you have filled to the variable "$image"
    $email = $_POST['email']; // it gives the mail you have filled to the variable "$email"
    $password = md5($_POST['password']); // it gives the password you have filled to the variable "$password"
    // md5 is used to hast or encrypt the password enters by the user into 128-bit
    $role = $_POST['role'];
    $sex = $_POST['sex'];
    $category = $_POST['category'];
      //image treating
     $img_extension = pathinfo($image,PATHINFO_EXTENSION); # .jpg , png 
     // return the information about the image specifically the extension of the image
     $img_extension_lowercase = strtolower($img_extension); # JPG = jpg
     // it takes the image extension and convert it to lower case
     $file = uniqid('Profile',true).'.'.$img_extension_lowercase; 
      // Generate a unique id
    //   check if user already exits
    $sql = "SELECT * FROM instructor WHERE name = '$names' AND email = '$email'";
    $result = mysqli_query($connect,$sql);
    // it accepts a string value "$sql" representing a query as one of the parameter and executes on the db.
    // $connect represents a connection to the mysql server.
    if (mysqli_fetch_assoc($result) > 0 ) {
      // it will verify in the database if there are 2 identical names and email
         header("location:/admin/admin.php?instructerror=Instructor already exist in the system");
    }else{
       $sql2 = "INSERT INTO instructor(name,image,sex,email,password,role,category) VALUES ('$names','$file','$sex','$email','$password','$role','$category')";
       $result2 = mysqli_query($connect,$sql2);
       if ($result2) {
        // moving the user selected image to the image folder
          $fileDestination = '../instruct-image/'.$file;
          move_uploaded_file($_FILES['file']['tmp_name'],$fileDestination);
        //   redirecting the user to the login page after success
           
          header("location:/admin/admin.php?instructsuccess=Instructor added successfully in the system");
          exit();
       }else{
         echo 'no instructor added';
       }
    }
}else{
    echo  "Nothing gotten from the add_instructor form";
}