<?php
   @$subject_id = $_GET['subject_id'];
   $subject_query = mysqli_query($con,"select * from subjects where id='$subject_id'");
   $subject_row = mysqli_fetch_array($subject_query);
?>
<div class="container" style="margin-top:100px;">
<?php
    extract($_POST);
    if(isset($submit)){
        $edit_subject = mysqli_query($con,"update subjects set name='$subject_name' , alias='$subject_alias',subcode='$subcode' where id='$subject_id'");
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

             <h2 class="section-header">EDIT Subject</h2>
             <div class="mb-3">
              <label  class="form-label">Name</label>
             <?php ?>
              <input type="text" class="form-control"  value="<?php echo $subject_row['name']?>" name="subject_name">
            </div>
            <div class="mb-3">
            <label  class="form-label">Alias</label>
            <input type="text" class="form-control"  value="<?php echo $subject_row['alias']?>"  name="subject_alias" >
          </div>
          <div class="mb-3">
            <label  class="form-label">Subcode</label>
            <input type="text" class="form-control"  value="<?php echo $subject_row['subcode']?>"  name="subcode" >
          </div>

            <button class="btn btn-primary btn-lg btn-block" name="submit" type="submit">Edit</button>

          </div>
        </div>
      </div>
    </div>
      </form>

</div>