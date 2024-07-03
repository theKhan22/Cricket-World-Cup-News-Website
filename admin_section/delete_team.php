
<!-- connect-->
<?php
include('../includes/connect.php');

if(isset($_POST['insert_team'])){


    $team_id = $_POST['team_id'];
    



    //inserting the products query

    
    $insert_teams= "DELETE FROM teams
    WHERE team_id = $team_id;";
    

    $resul_query = mysqli_query($con,$insert_teams);
    if($resul_query){

        echo "<script>alert('Team Deleted')</script>";

    }



    


}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Team</title>

    <!--bootstrap css link-->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <!-- font awesome link-->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <!-- css link-->
   <link rel="stylesheet" href="style.css">

</head>
<body class="bg-light">
    <div class="container mt-3" >
        <h1 class="text-center">Update Teams</h1>
        <!-- form -->



        <form action="" method="post" enctype="multipart/form-data">
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



             <!--Price -->
             <div class="form-outline mb-4 w-50 m-auto">
                <input type="submit" name="insert_team" class="btn btn-info mb-3 px-3" value="Delete Team">
            </div>

            

        </form>



    </div>




    
</body>
</html>