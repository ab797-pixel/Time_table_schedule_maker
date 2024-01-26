<?php
   @$class_id = $_GET['class_id'];

   $class_query = mysqli_query($con,"select * from classes where id='$class_id'");
   $class_row = mysqli_fetch_array($class_query);
?>
<div class="container" style="margin-top:100px;">
<?php
    extract($_POST);
    if(isset($submit)){
        $edit_staff = mysqli_query($con,"update classes set name='$class_name' , alias='$class_alias' where id='$class_id'");
        if(isset($edit_staff)){
            header('location:index.php?info=classes');
        }
    }
?>
<form id="loginform" method="POST" >
      <div class="row d-flex justify-content-center " tabindex="-1">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 ">

             <h2 class="section-header">EDIT class</h2>
             <div class="mb-3">
              <label  class="form-label">Name</label>
             <?php ?>
              <input type="text" class="form-control"  value="<?php echo $class_row['name']?>" name="class_name">
            </div>
            <div class="mb-3">
            <label  class="form-label">Alias</label>
            <input type="text" class="form-control"  value="<?php echo $class_row['alias']?>"  name="class_alias" >
          </div>

            <button class="btn btn-primary btn-lg btn-block" name="submit" type="submit">Edit</button>

          </div>
        </div>
      </div>
    </div>
      </form>

</div>