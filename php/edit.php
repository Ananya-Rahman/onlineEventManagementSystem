
<?php
include('conn.php');

$id=$_GET['id'];

if(isset($_POST['update'])){

if(isset($_POST['event_name']) && isset($_POST['decoration']) && isset($_POST['food'])
&& isset($_POST['special']) && isset($_POST['programs']) && isset($_POST['levels'])){
 
    $id=$_GET['id'];
     
       
       $event_name= $_POST['event_name'];
       $decoration=$_POST['decoration'];
       $food=$_POST['food'];
       $special_effetcs=$_POST['programs'];
       $program=$_POST['levels'];
       $management_levels=$_POST['levels'];

       $sql=mysqli_query($conn,"UPDATE `events` SET `event_name`='$event_name',
       `decorations`= '$decoration',`foods`= '$food',`special_effects`='$special_effetcs',
       `programs`= '$program',`management_level`= '$management_levels' WHERE id=$id");

       if(!$sql){
            echo "not update";
       }
       else{
           header('location:edit.php');
       }
       

   }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>

</head>
<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-header">
                    <h2>Update operation</h2>
            </div>


            <div class="card-body">

                <?php
                include ('conn.php');

                $id=$_GET['id'];
                $query=mysqli_query($conn,"SELECT * FROM `events` WHERE id=$id");
                $result=mysqli_fetch_assoc($query);
                
                ?>

                <form action="edit.php?id=<?php echo $_GET['id'];?>" method="post">
                    <div class="form-group">
                            <label for="name">Event Name</label>
                            <input type="text" value="<?php echo $result['event_name']?>" name="event_name" id="Uname" class="form-control">
                        </div>

                    <div class="form-group">
                        <label for="name">Decoration</label>
                        <input type="text" value="<?php echo $result['decoration']?>" name="decoration" id="Uname" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="name">Food</label>
                        <input type="text" value="<?php echo $result['food']?>" name="food" id="Uname" class="form-control">
                    </div>
                    <div class="form-group">
                            <label for="text">Special Effeccts</label>
                            <input type="text" value="<?php echo $result['special']?>" name="special" id="passwrd" class="form-control">
                        </div>
                        <div class="form-group">
                                <label for="text">Programs</label>
                                <input type=text"" value="<?php echo $result['programs']?>" name="programs" id="passwrd" class="form-control">
                            </div>
                            <div class="form-group">
                                    <label for="text">Management Levels</label>
                                    <input type="text" value="<?php echo $result['levels']?>" name="levels" id="passwrd" class="form-control">
                                </div>
                                
                                    <div class="form-group">
                                            <label for="number">Total Cost</label>
                                            <input type="number" name="cost" id="cost" class="form-control">
                                        </div>
                        <div class="form-group">
                            <button type="submit" value="update" class="btn btn-outline-info">Update</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>