
<!-- connect-->
<?php
include('../includes/connect.php');

if(isset($_POST['insert_player'])){


    
    $player_id = $_POST['player_id'];
    $role= $_POST['role'];
    $dob = $_POST['dob'];
    $batting = $_POST['batting'];
    $dofdeb = $_POST['dofdeb'];

    $odib_crank = $_POST['odib_crank'];
    $odib_hrank = $_POST['odib_hrank'];
    $odib_crate = $_POST['odib_crate'];
    $odib_hrate = $_POST['odib_hrate'];

    $odibo_crank = $_POST['odibo_crank'];
    $odibo_hrank = $_POST['odibo_hrank'];
    $odibo_crate = $_POST['odibo_crate'];
    $odibo_hrate = $_POST['odibo_hrate'];

    $odir_crank = $_POST['odir_crank'];
    $odir_hrank = $_POST['odir_hrank'];
    $odir_crate = $_POST['odir_crate'];
    $odir_hrate = $_POST['odir_hrate'];
    


   

   
    



    //inserting the products query

    

    $insert_playerdet= "INSERT into `player_details` (player_id,role,dob,batting,dofdeb,odib_crank,odib_hrank,odib_crate,odib_hrate,
    odibo_crank,odibo_hrank,odibo_crate,odibo_hrate,odir_crank,odir_hrank,odir_crate,odir_hrate)
    values('$player_id','$role','$dob','$batting','$dofdeb','$odib_crank','$odib_hrank','$odib_crate','$odib_hrate',
    '$odibo_crank','$odibo_hrank','$odibo_crate','$odibo_hrate','$odir_crank','$odir_hrank','$odir_crate','$odir_hrate')";

    $resul_query = mysqli_query($con,$insert_playerdet);
    if($resul_query){

        echo "<script>alert('Details Inserted')</script>";

    }



    

   


}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Player Details</title>

    <!--bootstrap css link-->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <!-- font awesome link-->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <!-- css link-->
   <link rel="stylesheet" href="style.css">

</head>
<body class="bg-light">
    <div class="container mt-3" >
        <h1 class="text-center">Insert Player Details</h1>
        <!-- form -->



        <form action="" method="post" enctype="multipart/form-data">

            <!-- team one -->


            <div class="form-outline mb-4 w-50 m-auto">
                
                <select name="player_id" id="" class="form-select">
                    <option value="">Select a player</option>
                    <?php

                    $select_teams = "Select * from players";
                    $result_teams = mysqli_query($con,$select_teams);
                    
                    
                    while($row_data = mysqli_fetch_assoc($result_teams)){
                      $player_name = $row_data['player_name'];
                      $player_id = $row_data['player_id'];
                    
                      echo "<option value='$player_id'>$player_name</option>";
                    
                    }
                                        
                    ?>
                </select>
            </div>



            <!-- Player Name -->

            <div class="form-outline mb-4 w-50 m-auto">
                <label for="day" class="form-label">Enter Role</label>
                <input type="text" name="role" id="role" class="form-control"
                 placeholder="Enter Role"
                autocomplete="off" required="required">
            </div>

            <div class="form-outline mb-4 w-50 m-auto">
                <label for="day" class="form-label">Enter Date of Birth</label>
                <input type="text" name="dob" id="dob" class="form-control"
                 placeholder="Enter Date of Birth"
                autocomplete="off" required="required">
            </div>

            <div class="form-outline mb-4 w-50 m-auto">
                <label for="day" class="form-label">Enter Batting Style</label>
                <input type="text" name="batting" id="batting" class="form-control"
                 placeholder="Enter Batting Style"
                autocomplete="off" required="required">
            </div>


            <div class="form-outline mb-4 w-50 m-auto">
                <label for="day" class="form-label">Enter Date of Debut</label>
                <input type="text" name="dofdeb" id="dofdeb" class="form-control"
                 placeholder="Enter Date of Debut"
                autocomplete="off" required="required">
            </div>


            <div class="form-outline mb-4 w-50 m-auto">
                <label for="day" class="form-label">Enter ODI Batting Current Rank</label>
                <input type="text" name="odib_crank" id="odib_crank" class="form-control"
                 placeholder="Current Rank"
                autocomplete="off" required="required">
            </div>


            <div class="form-outline mb-4 w-50 m-auto">
                <label for="day" class="form-label">Enter ODI Batting Highest Rank</label>
                <input type="text" name="odib_hrank" id="odib_hrank" class="form-control"
                 placeholder="Highest Rank"
                autocomplete="off" required="required">
            </div>


            <div class="form-outline mb-4 w-50 m-auto">
                <label for="day" class="form-label">Enter ODI Batting Current Rate</label>
                <input type="text" name="odib_crate" id="odib_crate" class="form-control"
                 placeholder="Current Rate"
                autocomplete="off" required="required">
            </div>


            <div class="form-outline mb-4 w-50 m-auto">
                <label for="day" class="form-label">Enter ODI Batting Highest Rate</label>
                <input type="text" name="odib_hrate" id="odib_hrate" class="form-control"
                 placeholder="Highest Rate"
                autocomplete="off" required="required">
            </div>

            
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="day" class="form-label">Enter ODI Bowling Current Rank</label>
                <input type="text" name="odibo_crank" id="odibo_crank" class="form-control"
                 placeholder="Current Rank"
                autocomplete="off" required="required">
            </div>


            <div class="form-outline mb-4 w-50 m-auto">
                <label for="day" class="form-label">Enter ODI Bowling Highest Rank</label>
                <input type="text" name="odibo_hrank" id="odibo_hrank" class="form-control"
                 placeholder="Highest Rank"
                autocomplete="off" required="required">
            </div>


            <div class="form-outline mb-4 w-50 m-auto">
                <label for="day" class="form-label">Enter ODI Bowling Current Rating</label>
                <input type="text" name="odibo_crate" id="odib_crate" class="form-control"
                 placeholder="Current Rate"
                autocomplete="off" required="required">
            </div>


            <div class="form-outline mb-4 w-50 m-auto">
                <label for="day" class="form-label">Enter ODI Bowling Highest Rating</label>
                <input type="text" name="odibo_hrate" id="odib_hrate" class="form-control"
                 placeholder="Highest Rating"
                autocomplete="off" required="required">
            </div>


            <div class="form-outline mb-4 w-50 m-auto">
                <label for="day" class="form-label">Enter ODI ALL-Rounder Current Rank</label>
                <input type="text" name="odir_crank" id="odir_crank" class="form-control"
                 placeholder="Current Rank"
                autocomplete="off" required="required">
            </div>


            <div class="form-outline mb-4 w-50 m-auto">
                <label for="day" class="form-label">Enter ODI All-Rounder Highest Rank</label>
                <input type="text" name="odir_hrank" id="odir_hrank" class="form-control"
                 placeholder="Highest Rank"
                autocomplete="off" required="required">
            </div>


            <div class="form-outline mb-4 w-50 m-auto">
                <label for="day" class="form-label">Enter ODI ALl-rounder Current Rating</label>
                <input type="text" name="odir_crate" id="odir_crate" class="form-control"
                 placeholder="Current Rate"
                autocomplete="off" required="required">
            </div>


            <div class="form-outline mb-4 w-50 m-auto">
                <label for="day" class="form-label">Enter ODI all-rounder Highest Rating</label>
                <input type="text" name="odir_hrate" id="odir_hrate" class="form-control"
                 placeholder="Highest Rating"
                autocomplete="off" required="required">
            </div>





            <!--Submit -->
            <div class="form-outline mb-4 w-50 m-auto">
                <input type="submit" name="insert_player" class="btn btn-info mb-3 px-3" value="Insert Match">
            </div>


            

        </form>



    </div>




    
</body>
</html>