<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
    <form action="../php/delete.php" method="POST">
        <table class="table table-bordered text-center">
               
                  <tr>
                    <th scope="col">ID</th>
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

                    $query=mysqli_query($conn,"SELECT * FROM `events`");
                    while($result=mysqli_fetch_array($query)){

                   

                  
                  
                  ?>
                
              
                  <tr>
                   
                  <td><?php echo $result['id']; ?></td>
                    <td><?php echo $result['event_name']; ?></td>
                    <td><?php echo $result['decorations']; ?></td>
                    <td><?php echo $result['foods']; ?></td>
                    <td><?php echo $result['special_effects']; ?></td>
                    <td><?php echo $result['programs']; ?></td>
                    <td> <?php echo $result['management_level']; ?></td>
                    <td>
                    <!-- <a href="delete.php?id=<?php // echo $result['id'];?>">Delete</a> -->
                    <a href="delete.php?id=<?php echo $result['id']; ?>" > 
                      Delete
                    </a>
                    <a href="view.php?id=<?php echo $result['id'];?>"> 
                    Upadte
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
</html>