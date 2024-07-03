
<!-- connect-->
<?php
include('../includes/connect.php');

if(isset($_POST['insert_team'])){

    $name = $_POST['name'];
    $rank = $_POST['rank'];
  

    

    //images
    $img1 = $_FILES['img1']['name'];
    $img2 = $_FILES['img2']['name'];
   


    // accessing image temp name
    $temp_img1 = $_FILES['img1']['tmp_name'];
    $temp_img2 = $_FILES['img2']['tmp_name'];


    //checking empty condition
    if($name=='' or  $rank=='' or $img1==''  or $img2=='' ){
        echo "<script>alert('Please fill all the fields!')</script>";
        exit();
    }else{

        move_uploaded_file($temp_img1,"../Images/teams/$img1");
        move_uploaded_file($temp_img2,"../Images/teams/$img2");



        //inserting the products query

       

        $insert_teams= "INSERT into `teams` (name,rank,img1,img2)
        values('$name',$rank,'$img1','$img2')";

        $resul_query = mysqli_query($con,$insert_teams);
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
    <title>Insert Team</title>

    <!--bootstrap css link-->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <!-- font awesome link-->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <!-- css link-->
   <link rel="stylesheet" href="style.css">

</head>
<body class="bg-light">
    <div class="container mt-3" >
        <h1 class="text-center">Insert Team</h1>
        <!-- form -->



        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="name" class="form-label">Team Name</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Enter Team Name"
                autocomplete="off" required="required">
            </div>


            <!--description -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="rank" class="form-label">Team Rank</label>
                <input type="number" name="rank" id="rank" class="form-control"
                 placeholder="Enter Team Rank"
                autocomplete="off" required="required">
            </div>


            


            <!--Image1 -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image1" class="form-label">Team Image 1</label>
                <input type="file" name="img1" id="img1" class="form-control"
                 
                autocomplete="off" required="required">
            </div>


            <!--Image2 -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image1" class="form-label">Team Image 2</label>
                <input type="file" name="img2" id="img2" class="form-control"
                 
                autocomplete="off" required="required">
            </div>


             <!--Price -->
             <div class="form-outline mb-4 w-50 m-auto">
                <input type="submit" name="insert_team" class="btn btn-info mb-3 px-3" value="Insert Team">
            </div>

            

        </form>



    </div>




    
</body>
</html>