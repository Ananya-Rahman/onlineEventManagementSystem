<?php 
        session_start();

        if(!$_SESSION['valid']){
            //session_destroy();
            header('location:../index.html');
        }
        
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.o">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Flamenco" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



   
    <title>Document</title>
</head>
<body>
    <header>
        
       <div class="row">
       <?php
     
     include 'navbar.php';
 ?>

 <div class="main-content-header">
 <h1> Welcome<br>
     <span class="colorchange">Online Event Booking</span>
 </h1>
 <a href="../php/event.php" class="btn btn-full">Show Event</a>
 <a href="#" class="btn btn-nav">Event Package</a>
 </div>
       </div>
    </header>
   
    
</body>

    <script src="../js/index.js"></script>
</html>

