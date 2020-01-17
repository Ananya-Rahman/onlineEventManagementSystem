<?php

include_once('conn.php');

$name=$_POST['user'];
$pass=$_POST['password'];
$s="SELECT * FROM usertable WHERE username='$name'";
$result=mysqli_query($conn,$s);
$num=mysqli_num_rows($result);

if($num >= 1){
    echo('{"msg": " user name already taken ", "status": "error"}');
    
}
else{
    $reg="INSERT INTO `usertable`(`username`, `password`) VALUES ('$name',MD5('$pass'))";
    $res = mysqli_query($conn,$reg);

   if($res){
       
    echo('{"msg": "Registration Successfully", "status": "ok"}');
   }else{
    echo('{"msg": "registration Error ", "status": "error"}');
   }
}

?>
