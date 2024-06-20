<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--============= css ====================-->
    <link rel="stylesheet" href="CodeForces profile.css">


    <!--============= boxicon ====================-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!--============= php ====================-->
    <link href="table.php">

    <title>
        CodeForces Profile
    </title>
</head>

<body>
    <!-- SideBar start -->
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="logo.png" alt="logo">
                </span>

                <div class="text head-text">
                    <span class="name">CODEJATRA </span>
                    <br>
                    <span class="slogan">Track Transform Triumph </span>
                </div>
            </div>



        </header>

        <div class="menu-bar">
            <div class="menu">
                <i class='bx bx-chevron-right toggle'></i>
                <li class="search-box">

                    <i class='bx bx-search-alt-2 icon'></i>
                    <input type="text" placeholder="Search...">

                </li>
                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="../dashboard/dashboard.php" id="Dashboard">
                            <i class='bx bx-home-alt icon'></i>
                            <span class="text nav-text">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="../CodeForcesProfile/CodeForces profile.php" id="CodeForces Profile">
                            <i class='bx bx-bar-chart-alt-2 icon'></i>
                            <span class="text nav-text">CodeForces Profile</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="../problemtable/problemtable.php" id="Atcoder Profile">
                            <i class='bx bx-bug icon'></i>
                            <span class="text nav-text">Atcoder Profile</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="../Leaderboard/leaderboardPage.php" id="LeaderBoard">
                            <i class='bx bx-trophy icon'></i>
                            <span class="text nav-text">LeaderBoard</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="../IUPC details/IUPC.php" id="IUPC Details">
                            <i class='bx bx-detail icon'></i>
                            <span class="text nav-text">IUPC Details</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="../To-do-list/todolist.php" id="ToDo List">
                            <i class='bx bx-list-check icon'></i>
                            <span class="text nav-text">ToDo List</span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="bottom-content">
                <li class="nav-link">
                    <a href="../landing page/landingpage.php" id="Logout">
                        <i class='bx bx-log-out icon'></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>
                <li class="mode">
                    <div class="moon-sun">
                        <i class='bx bx-moon icon moon'></i>
                        <i class='bx bx-sun icon sun'></i>

                    </div>
                    <span class="mode-text text">Dark Mode</span>

                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>
            </div>
        </div>
    </nav>



    <section class="home">
        <div class="nav-bar">
            <ul class="dp-bell">
                <a href="#">
                    <li class="bell">
                        <i class='bx bxs-bell icon'></i>
                    </li>
                </a>

                <li class="dp">
                    <a href="../profile_page/profile_page.php">
                        <img id="userImage" alt="Image" />

                        <script>
                            // JavaScript to set the image source dynamically
                            window.onload = function() {
                                // Retrieve the email from localStorage
                                var email = localStorage.getItem('email');

                                // Check if email is available
                                if (email) {
                                    // Fetch the image path from the PHP script
                                    fetch(`http://localhost/image.php?email=${encodeURIComponent(email)}`)
                                        .then(response => {
                                            if (!response.ok) {
                                                throw new Error('Network response was not ok');
                                            }
                                            return response.text();
                                        })
                                        .then(imagePath => {
                                            // Set the src attribute of the img element
                                            var actualPath = '../landing page/'
                                            actualPath += imagePath
                                            document.getElementById('userImage').src = actualPath;
                                        })
                                        .catch(error => {
                                            console.error('Error fetching image path:', error);
                                        });
                                } else {
                                    // Handle the case where email is not available in localStorage
                                    console.error('Email not found in localStorage');
                                }
                            }
                        </script>
                    </a>
                </li>

            </ul>
        </div>
        <!-- Top end -->

        <div class="mid">
            <img id="user_profile_icon">
            <script>
                // JavaScript to set the image source dynamically
                    // Retrieve the email from localStorage
                    var email = localStorage.getItem('email');

                    // Check if email is available
                    if (email) {
                        // Fetch the image path from the PHP script
                        fetch(`http://localhost/image.php?email=${encodeURIComponent(email)}`)
                            .then(response => {
                                if (!response.ok) {
                                    throw new Error('Network response was not ok');
                                }
                                return response.text();
                            })
                            .then(imagePath => {
                                // Set the src attribute of the img element
                                var actualPath = '../landing page/'
                                actualPath += imagePath
                                document.getElementById('user_profile_icon').src = actualPath;
                            })
                            .catch(error => {
                                console.error('Error fetching image path:', error);
                            });
                    } else {
                        // Handle the case where email is not available in localStorage
                        console.error('Email not found in localStorage');
                    }
            </script>
            <span class = "handle-name">Handle:AJFaisal002 </span>
        </div>

        <!-- Bar graph start -->
        <div class="container">
            <div class="percent">
                <span>300</span>
                <span>250</span>
                <span>200</span>
                <span>150</span>
                <span>100</span>
                <span>50</span>
                <span>0</span>
            </div>
            <p>
            <div class="options">
                <span class="option">800</span>
                <span class="option">900</span>
                <span class="option">1000</span>
                <span class="option">1100</span>
                <span class="option">1200</span>
                <span class="option">1300</span>
            </div>
            <div class="chart-label">Bar Chart Submission</div>


        </div>

        <!-- Bar graph end -->

        <!-- Line graph start -->

        <!-- Line graph end -->

    </section>

    <script src="mixed_profile.js"></script>

</body>

</html>