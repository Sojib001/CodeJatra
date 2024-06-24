<?php
require "db_conn.php";
$query = "select * from problempage";
$result = mysqli_query($con, $query);

?>
<!-- comment -->

<!DOCTYPE html>
<html lang="en">

<script>
    if (localStorage.getItem("email") == null) {
        alert("You must log in first")
        window.location.href = `../landingpage/landingpage.php`;
    }
</script>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Three Section Layout</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://toert.github.io/Isolated-Bootstrap/versions/3.3.7/iso_bootstrap3.3.7min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style>
        .section {
            display: flex;

            color: rgb(242, 237, 237);
            font-weight: bold;
            height: 100%;
        }

        .section-half {
            height: 50vh;
        }

        .section-top-left {
            background-color: rgb(225, 238, 225);
            height: 100%;
        }

        .section-top-right {
            background-color: rgb(215, 215, 222);
            height: 100%;
        }

        .section-bottom {
            background-color: rgb(251, 251, 251);
            height: 100%;
            width: 100;
            padding-top: 20px;
        }

        .main-section {
            width: 100%;
            height: 100%;
        }
    </style>
</head>

<body>
    <!-- Sidebar start -->
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
                    <input type="text" placeholder="Handle..." id="handleInput">
                    <script>
                        document.getElementById('handleInput').addEventListener('keypress', function(event) {
                            if (event.key === 'Enter') {
                                var handle = document.getElementById('handleInput').value;
                                if (handle) {
                                    fetch('http://localhost/get email.php?handle=' + encodeURIComponent(handle))
                                        .then(response => response.text())
                                        .then(data => {
                                            event.preventDefault();
                                            if (data === 'No email found for the given handle' || data === 'No handle provided') {
                                                alert(data);
                                            } else {
                                                // Redirect to profile page with email as query parameter
                                                window.location.href = `../profile_page/profilepage.php?email=${encodeURIComponent(data)}`;
                                            }
                                        })
                                        .catch(error => console.error('Error:', error));
                                } else {
                                    alert('Please enter a handle.');
                                }
                            }
                        });
                    </script>
                </li>
                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="http://127.0.0.1:5500/dashboard/dashboard.html" id="Dashboard">
                            <i class='bx bx-home-alt icon'></i>
                            <span class="text nav-text">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="http://127.0.0.1:5500/Mixed%20Profile/Mixed_profile.html" id="CodeForces Profile">
                            <i class='bx bx-bar-chart-alt-2 icon'></i>
                            <span class="text nav-text">CodeForces Profile</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="#" id="Problems">
                            <i class='bx bx-bug icon'></i>
                            <span class="text nav-text">Problems</span>
                        </a>
                        <script>
                            // JavaScript to set the image source dynamically and handle profile link click
                            var handle_local = localStorage.getItem('handle');
                            console.log(handle_local)
                            // Check if email is available
                            if (handle_local) {
                                document.getElementById('Problems').addEventListener('click', function(event) {
                                    // Prevent default anchor click behavior
                                    event.preventDefault();
                                    // Redirect to profile page with email as query parameter
                                    window.location.href = `../Problems Table Page/ProblemsTablePage.php?handle=${encodeURIComponent(handle_local)}`;
                                });
                            } else {
                                // Handle the case where email is not available in localStorage
                                console.error('Email not found in localStorage');
                            }
                        </script>
                    </li>
                    <li class="nav-link">
                        <a href="#" id="LeaderBoard">
                            <i class='bx bx-trophy icon'></i>
                            <span class="text nav-text">LeaderBoard</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="http://127.0.0.1:5500/IUPC%20details/IUPC.html" id="IUPC Details">
                            <i class='bx bx-detail icon'></i>
                            <span class="text nav-text">IUPC Details</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="#" id="ToDo List">
                            <i class='bx bx-list-check icon'></i>
                            <span class="text nav-text">ToDo List</span>
                        </a>
                        <script>
                            // JavaScript to set the image source dynamically and handle profile link click
                            var email = localStorage.getItem('email');
                            // Check if email is available
                            if (email) {
                                document.getElementById('ToDo List').addEventListener('click', function(event) {
                                    // Prevent default anchor click behavior
                                    event.preventDefault();
                                    // Redirect to profile page with email as query parameter
                                    window.location.href = `../To-do-list/todolist.php?email=${encodeURIComponent(email)}`;
                                });
                            } else {
                                // Handle the case where email is not available in localStorage
                                console.error('Email not found in localStorage');
                            }
                        </script>
                    </li>
                </ul>
            </div>

            <div class="bottom-content">
                <li class="nav-link">
                    <a href="/landingpage/landingpage.php" id="Logout">
                        <i class='bx bx-log-out icon'></i>
                        <span class="text nav-text">Logout</span>
                        <script>
                            document.getElementById('Logout').addEventListener('click', function(event) {
                                localStorage.removeItem('email')
                                localStorage.removeItem('handle')
                            });
                        </script>
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
                                        var actualPath = '../landingpage/'
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
    <!-- Sidebar End -->

    <!-- Right partition Start -->
    <div class="light-mode right-partition bootstrap ">
        <div class="main-section">
            <div class="row section-half">
                <div class="col-md-8 section-top-left">
                    <div class="section">


                        <div style="font-size: 25px;">
                            <p id="problemName" style="color: black;"><strong>Problem Name:</strong> <span style="font-weight: normal;"></span></p>
                            <p style="color: black;"><strong>Site:</strong> <span style="font-weight: normal;">Codeforces</span></p>
                            <p style="color: black;"><strong>Links:</strong>
                                <button class="btn btn-success">Problem</button>
                                <button class="btn btn-primary">Editorials</button>
                                <button class="btn btn-secondary">Suggest Difficulty</button>
                            </p>
                            <p style="color: black;"><strong>Tags:</strong>
                                <button class="btn btn-warning">Show Tags</button>
                                <button class="btn btn-success">+</button>
                            </p>
                            <p style="color: black;"><strong>Problem Setters:</strong> <span style="font-weight: normal;">Aj Styles</span></p>
                        </div>





                    </div>
                </div>
                <div class="col-md-4 section-top-right">
                    <div class="section">
                        <div>
                            <canvas id="myPieChart" width="400px" height="400px"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row section-half">
                <div class="col-md-12 section-bottom" style="overflow: auto; height: 400px;">
                    <table id="mytable" class="table table-bordered table-hover" style="width: 100%; table-layout: fixed;">
                        <thead>
                            <tr class="table table-dark">
                                <th scope="col">Time of Submission</th>
                                <th scope="col">Problem Name</th>
                                <th scope="col">Language</th>
                                <th scope="col">Status</th>
                                <th scope="col">Rating</th>
                                <th scope="col">View/Download</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                                <tr>
                                    <td><?php echo $row['Time of Submission']; ?></td>
                                    <td><?php echo $row['Problem']; ?></td>
                                    <td><?php echo $row['Language']; ?></td>
                                    <td><?php echo $row['Status']; ?></td>
                                    <td><?php echo $row['Rating']; ?></td>
                                    <td>
                                        <button class="btn btn-primary">
                                            <a href="<?php echo $row['View/Download Code']; ?>" style="color: white;">View/Download</a>
                                        </button>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                            <!-- Add more rows as needed -->
                        </tbody>
                    </table>
                </div>

            </div>


        </div>
    </div>
    <!-- Right partition End -->

    <script src="js/jquery-3.2.1.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="js/problempage.js"></script>
</body>

</html>