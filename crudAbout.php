<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>iNote - about</title>
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

</head>

<body>
<?php


include '_db.php';
 $actindex = false;
 $actabout = 'active';
 $actcontact = false;
   require '_nav.php';
   ?>
    <div class="container my-3">
        <div class="row">
            <div class="col-md-9">


                <div class="">
                    <p class="fs-4">About iNote</p>
                    <hr>
                    <div class="border border-rounded p-3 ">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum sequi architecto sapiente. Labore, maiores consequuntur a rerum harum eligendi </p>
                        <p class="fs-5">CRD operations - </p>
                        <ul>
                            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem nemo harum obcaecati veniam ea </li>
                            <li>At facilis nam, impedit quis maiores enim id excepturi sint esse ipsam et dolorem exercitationem itaque, voluptatem </li>
                            <li>ab hic odio quo similique iure ipsum sunt illum iste deserunt? Sunt nostrum esse repellendus distinctio, aperiam </li>
                            <li>autem quam ad accusantium deleniti rerum voluptas blanditiis rem voluptatum consequuntur </li>
                        </ul>

                    </div>
                </div>
                <div class="my-2">
                    <p class="fs-4">About Developers</p>
                    <hr>
                    <div class="p-3">
                    <div class="row">

<?php
$disSql ="SELECT * FROM `crudusers`";
$result = mysqli_query($conn, $disSql);
$numrows = mysqli_num_rows($result);
for ($i=0; $i < $numrows; $i++) { 
    $data = mysqli_fetch_assoc($result);
   echo '<div class="card mb-3" style="max-width: 890px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="img/img.jpg" class="img-fluid " alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">'.$data["name"].'</h5>
                                        <p class="card-text">'.$data["bio"].'</p>
                                        <p class="card-text"><small class="text-muted">Last updated - '.$data["dt"].'</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>';
}
?>

                       
                        
                       
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
  require '_footer.php';
  ?>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>