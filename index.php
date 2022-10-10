<?php
  use function PHPSTORM_META\type;
  include '_db.php';
  $addNote = false;
  $delNote = false;
  if($conn){
    if ($_SERVER['REQUEST_METHOD']=='POST'){
      $title = $_POST['title'];
      $text = $_POST['text'];
    // Injected Data in Database
    $sql = "INSERT INTO `crdudata` (`title`, `text`, `timestamp`) VALUES ('$title', '$text', current_timestamp())";
    $inject = mysqli_query($conn ,$sql);
    if ($inject == true) {
    $addNote = true;
    }
  }

  }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/docs.css">
    <title>iNote - CRD</title>

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
   $actindex = 'active';
   $actabout = false;
   $actcontact = false;
   require '_nav.php';
   ?>
    <?php
      if ($addNote) { 
        $tag = 'success';  
        echo '<div class="alert alert-'.$tag.' alert-dismissible fade show" role="alert">
        <strong>Message : </strong>Added a Note Successfully.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
      }
      if ($delNote) { 
        $tag = 'success';  
        echo '<div class="alert alert-'.$tag.' alert-dismissible fade show" role="alert">
        <strong>Message : </strong>Delete a Note Successfully.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
      }
    ?> 
  <div class="container my-3">
    <h4>Add a Note to iNote</h4>
    <form action="crud.php" method="post">
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Title</label>
        <input name="title" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Note Title" required>
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Note</label>
        <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Note" required></textarea>
      </div>
      <button class="btn btn-dark">Add Note</button>
  </form>
  </div>
  <div class="container my-2">
    <hr>
    <div style="height:45vh; overflow-y:scroll;">
  <table class="table">
  <thead>
        <tr>
          <th scope="col">S. No.</th>
          <th scope="col">Title - <span class="badge bg-secondary">Time</span></th>
          <th scope="col">Note</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
 <?php
  // get Data from Database
    $sqlDis = "SELECT * FROM `crdudata`";
    $sqlDisplay = mysqli_query($conn, $sqlDis);
    // get the rows of data
    $rowNum = mysqli_num_rows($sqlDisplay);
    if ($rowNum > 0) {
      $iNd = 0;
      for ($i=0; $i < $rowNum; $i++) { 
        $iNd = $iNd+1;
        $fetchData = mysqli_fetch_assoc($sqlDisplay);
        echo ' 
        <tbody>
          <tr>
            <th scope="row">'.$iNd.'</th>
            <td style="max-width:fit-content;" >'.$fetchData['title'].'-'.'<span class="badge bg-secondary">'.$fetchData['timestamp'].'</span>'.'</td>
            <td>'.$fetchData['text'].'</td>
            <td><form action="delData.php" method="POST"><input name="del" value='.$fetchData['sno'].'  type="hidden" name="delSno"><button  class="btn btn-dark btn-sm">Delete</button></form></td>
          </tr>
        </tbody>';
      }  
    }
?>
</table>
</div>
  </div>

  <?php
   require '_footer.php';
  ?>
   <script src="js/bootstrap.bundle.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script src="js/docs.min.js"></script>
  </body>
</html>
