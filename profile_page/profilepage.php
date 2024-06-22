<?php
session_start();
include("db_conn.php");

$email = "ajfaisal1208023@gmail.com";
if (isset($_GET['email'])) {
    $email = $_GET['email'];
}
$query = "SELECT * FROM `registered_people` WHERE Email='$email'";
$result = mysqli_fetch_assoc(mysqli_query($con, $query));
$query2 = "select codeforces_handle from registered_people where Email='$email'";
$handle = $result['codeforces_handle'];
$query3 = "select * from problems where Solved_By='$handle'";
$result2 = mysqli_query($con, $query3);


echo '<script>const userHandle = "' . $handle . '";</script>';

?>
<!-- comment -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Three Section Layout</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://toert.github.io/Isolated-Bootstrap/versions/3.3.7/iso_bootstrap3.3.7min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap" rel="stylesheet">
    <style>
        .table-custom th,
        .table-custom td {
            vertical-align: middle;
            /* Center content vertically */
        }

        .table-striped td {
            word-wrap: break-word;
            /* Allow long words to be broken and wrap onto the next line */
            max-width: 300px;
            /* Example maximum width; adjust as needed */
        }

        .section {
            display: flex;
            font-weight: bold;
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
            width: 100%;
        }

        .main-section {
            width: 100%;
            height: 100%;
        }

        .section-middle {
            height: 400px;
            background-color: #e4e9f7;
            display: flex;
            justify-content: space-between;
            padding: 10px;
        }

        .section-middle>div {
            flex: 1;
            margin: 0 10px;
            padding: 20px;
            background-color: white;
            overflow: hidden;
            height: calc(100% - 40px);
            /* Adjust height to account for padding */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            /* Optional: adds a subtle shadow */
        }

        .section-middle>div:first-child {
            margin-left: 0;
        }

        .section-middle>div:last-child {
            margin-right: 0;
        }

        .inner-middle {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            /* Gap between inner divs */
            height: 100%;
        }

        .inner-middle>div {
            flex: 1 1 calc(50% - 10px);
            /* Two items per row */
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 10px;
            box-sizing: border-box;
            text-align: center;
        }

        /* Adjust the font size for the text in the middle section */
        .inner-middle p {
            margin: 5px 0;
            font-size: 20px;
        }

        /* Additional styling for stronger emphasis */
        .inner-middle p strong {
            font-size: 15px;
        }

        .section-middle p {
            margin: 5px 0;
        }
    </style>
    <script>
        function showForgotPasswordModal() {
            document.getElementById('forgot-password-modal').style.display = 'flex';
        }

        function hideForgotPasswordModal() {
            document.getElementById('forgot-password-modal').style.display = 'none';
        }

        async function handleForgotPassword(event) {
            event.preventDefault();

            const email = document.getElementById('forgot-email').value;
            const username = document.getElementById('forgot-username').value;

            const response = await fetch('forgot_password.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                },
                body: new URLSearchParams({
                    'FORGOT_PASSWORD': true,
                    'EMAIL': email,
                    'USERNAME': username
                })
            });

            const result = await response.json();

            alert(result.message);

            function clearForgotPasswordModal() {
                document.getElementById('forgot-email').value = '';
                document.getElementById('forgot-username').value = '';
            }
            if (result.status === 'success') {
                hideForgotPasswordModal();
            } else {
                // Close the modal
                clearForgotPasswordModal();
                hideForgotPasswordModal();
            }
        }
    </script>
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
                    <a href="#" id="profileLink">
                        <img id="userImage" alt="Image" />
                    </a>

                    <script>
                        // JavaScript to set the image source dynamically and handle profile link click
                        window.onload = function() {
                            // Retrieve the email from localStorage
                            var email = localStorage.getItem('email');

                            // Check if email is available
                            if (email) {
                                console.log(email)
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
                                        var actualPath = '../landingpage/';
                                        actualPath += imagePath;
                                        document.getElementById('userImage').src = actualPath;
                                    })
                                    .catch(error => {
                                        console.error('Error fetching image path:', error);
                                    });

                                // Attach click event listener to the profile link
                                document.getElementById('profileLink').addEventListener('click', function(event) {
                                    // Prevent default anchor click behavior
                                    event.preventDefault();

                                    // Redirect to profile page with email as query parameter
                                    window.location.href = `../profile_page/profilepage.php?email=${encodeURIComponent(email)}`;
                                });
                            } else {
                                // Handle the case where email is not available in localStorage
                                console.error('Email not found in localStorage');
                            }
                        }
                    </script>

                </li>

            </ul>
        </div>
        <!-- Sidebar End -->

        <!-- Right partition Start -->
        <div class="light-mode right-partition bootstrap">
            <div class="main-section col-md-12">
                <div class="row section-half" style="background-color: #e4e9f7;">
                    <div style="height: 100%; margin-left: 300px;">
                        <img src="<?php echo '../landingpage/' . $result['Image']; ?>" alt="Not Found" onerror="this.onerror=null; this.src='DP.jpg'; this.alt='Alternative Image'" style="height: 250px; width: 250px; border-radius: 50%;">
                        <p style="font-size: 50px;margin-left: 0px"><?php echo $result['Name']; ?></p>
                    </div>
                </div>
                <div class="row section-half" style="background-color: #e4e9f7;">
                    <div class="col-md-12 section-middle">
                        <div>
                            <p><strong>USERNAME: </strong></p>
                            <p><?php echo $result['Name']; ?></p><br>
                            <p><strong>CODEFORCES HANDLE: </strong></p>
                            <p><?php echo $handle; ?></p><br>
                            <p><strong>INSTITUTION: </strong></p>
                            <p><?php echo $result['Institute']; ?></p><br>
                            <p><strong>ADD IUPC: <a href="#" onclick="showForgotPasswordModal(); return false;">+</a></strong></p>

                            <div id="forgot-password-modal" class="modal">
                                <div class="modal-content">
                                    <span class="close" onclick="hideForgotPasswordModal()">&times;</span>

                                    <form id="forgot-password-form" onsubmit="handleForgotPassword(event)">
                                        <label for="contest-name">Contest Name:</label>
                                        <input type="text" id="contest-name" name="contest_name" required><br><br>

                                        <label for="site">Site:</label>
                                        <input type="text" id="site" name="site" required><br><br>

                                        <label for="start-time">Start Time (Format: 2024-06-25 20:35:00):</label>
                                        <input type="text" id="start-time" name="start_time" required><br><br>

                                        <label for="duration">Duration (Format: 2h 0m):</label>
                                        <input type="text" id="duration" name="duration" required><br><br>

                                        <label for="link">Link:</label>
                                        <input type="text" id="link" name="link" required><br><br>

                                        <button type="submit" style="color: white; font-size: large">Submit</button>
                                    </form>

                                </div>
                            </div>



                        </div>
                        <div class="inner-middle">
                            <div>
                                <p><strong>TOTAL SUBMISSIONS</strong></p>
                            </div>
                            <div>
                                <p><strong>TOTAL SOLVED</strong></p>
                            </div>
                            <div>
                                <p><strong><?php echo $result['Submission']; ?></strong></p>
                            </div>
                            <div>
                                <p><strong><?php echo $result['Solved']; ?></strong></p>
                            </div>
                        </div>
                        <div>
                            <canvas id="myPieChart"></canvas>
                        </div>
                    </div>
                </div>
                <div class="row section-half">
                    <div class="col-md-12 section-bottom" style="overflow: auto; height: 1200px;">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">Problem Types</th>
                                    <th scope="col">Solve Problems</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">BruteForce</th>
                                    <td>
                                        <?php
                                        foreach ($result2 as $row) {
                                            // Split problem types into an array
                                            $problem_types = explode(',', $row['Tags']);

                                            // Check if 'bruteforce' is one of the problem types
                                            if (in_array('brute force', $problem_types)) {
                                                echo '<a href="' . $row['Link'] . '">' . $row['Name'] . ' | </a>';
                                            }
                                        }
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">Greedy</th>
                                    <td>
                                        <?php
                                        foreach ($result2 as $row) {
                                            // Split problem types into an array
                                            $problem_types = explode(',', $row['Tags']);

                                            // Check if 'bruteforce' is one of the problem types
                                            if (in_array('greedy', $problem_types)) {
                                                echo '<a href="' . $row['Link'] . '">' . $row['Name'] . ' | </a>';
                                            }
                                        }
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">Implementation</th>
                                    <td>
                                        <?php
                                        foreach ($result2 as $row) {
                                            // Split problem types into an array
                                            $problem_types = explode(',', $row['Tags']);

                                            // Check if 'bruteforce' is one of the problem types
                                            if (in_array('implementation', $problem_types)) {
                                                echo '<a href="' . $row['Link'] . '">' . $row['Name'] . ' | </a>';
                                            }
                                        }
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">Graphs</th>
                                    <td>
                                        <?php
                                        foreach ($result2 as $row) {
                                            // Split problem types into an array
                                            $problem_types = explode(',', $row['Tags']);

                                            // Check if 'bruteforce' is one of the problem types
                                            if (in_array('graphs', $problem_types)) {
                                                echo '<a href="' . $row['Link'] . '">' . $row['Name'] . ' | </a>';
                                            }
                                        }
                                        foreach ($result2 as $row) {
                                            // Split problem types into an array
                                            $problem_types = explode(',', $row['Tags']);

                                            // Check if 'bruteforce' is one of the problem types
                                            if (in_array('dfs and similar', $problem_types)) {
                                                echo '<a href="' . $row['Link'] . '">' . $row['Name'] . ' | </a>';
                                            }
                                        }
                                        foreach ($result2 as $row) {
                                            // Split problem types into an array
                                            $problem_types = explode(',', $row['Tags']);

                                            // Check if 'bruteforce' is one of the problem types
                                            if (in_array('trees', $problem_types)) {
                                                echo '<a href="' . $row['Link'] . '">' . $row['Name'] . ' | </a>';
                                            }
                                        }
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">Math</th>
                                    <td>
                                        <?php
                                        foreach ($result2 as $row) {
                                            // Split problem types into an array
                                            $problem_types = explode(',', $row['Tags']);

                                            // Check if 'bruteforce' is one of the problem types
                                            if (in_array('math', $problem_types)) {
                                                echo '<a href="' . $row['Link'] . '">' . $row['Name'] . ' | </a>';
                                            }
                                        }
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">Data Structure</th>
                                    <td>
                                        <?php
                                        foreach ($result2 as $row) {
                                            // Split problem types into an array
                                            $problem_types = explode(',', $row['Tags']);

                                            // Check if 'bruteforce' is one of the problem types
                                            if (in_array('data structures', $problem_types)) {
                                                echo '<a href="' . $row['Link'] . '">' . $row['Name'] . ' | </a>';
                                            }
                                        }
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">DP</th>
                                    <td>
                                        <?php
                                        foreach ($result2 as $row) {
                                            // Split problem types into an array
                                            $problem_types = explode(',', $row['Tags']);

                                            // Check if 'bruteforce' is one of the problem types
                                            if (in_array('dp', $problem_types)) {
                                                echo '<a href="' . $row['Link'] . '">' . $row['Name'] . ' | </a>';
                                            }
                                        }
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">Constructive algorithms</th>
                                    <td>
                                        <?php
                                        foreach ($result2 as $row) {
                                            // Split problem types into an array
                                            $problem_types = explode(',', $row['Tags']);

                                            // Check if 'bruteforce' is one of the problem types
                                            if (in_array('constructive algorithms', $problem_types)) {
                                                echo '<a href="' . $row['Link'] . '">' . $row['Name'] . ' | </a>';
                                            }
                                        }
                                        ?>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Right partition End -->






        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script src="js/profilepage.js"></script>
        <script>
            function showForgotPasswordModal() {
                document.getElementById('forgot-password-modal').style.display = 'block';
            }

            function hideForgotPasswordModal() {
                document.getElementById('forgot-password-modal').style.display = 'none';
            }

            async function handleForgotPassword(event) {
                event.preventDefault();

                const contestName = document.getElementById('contest-name').value;
                const site = document.getElementById('site').value;
                const startTime = document.getElementById('start-time').value;
                const duration = document.getElementById('duration').value;
                const link = document.getElementById('link').value;

                const response = await fetch('forgot_password.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded'
                    },
                    body: new URLSearchParams({
                        'FORGOT_PASSWORD': true,
                        'CONTEST_NAME': contestName,
                        'SITE': site,
                        'START_TIME': startTime,
                        'DURATION': duration,
                        'LINK': link
                    })
                });

                const result = await response.json();

                alert(result.message);

                if (result.status === 'success') {
                    // Clear form fields if submission is successful
                    document.getElementById('forgot-password-form').reset();
                    hideForgotPasswordModal();
                } else {
                    // Handle error scenario if needed
                }
            }
        </script>

</body>

</html>