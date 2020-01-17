<?php


include_once('conn.php');

session_start();

if(!$_SESSION['valid']){
 
    header('location:../index.html');
} 


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" heref="">

    <title>Document</title>

    <link rel="stylesheet" href="../css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Flamenco" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- bootstarap css link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
    .event {
        transition: transform .2s;
        /* Animation */

    }

    .event:hover {
        transform: scale(1.1);
        /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
    }
    </style>
</head>

<body>

    <header>

        <div class="container">


            <nav>

                <div class="row-clearfix">

                    <div class="row">
                        <div class="col-md-4 mt-5">
                            <h3 class="text-info">Online Event Booking</h3>
                        </div>
                        <div class="col-md-8">
                            <ul class="main-nav animated slideInDown" id="check-class">
                                <li><a href="./profile.php">Home</a></li>
                                <li><a href="./event.php">Event booking</a></li>
                                <li><a href="#">Booked List</a></li>
                                <li><a href="./logout.php">Logout</a></li>
                            </ul>
                            <a href="#" class="mobile-icon" onclick="slideshow()">
                                <i class="fa fa-bars"></i> </a>
                        </div>
                    </div>

                </div>
            </nav>


        </div>

    </header>

    <div class="container mt-5">
        <form action="../php/delete.php" method="POST">
            <table class="table table-bordered text-center">

                <tr>
                    <th scope="col">Event Name</th>
                    <th scope="col">Decoration</th>
                    <th scope="col">Foods</th>
                    <th scope="col">Special Effects</th>
                    <th scope="col">Programs</th>
                    <th scope="col">Management Level</th>
                    <th scope="col">Action</th>

                </tr>
                <?php
                    include_once('conn.php');

                    $user_id = $_SESSION['id'];
                    $query=mysqli_query($conn," SELECT * FROM
                        events WHERE user_id ='$user_id' ");
                    while($result=mysqli_fetch_array($query)){ ?>

                <tr>

                    <td>
                        <?php echo $result['event_name']; ?>
                    </td>
                    <td><?php 
                        $res =  json_decode($result['decorations']) ;

                        foreach($res as $value){
                            $str = explode(",",$value);
                            echo $str[0].' , ';
                        }
                    
                        ?></td>
                    <td>
                        <?php 
                     $res =  json_decode($result['foods']) ;

                     foreach($res as $value){
                         $str = explode(",",$value);
                         echo $str[0].' , ';
                     }
                 
                    
                   ?>
                    </td>
                    <td>
                        <?php 
                    $res =  json_decode($result['special_effects']) ;

                    foreach($res as $value){
                        $str = explode(",",$value);
                        echo $str[0].' , ';
                    }
                     ?>
                    </td>
                    <td><?php 

                        $res =  json_decode($result['programs']) ;

                        foreach($res as $value){
                            $str = explode(",",$value);
                            echo $str[0].' , ';
                        }
                    
                     ?></td>
                    <td> 
                        <?php 
                        
                            $res =  json_decode($result['management_level']) ;

                           
                                $str = explode(",",$value);
                                echo $str[0];
                            

                        ?>
                     </td>
                    <td>
                        <!-- <a href="delete.php?id=<?php // echo $result['id'];?>">Delete</a> -->
                        <a href="delete.php?id=<?php echo $result['id']; ?>">
                           <button class="btn btn-danger">Delete</button>
                        </a>
                        <!-- view.php?id=<?php// echo $result['id'];?> -->
                        <a href="#"> 
                        <button class="btn btn-primary">Update</button>
                        </a>

                    </td>



                </tr>


                <?php
                    };
               ?>
            </table>
        </form>
    </div>

</body>
<script src="../js/index.js"></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>

</html>