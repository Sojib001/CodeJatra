<?php
session_start();
include("db_conn.php");

$email = "ajfaisal1208023@gmail.com";
if (isset($_GET['email'])) {
    $email = $_GET['email'];
}

$query = "SELECT * FROM `registered_people` WHERE Email='$email'";
$result = mysqli_fetch_assoc(mysqli_query($con, $query));
$query2 = "SELECT codeforces_handle FROM registered_people WHERE Email='$email'";
$handle = $result['codeforces_handle'];

// Assuming $handle is retrieved correctly, proceed with fetching problems
$query3 = "SELECT * FROM problems WHERE Solved_By='$handle'";
$result2 = mysqli_query($con, $query3);

// This script tag is used to pass PHP variables to JavaScript
echo '<script>const userHandle = "' . $handle . '";</script>';

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['REGISTER'])) {
    
    $name = $_POST['update_name'];
    $pass = $_POST['update_password'];
    $handle = $_POST['update_handle'];
    $country = $_POST['update_country'];
    $institute = $_POST['update_institute'];
    $photoContent = NULL;

    // Handle image upload
    if (isset($_FILES['update_image']) && $_FILES['update_image']['error'] == UPLOAD_ERR_OK) {
        $file_tmp = $_FILES['update_image']['tmp_name'];
        $file_name = $_FILES['update_image']['name'];
        $file_path =  '../landingpage/image/' . $file_name;

        // Move the uploaded file to the target directory
        if (move_uploaded_file($file_tmp, $file_path)) {
            $photoContent = 'image/'.$file_name;
        } else {
            die('Failed to upload file.');
        }
    }

    // Validate form data
    if (!empty($pass) && !empty($name) && !empty($email) && !empty($handle) && !empty($country) && !empty($institute)) {

        // Check if email or name already exists in the database
        $email_check_query = "SELECT * FROM registered_people WHERE Email = '$email' LIMIT 1";
        $result_email_check = mysqli_query($con, $email_check_query);

        $name_check_query = "SELECT * FROM registered_people WHERE Name = '$name' LIMIT 1";
        $result_name_check = mysqli_query($con, $name_check_query);

        if (mysqli_num_rows($result_name_check) > 0) {
            // Name already exists, handle error
            echo "<script>alert('Username already exists!');</script>";
        }
        else if (mysqli_num_rows($result_email_check) > 0) {
            // Email exists, handle update
            $update_query = "UPDATE registered_people SET Name='$name', Password='$pass', codeforces_handle='$handle', Country='$country', Institute='$institute'";

            if ($photoContent) {
                $update_query .= ", image='$photoContent'";
            }

            $update_query .= " WHERE Email='$email'";

            if (mysqli_query($con, $update_query)) {
                echo "<script>alert('Updated successfully!');</script>";
            } else {
                echo "<script>alert('Failed to update.');</script>";
            }

        } else {
            // Insert new record (if needed) or handle as per your application logic
            echo "<script>alert('No existing record found to update!');</script>";
        }

    } else {
        echo "<script>alert('Invalid form data.');</script>";
    }
}
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
    <script></script>
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
            <div class="main-section col-md-12" style="margin-left: -150px;">
                <div class="row section-half" style="background-color: #e4e9f7;">
                    <div style="height: 100%; margin-left: 0px;" class="text-center">
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
                            <p><strong>UPDATE PROFILE: <a href="#" onclick="showUpdateModal(); return false;">+</a></strong></p>

                            <div id="update-modal" class="modal">
                            <div class="modal-content">
                                <span class="close" onclick="hideUpdateModal()">&times;</span>

                                <form method="POST" id="update-form"  enctype="multipart/form-data">
                                    <label for="update-email">Email:</label>
                                    <input type="email" id="update-email" name="update_email" value="<?php echo $result['Email']; ?>" readonly><br><br>

                                    <label for="update-name">Name:</label>
                                    <input type="text" id="update-name" name="update_name" value="<?php echo $result['Name']; ?>" required><br><br>
                                    
                                    <label for="update-name">Password:</label>
                                    <input type="text" id="update-password" name="update_password" value="<?php echo $result['Password']; ?>" required><br><br>

                                    <label for="update-handle">Codeforces Handle:</label>
                                    <input type="text" id="update-handle" name="update_handle" value="<?php echo $handle; ?>" required><br><br>

                                    <label for="update-country">Country:</label>
                                    <input type="text" id="update-country" name="update_country" value="<?php echo $result['Country']; ?>" required><br><br>

                                    <label for="update-institution">Institution:</label>
                                    <input type="text" id="update-institute" name="update_institute" value="<?php echo $result['Institute']; ?>" required><br><br>

                                    <label for="update-image">Image:</label>
                                    <input type="file" id="update-image" name="update_image"><br><br>

                                    <button type="submit" style="color: white; font-size: large" name="REGISTER">Update</button>
                                </form>
                            </div>
                        </div>



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

                                        <button type="submit" style="color: white; font-size: large"  >Submit</button>
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
        <script>
                function showUpdateModal() {
                    document.getElementById('update-modal').style.display = 'block';
                }

                function hideUpdateModal() {
                    document.getElementById('update-modal').style.display = 'none';
                }

                
            </script>


</body>

</html>