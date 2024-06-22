<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--============= css ====================-->
    <link rel="stylesheet" href="styles.css">


    <!--============= boxicon ====================-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <title>
        Problems
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
                        <a href="../problems Table Page/problemsTablePage.php" id="Problems">
                            <i class='bx bx-bug icon'></i>
                            <span class="text nav-text">Problems</span>
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
                    <a href="../landingpage/landingpage.php" id="Logout">
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

        <div class="container">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Rank</th>
                        <th>Name</th>
                        <th>Handle</th>
                        <th>Region</th>
                        <th>Institute</th>
                        <th>Solved</th>
                        <th>Submitted</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $conn = new mysqli("localhost", "root", "", "ip project");
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }
                    $sql = "SELECT * FROM registered_people ORDER BY Solved DESC,Submission DESC";
                    $result = $conn->query($sql);
                    $institute = 'CUET';
                    $region = 'BD';
                    if ($result->num_rows > 0) {
                        $i = 1;
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>
                                    <td>{$i}</td>
                                    <td>{$row['Name']}</td>
                                    <td>{$row['codeforces_handle']}</td>
                                    <td>{$region}</td>
                                    <td>{$institute}</td>
                                    <td>{$row['Solved']}</td>
                                    <td>{$row['Submission']}</td>
                                </tr>";
                            $i++;
                        }
                    } else {
                        echo "<tr><td colspan='7'>No data found</td></tr>";
                    }
                    $conn->close();
                    ?>
                </tbody>
            </table>
        </div>
    </section>
    <script src="script.js"></script>
</body>

</html>