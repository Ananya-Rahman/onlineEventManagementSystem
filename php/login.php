<?php
session_start();

include_once('conn.php');

$name= $_POST['user'];
$pass= $_POST['password'];

$q= "SELECT * FROM `usertable` where username='$name' && password= MD5('$pass')";

$result= mysqli_query($conn,$q);

$num= mysqli_num_rows($result);

$all_result = mysqli_fetch_assoc($result);



if($num == 1)
{
    $_SESSION['user_name']= $name ;
    $_SESSION['id']= $all_result['id'] ;
    
    $_SESSION['valid']= 1; // 1 is true
    echo('{"msg": "login Successfully", "status": "ok"}');
}
 else{
    echo('{"msg": "password does not match ", "status": "error"}') ;
 }

  

?>