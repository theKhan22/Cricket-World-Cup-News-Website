<!-- connect-->
<?php
   include('includes/connect.php');
   include('includes/ip.php');

   session_start();


   if(isset($_GET['clear'])){

    $select_query = "DELETE FROM reminders";
    $result_query= mysqli_query($con,$select_query);

    if($result_query){
        echo "<script>alert('Reminders Cleared')</script>";
        echo "<script>window.open('match_sched_main.php','_self')</script>";

    }

    
    
   }
   ?>
<!DOCTYPE html>
<!-- Coding By CodingNepal - www.codingnepalweb.com -->
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>CricNews!</title>
      <!-- Add Bootstrap CSS -->
      <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
      <!-- Add Bootstrap JavaScript (Popper.js and Bootstrap JS) -->
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      <!-- bootstrap css link-->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <!-- font awesome link-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <!-- css link-->
      <link rel="stylesheet" href="style.css">
      <style>
         /* Importing Google font - Open Sans */
         @import url("https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700&display=swap");
         * {
         margin: 0;
         padding: 0;
         box-sizing: border-box;
         font-family: "Open Sans", sans-serif;
         }
         body {
         height: 100vh;
         width: 100%;
         background: #3232a8
         }
         .header {
         position: fixed;
         top: 0;
         left: 0;
         width: 100%;
         }
         .navbar {
         display: flex;
         align-items: center;
         justify-content: space-between;
         max-width: 1200px;
         margin: 0 auto;
         padding: 20px 15px;
         background: #3232a8
         }
         .navbar .logo a {
         font-size: 1.8rem;
         text-decoration: none;
         color: #fff;
         }
         .navbar .links {
         display: flex;
         align-items: center;
         list-style: none;
         gap: 35px;
         }
         .navbar .links a {
         font-weight: 500;
         text-decoration: none;
         color: #fff;
         padding: 10px 0;
         transition: 0.2s ease;
         }
         .navbar .links a:hover {
         color: #47b2e4;
         }
         .navbar .buttons a {
         text-decoration: none;
         color: #fff;
         font-size: 1rem;
         padding: 15px 0;
         transition: 0.2s ease;
         }
         .navbar .buttons a:not(:last-child) {
         margin-right: 30px;
         }
         .navbar .buttons .signin:hover {
         color: #47b2e4;
         }
         .navbar .buttons .signup {
         border: 1px solid #fff;
         padding: 10px 20px;
         border-radius: 0.375rem;
         text-align: center;
         transition: 0.2s ease;
         }
         .navbar .buttons .signup:hover {
         background-color: #47b2e4;
         color: #fff;
         }
         .buttons .join {
         background-color: #47b2e4;
         }
         .hero-section .buttons .learn {
         border: 1px solid #fff;
         border-radius: 0.375rem;
         }
         .hero-section .buttons a:hover {
         background-color: #47b2e4;
         }
         /* Hamburger menu styles */
         #menu-toggle {
         display: none;
         }
         #hamburger-btn {
         font-size: 1.8rem;
         color: #fff;
         cursor: pointer;
         display: none;
         order: 1;
         }
         @media screen and (max-width: 1023px) {
         .navbar .logo a {
         font-size: 1.5rem;
         }
         .links {
         position: fixed;
         left: -100%;
         top: 75px;
         width: 100%;
         height: 100vh;
         padding-top: 50px;
         background: #175d69;
         flex-direction: column;
         transition: 0.3s ease;
         }
         .navbar #menu-toggle:checked ~ .links {
         left: 0;
         }
         .navbar #hamburger-btn {
         display: block;
         }
         .header .buttons {
         display: none;
         }
         .hero-section .hero {
         max-width: 100%;
         text-align: center;
         }
         .hero-section img {
         display: none;
         }
         }
         .custom-bg {
         background-color: #270ba1;
         }
         .adjustableRectangle {
         width: 100%; /* Set the initial width */
         background-color: #270ba1;
         height: 400px; /* Set the initial height */
         margin: 20px;
         transition: height 0.5s; /* Add smooth height transition */
         }
         .rect-2 {
         width: 100%; /* Set the initial width */
         background-color: white;
         height: 400px; /* Set the initial height */
         margin: 20px;
         transition: height 0.5s; /* Add smooth height transition */
         }
         .rect-3 {
         width: 100%; /* Set the initial width */
         background-color: #41026e;
         height: 400px; /* Set the initial height */
         margin: 20px;
         transition: height 0.5s; /* Add smooth height transition */
         }
         .players-rect{
         width: 80%; /* Set the initial width */
         background-color: #210166;
         height: 60px; /* Set the initial height */
         margin-top: 2px ;
         transition: height 0.5s; /* Add smooth height transition */
         }
      </style>
   </head>
   <body>
      <header class="header">
         <nav class="navbar">
            <h2 class="logo"><a href="#">CricNews</a></h2>
            <input type="checkbox" id="menu-toggle" />
            <label for="menu-toggle" id="hamburger-btn">
               <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
                  <path d="M3 12h18M3 6h18M3 18h18" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
               </svg>
            </label>
            <ul class="links">
               <li><a href="homepage.php">Home</a></li>
               <li><a href="match_sched_main.php">Matches</a></li>
               <li><a href="teams_f.php">Teams</a></li>
               <li><a href="venuelist.php">Venues</a></li>
               <li><a href="standing_main.php">Standings</a></li>
               <li><a href="news.php">News</a></li>
            </ul>
            <div class="buttons">
              <?php

                if(!isset($_SESSION['username'])){

                  echo " <a href='user_section/user_login.php' class='signin'>Sign In</a>
                  <a href='user_section/user_reg.php' class='signup'>Sign Up</a>";

                }else{

                  
                  echo " <a href='homepage.php' class='signin'>Welcome ".$_SESSION['username']."</a>
                  <a href='user_section/logout.php' class='signup'>Logout</a>";
                  



                }


              ?>
               
            </div>
         </nav>
      </header>
      <br><br><br><br>
      <div class="custom-bg">
         <h1 class="text-center py-2 px-3 text-light">Matches</h1>
      </div>

      <style>
        .container-fluid{
            
            height:100%;
            width:100%
        }
      </style>





    <style>
        .container-1{
            background-color:white;
            height:300%;
            width:100%;
            padding: 20px;
        }

        .team-square{
            background-color:#d3d4e3;
            height: 150px;
            width:100%;
            margin-top:10px;
            
        }

        .arrow-link {
            display: block;
            text-align: center; 
            font-size: 50px;
            color: #007bff; 
            text-decoration: none; 
            transition: color ; 
            
            
            
        }
       

        .arrow-link:hover {
            color: #ff5733; /* Change the color on hover */
            text-decoration: none;

        }
    </style>














    <div class="container-fluid">



        <div class="row py-3">




            <div class="col-md-12">
                <style>
                    .rice{
                        background-color:#021078;
                        width:100%;
                        height:100%;
                    }
                </style>
                <div class="rice">







                    <style>
                        .c1{
                            background:white;
                            width:100%;
                            height:400px;
                            margin-bottom:10px;
                        }
                        
                        .c2{
                            background:black;
                            width:100%;
                            height:400px;
                        }


                        /* Style for clickable rows */
                        .table-row-link {
                            cursor: pointer;
                        }

                        /* Style when hovering over a clickable row */
                        .table-row-link:hover {
                            background-color: #f5f5f5;
                        }


                    </style>




                

                    <div class='container-fluid c1'>   
                        <div class='row'>
                            <div class='col-md-12'>   
                                <table class='table'>
                                    <thead>
                                        <tr>
                                            <th class='text-center'>My Reminders</th>
                                    </thead>
                                    <tbody>

                                    <?php

                                        $ip = getIPAddress(); 
                                        
                                        if(isset($_SESSION['username'])){

                                            $select_query = "select * from reminders where ip_address='$ip'";
                                            $result_query= mysqli_query($con,$select_query);


                                            while($row_data = mysqli_fetch_assoc($result_query)){
                                                $tone = $row_data['tone'];
                                                $two = $row_data['two'];                                       
                                                $date= $row_data['date'];
                                                $day= $row_data['day'];
                                                $time= $row_data['time'];


                                                echo "
                                                <tr class='table-row-link' data-href='#'>
                                                                                        
                                                <td> $tone VS $two ($date,$day,$time)</td>
    
                                                </tr>
                                                
                                                ";
                                            }

                                        






                                           

                                        }else{

                                            echo "
                                            <tr class='table-row-link text-center' data-href='#'>
                                                                                    
                                            <td> Please login to set reminders</td>

                                            </tr>
                                            
                                            ";

                                        }

                                        
                                    ?>
                                        
                                        <!-- Add more rows as needed -->
                                    </tbody>
                                </table>
                            </div>

                            <a href='match_sched_main.php?clear'><div class="btn btn-primary">Clear Reminders</div></a>




                        </div>
                    </div>
                  

                

                    <script>
                        $(document).ready(function () {
                            $('.table-row-link').on('click', function () {
                                window.location.href = $(this).data('href');
                            });
                        });
                    </script>
                
















                    
                </div>

            </div>

            <div class="col-md-12 text-center my-5 text-light">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Match Schedules</h1>

                    </div>
                </div>
                
            </div>


            <?php

                $select_query = "select * from matches ";
                $result_query= mysqli_query($con,$select_query);

                while($row_data = mysqli_fetch_assoc($result_query)){
                    $match_id = $row_data['match_id'];
                    $t1id = $row_data['t1id'];
                    $t2id = $row_data['t2id'];
                    #$t1name = $row_data['t1name'];
                    #$t2name = $row_data['t2name'];
                    #$t1img = $row_data['t1img'];
                    #$t2img = $row_data['t2img'];
                    #$venue = $row_data['venue'];
                    $venid = $row_data['venid'];
                    $date= $row_data['date'];
                    $day= $row_data['day'];
                    $time= $row_data['time'];


                    

                    $select_categories = "Select * from teams where team_id=$t1id";
                    $result_categories = mysqli_query($con,$select_categories);
                    
                    
                    while($row_data = mysqli_fetch_assoc($result_categories)){
                      $t1name = $row_data['name'];
                      $t1img = $row_data['img1'];
                    
                    }

                    $select_categories = "Select * from teams where team_id=$t2id";
                    $result_categories = mysqli_query($con,$select_categories);
                    
                    
                    while($row_data = mysqli_fetch_assoc($result_categories)){
                      $t2name = $row_data['name'];
                      $t2img = $row_data['img1'];
                    
                    }


                    $select_categories = "Select * from venues where venue_id=$venid";
                    $result_categories = mysqli_query($con,$select_categories);
                    
                    
                    while($row_data = mysqli_fetch_assoc($result_categories)){
                      $venue = $row_data['venue_name'];
                    
                    }
                    

                    

                    echo "
                        <div class='col-md-12'>
                            <style>
                                .sqa{
                                    background-color:#d3d4e3;
                                    width:100%;
                                    height:150px;
                                }
                            </style>
                            <div class='team-square'>
                                <div class='row'>

                                    <div class='col'>
                                        <div class='sqa'>
                                            <div class='row px-3 text-center'>
                                                <div class='col-md-12'>
                                                    <h4>$day $date</h4>

                                                </div>
                                                <div class='col-md-12'>
                                                    <h4>$time</h4>
                                                </div>
                                                <div class='col-md-12'>
                                                    <h4>$venue</h4>
                                                    
                                                </div>
                                            </div>


                                        </div>
                                    </div>



                                    <div class='col'>
                                        <div class='sqa'>

                                            <div class='row'>
                                                <div class='col-md-12 mb-2 py-1'>
                                                    <div class='row text-center'>
                                                        <div class='col'>
                                                            <img src='Images/teams/$t1img' alt='Description' width=100px height=60px>

                                                        </div>
                                                        <div class='col'>
                                                            <a href='teams_detail_main.php?id=$t1id' class='nav-link'><h4>$t1name</h4></a>

                                                        </div>
                                                    </div>                                       
                                                </div>

                                                <div class='col-md-12'>


                                                    <div class='row text-center'>
                                                        <div class='col'>
                                                            <img src='Images/teams/$t2img' alt='Description' width=100px height=60px>

                                                        </div>
                                                        <div class='col'>
                                                        <a href='teams_detail_main.php?id=$t2id' class='nav-link'><h4>$t2name</h4></a>

                                                        </div>
                                                    </div>   




                                                    
                                                </div>
                                            </div>                             

                                        </div>

                                    </div>

                                    <div class='col'>
                                        <div class='sqa'>
                                            <div class='row text-center py-5'>
                                                <div class='col-md-12'>
                                                    <a href='match_sched_main.php?reminder=$match_id'><button class='btn btn-primary'>Add to Calendar</button></a>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>

                            </div>

                        </div>



                    
                    
                    
                    ";
                }    

            

            ?>
            




            

            


            







        </div>




    </div>







      
        
      









      

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
   </body>
</html>





<?php
if(isset($_SESSION['username'])){
    if(isset($_GET['reminder'])){

        


        echo"hi";

        global $con;
        //make it global because using in another page

        $ip = getIPAddress(); 

        
        
        

        $match_id = $_GET['reminder'];

        $select_query="Select * from reminders where ip_address='$ip' and 
        match_id=$match_id";


        $result_query= mysqli_query($con,$select_query);

        $numOfRows=mysqli_num_rows($result_query);

        if($numOfRows>0){
            echo "<script>alert('Match already added')</script>";

            echo "<script>window.open('match_sched_main.php','_self')</script>";
        }else{


        
        
        $select_query = "select * from matches where match_id=$match_id";
        $result_query= mysqli_query($con,$select_query);

        while($row_data = mysqli_fetch_assoc($result_query)){
            $t1id = $row_data['t1id'];
            $t2id = $row_data['t2id'];
            $date= $row_data['date'];
            $day= $row_data['day'];
            $time= $row_data['time'];
        }

        $select_query = "select * from teams where team_id=$t1id";
        $result_query= mysqli_query($con,$select_query);

        while($row_data = mysqli_fetch_assoc($result_query)){
            $t1name = $row_data['name'];
            
        }

        $select_query = "select * from teams where team_id=$t2id";
        $result_query= mysqli_query($con,$select_query);

        while($row_data = mysqli_fetch_assoc($result_query)){
            $t2name = $row_data['name'];
            
        }


        

        $insert_query = "insert into reminders (tone,two,ip_address,date,day,time,match_id)
        values('$t1name','$t2name','$ip','$date','$day','$time','$match_id')";


        $result_query= mysqli_query($con,$insert_query);
        echo "<script>window.open('match_sched_main.php','_self')</script>";
        echo "<script>alert('Item Added Successfully')</script>";

        }


    }

}



?>






















