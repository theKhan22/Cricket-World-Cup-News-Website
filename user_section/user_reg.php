<!-- connect-->
<?php
include('../includes/connect.php');
include('../includes/ip.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <!-- bootstrap css link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- font awesome link-->
    
    <!-- css link-->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container-fluid">
        <h2 class="text-center my-3"> New User Registration</h2>
        <div class="row d-flex align-item-center justify-content-center">
            <div class="lg-12 col-xl-6">
                <form action="" method="post" enctype="multipart/form-data">
                    <!-- username fiel -->
                    <div class="form-outline mb-4">
                        <label for="user_username" class='form-label'>Username</label>
                        <input type="text" id="user_username" class='form-control' placeholder="Enter username" autocomplete='off'
                        required="required" name='user_username'>

                    </div>
                    <!--email field -->
                    <div class="form-outline mb-4">
                        <label for="user_email" class='form-label'>Email</label>
                        <input type="email" id="user_email" class='form-control' placeholder="Enter email" autocomplete='off'
                        required="required" name='user_email'>

                    </div>

                    


                     <!--Password field -->
                     <div class="form-outline mb-4">
                        <label for="user_password" class='form-label'>Enter your password</label>
                        <input type="password" id="user_password" class='form-control' placeholder="Enter your password" 
                        required="required" name='user_password'>

                    </div>


                     <!--Confirm Password field -->
                     <div class="form-outline mb-4">
                        <label for="conf_user_password" class='form-label'>Confirm password</label>
                        <input type="password" id="conf_user_password" class='form-control' placeholder="Confirm password" 
                        required="required" name='conf_user_password'>

                    </div>




                    <!--reg button-->
                    <div class="text-center">
                        <input type="submit" value="Register" class='bg-info m-3 border-0' name='user_register'>
                        <p class='mt-2 pt-1 fw-bold'>Already have an account?<a href="user_login.php" class=' text-danger mt-2 pt-1 fw-bold text-decoration-none'>Login</a></p>
                    </div>









                </form>

            </div>
        </div>
    </div>
    
</body>
</html>


<!--php code -->


<?php 

if(isset($_POST['user_register'])){
    $user_username = $_POST['user_username'];
    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];
    $conf_user_password = $_POST['conf_user_password'];
   


    $ip = getIPAddress(); 

    //select query
    $select_query= "Select * from user_table where username='$user_username' or user_email='$user_email'";
    $result_select = mysqli_query($con,$select_query);

    if(mysqli_num_rows($result_select)>0){

        echo "<script>alert('name and email already exists')</script>";

    }
    else if($user_password!=$conf_user_password){

        echo "<script>alert('Passwords do not match!')</script>";

    }    
    else{

    //insertion query 

    
    $insert_query ="insert into user_table (username,user_email,user_password,user_ip) values('$user_username','$user_email','$user_password','$ip')";

    $result_query = mysqli_query($con,$insert_query);
    if($result_query){
        echo "<script>alert('Executed Successfully')</script>";
    }

    }



}




?>