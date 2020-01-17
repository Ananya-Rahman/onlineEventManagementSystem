<?php
 include ('conn.php');
 
  //error??

  $id= $_GET['id'];

 $sql= mysqli_query($conn,"DELETE FROM `events` WHERE id=$id");

 if(!$sql){
     echo "error: cant delete";
 }
 else{
     header('location:./personal-booking-event.php');
 }


?>