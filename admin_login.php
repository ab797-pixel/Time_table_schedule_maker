
<?php
 extract($_POST);
 session_start();
 include('db.php');
               
       if (isset($submit))
           {
               
              $query 		= mysqli_query($con, "SELECT * FROM admin WHERE  password='$password' and email='$user_name'");
              $row		= mysqli_fetch_array($query);
              $num_row 	= mysqli_num_rows($query);
               
               if ($num_row > 0) 
                   {			
                       $_SESSION['id']=$row['id'];
                       header('location:admin');
                       
                   }
               else
                   {
                       echo "<div class='alert alert-danger alert-dismissible' role='alert'>
                       Invalid Username and Password
                       <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                           <span aria-hidden='true'>&times;</span>
                       </button>
                       </div>";
                   }
           }
          

?>
<section id="admin_login" class="admin_login sections-bg">
      <div class="container" data-aos="fade-up">
      <div class="section-header">
          <h2>Admin login</h2>
      </div> 
     
    <form id="loginform" method="POST" >
      <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

             <h2 class="section-header"></h2>

            <div class="form-outline mb-4">
              <input type="text" name="user_name" class="form-control form-control-lg"  placeholder="User Name" required>
            </div>

            <div class="form-outline mb-4">
              <input type="password" name="password"  class="form-control form-control-lg" placeholder="Password" required>
            </div>

            <!-- Checkbox -->
            <!-- <div class="form-check d-flex justify-content-start mb-4">
              <input class="form-check-input" type="checkbox" value="" id="form1Example3" />
              <label class="form-check-label" for="form1Example3"> Remember password </label>
            </div> -->

            <button class="btn btn-primary btn-lg btn-block" name="submit" type="submit">Login</button>
           

            <!-- <button class="btn btn-lg btn-block btn-primary" style="background-color: #dd4b39;"
              type="submit"><i class="fab fa-google me-2"></i> Sign in with google</button>
            <button class="btn btn-lg btn-block btn-primary mb-2" style="background-color: #3b5998;"
              type="submit"><i class="fab fa-facebook-f me-2"></i>Sign in with facebook</button> -->

          </div>
        </div>
      </div>
    </div>
      </form>
    
  

</div>
</secton>