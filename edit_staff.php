<?php
   @$staff_id = $_GET['staff_id'];

   $staff_query = mysqli_query($con,"select * from staffs where id='$staff_id'");
   $staff_row = mysqli_fetch_array($staff_query);
?>
<div class="container" style="margin-top:100px;">
<?php
    extract($_POST);
    if(isset($submit)){
        $edit_staff = mysqli_query($con,"update staffs set name='$staff_name' , alias='$staff_alias' where id='$staff_id'");
        if(isset($edit_staff)){
            header('location:index.php?info=staffs');
        }
    }
?>
<form id="loginform" method="POST" >
      <div class="row d-flex justify-content-center " tabindex="-1">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 ">

             <h2 class="section-header">EDIT Staff</h2>
             <div class="mb-3">
              <label  class="form-label">Name</label>
             <?php ?>
              <input type="text" class="form-control"  value="<?php echo $staff_row['name']?>" name="staff_name">
            </div>
            <div class="mb-3">
            <label  class="form-label">Alias</label>
            <input type="text" class="form-control"  value="<?php echo $staff_row['alias']?>"  name="staff_alias" >
          </div>

            <button class="btn btn-primary btn-lg btn-block" name="submit" type="submit">Edit</button>

          </div>
        </div>
      </div>
    </div>
      </form>

</div>