<?php 
        session_start();

        if(!$_SESSION['valid']){
            session_destroy();
            header('location:../index.html');
        }
?>
<!DOCTYPE html>
<html lang="en">

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
                                <li><a href="#" style="border-bottom: 2px
                                            solid #bf55ec;">Event booking </a></li>
                                <li><a href="#">Check More</a></li>
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

    <div class="container bg-white mt-4">

        

        <form action="./calculate.php" method="POST">
        <center>
            <h2 class="text-info py-3">  Marriage Event </h2>
            <input type="text" name="event" value="marriage event" hidden>
            
        </center>

            <div class="row">
                <div class="col-sm-3">
                    <h3 class="text-info">Decoration</h3>
                </div>
                <div class="col-sm-9 mt-1" style="font-size:20px">

                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-check
                                    form-check-inline">
                                <input class="form-check-input decorations" type="checkbox" id="inlineCheckbox1"
                                    name="decoration[]" value="flower,50" checked>
                                <label class="form-check-label" for="inlineCheckbox1">
                                    Flower <span class="badge badge-info " style="font-size:16px">50$</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-check
                                    form-check-inline">
                                <input class="form-check-input decorations" type="checkbox" id="inlineCheckbox1"
                                    name="decoration[]" value="lighting,30">
                                <label class="form-check-label" for="inlineCheckbox1">
                                    Lighting <span class="badge badge-info " style="font-size:16px">30$</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-check
                                    form-check-inline">
                                <input class="form-check-input decorations" type="checkbox" id="inlineCheckbox1"
                                    name="decoration[]" value="color,40">
                                <label class="form-check-label" for="inlineCheckbox1">
                                    Color <span class="badge badge-info " style="font-size:16px">40$</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-check
                                    form-check-inline">
                                <input class="form-check-input decorations" type="checkbox" id="inlineCheckbox1"
                                    name="decoration[]" value="others,100">
                                <label class="form-check-label" for="inlineCheckbox1">
                                    Others<span class="badge badge-info " style="font-size:16px">100$</span>
                                </label>
                            </div>
                        </div>

                    </div>


                </div>
            </div>
            <div class="row mt-3">
                <div class="col-sm-3">
                    <h3 class="text-info">Food</h3>
                </div>
                <div class="col-sm-9 mt-1" style="font-size:16px">

                    <div class="row">
                        <div class="col-md-3">

                            <div class="form-check form-check-inline">
                                <input class="form-check-input foods" type="checkbox" id="inlineCheckbox1" name="foods[]"
                                    value="breakfast,100">
                                <label class="form-check-label" for="inlineCheckbox1">
                                    Breakfast <span class="badge badge-info " style="font-size:16px">100$</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input foods" type="checkbox" id="inlineCheckbox2" name="foods[]"
                                    value="lunch,300" checked>
                                <label class="form-check-label" for="inlineCheckbox2">
                                    Lunch <span class="badge badge-info " style="font-size:16px">300$</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-check
                                    form-check-inline">
                                <input class="form-check-input foods" type="checkbox" id="inlineCheckbox2" name="foods[]"
                                    value="dinner,250">
                                <label class="form-check-label" for="inlineCheckbox2">
                                    Dinner <span class="badge badge-info " style="font-size:16px">250$</span>
                                </label>
                            </div>
                        </div>

                    </div>



                </div>
            </div>
            <div class="row mt-3">
                <div class="col-sm-3">
                    <h3 class="text-info">Special Effects</h3>
                </div>
                <div class="col-sm-9 mt-1" style="font-size:16px">

                    <div class="row">
                        <div class="col-md-3">

                            <div class="form-check form-check-inline">
                                <input class="form-check-input effects" type="checkbox" id="inlineCheckbox1"
                                    name="effects[]" value="song,300">
                                <label class="form-check-label" for="inlineCheckbox1">
                                    Song <span class="badge badge-info " style="font-size:16px">300$</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input effects" type="checkbox" name="effects[]"
                                    id="inlineCheckbox2" value="dance,400">
                                <label class="form-check-label" for="inlineCheckbox2">
                                    Dance <span class="badge badge-info " style="font-size:16px">400$</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-check
                                    form-check-inline">
                                <input class="form-check-input effects" type="checkbox" id="inlineCheckbox2"
                                name="effects[]" value="music,100" checked>
                                <label class="form-check-label" for="inlineCheckbox2">
                                    Sound/Music <span class="badge badge-info " style="font-size:16px">100$</span>
                                </label>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-check
                                    form-check-inline">
                                <input class="form-check-input effects" type="checkbox" id="inlineCheckbox2"
                                    name="effects[]" value="photoshoot,100">
                                <label class="form-check-label" for="inlineCheckbox2">
                                    Photoshoot <span class="badge badge-info " style="font-size:16px">100$</span>
                                </label>
                            </div>
                        </div>


                    </div>



                </div>
            </div>
            <div class="row mt-3">
                <div class="col-sm-3">
                    <h3 class="text-info">Programs</h3>
                </div>
                <div class="col-sm-9 mt-1" style="font-size:20px">

                    <div class="row">
                        <div class="col-md-3">

                            <div class="form-check form-check-inline">
                                <input class="form-check-input programs" type="checkbox" name="programs[]"
                                    id="inlineCheckbox1" value="day,200" checked>
                                <label class="form-check-label" for="inlineCheckbox1">
                                    Day <span class="badge badge-info " style="font-size:16px">200$</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input programs" type="checkbox" type="checkbox"
                                    name="programs[]" id="inlineCheckbox2" value="evening,100">
                                <label class="form-check-label" for="inlineCheckbox2">
                                    Evening <span class="badge badge-info " style="font-size:16px">100$</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-check
                                    form-check-inline">
                                <input class="form-check-input programs" type="checkbox" name="programs[]"
                                    type="checkbox" id="inlineCheckbox2" value="night,250">
                                <label class="form-check-label" for="inlineCheckbox2">
                                    Night <span class="badge badge-info " style="font-size:16px">250$</span>
                                </label>
                            </div>
                        </div>


                    </div>



                </div>
            </div>
            <div class="row mt-3">
                <div class="col-sm-3">
                    <h3 class="text-info">Management Level</h3>
                </div>
                <div class="col-sm-9 mt-1" style="font-size:16px">

                    <div class="row">
                        <div class="col-md-3">

                            <div class="radio">
                                <label><input type="radio" name="management" value="high,200" checked>High <span
                                        class="badge badge-info " style="font-size:16px">200$</span> </label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="radio">
                                <label><input type="radio" value="medium,150" name="management">Medium <span
                                        class="badge badge-info " style="font-size:16px">150$</span> </label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="radio">
                                <label><input type="radio" value="low,100" name="management">Low level <span
                                        class="badge badge-info " style="font-size:16px">100$</span></label>
                            </div>
                        </div>


                    </div>



                </div>

            </div>

            <div class="mt-5 bg-white">




                <div class="my-3">
                    <center>
                        <button type="submit" class="btn
                btn-outline-success my-2"  id="calculate" name="calculate">Calculate</button>
                    </center>
                </div>






        </form>


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

















<!-- 
<script type="text/javascript">
function calculation() {
    var favorite = [];
    $.each($('input[name="decoration[]"]:checked'), function() {
        favorite.push($(this).val());
        console.log(favorite + " sss");
    });
    console.log(favorite.toString() + " sss");
    // alert("My favourite sports are: " + favorite.toString() );
}
</script> -->