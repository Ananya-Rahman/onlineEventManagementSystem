<?php 
        session_start();

        if(!$_SESSION['valid']){
            session_destroy();
            header('Location:../index.html');
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
        <link href="https://fonts.googleapis.com/css?family=Flamenco"
            rel="stylesheet">
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- bootstarap css link -->
        <link rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
            crossorigin="anonymous">

        <style>
            .event {
             transition: transform .2s; /* Animation */
  
            }
            .event:hover {
             transform: scale(1.1); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
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
                                <ul class="main-nav animated slideInDown"
                                    id="check-class">
                                    <li><a href="./profile.php">Home</a></li>
                                    <li><a href="./event.php">Event booking</a></li>
                                    <li><a href="./personal-booking-event.php">Booked List</a></li>
                                    <li><a href="./logout.php">Logout</a></li>
                                </ul>
                                <a href="#" class="mobile-icon"
                                    onclick="slideshow()">
                                    <i class="fa fa-bars"></i> </a>
                            </div>
                        </div>

                    </div>
                </nav>


            </div>

        </header>

        <div class="container mt-5">
            <div class="row mb-5">
                <div class="col-sm-4">
                    <div class="card event" style="width: 18rem;">
                        <img src="../image/5.jpg" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-info" style="font-size:
                                30px">Marriage Event</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet
                                consectetur adipisicing elit. Tempora, unde!</p>
                            <a href="../php/single-event.php" class="btn
                                btn-primary" data-toggle="tooltip"
                                data-placement="left" title="view for booking">Booking
                                for . . .</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card event" style="width: 18rem;">
                        <img src="../image/download.jpg" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-info" style="font-size:
                                30px">Holud Event</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet
                                consectetur adipisicing elit. Quidem, dolorum!</p>
                            <a href="./single-event.html" class="btn
                                btn-primary" data-toggle="tooltip"
                                data-placement="left" title="view for booking">Booking
                                for . . .</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card event" style="width: 18rem;">
                        <img src="../image/7.jpg" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-info" style="font-size:
                                30px">Engagement Event</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet
                                consectetur adipisicing elit. Necessitatibus,
                                officiis?</p>
                            <a href="./single-event.html" class="btn
                                btn-primary" data-toggle="tooltip"
                                data-placement="left" title="view for booking">Booking
                                for . . .</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-sm-4">
                    <div class="card event" style="width: 18rem;">
                        <img src="../image/4.jpg" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-info" style="font-size:
                                30px">Anniversary Event</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet
                                consectetur adipisicing elit. Deleniti,
                                suscipit.</p>
                            <a href="./single-event.html" class="btn
                                btn-primary" data-toggle="tooltip"
                                data-placement="left" title="view for booking">Booking
                                for . . .</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card event" style="width: 18rem;">
                        <img src="../image/brt.jpg" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-info" style="font-size:
                                30px">Birthday Event</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet,
                                consectetur adipisicing elit. Qui, saepe?</p>
                            <a href="./single-event.html" class="btn
                                btn-primary" data-toggle="tooltip"
                                data-placement="left" title="view for booking">Booking
                                for . . .</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card event" style="width: 18rem;">
                        <img src="../image/2.jpg" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-info" style="font-size:
                                30px">Special Event</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet
                                consectetur adipisicing elit. Nesciunt,
                                eligendi.</p>
                            <a href="./single-event.html" class="btn
                                btn-primary" data-toggle="tooltip"
                                data-placement="left" title="view for booking">Booking
                                for . . .</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        
        
        



    </body>

    <script src="../js/index.js"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script
        src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

    <script>
        
        </script>


</html>