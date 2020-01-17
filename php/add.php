<?php
 include_once('conn.php');
if(isset($_POST['event_name']) && isset($_POST['decoration']) && isset($_POST['food']) && isset($_POST['special']) && isset($_POST['programs']) && isset($_POST['levels']) && isset($_POST['cost']) ){
 $Event_name=$_POST['event_name'];
 $Decoration=$_POST['decoration'];
 $Food=$_POST['food'];
 $special_Effects=$_POST['special'];
 $programs=$_POST['programs'];
 $Management_levels=$_POST['levels'];
 $cost=$_POST['cost'];

 

 $query=mysqli_query($conn,"INSERT INTO `events`(`event_name`, `decorations`, `foods`, `special_effects`, `programs`, `management_level`, `cost`)
  VALUES ('$Event_name','$Decoration','$Food', '$special_Effects', '$programs', '$Management_levels', '$cost') ");

   if(!$query){
    echo "error: could not able to execute";
   }
   else{
       header('location: ../php/view.php');
   }
}
?>