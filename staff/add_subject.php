<?php
   @$class_id = $_GET['class_id'];
   $class_query = mysqli_query($con,"select * from classes where id='$class_id'");
   $class_row = mysqli_fetch_array($class_query);
?>
<div class="container" style="margin-top:100px;">
<?php
    extract($_POST);
    if(isset($submit)){
        $staff_email = $_SESSION['email'];
        $staff_query =mysqli_query($con,"select id from staffs where email='$staff_email'");
        $staff_row = mysqli_fetch_array($staff_query);
        $staff_id = $staff_row['id'];
        $add_subject = mysqli_query($con,"insert into class_subjects values('','$class_id','$subject_staff_id','$subject_id','$staff_id')");
        if(isset($edit_subject)){
            header('location:index.php?info=subcodes');
        }
    }
?>
<form id="loginform" method="POST" >
      <div class="row d-flex justify-content-center " tabindex="-1">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 ">

             <h2 class="section-header">Add Subject for <?php echo $class_row['name'];?></h2>
             <div class="mb-3">
             <label for="inputSubcode0" class="form-label">Subject Name</label>
             <select id="inputSubcode0" name="subject_id" class="form-select">
             <?php
               $subject_query= mysqli_query($con,"select * from subjects");
               while($subject_row=mysqli_fetch_array($subject_query)){
                echo "<option value=".$subject_row['id'].">".$subject_row['name']."</option>";
               }
              ?>
             </select>
            </div>
             <div class="mb-3">
             
             <label for="inputStaff0"  class="form-label">Subject Incharge Name</label>
             <select id="inputStaff0" name="subject_staff_id" class="form-select">
             <?php
               $staff_query= mysqli_query($con,"select * from staffs");
               while($staff_row=mysqli_fetch_array($staff_query)){
                echo "<option value=".$staff_row['id'].">".$staff_row['name']."</option>";
               }
              ?>
               
             </select>
    
             
            


            <button class="btn btn-primary btn-lg btn-block" name="submit" type="submit">Add Subject</button>

          </div>
        </div>
      </div>
    </div>
      </form>

</div>