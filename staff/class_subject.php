<?php
@$delete_id = $_GET['delete_id'];
if(isset($delete_id)){
  $delete_row = mysqli_query($con,"delete from class_subjects where id='$delete_id'");
  if(isset($delete_row)){
    echo "<div>staff record was deleted</div>";
  } 
}
  extract($_POST);
  if(isset($submit)){
  // echo $count;
  // header("location:index.php?info=''&count=".$count."");

    
      $insert_class = mysqli_query($con,"insert into classes values('','$class_name','$alias')");
     
  }
?>
<div class="container" style="margin-top:100px;">
<div class="row">
          <div class="col-md-8">
          <div class="section-title">
          <h2>Class-subject List</h2>
        </div>
          </div>
          <div class="col-md-4">
          <!-- -->
          </div>
         </div>


<!-- Modal -->
 <!-- <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Class Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
     <form method="post"  enctype="multipart/form-data">
      <div class="modal-body" id="tab_logic">
         <div class="mb-3">
            <label  class="form-label">Class Name</label>
            <input type="text" class="form-control" name="class_name" placeholder="Enter class name" required>
          </div>
          <div class="mb-3">
          <label  class="form-label">Alias</label>
            <input type="text" class="form-control" name="alias" >
            
          </div>
           <div class="mb-3">   
            <input type="hidden" class="form-control" id="count" name="count" value=1 >
          </div>
           <div class="row">
            <div class="col-md-6">
               <h3>Subjects</h3>
            </div>
            <div class="col-md-6">
            <div>
             <div class="btn btn-secondary btn-sm" id="add_subcode">Add subcodes</div>
           </div>
            </div>
          </div> 
         <div class="row">
    
         </div>
        
          <div class="row" id="subcode1"></div>
         
      

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="submit" class="btn btn-primary">Save</button>
      </div>
     </form>
    </div>

  </div>
</div>  -->

<table class='table table-responsive table-bordered table-striped table-hover' style=margin:15px;>
<tr style="font-size:20px;text-align:center;border:2px solid black;background-color: #EEA47F;color:white;">
    <th>S.No</th>
    <th>Class_Name</th>
    <th>subjects</th>
    <th>Subject Staff</th>
    <th>Actiont</th>
  </tr>
  <?php
  $i=1;
  $incharge_staff_email = $_SESSION['email'];
  $incharge_staff_id_query = mysqli_query($con,"select * from staffs where email ='$incharge_staff_email'");
  $incharge_staff_row = mysqli_fetch_array($incharge_staff_id_query);
  $incharge_staff_id = $incharge_staff_row['id'];
	$que=mysqli_query($con,"select * from class_subjects where staff_id = '$incharge_staff_id'");
	
	while($row=mysqli_fetch_array($que))
	{
  ?>
  <tr>
    
    <td><?php echo $i;?></td>
    <td ><?php 
    $class_id = $row['class_id'];
    $class_query = mysqli_query($con,"select * from classes where id = '$class_id'");
    $class_row = mysqli_fetch_array($class_query);
    $class_name = $class_row['name'];
    echo $class_name;?>
    </td>
    <td>
    <?php
             $subject_id = $row['subject_id'];
             $subject_query = mysqli_query($con,"select * from subjects where id = '$subject_id'");
             $subject_row = mysqli_fetch_array($subject_query);
             $subject_name = $subject_row['name'];
             echo $subject_name;
            ?>       
    </td>
    <td>
    <?php
             $subject_staff_id = $row['subject_staff_id'];
             $subject_staff_query = mysqli_query($con,"select * from staffs where id = '$subject_staff_id'");
             $subject_staff_row = mysqli_fetch_array($subject_staff_query);
             $subject_staff_name = $subject_staff_row['name'];
             echo $subject_staff_name;
            ?>
    </td>
    <td>
    <a href="index.php?info=class_subject&delete_id=<?php echo$row['id']?>" class="btn btn-danger">Delete</a>        
    </td>
  </tr>
  <?php
  $i++;
  }
  ?>

</table>

</div>
<!-- <script>
   $(document).ready(function(){
      var i=1;
     $("#add_subcode").click(function(){
  
       $('#subcode'+i).html('<div class="col-md-6"> <label for="inputStaff'+(i)+'" class="form-label">Staff'+(i)+'</label> <select id="inputStaff'+(i)+'" name="inputStaff'+(i)+'" class="form-select">  <?php $staff_query= mysqli_query($con,"select * from staffs"); while($staff_row=mysqli_fetch_array($staff_query)){echo "<option value=".$staff_row['id'].">".$staff_row['name']."</option>";} ?> </select> </div> <div class="col-md-6"> <label for="inputSubcode'+(i)+'" class="form-label">Subject'+(i)+'</label> <select id="inputSubcode'+(i)+'" name="inputSubcode'+(i)+'" class="form-select"> <?php  $subject_query= mysqli_query($con,"select * from subjects");while($subject_row=mysqli_fetch_array($subject_query)){echo "<option value=".$subject_row['id'].">".$subject_row['name']."</option>";}?> </select> </div>');

       $('#tab_logic').append('<div class="row" id="subcode'+(i+1)+'"></div>');
       
       $('#count').removeAttr("value").attr("value",i+1);
      i++;
     });
     
});
</script> -->