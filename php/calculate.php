<?php

include_once('conn.php');

session_start();

if(!$_SESSION['valid']){
    session_destroy();
    header('location:../index.html');
} 


if(isset($_POST["confirm"])){
     
    $all_decoration = json_encode($_POST['decorations']) ;
    $all_foods = json_encode($_POST['foods']) ; 
    $all_effects = json_encode($_POST['effects']) ; 
    $all_programs = json_encode($_POST['programs']) ; 
    $eventName = $_POST['event-name'];
    $management = $_POST['management'];
    $userId = $_SESSION['id'];
    $status = "0";


    print_r($all_decoration ) ;
            
    $query=mysqli_query($conn,"INSERT INTO `events`(`user_id`,`event_name`, `decorations`, `foods`, `special_effects`, `programs`, `management_level`,`status`)
    VALUES ('$userId','$eventName','$all_decoration','$all_foods', '$all_effects', '$all_programs', '$management','$status') ");

    if(!$query){
    echo "error: could not able to execute";
    }
    else{

        header('location: ../php/personal-booking-event.php');
    }
}


    $decoration= [];
    $foods= [];
    $effects= [];
    $programs= [];
    $management ;
    $cost = [];
    $eventName;
    if(isset($_POST["calculate"])){
        $eventName = $_POST['event'];
        $management = $_POST['management'];
        if(!empty($_POST['decoration'])){
           
            // Loop to store and display values of individual checked checkbox.
            foreach($_POST['decoration'] as $selected){
                array_push($decoration,$selected);
            }
         }
         if(!empty($_POST['foods'])){
           
            // Loop to store and display values of individual checked checkbox.
            foreach($_POST['foods'] as $selected){
                array_push($foods,$selected);
            }
         }
         if(!empty($_POST['effects'])){
           
            // Loop to store and display values of individual checked checkbox.
            foreach($_POST['effects'] as $selected){
                array_push($effects,$selected);
            }
         }
         if(!empty($_POST['programs'])){
           
            // Loop to store and display values of individual checked checkbox.
            foreach($_POST['programs'] as $selected){
                array_push($programs,$selected);
            }
         }
        
        

    }


  
    


?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Document</title>

    <link rel="stylesheet" href="../css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Flamenco" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- bootstarap css link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>


    <div style="background-color:  #f0f0f5">
        <div class="row mx-2 my-2 py-4">
            <div class="col-md-2" style="border-right:1px
            solid black">
                <div>
                    <h5 class="text-info">Decoration</h5>
                </div>
                <div class="row">
                    <?php 
                foreach($decoration as $value) {  $str = explode(",", $value); array_push($cost,$str[1]);?>
                    <div class="col-md-4"><span> <?php echo $str[0] ?> </span></div>
                    <div class="col-md-4"><span><?php echo $str[1] ?> $</span></div>
                    <div class="col-md-4"></div>

                    <?php } ?>
                </div>
            </div>
            <div class="col-md-2" style="border-right:1px
            solid black">
                <div>

                    <h5 class="text-info">Foods</h5>
                </div>
                <div class="row">
                    <?php 
                foreach($foods as $value) {  
                    $str = explode(",", $value); 
                array_push($cost,$str[1]); ?>
                    <div class="col-md-4"><span> <?php echo $str[0] ?> </span></div>
                    <div class="col-md-4"><span><?php echo $str[1] ?> $</span></div>
                    <div class="col-md-4"></div>

                    <?php } ?>

                </div>
            </div>
            <div class="col-md-2" style="border-right:1px
            solid black">
                <div>

                    <h5 class="text-info">Special Effects</h5>
                </div>
                <div class="row">
                    <?php 
                foreach($effects as $value) {  $str = explode(",", $value);
                    array_push($cost,$str[1]);
                ?>
                    <div class="col-md-4"><span> <?php echo $str[0] ?> </span></div>
                    <div class="col-md-4"><span><?php echo $str[1] ?> $</span></div>
                    <div class="col-md-4"></div>

                    <?php } ?>

                </div>
            </div>
            <div class="col-md-2" style="border-right:1px
            solid black">
                <div>
                    <h5 class="text-info">Programs</h5>
                </div>
                <div class="row">
                    <?php 
                foreach($programs as $value) {  $str = explode(",", $value); 
                    array_push($cost,$str[1]);
                ?>
                    <div class="col-md-4"><span> <?php echo $str[0] ?> </span></div>
                    <div class="col-md-4"><span><?php echo $str[1] ?> $</span></div>
                    <div class="col-md-4"></div>

                    <?php } ?>
                </div>
            </div>
            <div class="col-md-2">
                <div>
                    <h5 class="text-info">Management Levels</h5>
                </div>

                <div class="row">
                    <?php $str = explode(",",$management) ; 
                array_push($cost,$str[1]);
                ?>
                    <div class="col-md-4"><span><?php echo $str[0] ?></span></div>
                    <div class="col-md-4"><span><?php echo $str[1] ?> $</span></div>
                </div>

            </div>
        </div>

        <hr>

        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-2">
                <h3 class="text-success ">Total Cost : </h3>
            </div>
            <div class="col-md-2">
                <h3 class="text-danger"><?php print_r(array_sum($cost)); 
        ?>$</h3>
            </div>
        </div>

        <form action="" method="POST">
            <div class="row my-1">


                <div class="col-md-7 my-2">

                    <?php 
                foreach($decoration as $value)
                {
                     echo '<input type="hidden" name="decorations[]" value="'. $value. '">';
                } 
                ?>
                    <?php 
                foreach($foods as $value)
                {
                     echo '<input type="hidden" name="foods[]" value="'. $value. '">';
                } 
                ?>
                    <?php 
                foreach($programs as $value)
                {
                     echo '<input type="hidden" name="programs[]" value="'. $value. '">';
                } 
                ?>
                    <?php 
                foreach($effects as $value)
                {
                     echo '<input type="hidden" name="effects[]" value="'. $value. '">';
                } 
                ?>

                    <input type="text" name="event-name" value="<?php echo $eventName ; ?>" hidden>
                    <input type="text" name="management" value="<?php echo $management ; ?>" hidden>

                </div>
               

            </div>
            <div class="row">
                <div class="col-md-9"></div>
                <div class="col-md-2">
                    <center> <button type="submit" class="btn
                    btn-info my-2" name="confirm" value="confirm">Confirm</button></center>
                </div>
            </div>
        </form>
    </div>


    <!-- 
<div class="alert alert-success mt-5 mb-5" role="alert">
    <h4 class="alert-heading">Well done!</h4>
    <p>Aww yeah, you successfully read this important
        alert message. This example text is going to run
        a bit longer so that you can see how spacing
        within an alert works with this kind of content.</p>
    <hr>
    <p class="mb-0">Whenever you need to, be sure to use
        margin utilities to keep things nice and tidy.</p>
</div> -->


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>


</body>