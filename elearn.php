<!DOCTYPE html>
<html lang="en"
  xmlns:th="http://www.thymeleaf.org"
>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" href="css/network.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />
    <!-- Google Font -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
  />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap"
      rel="stylesheet"
    />


<style>
    td{
        padding:10px;
    }

    #preloader {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: #fff; /* Choose the background color you want */
  z-index: 9999;
  display: flex;
  justify-content: center;
  align-items: center;
}
    input{
        height:40px;
        width:80%;
    }
    select{
        height:40px;
        width:80%;
    }
    table{
        font-size:18px;
        background-color:red;
        color:white;
        box-shadow:0px 0px 5px blue;
    }
    </style>


    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->
    <title>Network</title>
</head>
<body>
<div id="preloader">
    <img src="./assests/pre1.gif"  alt="Loading..." style="width: 200px; padding: 0px; margin: 0px;"/><br>
    
  </div>
   
    <nav>
        <div class="nav-bar">
            <i class='bx bx-menu sidebarOpen' ></i>
            <span class="logo navLogo" id="ggg"><a href="#"><img src="./assests/logo1.png" style="height: 35px;margin-top: 10px;"></a></span>

            <div class="menu">
                <div class="logo-toggle" >
                    <span class="logo" style="margin-top:40px;"><a href="#">GRITUP</a></span>
                    <i class='bx bx-x siderbarClose'></i>
                </div>

                <ul class="nav-links">
                <li><a href="index.html" >Home</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="personalized.html">Customize</a></li>
                    <li><a href="network.html">Network</a></li>
                    <li><a href="#ab">About</a></li>
                    <li><a href="login.php">Admin</a></li>
               </ul>
            </div>

            <div class="darkLight-searchBox">
                <div class="dark-light" style="margin-bottom: 20px;"><a href="Profile.html">
                    <i class="fa-solid fa-user"></i></a>
                </div>

                <div class="searchBox">
                   <div class="searchToggle">
                    
                   </div>

                    <div class="search-field">
                        
                    </div>
                </div>
            </div>
        </div>
    </nav>


    <br><br><br><br>
   
    <div >
    <h2 style="font-size: xx-large; margin-left: 35px; color: blueviolet;">PHP E-Learning</h2>
    <br>
    <div  width="100%" style="display:flex;flex-wrap: wrap;"  >
      <?php
    $con = mysqli_connect("localhost","root","","gritup");
    $q = "select * from service where servicename='elearning'";
    $r = mysqli_query($con,$q);
    $i=1;
    while($d = mysqli_fetch_assoc($r)){
        $link = $d['link'];
        
    
       echo "<div style='margin-left:20px'>";
   
       echo "<div><iframe width='560' height='315' src='$link' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share' allowfullscreen></iframe></div>";
       echo "</div>";
    }
    ?>
</div>


</div>


<div class="home">
    <button type="button" class="Home"><a href="index.html">Home</a></button>
</div>


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

document.addEventListener("DOMContentLoaded", function() {
      var preloader = document.getElementById("preloader");

      setTimeout(function() {
        preloader.style.display = "none";
      }, 1500); // Display preloader for 2 seconds
    });
    document.addEventListener("DOMContentLoaded", function() {
      var preloade = document.getElementById("preloade");

      setTimeout(function() {
        preloader.style.display = "none";
      }, 1000); // Display preloader for 2 seconds
    });
</script>
    



    
</body>
</html>