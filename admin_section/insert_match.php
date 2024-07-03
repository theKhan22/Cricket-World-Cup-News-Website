
<!-- connect-->
<?php
include('../includes/connect.php');

if(isset($_POST['insert_match'])){


    
    $t1id = $_POST['t1id'];
    $t2id = $_POST['t2id'];
    $venid= $_POST['venid'];
    $date = $_POST['date'];
    $day = $_POST['day'];
    $time = $_POST['time'];
    

    $insert_matches= "INSERT into `matches` (t1id,t2id,venid,date,day,time)
    values('$t1id','$t2id','$venid','$date','$day',
    '$time')";

    $resul_query = mysqli_query($con,$insert_matches);
    if($resul_query){

        echo "<script>alert('Match Inserted')</script>";

    }

   


}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Match</title>

    <!--bootstrap css link-->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <!-- font awesome link-->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <!-- css link-->
   <link rel="stylesheet" href="style.css">

</head>
<body class="bg-light">
    <div class="container mt-3" >
        <h1 class="text-center">Insert Match</h1>
        <!-- form -->



        <form action="" method="post" enctype="multipart/form-data">

            <!-- team one -->


            <div class="form-outline mb-4 w-50 m-auto">
                
                <select name="t1id" id="" class="form-select">
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



            <!-- team two -->


            <div class="form-outline mb-4 w-50 m-auto">
                <label for="team_two" class="form-label">Team Otwo</label>
                <select name="t2id" id="" class="form-select">
                    <option value="">Select a Team</option>
                    <?php

                    $select_categories = "Select * from teams";
                    $result_categories = mysqli_query($con,$select_categories);
                    
                    
                    while($row_data = mysqli_fetch_assoc($result_categories)){
                      $name = $row_data['name'];
                      $team_id = $row_data['team_id'];
                      $team_two_flg= $row_data['img1'];
                    
                      echo "<option value='$team_id'>$name</option>";
                    
                    }
                                        
                    ?>
                </select>
            </div>


             <!-- Venue -->


             <div class="form-outline mb-4 w-50 m-auto">
                <label for="venue_name" class="form-label">Enter Venue:</label>
                <select name="venid" id="" class="form-select">
                    <option value="">Select a Venue</option>
                    <?php

                    $select_categories = "Select * from venues";
                    $result_categories = mysqli_query($con,$select_categories);
                    
                    
                    while($row_data = mysqli_fetch_assoc($result_categories)){
                      $venue_name = $row_data['venue_name'];
                      $venue_id = $row_data['venue_id'];
                      $venue_img= $row_data['venue_img1'];
                    
                      echo "<option value='$venue_id'>$venue_name</option>";
                    
                    }
                                        
                    ?>
                </select>
            </div>

            


            <!--Date -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="date" class="form-label">Enter Date</label>
                <input type="text" name="date" id="date" class="form-control"
                 placeholder="Enter Date"
                autocomplete="off" required="required">
            </div>

            <!--Day -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="day" class="form-label">Enter Day</label>
                <input type="text" name="day" id="day" class="form-control"
                 placeholder="Enter Day"
                autocomplete="off" required="required">
            </div>

            <!--Time -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="time" class="form-label">Enter Time</label>
                <input type="text" name="time" id="time" class="form-control"
                 placeholder="Enter time"
                autocomplete="off" required="required">
            </div>


            <!--Submit -->
            <div class="form-outline mb-4 w-50 m-auto">
                <input type="submit" name="insert_match" class="btn btn-info mb-3 px-3" value="Insert Match">
            </div>


            

        </form>



    </div>




    
</body>
</html>