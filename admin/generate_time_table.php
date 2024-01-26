<?php require('../db.php');

session_start();
//the isset function to check username is already loged in and stored on the session
if(!isset($_SESSION['id'])){
header('location:../index.php');	
}
$delete = mysqli_query($con,"truncate table time_table");
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>generate time table</title>
    <link href="../bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <script src="../bootstrap/js/bootstrap.js"></script>
    <script src="../bootstrap/js/jquery-3.7.0.slim.js"></script>
    <script src="../bootstrap/js/popper.min.js" ></script>
</head>
<body>
    <center><h1>Time Table</h1></center>
    <?php
    
    $day_order_query = mysqli_query($con,"select * from day_orders");
    while($day_order_row = mysqli_fetch_array($day_order_query)){
        $day_order = $day_order_row['name'];
        $hour_query = mysqli_query($con,"select * from hours");
        while($hour_row = mysqli_fetch_array($hour_query)){
             $hour = $hour_row['name'];
             $classes_query = mysqli_query($con,"select  DISTINCT class_id from class_subjects");
             while($classes_row = mysqli_fetch_array($classes_query)){
                    $class_id = $classes_row['class_id'];
                    $staffs_query = mysqli_query($con,"select * from class_subjects where class_id = '$class_id'");
                    $is_available = [];
                          while($staffs_row = mysqli_fetch_array($staffs_query)){
                                $staff_id = $staffs_row['subject_staff_id'];
                                $staff_query = mysqli_query($con,"select * from staffs where id = '$staff_id' and is_available = '1'");
                                $subject_staff_row = mysqli_fetch_array($staff_query);
                                if(!$subject_staff_row){
                                    continue;
                                }
                                $subject_staff_id = $subject_staff_row['id'];
                                array_push($is_available,$subject_staff_id);
                          }
                    // pick random staff via array
                    $random_staff = array_rand($is_available);
                    $random_subject_staff_id = $is_available[$random_staff];
            
                    //is_avalable change to not_available
                    $not_available = mysqli_query($con,"update staffs set is_available= 0 where id = '$random_subject_staff_id'");
                    $subject_query = mysqli_query($con,"select * from class_subjects where subject_staff_id = '$random_subject_staff_id' and class_id='$class_id'");
                    $subject_row = mysqli_fetch_array($subject_query);
                    $subject_id = $subject_row['subject_id'];
            
                    //retrieve classes
                    $class_name_query = mysqli_query($con,"select * from classes where id = '$class_id'");
                    $class_name_row = mysqli_fetch_array($class_name_query);
                    $class_name = $class_name_row['name'];
                    $class_alias = $class_name_row['alias'];
            
                    //retrieve subject
                    $subject_name_query = mysqli_query($con,"select * from subjects where id = '$subject_id'");
                    $subject_name_row = mysqli_fetch_array($subject_name_query);
                    $subject_name = $subject_name_row['name'];
                    $subject_alias = $subject_name_row['alias'];
            
                    //retrieve staff
                    $staff_name_query = mysqli_query($con,"select * from staffs where id = '$random_subject_staff_id'");
                    $staff_name_row = mysqli_fetch_array($staff_name_query);
                    $staff_name = $staff_name_row['name'];
                    $staff_alias = $staff_name_row['alias'];
            
                    //test out put
                  // echo "day_order=".$day_order." ,hours =".$hour.",,class_id = ".$class_id.",,class_name =".$class_name.",,class_alias =".$class_alias.",,subject_id= ".$subject_id.",,subject_name =".$subject_name." ,,subject_alias =".$subject_alias." ,,staff_id = ". $random_subject_staff_id.",,staff_name =".$staff_name.",,staff_alias =".$staff_alias."<br>";
                    $insert_time_table = mysqli_query($con,"insert into time_table value ('','$day_order','$hour','$class_id','$class_name','$class_alias','$subject_id','$subject_name','$subject_alias',' $random_subject_staff_id','$staff_name','$staff_alias')");
                    }
                    //end of the hours
                    $is_available_staff = mysqli_query($con,"update staffs set is_available= 1");
    }     
      //end of the days
   // $end_of_day_available_staff =  mysqli_query($con,"update staffs set is_available= 1");
       
    }
     
    ?>

   
    
<?php
     $retrieve_classes_query = mysqli_query($con,"select DISTINCT class_id from time_table");
     while($retrieve_classes_row = mysqli_fetch_array($retrieve_classes_query)){
      $retrieve_class_id = $retrieve_classes_row['class_id'];
      $retrieve_class_query = mysqli_query($con,"select * from classes where id='$retrieve_class_id'");
      $retrieve_class_row = mysqli_fetch_array($retrieve_class_query);
      $retrieve_class_name = $retrieve_class_row['name'];
?>
<center><h1><?php echo $retrieve_class_name?></h1></center>
<table class='table table-responsive table-bordered' style="border:1px solid black;">
     <tr style="background-color:aqua;height:70px;text-align:center;">
       <th>Day Order /hours</th>
      <?php
       $retrieve_hours_query = mysqli_query($con,"select * from hours");
      while($column = mysqli_fetch_array($retrieve_hours_query)){
        ?>
        <th><?php echo $column['name']?></th>
      <?php
      }
      ?>
     </tr>
     <?php
     $retrieve_day_order_query = mysqli_query($con,"select * from day_orders");
     while($row = mysqli_fetch_array($retrieve_day_order_query)){
      $row_day_order = $row['name'];
     ?>
     <tr style="height:50px;">
       <td style="background-color:pink;text-align:center"><?php echo $row_day_order?></td>
       <?php
       $retrieve_hours_query = mysqli_query($con,"select * from hours");
      while($column = mysqli_fetch_array($retrieve_hours_query)){
        $column_hours = $column['name'];
        $period_staff_query = mysqli_query($con,"select * from time_table where hours = '$column_hours' and day_order = '$row_day_order' and class_id = '$retrieve_class_id'");
        $period_staff = mysqli_fetch_array($period_staff_query);
        ?>

        <td style="background-color:lightblue;"><?php echo $period_staff['subject_name']."(".$period_staff['subject_alias'].")<br>".$period_staff['staff_name']."(".$period_staff['staff_alias'].")";?></td>
      <?php
      }
      ?>
     </tr>
     <?php
     }
     ?>
  </table>
    

<?php
}
?>
 </body> 
</html>