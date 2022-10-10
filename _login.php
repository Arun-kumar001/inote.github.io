<?php
// //login system
// if ($_SERVER['REQUEST_METHOD']=='POST') {
//     $userid = $_POST['userid'];
//     $pass = $_POST['pass'];

//     $sql = "SELECT * FROM `crudusers` WHERE `username` = '$userid' AND `password` = '$pass'";
//     $result = mysqli_query($conn, $sql);
//     $row = mysqli_num_rows($result);
//     if ($row == 1) {
//         $disSql = "SELECT * FROM `crudusers` WHERE `crudusers`.`username` = '$userid'";
//         $disRest = mysqli_query($conn, $disSql);
//         for ($i=0; $i < 1; $i++) { 
//             $dis = mysqli_fetch_assoc($disRest);
//             $name = $dis['name'];
//             $bio = $dis['bio'];
//         }
//         session_start();
//         $_SESSION['login'] = true;
//         $_SESSION['username']=$userid;
//         $_SESSION['name']=$name;
//         $_SESSION['bio']=$bio;

//     }
// }
// else {
    //     session_start();
    //     $_SESSION['login'] = false;
    // }
    header('location: crud.php'); 

?>