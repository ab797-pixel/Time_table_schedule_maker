<?php
  extract($_POST);
  if(isset($submit)){
     echo $count;
     header("location:index.php?info=''&count=".$count."");
  }
?>
<div class="container" style="margin-top:100px;">
    hello class add,list,edit,delete;
   <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Add Classes
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Class Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
     <form>
      <div class="modal-body" id="tab_logic">
         <div class="mb-3">
            <label  class="form-label">Name</label>
            <input type="text" class="form-control" name="class_name" placeholder="Enter class name">
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
         <div class="col-md-6">
             <label for="inputStaff0"  class="form-label">Staff0</label>
             <select id="inputStaff0" name="inputStaff0" class="form-select">
              <?php
               $staff_query= mysqli_query($con,"select * from staffs");
               while($staff_row=mysqli_fetch_array($staff_query)){
                echo "<option value=".$staff_row['id'].">".$staff_row['name']."</option>";
               }
              ?>
               
             </select>
           </div>
           <div class="col-md-6">
             <label for="inputSubcode0" class="form-label">Subject0</label>
             <select id="inputSubcode0" name="inputSubcode0" class="form-select">
             <?php
               $subject_query= mysqli_query($con,"select * from subjects");
               while($subject_row=mysqli_fetch_array($subject_query)){
                echo "<option value=".$subject_row['id'].">".$subject_row['name']."</option>";
               }
              ?>
             </select>
          </div>

         </div>
        
          <div class="row" id="subcode1"></div>
         
      

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="submit"class="btn btn-primary">Save</button>
      </div>
     </form>
    </div>

  </div>
</div>
</div>
<script>
   $(document).ready(function(){
      var i=1;
     $("#add_subcode").click(function(){
  
       $('#subcode'+i).html('<div class="col-md-6"> <label for="inputStaff'+(i)+'" class="form-label">Staff'+(i)+'</label> <select id="inputStaff'+(i)+'" name="inputStaff'+(i)+'" class="form-select">  <?php $staff_query= mysqli_query($con,"select * from staffs"); while($staff_row=mysqli_fetch_array($staff_query)){echo "<option value=".$staff_row['id'].">".$staff_row['name']."</option>";} ?> </select> </div> <div class="col-md-6"> <label for="inputSubcode'+(i)+'" class="form-label">Subject'+(i)+'</label> <select id="inputSubcode'+(i)+'" name="inputSubcode'+(i)+'" class="form-select"> <?php  $subject_query= mysqli_query($con,"select * from subjects");while($subject_row=mysqli_fetch_array($subject_query)){echo "<option value=".$subject_row['id'].">".$subject_row['name']."</option>";}?> </select> </div>');

       $('#tab_logic').append('<div class="row" id="subcode'+(i+1)+'"></div>');
       
      // $('#count').
      i++;
     });
     
});
</script>