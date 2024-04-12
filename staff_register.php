<?php
  include('db.php');
  extract($_POST);
  if(isset($submit))
  {
    echo "<div>
    '$staff_password',,'$staff_confirm_password'
    </div>";
     if($staff_password === $staff_confirm_password)
     {
       $email_query = "select email from staffs";
       $email_query = mysqli_query($con,$email_query);
       while($row=mysqli_fetch_array($email_query)){
        if($row['email']==$staff_email)  {
          echo "<div class='alert alert-danger alert-dismissible' role='alert'>
          this  Email'$staff_email' already used
          <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
          </button>
          </div>";
        }   
        }
       }
       else
       {
         echo "<div class='alert alert-danger alert-dismissible' role='alert'>
         PASSWORD AND CONFIRM PASSWORD COUND'T MATCH
         <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
             <span aria-hidden='true'>&times;</span>
         </button>
         </div>";
       }
        $insert_staff="insert into staffs values('','$staff_name','$staff_email','$staff_password','$staff_alias','1')";
        $result = mysqli_query($con,$insert_staff);
        if($result){
          echo "successfully run the results";
          header("location:index.php?info=staff_login");
        }
        
        
       
  }

?>
<section id="staff_login" class="staff_login sections-bg">
    <div class="container" data-aos="fade-up">
      <!-- <div class="section-header">
          <h2></h2>
      </div> -->
      <form id="loginform" method="POST" >
      <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

             <h2 class="section-header">Staff Registeration</h2>

            <div class="form-outline mb-4">
             <?php $staff_name="";?> <input type="text" name="staff_name" class="form-control form-control-lg"  placeholder="Name 'M. AARTHI'" required>
            </div>
            <div class="form-outline mb-4">
            <?php $staff_alias="";?> <input type="text" name="staff_alias" class="form-control form-control-lg"  placeholder="Alias 'M.A'">
            </div>
            <div class="form-outline mb-4">
            <?php $staff_email="";?><input type="email" name="staff_email" class="form-control form-control-lg"  placeholder="Email" required>
            </div>
            <div class="form-outline mb-4">
            <?php $staff_password="";?> <input type="password" name="staff_password" class="form-control form-control-lg"  placeholder="Password" required>
            </div>
            <div class="form-outline mb-4">
            <?php $staff_confirm_password="";?> <input type="password" name="staff_confirm_password" class="form-control form-control-lg"  placeholder="Comfirm Password" required>
            </div>

            <!-- Checkbox -->
            <!-- <div class="form-check d-flex justify-content-start mb-4">
              <input class="form-check-input" type="checkbox" value="" id="form1Example3" />
              <label class="form-check-label" for="form1Example3"> Remember password </label>
            </div> -->

            <!-- <button class="btn btn-secondary btn-lg btn-block" name="clear">Clear</button> -->
            <button class="btn btn-primary btn-lg btn-block" name="submit" type="submit">Register</button>

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
</section>