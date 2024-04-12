<?php
include('db.php');
session_start();

extract($_POST);
if(isset($submit)){
    $query 		= mysqli_query($con, "SELECT * FROM staffs WHERE  password='$password' and email='$email'");
    $row		= mysqli_fetch_array($query);
    $num_row 	= mysqli_num_rows($query);
    
    if ($num_row > 0) 
    {			
        $_SESSION['email']=$row['email'];
        header('location:staff');
        
    }
    else
    {
        echo "<div class='alert alert-danger alert-dismissible' role='alert'>
        Invalid Email'$email' and Password
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
        </button>
        </div>";
    }
}

?>
<section id="staff_login" class="staff_login sections-bg">
      <div class="container" data-aos="fade-up">
      <div class="section-header">
          <h2>Staff login</h2>
      </div>
      <form id="staffLoginForm" method="POST" >
      <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <h2 class="section-header"></h2>

            <div class="form-outline mb-4">
              <input type="email" name="email" class="form-control form-control-lg"  placeholder="Email" required>
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
            <div class="text-center">
            <p>Not a register? <a href="index.php?info=staff_register">  Register Here!</a></p>
           <!-- <p>Not a register? <a style="color:blue;" data-bs-toggle="modal" data-bs-target="#staticBackdrop">  Register Here!</a></p> -->
           </div>

            <!-- <button class="btn btn-lg btn-block btn-primary" style="background-color: #dd4b39;"
              type="submit"><i class="fab fa-google me-2"></i> Sign in with google</button>
            <button class="btn btn-lg btn-block btn-primary mb-2" style="background-color: #3b5998;"
              type="submit"><i class="fab fa-facebook-f me-2"></i>Sign in with facebook</button> -->
          </div>
        </div>
      </div>
    </div>
      </form>
      <!-- Button trigger modal -->


<!-- Modal -->
<!-- <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Add Staff</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <form method="POST" id="staffRegisteration">
       <div class="form-outline mb-4">
              <input type="text" name="staff_name" class="form-control form-control-lg"  placeholder="Name 'J.Mohamed Abdulla'" required>
            </div>
            <div class="form-outline mb-4">
              <input type="text" name="staff_alias" class="form-control form-control-lg"  placeholder="Alias 'J.M.A'">
            </div>
            <div class="form-outline mb-4">
              <input type="email" name="staff_email" class="form-control form-control-lg"  placeholder="Email" required>
            </div>
            <div class="form-outline mb-4">
              <input type="password" name="staff_password" class="form-control form-control-lg"  placeholder="Password" required>
            </div>
            <div class="form-outline mb-4">
              <input type="password" name="staff_comfirm_password" class="form-control form-control-lg"  placeholder="Comfirm Password" required>
            </div>
       </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button class="btn btn-primary" name="add_staff_submit" type="submit" class="btn btn-primary">Save</button>
      </div>
    </div>
  </div>
</div> -->
</div>
</secton>