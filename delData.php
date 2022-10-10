<?php
require '_db.php';
  // Delete data from data base
  if(($_SERVER['REQUEST_METHOD'])=='POST'){
    $delVal = $_POST['del'];
    $delVal = intval($delVal);  
    $sqlDel = "DELETE FROM `crdudata` WHERE `crdudata`.`sno` = '$delVal' ";
    $resultDel = mysqli_query($conn, $sqlDel);
    if ($resultDel == true) {
        $delNote = true;
        header('location:crud.php');
   }
}
?>