<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--============= css ====================-->
    <link rel="stylesheet" href="profile_page.css">


    <!--============= boxicon ====================-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <title>
        Dark-Light Mode| profile Page
    </title>
</head>

<body>
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


        <div class="profile-info">

            <span class="profile-picture">
                <img src="DP.jpg" alt="profile picture">
            </span>

            <div class="profile-name-and-handle">

                <span class="profile-name">
                    Sojib Brinto
                </span>
                <br>
                <span class="handle">
                    user-3x2b582s
                </span>
            </div>
        </div>


        <div class="main-body">

            <div class="info">
                <div class="info-text">
                    Info
                </div>

                <div class="user-info">
                    <ul class="detailed-info">
                        <li class="user-name">
                            User Name &nbsp:
                            <span class="name-from-database highlight">Sojib Brinto</span>
                        </li>
                        <li class="handle-name">
                            Handle &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:
                            <span class="handle-from-database highlight">user-3x2b582s</span>
                        </li>
                        <li class="uni-name">
                            <div>Institution&nbsp&nbsp&nbsp&nbsp:</div>
                            <span class="uni-from-database highlight">Chittagong University of Engineering and Technology
                            </span>
                        </li>
                        <li class="team-list">
                            Team List&nbsp;&nbsp;&nbsp;&nbsp;:
                            <span class="team-list-link">
                                <a href="#">&nbsp;List of teams by
                                    <span class="team-list-from-database highlight">Sojib Brinto</span></a>
                                </span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="solve-count">
                <div class="first-row">
                    <div class="solved">
                        <span class="solved-count-from-database box-rank" id="solved">
                            
                        </span>
                        <span class="solved-count-from-database box-text">
                            Solved
                        </span>
                    </div>
                    <div class="attempted">
                        <span class="attempted-count-from-database box-rank" id="attempted">
                            
                        </span>
                        <span class="attempted-count-from-database box-text">
                            Submission
                        </span>
                    </div>
                </div>
                <div class="second-row">
                    <div class="country-rank">
                        <span class="country-rank-count-from-database box-rank">
                            3523
                        </span>
                        <span class="country-rank-count-from-database box-text">
                            Country Rank
                        </span>
                    </div>
                    <div class="global-rank">
                        <span class="global-rank-count-from-database box-rank">
                            33516
                        </span>
                        <span class="global-rank-count-from-database box-text">
                            Global Rank
                        </span>
                    </div>
                </div>
            </div>
            
            <script src="chart_script.js"></script>
            <div class="pie-chart">
                <div id="piechart_3d" style="width: auto; height: 320px;"></div>
                <script>
                    drawGooglePieChart();
                </script>
            </div>

        </div>

        <div class="footer">
            
        </div>

    </section>


    <script src="profile_page.js"></script>
    


</body>

</html>