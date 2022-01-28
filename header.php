<?php
session_start();
$username= $_SESSION['username'];
$firstName =$_SESSION['firstName'];
$lastName =$_SESSION['lastName'];
$userid = $_SESSION['userid'];
$timestamp = $_SESSION['timestamp'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">

    <title>Updates for <?php echo $firstName." ".$lastName; ?></title>

    <link rel="stylesheet" href="css/updatecss.css" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">

<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300&display=swap" rel="stylesheet">


</head>
<body>


    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid" id="container-fluid">
    <a class="navbar-brand" href="#">City P.D.</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="selectupdates.php"> Submit Updates</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="viewupdates.php"> View Previous Updates</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="viewupdates.php"> Latest Update: PENDING</a>
        </li>    
        <li class="nav-item">
          <a class="nav-link" href="viewupdates.php">Account Created On: <?php echo $timestamp = date( "m/d/Y H:i:s", strtotime($timestamp));  ?></a>
        </li> 
      </ul>
      <div class="d-flex align-items-center">
        <ul class="navbar-nav">
        <li class="nav-item"><a href="#" class="nav-link"><?php echo $firstName." ".$lastName; ?></a></li>
      </ul>          
      <a class="btn btn-primary" href="logout.php" role="button">Logout</a>


      </div>
 

    </div>
  </div>
</nav>