<?php require('../db.php');?>

<!DOCTYPE html>
<html lang="en">
<head>

    <link href="../bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <script src="../bootstrap/js/bootstrap.js"></script>
    <script src="../bootstrap/js/jquery-3.7.0.slim.js"></script>
    <script src="../bootstrap/js/popper.min.js" ></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>time_table</title>
</head>
<body>

   
    
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

        <td style="background-color:lightblue;"><?php echo $period_staff['subject_name']."<br>".$period_staff['staff_name'];?></td>
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