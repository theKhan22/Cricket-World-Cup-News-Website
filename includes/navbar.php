<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="style.css">
        
    <!-- ===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <title>ICC Cricket World Cup 2023</title>

</head>
<body>
    <header>
        <h1>ICC Cricket World Cup 2023</h1>

    <nav>
        <div class="nav-bar">
            <i class='bx bx-menu sidebarOpen' ></i>
            <span class="logo navLogo"><a href="#">CodingLab</a></span>
            <div class="menu">
                <div class="logo-toggle">
                    <span class="logo"><a href="#">CodingLab</a></span>
                    <i class='bx bx-x siderbarClose'></i>
                </div>
                <ul class="nav-links">
                <li><a href="Home.php">Home</a></li>
                    <li><a href="matches.php">Matches</a></li>
                    <li><a href="teams.php">Teams</a></li>
                    <li><a href="standings.php">Standings</a></li>
                    <li><a href="players.php">Players</a></li>
                    <li><a href="venue.php">Venues</a></li>
                </ul>
            </div>
            <div class="darkLight-searchBox">
                <div class="dark-light">
                    <i class='bx bx-moon moon'></i>
                    <i class='bx bx-sun sun'></i>
                </div>
                <div class="searchBox">
                   <div class="searchToggle">
                    <i class='bx bx-x cancel'></i>
                    <i class='bx bx-search search'></i>
                   </div>
                    <div class="search-field">
                        <input type="text" placeholder="Search...">
                        <i class='bx bx-search'></i>
                    </div>
                </div>
            </div>
        </div>
    </nav>


    <script>
        const body = document.querySelector("body"),
            nav = document.querySelector("nav"),
            modeToggle = document.querySelector(".dark-light"),
            searchToggle = document.querySelector(".searchToggle"),
            sidebarOpen = document.querySelector(".sidebarOpen"),
            siderbarClose = document.querySelector(".siderbarClose");
            let getMode = localStorage.getItem("mode");
                if(getMode && getMode === "dark-mode"){
                    body.classList.add("dark");
                }
        // js code to toggle dark and light mode
            modeToggle.addEventListener("click" , () =>{
                modeToggle.classList.toggle("active");
                body.classList.toggle("dark");
                // js code to keep user selected mode even page refresh or file reopen
                if(!body.classList.contains("dark")){
                    localStorage.setItem("mode" , "light-mode");
                }else{
                    localStorage.setItem("mode" , "dark-mode");
                }
            });
        // js code to toggle search box
                searchToggle.addEventListener("click" , () =>{
                searchToggle.classList.toggle("active");
            });
        
            
        //   js code to toggle sidebar
        sidebarOpen.addEventListener("click" , () =>{
            nav.classList.add("active");
        });
        body.addEventListener("click" , e =>{
            let clickedElm = e.target;
            if(!clickedElm.classList.contains("sidebarOpen") && !clickedElm.classList.contains("menu")){
                nav.classList.remove("active");
            }
        });
    </script>


<!--

<nav>
    <ul>
        <a href="Home.php">HOME</a>
        <a href="fixtures.html">MATCHES</a>
        <a href="teams.html">TEAMS</a>
        <a href="">STANDINGS</a>
        <a href="players.html">PLAYERS</a>
        <a href="venue.php">VENUE</a>
    </ul>
</nav>

-->

    
    </header>
    <footer>
        <p>&copy; 2023 ICC Cricket World Cup</p>
    </footer>
</body>
</html>
