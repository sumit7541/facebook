<?php
include_once "include/config.php";
$log = $_SESSION['user'];
$data = callingData('account',"where email='$log' or contact='$log'",true);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>facebook.com | Connect together</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body class="bg-light">
  <?php include "include/nav.php"; ?>
 
   <div class="container mt-3">
       <div class="row">
           <div class="col-lg-3">
               <div class="card">
                  <img src="https://via.placeholder.com/250" alt="">
                   <div class="card-body text-center">
                      <h2 class="h6 text-uppercase"><?= $data ['first_name']; ?></h2>
                       
                   </div>
               </div>
           </div>
           <div class="col-lg-9">
               <div class="card">
                  
                       <form action="">
                           <textarea name="" id="" rows="6" class="form-control" placeholder="Write Somethong Here"></textarea>
                       </form>
                        <div class="card-body">
                        <input type="file">
                        <input type="submit" class="btn btn-primary btn-sm float-right">
                   </div>
               </div>
           </div>
           <div class="col-lg-3"></div>
       </div>
   </div>
    
</body>
</html>