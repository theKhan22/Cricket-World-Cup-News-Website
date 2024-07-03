<?php
   include('includes/connect.php');
   session_start();



   $player_id=$_GET['player_id'];


   $select_query = "select * from players where player_id=$player_id";
   $result_query= mysqli_query($con,$select_query);

   while($row_data = mysqli_fetch_assoc($result_query)){
       $player_id = $row_data['player_id'];
       $player_name = $row_data['player_name'];
       $player_img1 = $row_data['player_img1'];

   }





   $select_query = "select * from player_details where player_id=$player_id";
   $result_query= mysqli_query($con,$select_query);

   while($row_data = mysqli_fetch_assoc($result_query)){

    $role= $row_data['role'];
    $dob = $row_data['dob'];
    $batting = $row_data['batting'];
    $dofdeb = $row_data['dofdeb'];

    $odib_crank = $row_data['odib_crank'];
    $odib_hrank = $row_data['odib_hrank'];
    $odib_crate = $row_data['odib_crate'];
    $odib_hrate = $row_data['odib_hrate'];

    $odibo_crank = $row_data['odibo_crank'];
    $odibo_hrank = $row_data['odibo_hrank'];
    $odibo_crate = $row_data['odibo_crate'];
    $odibo_hrate = $row_data['odibo_hrate'];

    $odir_crank = $row_data['odir_crank'];
    $odir_hrank = $row_data['odir_hrank'];
    $odir_crate = $row_data['odir_crate'];
    $odir_hrate = $row_data['odir_hrate'];
      

   }
   
   






?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <title>Document</title>
    <link
        rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z"
        crossorigin="anonymous"
    />
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
        background: #3232a8;
        }
        .header {
        position: static;
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
     <style>

            .row{
                padding: 20px;
                text-align: center;
            }

       
            .design-2{
                border: 10px solid white;
                background-color: rgb(50, 2, 112);
            }
            .design-3{
                height: 300px;
                background-color: white;
           border: 10px solid white;
            }
          
        </style>
    
</head>
<body>

    <div class="container-fluid">
        <div class="row design-2">
          <div class="col-7">
            <div class="row">
                <div class="col">     
                </div>
                <div class="col">     
                </div>
                <div class="col">
                    <span style="color: yellow; font-weight: bold;">Team Profile </span> <br> 
                    <span style="color: white; font-weight: bold;font-size: 42px;"><?php echo $player_name ?></span>    
                </div>
                <div class="col">     
                </div>
            </div>
            <div class="row"></div>
            <div class="row"></div>
            <div class="row">
                <div class="col"></div>
                <div class="col" style="color: white; font-size: 15px; font-weight: bold;">ROLE: <span style="color: yellow;"> <?php echo $role ?></span>  <br>            
                    DATE OF BIRTH:<span style="color: yellow;"> <?php echo $dob ?></span> </div>
                <div class="col"></div>
                <div class="col" style="color: white; font-size: 15px; font-weight: bold;">BATTING: <span style="color: yellow;"> <?php echo $batting ?></span>  <br>              
                    DATE OF DEBUT: <span style="color: yellow;"> <?php echo $dofdeb ?></span> </div>
            </div>
          </div>
          <?php
          echo "

          <div class='col-5'>
          <img src=Images/players/$player_img1 alt='sakib' style='height: 350px; width: 400px; position: absolute; top: -15px; left: 100px;'>

          </div>
          
          
          
          "
        
          ?>
          
     
       
        </div>
     
       
        </div>
        <br> <br>
     <h3 style="color:white; padding-left: 420px;">RANKINGS <span style="color: rgb(255, 118, 141);"> DASHBOARD</span></h3>
   

    

      <div class="container">
        <div class="row">
          <div class="col design-2">
            <div class="row" style="color: yellow; font-weight: bold; position: relative; left: 45px; font-size: 30px;">ODI BATTING</div>
            <div class="col">
               <div class="row">
                <div class="row" style="color: white; font-weight: bold; font-size: 20px;">CURRENT <br>RANKING <br> <?php echo $odib_crank ?></div>
                <div class="row" style="color: white;; font-weight: bold; font-size: 20px;">HIGHEST <br> RANKING <br> <?php echo $odib_hrank ?></div>
               </div>
            </div>
            <div class="col">
                <div class="row">
                    <div class="row" style="color: white; font-weight: bold; font-size: 20px;">CURRENT <br> RATING <br> <?php echo $odib_crate ?></div>
                    <div class="row" style="color: white;; font-weight: bold; font-size: 20px;">HIGHEST <br> RATING <br><?php echo $odib_hrate ?></div>
                   </div>
            </div>
          </div>
          <div class="col design-2">
            <div class="row" style="color: yellow; font-weight: bold; position: relative; left: 45px; font-size: 30px;">ODI BOWLING</div>
            <div class="col">
               <div class="row">
                <div class="row" style="color: white; font-weight: bold; font-size: 20px;">CURRENT <br>RANKING <br> <?php echo $odibo_crank ?></div>
                <div class="row" style="color: white;; font-weight: bold; font-size: 20px;">HIGHEST <br> RANKING <br> <?php echo $odibo_hrank ?></div>
               </div>
            </div>
            <div class="col">
                <div class="row">
                    <div class="row" style="color: white; font-weight: bold; font-size: 20px;">CURRENT <br> RATING <br><?php echo $odibo_crate ?></div>
                    <div class="row" style="color: white;; font-weight: bold; font-size: 20px;">HIGHEST <br> RATING <br><?php echo $odibo_hrate ?></div>
                   </div>
            </div>
          </div>
          <div class="col design-2">
            <div class="row" style="color: yellow; font-weight: bold; position: relative; left: 15px; font-size: 30px;">ODI ALL-ROUNDER</div>
            <div class="col">
               <div class="row">
                <div class="row" style="color: white; font-weight: bold; font-size: 20px;">CURRENT <br>RANKING <br> <?php echo $odir_crank ?></div>
                <div class="row" style="color: white;; font-weight: bold; font-size: 20px;">HIGHEST <br> RANKING <br> <?php echo $odir_hrank ?></div>
               </div>
            </div>
            <div class="col">
                <div class="row">
                    <div class="row" style="color: white; font-weight: bold; font-size: 20px;">CURRENT <br> RATING <br> <?php echo $odir_crate ?></div>
                    <div class="row" style="color: white;; font-weight: bold; font-size: 20px;">HIGHEST <br> RATING <br><?php echo $odir_hrate ?></div>
                   </div>
            </div>
          </div>
        
      </div> 




      <div class="container">
        <div class="row">
          <div class="col design-2">
            <div class="row" style="color: yellow; font-weight: bold; position: relative; left: 45px; font-size: 30px;">T20 BATTING</div>
            <div class="col">
               <div class="row">
                <div class="row" style="color: white; font-weight: bold; font-size: 20px;">CURRENT <br>RANKING <br> <?php echo $odib_crank ?></div>
                <div class="row" style="color: white;; font-weight: bold; font-size: 20px;">HIGHEST <br> RANKING <br> <?php echo $odib_hrank ?></div>
               </div>
            </div>
            <div class="col">
                <div class="row">
                    <div class="row" style="color: white; font-weight: bold; font-size: 20px;">CURRENT <br> RATING <br> <?php echo $odib_crate ?></div>
                    <div class="row" style="color: white;; font-weight: bold; font-size: 20px;">HIGHEST <br> RATING <br><?php echo $odib_hrate ?></div>
                   </div>
            </div>
          </div>
          <div class="col design-2">
            <div class="row" style="color: yellow; font-weight: bold; position: relative; left: 45px; font-size: 30px;">T20 BOWLING</div>
            <div class="col">
               <div class="row">
                <div class="row" style="color: white; font-weight: bold; font-size: 20px;">CURRENT <br>RANKING <br> <?php echo $odibo_crank ?></div>
                <div class="row" style="color: white;; font-weight: bold; font-size: 20px;">HIGHEST <br> RANKING <br> <?php echo $odibo_hrank ?></div>
               </div>
            </div>
            <div class="col">
                <div class="row">
                    <div class="row" style="color: white; font-weight: bold; font-size: 20px;">CURRENT <br> RATING <br><?php echo $odibo_crate ?></div>
                    <div class="row" style="color: white;; font-weight: bold; font-size: 20px;">HIGHEST <br> RATING <br><?php echo $odibo_hrate ?></div>
                   </div>
            </div>
          </div>
          <div class="col design-2">
            <div class="row" style="color: yellow; font-weight: bold; position: relative; left: 15px; font-size: 30px;">T20 ALL-ROUNDER</div>
            <div class="col">
               <div class="row">
                <div class="row" style="color: white; font-weight: bold; font-size: 20px;">CURRENT <br>RANKING <br> <?php echo $odir_crank ?></div>
                <div class="row" style="color: white;; font-weight: bold; font-size: 20px;">HIGHEST <br> RANKING <br> <?php echo $odir_hrank ?></div>
               </div>
            </div>
            <div class="col">
                <div class="row">
                    <div class="row" style="color: white; font-weight: bold; font-size: 20px;">CURRENT <br> RATING <br> <?php echo $odir_crate ?></div>
                    <div class="row" style="color: white;; font-weight: bold; font-size: 20px;">HIGHEST <br> RATING <br><?php echo $odir_hrate ?></div>
                   </div>
            </div>
          </div>
        
      </div> 


      <div class="container">
        <div class="row">
          <div class="col design-2">
            <div class="row" style="color: yellow; font-weight: bold; position: relative; left: 45px; font-size: 30px;">TEST BATTING</div>
            <div class="col">
               <div class="row">
                <div class="row" style="color: white; font-weight: bold; font-size: 20px;">CURRENT <br>RANKING <br> <?php echo $odib_crank ?></div>
                <div class="row" style="color: white;; font-weight: bold; font-size: 20px;">HIGHEST <br> RANKING <br> <?php echo $odib_hrank ?></div>
               </div>
            </div>
            <div class="col">
                <div class="row">
                    <div class="row" style="color: white; font-weight: bold; font-size: 20px;">CURRENT <br> RATING <br> <?php echo $odib_crate ?></div>
                    <div class="row" style="color: white;; font-weight: bold; font-size: 20px;">HIGHEST <br> RATING <br><?php echo $odib_hrate ?></div>
                   </div>
            </div>
          </div>
          <div class="col design-2">
            <div class="row" style="color: yellow; font-weight: bold; position: relative; left: 45px; font-size: 30px;">TEST BOWLING</div>
            <div class="col">
               <div class="row">
                <div class="row" style="color: white; font-weight: bold; font-size: 20px;">CURRENT <br>RANKING <br> <?php echo $odibo_crank ?></div>
                <div class="row" style="color: white;; font-weight: bold; font-size: 20px;">HIGHEST <br> RANKING <br> <?php echo $odibo_hrank ?></div>
               </div>
            </div>
            <div class="col">
                <div class="row">
                    <div class="row" style="color: white; font-weight: bold; font-size: 20px;">CURRENT <br> RATING <br><?php echo $odibo_crate ?></div>
                    <div class="row" style="color: white;; font-weight: bold; font-size: 20px;">HIGHEST <br> RATING <br><?php echo $odibo_hrate ?></div>
                   </div>
            </div>
          </div>
          <div class="col design-2">
            <div class="row" style="color: yellow; font-weight: bold; position: relative; left: 15px; font-size: 30px;">TEST ALL-ROUNDER</div>
            <div class="col">
               <div class="row">
                <div class="row" style="color: white; font-weight: bold; font-size: 20px;">CURRENT <br>RANKING <br> <?php echo $odir_crank ?></div>
                <div class="row" style="color: white;; font-weight: bold; font-size: 20px;">HIGHEST <br> RANKING <br> <?php echo $odir_hrank ?></div>
               </div>
            </div>
            <div class="col">
                <div class="row">
                    <div class="row" style="color: white; font-weight: bold; font-size: 20px;">CURRENT <br> RATING <br> <?php echo $odir_crate ?></div>
                    <div class="row" style="color: white;; font-weight: bold; font-size: 20px;">HIGHEST <br> RATING <br><?php echo $odir_hrate ?></div>
                   </div>
            </div>
          </div>
        
      </div> 

      <h3 style="color: white; padding-left:40px;">LATEST <span style="color: White;">News</span></h3>

             <div class="container">
                <div class="row">
                  <style>
                    .card{
                        background:white;
                    
                    }
                  </style>

                  <?php

                      global $con;
                                              


                      $select_query = "select * from news ORDER BY RAND() LIMIT 2";
                      $result_query= mysqli_query($con,$select_query);

                      while($row_data = mysqli_fetch_assoc($result_query)){
                          $id = $row_data['id'];
                          $img1 = $row_data['img1'];
                          $title = $row_data['title'];
                          $sdesc = $row_data['sdesc'];


                          echo "

                          <div class='col-md-3 mx-5'>
                            <div class='card text-dark' style='width: 18rem;'>
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
  
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script
        src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"
    ></script>
    <script
        src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"
    ></script>
</body>
</html>
