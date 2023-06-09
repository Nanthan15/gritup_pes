<!DOCTYPE html>
<html lang="en" xmlns:th="http://www.thymeleaf.org">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" href="css/network.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <!-- Google Font -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet" />


    <style>
        td {
            padding: 10px;
        }

        input {
            height: 40px;
            width: 80%;
        }

        select {
            height: 40px;
            width: 80%;
        }

        table {
            font-size: 18px;
            background-color: #0abde3;
            color: white;
            box-shadow: 0px 0px 5px blue;
        }
    </style>


    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->
    <title>Network</title>
</head>

<body>
    <?php

    if (isset($_REQUEST['log'])) {
        $cn = $_REQUEST['cname'];
        $ro = $_REQUEST['role'];
        $da = $_REQUEST['date'];
        $de = $_REQUEST['descript'];
        $li = $_REQUEST['link'];

        $con = mysqli_connect("localhost", "root", "", "gritup");
        $q = "insert into job (cname,role,date,descript,link) values('$cn','$ro','$da','$de','$li')";
        $r = mysqli_query($con, $q);
        if ($r) {
            echo "<script>alert('Job Added');</script>";
        } else {
            //mysqli_query($con);
        }
    }
    ?>
    <nav>
        <div class="nav-bar">
            <i class='bx bx-menu sidebarOpen'></i>
            <span class="logo navLogo" id="ggg"><a href="#"><img src="./assests/logo1.png" style="height: 35px;margin-top: 10px;"></a></span>

            <div class="menu">
                <div class="logo-toggle">
                    <span class="logo" style="margin-top:40px;"><a href="#">GRITUP</a></span>
                    <i class='bx bx-x siderbarClose'></i>
                </div>

                <ul class="nav-links">
                    <li><a href="dashboard.php">Upload Material</a></li>
                    <li><a href="faq.php">Add FAQ</a></li>
                    <li><a href="studentadmin.php">Add Student Admin</a></li>
                    <li><a href="jobs.php">Add Jobs</a></li>
                    <li><a href="index.html">Logout</a></li>
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


    <br><br><br><br><br><br>

    <div>
        <form method="post" action="" enctype="multipart/form-data">
            <table border="0" align="center" width="40%" cellspacing="10" cellpadding="10">
                <tr>
                    <td>Company Name</td>
                    <td><input type="text" name="cname" id="cname"></td>
                </tr>

                <tr>
                    <td>Job Role</td>
                    <td><input type="text" name="role" id="role"></td>
                </tr>
                <tr>
                    <td>Date</td>
                    <td><input type="Date" name="date" id="date"></td>
                </tr>
                <tr>
                    <td>Job Decription</td>
                    <td>
                        <textarea name="descript" rows="6" cols="37"></textarea>
                    </td>
                </tr>
                <td>Website Link</td>
                <td><input type="text" name="link" id="link"></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" value="Add Job" name="log"></td>
                </tr>

            </table>
        </form>

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
        if (getMode && getMode === "dark-mode") {
            body.classList.add("dark");
        }

        // js code to toggle dark and light mode
        modeToggle.addEventListener("click", () => {
            modeToggle.classList.toggle("active");
            body.classList.toggle("dark");

            // js code to keep user selected mode even page refresh or file reopen
            if (!body.classList.contains("dark")) {
                localStorage.setItem("mode", "light-mode");
            } else {
                localStorage.setItem("mode", "dark-mode");
            }
        });

        // js code to toggle search box
        searchToggle.addEventListener("click", () => {
            searchToggle.classList.toggle("active");
        });


        //   js code to toggle sidebar
        sidebarOpen.addEventListener("click", () => {
            nav.classList.add("active");
        });

        body.addEventListener("click", e => {
            let clickedElm = e.target;

            if (!clickedElm.classList.contains("sidebarOpen") && !clickedElm.classList.contains("menu")) {
                nav.classList.remove("active");
            }
        });
    </script>





</body>

</html>