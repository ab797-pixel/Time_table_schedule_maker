<?php require('../db.php'); 

session_start();
//the isset function to check username is already loged in and stored on the session
if(!isset($_SESSION['email'])){
header('location:../index.php');	
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Staff!</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons 
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
-->
  <!-- Vendor CSS Files 
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">-->
  <link href="../bootstrap/css/bootstrap.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

  <script src="../bootstrap/js/bootstrap.js"></script>
  <script src="../bootstrap/js/jquery-3.7.0.slim.js"></script>
  <script src="../bootstrap/js/popper.min.js" ></script>

  <!--<link href="bootstrap/js/bootstrap-modal.js" rel="stylesheet" media="screen">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">-->

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">

 
</head>

<body>

  <!-- ======= Header ======= -->
   <header id="header" class="fixed-top " style="background:gray;">
    
    <div class="container d-flex align-items-center">
      <h1 class="logo me-auto" style="text-align:center;"><a href="index.php?info=home"><u>Time schedule maker</u></a></h1>
      
    
       <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="index.php">Home</a></li>
          <li><a class="nav-link scrollto" href="index.php?info=classes">Classes</a></li>
          <li><a class="nav-link scrollto" href="index.php?info=subcodes">Subcodes</a></li>
          <li><a class="nav-link scrollto" href="index.php?info=class_subject">class-subject</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav> 

    </div>
  
  </header> 
  <main id="main">

  <?php 
    @$info=$_GET['info'];
    if($info!="")
    {
                
      if($info=="add_subject")
	   {
	   	include('add_subject.php');
	   } 
       else if($info=="subcodes")
	   {
	   	include('subcodes.php');
	   }
       else if($info=="classes")
	   {
	   	include('classes.php');
	   }
     else if($info=="edit_subject")
	   {
	   	include('edit_subject.php');
	   }
     
     else if($info=="class_subject")
	   {
	   	include('class_subject.php');
	   }
      }
      if($info==""){     
    ?>
    
  <section id="hero" class="d-flex align-items-center">

<div class="container">
  <div class="row">
    <center><h1>Hello Staff!</h1></center>
  </div>
</div>

</section>
     <section id="about" class="about">
      <div class="container" data-aos="fade-up">

    

      </div>
    </section>
    <?php
      }
    ?>
    </main>
      <footer id="footer">
  <div class="container footer-bottom clearfix">
      <div >
          <strong><span>Time schedule maker</span></strong>
      </div>
      <div class="credits">
        Created by <b>Aarthi</b>
      </div>
    </div>
  </footer>
  
 </body>
</html>