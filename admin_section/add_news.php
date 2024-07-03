
<!-- connect-->
<?php
include('../includes/connect.php');

if(isset($_POST['add_news'])){

    $title = $_POST['title'];
    $sdesc = $_POST['sdesc'];
    $ldesc = $_POST['ldesc'];
    $keywords = $_POST['keywords'];
  

    

    //images
    $img1 = $_FILES['img1']['name'];
    $img2 = $_FILES['img2']['name'];
   
   


    // accessing image temp name
    $temp_img1 = $_FILES['img1']['tmp_name'];
    $temp_img2 = $_FILES['img2']['tmp_name'];
   





    

    move_uploaded_file($temp_img1,"../Images/news/$img1");
    move_uploaded_file($temp_img2,"../Images/news/$img2");
       


        //inserting the products query

       

    $insert_venue= "INSERT into `news` (img1,img2,title,sdesc,ldesc,keywords)
    values('$img1','$img2','$title','$sdesc','$ldesc','$keywords')";

    $resul_query = mysqli_query($con,$insert_venue);
    if($resul_query){

        echo "<script>alert('News Inserted')</script>";

    }



 


}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add News Article</title>

    <!--bootstrap css link-->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <!-- font awesome link-->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <!-- css link-->
   <link rel="stylesheet" href="style.css">

</head>
<body class="bg-light">
    <div class="container mt-3" >
        <h1 class="text-center">Add News Article</h1>
        <!-- form -->



        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="name" class="form-label">Enter Title</label>
                <input type="text" name="title" id="" class="form-control" placeholder="Enter Title"
                autocomplete="off" required="required">
            </div>

            <div class="form-outline mb-4 w-50 m-auto">
                <label for="name" class="form-label">Short Description</label>
                <input type="text" name="sdesc" id="" class="form-control" placeholder="Enter Title"
                autocomplete="off" required="required">
            </div>

            <div class="form-outline mb-4 w-50 m-auto">
                <label for="name" class="form-label">Long Description</label>
                <input type="text" name="ldesc" id="" class="form-control" placeholder="Enter Title"
                autocomplete="off" required="required">
            </div>

            <div class="form-outline mb-4 w-50 m-auto">
                <label for="name" class="form-label">Enter Keywords</label>
                <input type="text" name="keywords" id="" class="form-control" placeholder="Enter Title"
                autocomplete="off" required="required">
            </div>




    

            <!--Image1 -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="venue_image1" class="form-label">News Image 1</label>
                <input type="file" name="img1" id="" class="form-control"
                 
                autocomplete="off" required="required">
            </div>

            <!--Image1 -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="venimg2" class="form-label">News Image 2</label>
                <input type="file" name="img2" id="" class="form-control"
                 
                autocomplete="off" required="required">
            </div>




             <!--Price -->
             <div class="form-outline mb-4 w-50 m-auto">
                <input type="submit" name="add_news" class="btn btn-info mb-3 px-3" value="Add News Article">
            </div>

            

        </form>



    </div>




    
</body>
</html>
