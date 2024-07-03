<!-- connect-->
<?php
   include('../includes/connect.php');
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
               <li><a href="../homepage.php">Home</a></li>
               <li><a href="../match_sched_main.php">Matches</a></li>
               <li><a href="../teams_f.php">Teams</a></li>
               <li><a href="../venuelist.php">Venues</a></li>
               <li><a href="../standing_main.php">Standings</a></li>
               <li><a href="../news.php">News</a></li>
            </ul>
            <div class="buttons">
               <a href="#" class="signin">Sign In</a>
               <a href="#" class="signup">Sign Up</a>
            </div>
         </nav>
      </header>
      <br><br><br><br>
      <div class="custom-bg">
         <h3 class="text-center py-2 px-3 text-light">Teams</h3>
      </div>


        <div class="container-fluid">

        
            <div class="row">
                <div class="col-md-12 bg-secondary p-1 d-flex align-items-center">
                  <div class="p-3">
                     <a href="#"><img src="../download.png" alt="" class="Admin-Image"></a>
                     <p class="text-light text-center">Admin Name</p>
                  </div>
                  <div class="button text-center">
                     <button><a href="insert_team.php" class="nav-link text-light bg-primary my-1">Add Teams</a></button>
                     <button><a href="update_teams.php" class="nav-link text-light bg-primary my-1">Update Teams</a></button>
                     <button><a href="delete_team.php" class="nav-link text-light bg-primary my-1">Delete Teams</a></button>
                     <button><a href="insert_player.php" class="nav-link text-light bg-primary my-1">Add Players</a></button>
                     <button><a href="insert_venue.php" class="nav-link text-light bg-primary my-1">Add Venues</a></button>
                     <button><a href="insert_match.php" class="nav-link text-light bg-primary my-1">Add Matches</a></button>
                     <button><a href="insert_playerdet.php" class="nav-link text-light bg-primary my-1">Add Player Information</a></button>
                     <button><a href="update_rank.php" class="nav-link text-light bg-primary my-1">Update Rankings</a></button>
                     <button><a href="add_news.php" class="nav-link text-light bg-primary my-1">Add News</a></button>
                                         
                  </div>
                </div>
                
            </div>

        </div>

              

            


     
      
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
   </body>
</html>