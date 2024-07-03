
<!-- connect-->
<?php
include('../includes/connect.php');

if(isset($_POST['insert_player'])){


    
    $team_id = $_POST['t1id'];
    $player_name = $_POST['player_name'];
    $player_pos = $_POST['player_pos'];
    
    $player_img1 = $_FILES['player_img1']['name'];
    $temp_img1 = $_FILES['player_img1']['tmp_name'];
    

    //checking empty condition
    if($player_name =='' or  $player_pos=='' or $team_id==''  or $player_img1=='' ){
        echo "<script>alert('Please fill all the fields!')</script>";
        exit();
    }else{

        move_uploaded_file($temp_img1,"../Images/players/$player_img1");
      



        //inserting the products query

       

        $insert_player= "INSERT into `players` (team_id,player_name,player_pos,player_img1)
        values('$team_id','$player_name','$player_pos','$player_img1')";

        $resul_query = mysqli_query($con,$insert_player);
        if($resul_query){

            echo "<script>alert('Team Inserted')</script>";

        }



    }

   


}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Player</title>

    <!--bootstrap css link-->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <!-- font awesome link-->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <!-- css link-->
   <link rel="stylesheet" href="style.css">

</head>
<body class="bg-light">
    <div class="container mt-3" >
        <h1 class="text-center">Insert Player</h1>
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



            <!-- Player Name -->

            <div class="form-outline mb-4 w-50 m-auto">
                <label for="day" class="form-label">Enter Player Name</label>
                <input type="text" name="player_name" id="player_name" class="form-control"
                 placeholder="Enter Player Name"
                autocomplete="off" required="required">
            </div>




            <!-- player Position-->

            <div class="form-outline mb-4 w-50 m-auto">
                <label for="day" class="form-label">Enter Player Position</label>
                <input type="text" name="player_pos" id="player_pos" class="form-control"
                 placeholder="Enter Player Position"
                autocomplete="off" required="required">
            </div>

           



            <!--Image1 -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image1" class="form-label">Insert Player Image</label>
                <input type="file" name="player_img1" id="player_img1" class="form-control"
                 
                autocomplete="off" required="required">
            </div>


            <!--Submit -->
            <div class="form-outline mb-4 w-50 m-auto">
                <input type="submit" name="insert_player" class="btn btn-info mb-3 px-3" value="Insert Player">
            </div>


            

        </form>



    </div>




    
</body>
</html>