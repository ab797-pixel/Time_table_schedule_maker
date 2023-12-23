<?php require('db.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Time Table</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons 
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
-->
  <!-- Vendor CSS Files 
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">-->
  <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

  <script src="bootstrap/js/bootstrap.js"></script>
  <script src="bootstrap/js/jquery-3.7.0.slim.js"></script>
  <script src="bootstrap/js/popper.min.js" ></script>

  <!--<link href="bootstrap/js/bootstrap-modal.js" rel="stylesheet" media="screen">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">-->

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

 
</head>

<body>

  <!-- ======= Header ======= -->
   <header id="header" class="fixed-top " style="background:gray;">
    
    <div class="container d-flex align-items-center">
      <h1 class="logo me-auto" style="text-align:center;"><a href="index.php?info=home"><u>Time schedule maker</u></a></h1>
      
    
       <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="index.php?info=home">Home</a></li>
          <li><a class="nav-link scrollto" href="index.php?info=staffs">Staffs</a></li>
          <li><a class="nav-link scrollto" href="index.php?info=subcodes">Subcodes</a></li>
          <li><a class="nav-link   scrollto" href="index.php?info=classes">Classes</a></li>
          <li><a class="nav-link scrollto" href="index.php?info=time_table">Time Table</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav> 

    </div>
  
  </header> 

  <?php 
    @$info=$_GET['info'];
    if($info!="")
    {
                
       if($info=="home")
       {
       include('home.php');
       }
       else if($info=="staffs")
	   {
	   	include('staffs.php');
	   } 
       else if($info=="subcodes")
	   {
	   	include('subcodes.php');
	   }
       else if($info=="classes")
	   {
	   	include('classes.php');
	   }
       else if($info=="time_table")
	   {
	   	include('time_table.php');
	   }
       
      }
      if($info==""){   
            echo "<h1 style=' margin-top:300px;
            width: 50%;
            border: 3px solid green;
            padding:100 px;'>welcome to time schedule</h1>";      
      }
    ?>
  
 </body>
</html>