<?php
   include('includes/connect.php');
   session_start();
?>

<!DOCTYPE html>
<!-- Coding By CodingNepal - www.codingnepalweb.com -->
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link
    rel="stylesheet"
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z"
    crossorigin="anonymous"
/>
    <title>CricNews!</title>
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
        .color {
border: 2px solid white;
}

    </style>
  </head>
  <body>
    <!-- header start -->
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
 <br> <br>
</head>
    <body>

        <?php


            global $con;
                                    
            $venue_id=$_GET['venue_id'];


            $select_query = "select * from venues where venue_id=$venue_id";
            $result_query= mysqli_query($con,$select_query);

            while($row_data = mysqli_fetch_assoc($result_query)){
                $venue_id = $row_data['venue_id'];
                $venue_name = $row_data['venue_name'];
                $venue_img1 = $row_data['venue_img1'];
                $venue_ldesc = $row_data['venue_ldesc'];
                $venimg2 = $row_data['venimg2'];
                $venimg3 = $row_data['venimg3'];
                $venimg4 = $row_data['venimg4'];
                $iframe = $row_data['iframe'];
             
            }





        echo"

        

        <div class='container-fluid'>
            <div class='row'>
                <div class='col-md-2'></div>
                <div class='col-md-6'><img src='Images/Venues/$venue_img1' alt='venue1' style='height: 550px;width:100%;' ></div>
                <div class='col-md-4'> <iframe src='$iframe'
                    width='400' height='300' style='border:0; position: absolute; top: 250px;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe></div>
            </div>
        </div>
        <br>
        <div class='container-fluid'>
            <div class='row'>
                <div class='col'> <h2 style='color: #fff; text-align: center; font-weight: bold; font-size: 50px;'>$venue_name</h2></div>
            </div>
        </div>
       
        <div class='container-fluid'>
            <div class='row'>
                <div class='col-md-2' style='background-color: #fff;'></div>
                <div class='col-md-8' style='background-color: #fff; height: 600px;'> <p style='color:black; text-align: center; font-size: 25px;'>
                $venue_ldesc
                 <br> <br>
                </p></div>
                <div class='col-md-2' style='background-color: #fff;'></div>
            </div>
        </div>
            ";
        ?>
        <br> <br>






        <style>
            * {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
        </style>

        <div class="container-fluid"><h1 style="color: white; font-weight: bold; font-size: 50px; text-align: center;">Virtual Tour</h1></div>
        <!-- Slideshow container -->
<div class="slideshow-container">

    <!-- Full-width images with number and caption text -->
    <?php

    echo "

        <div class='mySlides fade'>
            <div class='numbertext'>1 / 3</div>
            <img src='Images/Venues/$venimg2' style=' height: 500px; width: 1100px;'>
            <div class='text'>image 1</div>
        </div>

        <div class='mySlides fade'>
            <div class='numbertext'>2 / 3</div>
            <img src='Images/Venues/$venimg3' style=' height: 500px; width: 1100px;'>
            <div class='text'>image 2</div>
        </div>

        <div class='mySlides fade'>
            <div class='numbertext'>3 / 3</div>
            <img src='Images/Venues/$venimg4' style=' height: 500px; width: 1100px;'>
            <div class='text'>image 3</div>
        </div>
        
    
    
    
    "
    


    ?>
    
  
    <!-- Next and previous buttons -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
  </div>
  <br>
  
  <!-- The dots/circles -->
  <div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
  </div>
               <div class="container-fluid d-7" style="background-color: black; height: 200px; color: white;">FOOTER</div>


<script>
      let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

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
    </body>
    </html>