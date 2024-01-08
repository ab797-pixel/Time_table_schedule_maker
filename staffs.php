<?php 
@$delete_id = $_GET['delete_id'];
if(isset($delete_id)){
  $delete_row = mysqli_query($con,"delete from staffs where id='$delete_id'");
  if(isset($delete_row)){
    echo "<div>staff record was deleted</div>";
  } 
}
extract($_POST);
if(isset($save))
{

  // staff_name
  // staff_alias
  echo $staff_name;
  if($staff_name=="" || $staff_alias=="")
	{
	$err="<font color='red'>fill all the fileds first</font>";	
	}
  else{
    $query="insert into staffs(name,alias,is_available) values('$staff_name','$staff_alias','1')";
    mysqli_query($con,$query);
    $err="<font color='blue'>STAFF ADD sucessfully</font>";
  }
}

?>
<div class="container" style="margin-top:100px;">
    hello staff add,list,edit,delete
   <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addStaff">
  Add Staffs
</button>
<table class='table table-responsive table-bordered table-striped table-hover' style=margin:15px;>
<tr style="font-size:20px;text-align:center;border:2px solid black;background-color: #EEA47F;color:white;">
    <th>S.No</th>
    <th>Name</th>
    <th>Alias</th>
    <th>Available</th>
    <th>Action</th>
  </tr>
  <?php
  $i=1;
	$que=mysqli_query($con,"select * from staffs");
	
	while($row=mysqli_fetch_array($que))
	{
  ?>
  <tr>
    
    <td><?php echo $i;?></td>
    <td><?php echo $row['name'];?></td>
    <td><?php echo $row['alias'];?></td>
    <td><?php echo $row['is_available'];?></td>
    <td>
    <a href="index.php?info=edit_staff&staff_id=<?php echo$row['id']?>" class="btn btn-primary">Edit</a>
    <a href="index.php?info=staffs&delete_id=<?php echo$row['id']?>" class="btn btn-danger">Delete</a>
</td>
  </tr>
  <?php
  $i++;
  }
  ?>

</table>


<!--add Staff  Modal -->
<div class="modal fade" id="addStaff" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Staff Details</h5>
        <?php echo @$err;?>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form method="post" enctype="multipart/form-data">
      <div class="modal-body">
      
          <div class="mb-3">
            <label  class="form-label">Name</label>
            <input type="text" class="form-control" name="staff_name" placeholder="Enter staff name" required>
          </div>
          <div class="mb-3">
            <label  class="form-label">Alias</label>
            <input type="text" class="form-control" name="staff_alias" placeholder="alias like 'M.G'" required>
          </div>
         
          
          <!--<button type="submit" class="btn btn-primary" name="save">Save</button>-->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <input type="submit" value="Save" class="btn btn-primary" name="save"/>
        
      </div>
      </form>
    </div>
  </div>
</div>


</div>