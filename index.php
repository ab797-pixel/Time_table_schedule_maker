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
   <header id="header" class="header d-flex align-items-center" style="background:gray;">
    
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <h1 class="logo me-auto" style="text-align:center;"><a href="index.php?info=home"><u>Time schedule maker</u></a></h1>
      
    
       <nav id="navbar" class="navbar ">
        <ul>
          <li><a class="nav-link scrollto active" href="index.php">Home</a></li>
          <li class="dropdown"><a href="#"><span>logIn</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="index.php?info=admin_login">Admin login</a></li>
              <li><a href="index.php?info=staff_login">Staff login</a></li>
            </ul>
          </li>
        </ul>
        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

      </nav> 

    </div>
  
  </header> 
  <main id="main">

  <?php 
    @$info=$_GET['info'];
    if($info!="")
    {
                
      if($info=="admin_login")
	   {
	   	include('admin_login.php');
	   } 
     else if($info=="staff_login")
	   {
	   	include('staff_login.php');
	   }
     else if($info=="staff_register")
	   {
	   	include('staff_register.php');
	   }
     
      }
      if($info==""){     
    ?>
    
  <section id="hero" class="d-flex align-items-center">

<div class="container">
  <div class="row">
    <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
     <h2 style="color:white;">Create a proper time schedule</h2>
      <h4 style="color:white;" >1) Add Table structure</h4>
      <h4 style="color:white;" >2) Add subcodes</h4>
      <h4 style="color:white;" >3) Add classes</h4>
      <h4 style="color:white;" >4) Click "generate time schedule"</h4>
      <div class="d-flex justify-content-center justify-content-lg-start">
        <a href="index.php?info=admin_login" class="btn-get-started scrollto">Get Started</a>
        <!-- <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a> -->
      </div> 
    
    </div>
    <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
      <img src="assets/img/time_table.png" class="img-fluid animated" alt="">
    </div>
  </div>
</div>

</section>
     <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Why Time Table?</h2>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <p>
              Timetables can help you stay on top of your tasks or meet a goal as you create a visual
               map of your day (hours, weeks, or months), making time management easier to navigate.
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i>It prevents wastage of time and energy</li>
              <li><i class="ri-check-double-line"></i>It ensures smooth and orderly working of the school/college</li>
              <li><i class="ri-check-double-line"></i>It helps in the formulation of good habits</li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
               A great way to help you achieve the goals you have in life, both big and small.
            </p>
            <a href="index.php?info=staff_login" class="btn-learn-more">Learn More</a>
          </div>
        </div>

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
        Created by <b>Abdulla</b>
      </div>
    </div>
  </footer>
  
 </body>
</html>