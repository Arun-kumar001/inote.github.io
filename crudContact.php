<?php
// Contact Page
require '_db.php';
$resp = false;

if ($conn) {
    if ($_SERVER['REQUEST_METHOD']=='POST') {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $Tel = $_POST['phone'];
        $querry = $_POST['querry'];
        // inject data in DB
        $sql = "INSERT INTO `dbcrudcont` (`name`, `email`, `Phone`, `querry`, `timestamp`) VALUES ('$name', '$email', '$Tel', '$querry', current_timestamp())";
        $rest = mysqli_query($conn, $sql);
        $resp = true;
    }   
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>iNote - Contact</title>
</head>

<style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>


    <!-- Custom styles for this template -->
    <link href="footers.css" rel="stylesheet">

<body>
<?php

$actindex = false;
$actabout = false;
$actcontact = 'active';
   require '_nav.php';
   ?>
    <?php
    if ($resp){
        $tag = 'success';  
   echo  '<div class="alert alert-'.$tag.' alert-dismissible fade show" role="alert">
        <strong>Message : </strong>Querry send Successfully.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
}
    ?>
    <div class="container my-3">
        <div class="row">
        <div class="col-md-8">
            <p class="text-center fs-4">Contact our Team</p>
            
            <div class="form">
                <form action="crudContact.php" method="post">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Enter your Name</label><span class="text text-danger" required>*</span>
                        <input name="name" type="text" class="form-control" id="exampleFormControlInputName" placeholder="Name">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email address</label><span class="text text-danger" >*</span>
                        <input name="email" type="email" class="form-control" id="exampleFormControlInputemail" placeholder="name@example.com" required>
                    </div>
                
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Contact Number</label>
                        <input name="phone" type="tel" class="form-control" id="exampleFormControlInputtel" placeholder="Contact Number">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Your Querry</label><span class="text text-danger" >*</span>
                        <textarea name="querry" class="form-control" id="exampleFormControlTextareatext" rows="3" placeholder="Querry..." required></textarea>
                    </div>
                    <button class="btn btn-dark">submit</button>
                </form>
            </div>
        </div>
        <div class="col-md-4 ">
            <!-- <div class="float-end">
                <span class=" my-2">
                    <h4 class="" >Social Contact</h4>
                   
                </span>
                <span class=" my-2">
                    <h5>Facebook</h5>
                    <a class="badge bg-secondary fs-6" href="https://facebook.com/" >https://facebook.com/</a>
                </span>
                <span class=" my-2">
                    <h5>Instagram</h5>
                    <a class="badge bg-secondary fs-6" href="https://facebook.com/" >https://facebook.com/</a>
                </span>
                <span class=" my-2">
                    <h5>Twitter</h5>
                    <a class="badge bg-secondary fs-6" href="https://facebook.com/" >https://facebook.com/</a>
                </span>
            </div> -->
        </div>
        </div>
    </div>
 
    <?php
  require '_footer.php';
  ?>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>