<?php require('../db.php');

session_start();
//the isset function to check username is already loged in and stored on the session
if(!isset($_SESSION['id'])){
header('location:../index.php');	
}


 ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Admin!</title>
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
          <li><a class="nav-link scrollto" href="index.php?info=staffs">Staffs</a></li>
          <li><a class="nav-link scrollto" href="index.php?info=subcodes">Subcodes</a></li>
          <li><a class="nav-link scrollto" href="index.php?info=time_table">Time Table</a></li>
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
                
      if($info=="staffs")
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
     else if($info=="edit_staff")
	   {
	   	include('edit_staff.php');
	   }
     else if($info=="edit_subject")
	   {
	   	include('edit_subject.php');
	   }
       else if($info=="edit_class")
	   {
	   	include('edit_class.php');
	   }
     else if($info=="table_structure")
	   {
	   	include('table_structure.php');
	   }
     
      }
      if($info==""){     
    ?>
    
  <section>

<div class="container" style="margin-top:10px;">
  <div class="row">
    <div class="col-md-8">
        <div class="section-title">
          <h2>Table Structure</h2>
        </div>
    </div>
    <div class="col-md-2">
         <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#day_order">
              Modify Day order
          </button>
    </div>
    <div class="col-md-2">
    <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#hours">
              Modify Hours
          </button>
    </div>
  </div>
  <table class='table table-responsive table-bordered' style="border:1px solid black;">
     <tr style="background-color:aqua;height:70px;text-align:center;">
       <th>Day Order /hours</th>
      <?php
       $retrieve_hours_query = mysqli_query($con,"select * from hours");
      while($column = mysqli_fetch_array($retrieve_hours_query)){
        ?>
        <th><?php echo $column['name']?></th>
      <?php
      }
      ?>
     </tr>
     <?php
     $retrieve_day_order_query = mysqli_query($con,"select * from day_orders");
     while($row = mysqli_fetch_array($retrieve_day_order_query)){
     ?>
     <tr style="height:50px;">
       <td style="background-color:pink;text-align:center"><?php echo $row['name']?></td>
       <?php
       $retrieve_hours_query = mysqli_query($con,"select * from hours");
      while($column = mysqli_fetch_array($retrieve_hours_query)){
        ?>
        <td style="background-color:lightblue;"></td>
      <?php
      }
      ?>
     </tr>
     <?php
     }
     ?>
  </table>
</div>


</section>
<?php
 extract($_POST);
 if(isset($day_order_submit)){
   // echo "cont" .$day_order_count;
   mysqli_query($con,"delete from day_orders");
   for($ci = 0; $ci < $day_order_count; $ci++){
    echo "loop".$ci."<br>";
     $day_order1 = $day_orders[$ci];
    $insert_query = mysqli_query($con,"insert into day_orders values('','$day_order1')");
   }
     
 }
?>
<div class="modal fade" id="day_order" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Class Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
     <form method="post"  enctype="multipart/form-data">
      <div class="modal-body" id="tab_logic">
         <div class="mb-3">
          <div class="row">
            <div class="col-md-6">
              <center><h1>day order</h1></center>
            <label  class="form-label"> Day Orders0</label>
            </div>
            <div class="col-md-6">
            <div>
             <div class="btn btn-secondary btn-sm" id="add_day_order">Add day order</div>
           </div>
            </div>
          </div>
            <div id="tab_login">
                 <input class="form-control" name="day_orders[0]" placeholder="Enter List Of Day Order0" required>
                 <div class="row" id="day_order1"></div>
                 <input type="hidden" id="day_order_count" name="day_order_count" value = 1>
            </div>
                 

            <!-- <textarea class="form-control" rows="4" cols="50" name="day_orders[]" placeholder="Enter List Of Day Order " required></textarea> -->
            
          </div>
          <!-- <div class="mb-3">
          <label  class="form-label">Enter List of Hours</label>
           <textarea class="form-control" rows="4" cols="50" name="hours[]" placeholder="Enter List Of Hours" required></textarea>            
          </div> -->
        

         
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="day_order_submit" class="btn btn-primary">Save</button>
      </div>
     </form>
    </div>

  </div>
</div>
<?php
 extract($_POST);
 if(isset($hours_submit)){
   // echo "cont" .$day_order_count;
   mysqli_query($con,"delete from hours");
   for($cj = 0; $cj < $hours_count; $cj++){
    echo "loop".$cj."<br>";
     $hours1 = $hours[$cj];
    $insert_query = mysqli_query($con,"insert into hours values('','$hours1')");
   }
     
 }
?>
<div class="modal fade" id="hours" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Hours Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
     <form method="post"  enctype="multipart/form-data">
      <div class="modal-body" id="tab_logic">
         <div class="mb-3">
          <div class="row">
            <div class="col-md-6">
              <center><h2>Hours</h2></center>
            <label  class="form-label"> hours0</label>
            </div>
            <div class="col-md-6">
            <div>
             <div class="btn btn-secondary btn-sm" id="add_hours">Add hours</div>
           </div>
            </div>
          </div>
            <div id="tab_logic1">
                 <input class="form-control" name="hours[0]" placeholder="Enter List Of hours0" required>
                 <div class="row" id="hours1"></div>
                 <input type="hidden" id="hours_count" name="hours_count" value = 1>
            </div>
                 

            <!-- <textarea class="form-control" rows="4" cols="50" name="day_orders[]" placeholder="Enter List Of Day Order " required></textarea> -->
            
          </div>
          <!-- <div class="mb-3">
          <label  class="form-label">Enter List of Hours</label>
           <textarea class="form-control" rows="4" cols="50" name="hours[]" placeholder="Enter List Of Hours" required></textarea>            
          </div> -->
        

         
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="hours_submit" class="btn btn-primary">Save</button>
      </div>
     </form>
    </div>

  </div>
</div>
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
  <script>
   $(document).ready(function(){
      var i=1;
     $("#add_day_order").click(function(){
  
       $('#day_order'+i).html('day order'+i+'<input class="form-control" name="day_orders['+i+']" placeholder="Enter List Of Day Order'+i+' " required>');

      $('#tab_logic').append('<div class="row" id="day_order'+(i+1)+'"></div>');
       
        $('#day_order_count').removeAttr("value").attr("value",i+1);
      i++;
    });

      
     $("#add_hours").click(function(){
      var j=1;
       $('#hours'+j).html('Hours'+j+'<input class="form-control" name="hours['+j+']" placeholder="Enter List Of Hours'+j+' " required>');

      $('#tab_logic1').append('<div class="row" id="hours'+(j+1)+'"></div>');
       
        $('#hours_count').removeAttr("value").attr("value",j+1);
      j++;     
      
     });
     
});
</script>
  
 </body>
</html>