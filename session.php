<?php 
session_start();
include('components/instructnavbar.php');
?>
<br><br>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lecture Session</title>
    <link rel="shortcut icon" href="images/e-book.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="responsive.css">
</head>

<body>
    <div class="container">
        <h1>Lecture by Video Conference</h1>
        <video src="" id="localVideo" autoplay></video>
        <video src="" id="remoteVideo" autoplay></video>
        <button onclick="start()" class="btn btn-lg btn-success rounded-pill">Start</button>
        <button onclick="stop()" class="btn btn-lg btn-danger rounded-pill">Stop</button>
    </div>
    <script src="conference.js"></script>
</body>

<body>

    <?php 

include('audio.php');
?>
</body>

</html><br><br><br><br><br><br><br><br><br><br><br>
<?php 

include('components/footer.php');
?>