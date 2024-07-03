
<!-- connect-->
<?php
include('../includes/connect.php');

if(isset($_POST['update_rank'])){


    
    $team_id = $_POST['team_id'];

    $select_teams = "Select * from teams where team_id=$team_id";
    $result_teams = mysqli_query($con,$select_teams);
    
    
    while($row_data = mysqli_fetch_assoc($result_teams)){
        $team = $row_data['name'];  
    }


    $played = $_POST['played'];
    $won = $_POST['won'];
    $lost = $_POST['lost'];
    $n_r = $_POST['n_r'];
    $tied = $_POST['tied'];
    $net_rr = $_POST['net_rr'];
    $points = $_POST['points'];
    
    


    //inserting the products query

    

    $update_rank= "UPDATE rankings
    SET played = $played, won = $won,lost=$lost,n_r=$n_r,tied=$tied,net_rr=$net_rr,points=$points
    WHERE team_id=$team_id;";

    $resul_query = mysqli_query($con,$update_rank);
    if($resul_query){

        echo "<script>alert('Information Updated')</script>";

    }



}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Rank</title>

    <!--bootstrap css link-->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <!-- font awesome link-->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <!-- css link-->
   <link rel="stylesheet" href="style.css">

</head>
<body class="bg-light">
    <div class="container mt-3" >
        <h1 class="text-center">Update Rank</h1>
        <!-- form -->



        <form action="" method="post" enctype="multipart/form-data">

            <!-- team one -->


            <div class="form-outline mb-4 w-50 m-auto">
                
                <select name="team_id" id="" class="form-select">
                    <option value="">Select a Team</option>
                    <?php

                    $select_teams = "Select * from teams";
                    $result_teams = mysqli_query($con,$select_teams);
                    
                    
                    while($row_data = mysqli_fetch_assoc($result_teams)){
                      $name = $row_data['name'];
                      $team_id = $row_data['team_id'];
                      $team_one_flg= $row_data['img1'];
                    
                      echo "<option value='$team_id'>$name</option>";
                    
                    }
                                        
                    ?>
                </select>
            </div>



            <!-- Player Name -->

            <div class="form-outline mb-4 w-50 m-auto">
                <label for="day" class="form-label">Played</label>
                <input type="number" name="played" id="played" class="form-control"
                 placeholder="Enter matches played"
                autocomplete="off" required="required">
            </div>

            <div class="form-outline mb-4 w-50 m-auto">
                <label for="day" class="form-label">won</label>
                <input type="number" name="won" id="won" class="form-control"
                 placeholder="Enter matches won"
                autocomplete="off" required="required">
            </div>

            <div class="form-outline mb-4 w-50 m-auto">
                <label for="day" class="form-label">lost</label>
                <input type="number" name="lost" id="lost" class="form-control"
                 placeholder="Enter matches lost"
                autocomplete="off" required="required">
            </div>

            <div class="form-outline mb-4 w-50 m-auto">
                <label for="day" class="form-label">N/R</label>
                <input type="number" name="n_r" id="n_r" class="form-control"
                 placeholder="Enter matches n/r"
                autocomplete="off" required="required">
            </div>

            <div class="form-outline mb-4 w-50 m-auto">
                <label for="day" class="form-label">Tied</label>
                <input type="number" name="tied" id="tied" class="form-control"
                 placeholder="Enter matches tied"
                autocomplete="off" required="required">
            </div>


            <div class="form-outline mb-4 w-50 m-auto">
                <label for="day" class="form-label">Net RR</label>
                <input type="number" step="0.01" name="net_rr" id="net_rr" class="form-control"
                 placeholder="Enter matches net_rr"
                autocomplete="off" required="required">
            </div>

            <div class="form-outline mb-4 w-50 m-auto">
                <label for="day" class="form-label">Points</label>
                <input type="number" name="points" id="points" class="form-control"
                 placeholder="Enter Total Points"
                autocomplete="off" required="required">
            </div>




            <!--Submit -->
            <div class="form-outline mb-4 w-50 m-auto">
                <input type="submit" name="update_rank" class="btn btn-info mb-3 px-3" value="Insert Match">
            </div>


            

        </form>



    </div>




    
</body>
</html>