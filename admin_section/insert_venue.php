
<!-- connect-->
<?php
include('../includes/connect.php');

if(isset($_POST['insert_venue'])){

    $venue_name = $_POST['venue_name'];
    $venue_ldesc = $_POST['venue_ldesc'];
  

    

    //images
    $venue_img1 = $_FILES['venue_img1']['name'];
    $venimg2 = $_FILES['venimg2']['name'];
    $venimg3 = $_FILES['venimg3']['name'];
    $venimg4 = $_FILES['venimg4']['name'];
   


    // accessing image temp name
    $temp_img1 = $_FILES['venue_img1']['tmp_name'];
    $temp_img2 = $_FILES['venimg2']['tmp_name'];
    $temp_img3 = $_FILES['venimg3']['tmp_name'];
    $temp_img4 = $_FILES['venimg4']['tmp_name'];


    $iframe = $_POST['iframe'];


    //checking empty condition
    if($venue_name=='' or  $venue_ldesc=='' or $venue_img1==''  or $venimg2=='' or  $venimg3==''or  $venimg4=='' ){
        echo "<script>alert('Please fill all the fields!')</script>";
        exit();
    }else{

        move_uploaded_file($temp_img1,"../Images/Venues/$venue_img1");
        move_uploaded_file($temp_img2,"../Images/Venues/$venimg2");
        move_uploaded_file($temp_img3,"../Images/Venues/$venimg3");
        move_uploaded_file($temp_img4,"../Images/Venues/$venimg4");


        //inserting the products query

       

        $insert_venue= "INSERT into `venues` (venue_name,venue_img1,venue_ldesc,venimg2,venimg3,venimg4,iframe)
        values('$venue_name','$venue_img1','$venue_ldesc','$venimg2','$venimg3','$venimg4','$iframe')";

        $resul_query = mysqli_query($con,$insert_venue);
        if($resul_query){

            echo "<script>alert('Venue Inserted')</script>";

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
    <title>Insert Venue</title>

    <!--bootstrap css link-->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <!-- font awesome link-->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <!-- css link-->
   <link rel="stylesheet" href="style.css">

</head>
<body class="bg-light">
    <div class="container mt-3" >
        <h1 class="text-center">Insert Venue</h1>
        <!-- form -->



        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="name" class="form-label">Venue Name</label>
                <input type="text" name="venue_name" id="venue_name" class="form-control" placeholder="Enter Venue Name"
                autocomplete="off" required="required">
            </div>


            <!--description -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="description" class="form-label">Venue Description</label>
                <input type="text" name="venue_ldesc" id="venue_ldesc" class="form-control"
                 placeholder="Enter Description"
                autocomplete="off" required="required">
            </div>


            


            <!--Image1 -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="venue_image1" class="form-label">Venue Image 1</label>
                <input type="file" name="venue_img1" id="venue_img1" class="form-control"
                 
                autocomplete="off" required="required">
            </div>

            <!--Image1 -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="venimg2" class="form-label">Venue Image 2</label>
                <input type="file" name="venimg2" id="venimg2" class="form-control"
                 
                autocomplete="off" required="required">
            </div>

            <!--Image1 -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="venimg3" class="form-label">Venue Image 3</label>
                <input type="file" name="venimg3" id="venimg3" class="form-control"
                 
                autocomplete="off" required="required">
            </div>



            <!--Image1 -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="venimg4" class="form-label">Venue Image 4</label>
                <input type="file" name="venimg4" id="venimg4" class="form-control"
                 
                autocomplete="off" required="required">
            </div>


            <!--description -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="iframe" class="form-label">Enter Location Iframe link:</label>
                <input type="text" name="iframe" id="iframe" class="form-control"
                 placeholder="Enter iframe"
                autocomplete="off" required="required">
            </div>





             <!--Price -->
             <div class="form-outline mb-4 w-50 m-auto">
                <input type="submit" name="insert_venue" class="btn btn-info mb-3 px-3" value="Insert Venue">
            </div>

            

        </form>



    </div>




    
</body>
</html>