<!-- connect-->
<?php
   include('includes/connect.php');
   session_start();
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
         <h3 class="text-center py-2 px-3 text-light">Teams</h3>
      </div>

      <div class="row mt-10">
         <div class="col-md-12">
            <div class="adjustableRectangle ml-0">
               <div class='row'>
                  <div class='col-md-2'>
                  </div>
                  <div class='col-md-6 text-center text-light py-1'>

                     <div class='row mt-5'>
                        <?php



                        global $con;
                        
                        $team_id=$_GET['id'];


                        $select_query = "select * from teams where team_id=$team_id";
                        $result_query= mysqli_query($con,$select_query);

                        while($row_data = mysqli_fetch_assoc($result_query)){
                            $team_id = $row_data['team_id'];
                            $team_name = $row_data['name'];
                            $team_rank = $row_data['rank'];
                            $team_img1 = $row_data['img1'];
                            $team_img2 = $row_data['img2'];
                        }








                        
                        echo "
                            <div class='col-md-12 mb-2'>
                            <img class='card-img-top float-center' src='Images/teams/$team_img1' alt='' style='width: 40%; height: 150px;'>
                            </div>
                            <div class='col-md-12 mb-2'>
                            <h1> $team_name Team</h1>
                            </div>
                            <div class='col-md-12'>
                            <h6>ODI Ranking: </h6>
                            </div>
                            <div class='col-md-12'>
                            <h3>$team_rank </h3>
                            </div>
                        ";
                        ?>
                     </div>



                  </div>
                  <div class='col-md-4 '>
                     <br><br>
                     <?php
                     echo" 
                        <img class='card-img-top float-left' src='Images/teams/$team_img2' alt='$team_name' style='width: 80%; height: 300px;'>
                        ";
                     ?>
                     
                  </div>
               </div>
            </div>
            <!-- row end -->
         </div>

         <style>
            .news{
                padding-top: 20px;
                background:white;
                width:100%;
                height:500px;
                
            }
         </style>
         <div class="container-fluid news">
            <div class="col-md-12">




                <div class="row">
                    <style>
                        .card{
                            background:#3232a8;
                        
                        }
                     </style>
                    

                    <?php

                              global $con;
                                                      


                              $select_query = "select * from news ORDER BY RAND() LIMIT 4";
                              $result_query= mysqli_query($con,$select_query);

                              while($row_data = mysqli_fetch_assoc($result_query)){
                                 $id = $row_data['id'];
                                 $img1 = $row_data['img1'];
                                 $title = $row_data['title'];
                                 $sdesc = $row_data['sdesc'];


                                 echo "

                                 <div class='col-md-3'>
                                    <div class='card text-light' style='width: 18rem;'>
                                    <img class='card-img-top float-center' src='Images/news/$img1' alt='' style='width: 100%; height: 160px;'>
                                       <div class='card-body'>
                                          <h5 class='card-title'>$title</h5>
                                          <p class='card-text'>$sdesc</p>
                                          <a href='news_details.php?id=$id' class='btn btn-primary'>Read More</a>
                                       </div>
                                    </div>
                                 
                                 </div>
                                 
                                 
                                 ";
                                 
                     
                              }
                        


                    ?>

                    
                </div>
                
                
            </div>
         </div>

         </div>

         <style>
            .squad{
                height:450px;
                padding-top: 20px;
                background:#25069e; 
            }
            
         </style>

         <div class="container-fluid squad">
            <div class="col-md-12">
                
                <div class='row'>
                    <div class='col-md-4 text-light text-center'>
                        <h1>Squad Details</h1>
                    </div>


                    <div class='col-md-8 text-dark'>
                        <div class='row text-light'>


                        <!--players rectangles-->
                        <?php

                            $select_query = "select * from players where team_id=$team_id";
                            $result_query= mysqli_query($con,$select_query);

                            while($row_data = mysqli_fetch_assoc($result_query)){
                                $player_id = $row_data['player_id'];
                                $player_name = $row_data['player_name'];
                                $player_pos = $row_data['player_pos'];
                                $player_img1 = $row_data['player_img1'];
                                
                            

                            echo"

                                <div class='col-md-6 '>
                                    <div class='players-rect ml-0'>
                                            <div class='row text-light clickable-row '>
                                                <div class='col-md-2 '>
                                                    <img  class='mt-1' src='Images/players/$player_img1' alt='$team_name' style='width: 100%; height: 55px;'>

                                                </div>
                                                <div class='col-md-6 '>
                                                    <div class='row '>
                                                        <div class='col-md-12'>
                                                            <p>$player_name</p>

                                                        </div>
                                                        <div class='col-md-12'>
                                                            <p>$player_pos</p>

                                                        </div>
                                                        
                                                    </div>

                                                </div>
                                                <div class='col-md-4 text-center'>
                                                    <div class='row'>
                                                        <div class='col-md-12'>
                                                        <a href='player_profiles.php?player_id=$player_id' class='nav-link'>-></a>
                                                        </div>
                                                    
                                                    </div>
                                                    
                            

                                                </div>

                                            </div>
                                        
                                    </div>
                                </div>

                            
                            
                            
                            ";
                            }

                           
                        ?>

                            

                        <!--end of players rectangele-->

                            


                            
                        </div>
                    </div>





                </div>
                </div>
            </div>
        
        </div>





         <!--col end -->
      </div>



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



      <div class="container-fluid c1">   
        <div class="row">
            <div class="col-md-6">   

            <h2>Records of Afghanistan</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>Team Records</th>
                </thead>
                <tbody>
                    <tr class="table-row-link" data-href="team_records.php?id=1">
                        
                        <td>One Day International</td>
                        
                    </tr>
                    <tr class="table-row-link" data-href="team_records.php?id=1">
                        
                        <td>Test Matches</td>
                        
                    </tr>
                    <tr class="table-row-link" data-href="team_records.php?id=1">
                        
                        <td>Twenty20 Internationals</td>
                        
                    </tr>
                    
                    <!-- Add more rows as needed -->
                </tbody>
            </table>
            </div>




        </div>
      </div>




      <div class="container-fluid c2">
           
        <div class="row">


        </div>
      </div>

      
      <script src="path/to/jquery.min.js"></script>
      <script src="path/to/bootstrap.min.js"></script>

      <script>
        $(document).ready(function () {
            $('.table-row-link').on('click', function () {
                window.location.href = $(this).data('href');
            });
        });
    </script>





      
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
   </body>
</html>