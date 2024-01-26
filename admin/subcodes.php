<?php
   @$delete_id=$_GET['delete_id'];
   if(isset($delete_id)){
    $delete_row= mysqli_query($con,"delete from subjects where id='$delete_id'");
    if(isset($delete_row)){
       echo "<div>Data was successfully deleted</div>";
    }
   }
   extract($_POST);
   if(isset($submit)){
    $subject = mysqli_query($con,"insert into subjects values('','$subject_name','$alias','$subcode')");
    if(isset($subject)){
      echo "<div>data was added</div>";
    }
   }
?>
<div class="container" style="margin-top:100px;">
         <div class="row">
          <div class="col-md-8">
          <div class="section-title">
          <h2>Subject List</h2>
        </div>
          </div>
          <div class="col-md-4">
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            Add Subject
          </button>
          </div>
         </div>

<table class='table table-responsive table-bordered table-striped table-hover' style=margin:15px;>
<tr style="font-size:20px;text-align:center;border:2px solid black;background-color: #EEA47F;color:white;">
    <th>S.No</th>
    <th>Name</th>
    <th>Alias</th>
    <th>Subcode</th>
    <th>Action</th>
  </tr>
  <?php
  $i=1;
	$que=mysqli_query($con,"select * from subjects");
	
	while($row=mysqli_fetch_array($que))
	{
  ?>
  <tr>
    
    <td><?php echo $i;?></td>
    <td><?php echo $row['name'];?></td>
    <td><?php echo $row['alias'];?></td>
    <td><?php echo $row['subcode'];?></td>
    <td>
    <a href="index.php?info=edit_subject&subject_id=<?php echo$row['id']?>" class="btn btn-primary">Edit</a>
    <a href="index.php?info=subcodes&delete_id=<?php echo$row['id']?>" class="btn btn-danger">Delete</a>
</td>
  </tr>
  <?php
  $i++;
  }
  ?>

</table>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Subjects Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form method="post"  enctype="multipart/form-data">
      <div class="modal-body">
      <div class="mb-3">
            <label  class="form-label">Subject Name</label>
            <input type="text" class="form-control" name="subject_name" placeholder="like 'Machine Learning'">
          </div>
          <div class="mb-3">
            <label  class="form-label">Alias</label>
            <input type="text" class="form-control" name="alias" placeholder="alias like 'M.L'">
          </div>
          <div class="mb-3">
            <label  class="form-label">Subcode</label>
            <input type="text" class="form-control" name="subcode" placeholder="like 'P22CSCC32'">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit"  name="submit" class="btn btn-primary">Save</button>
     </form>
      </div>
    </div>
  </div>
</div>
</div>