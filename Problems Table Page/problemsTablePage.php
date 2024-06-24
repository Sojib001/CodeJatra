<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--============= css ====================-->
    <link rel="stylesheet" href="styles.css">

    <!--============= boxicon ====================-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <title>Problems</title>
</head>

<body>
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="logo.png" alt="logo">
                </span>

                <div class="text head-text">
                    <span class="name">CODEJATRA</span>
                    <br>
                    <span class="slogan">Track Transform Triumph</span>
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
        
        
        <script src="script.js"></script>


        <div class="container">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Problem Name</th>
                        <th>Problem ID</th>
                        <th>Link</th>
                        <th id="ratingHeader">Rating <i class='bx bx-sort-down' id="sort-icon"></i></th>
                        <th>Tags</th>
                    </tr>
                </thead>
                <tbody id="problemsTable">
                    <?php
                    // Database connection
                    $conn = new mysqli("localhost", "root", "", "ip project");
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    // Fetch user handle
                    // Assuming the handle is stored in the session
                    // session_start();
                    // $handle = $_SESSION['handle'];
                    $handle = isset($_GET['handle']) ? $_GET['handle'] : '';

                    // Fetch problems data
                    $sql = "SELECT * FROM problems";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        $usedNames = [];
                        $problemsArray = array();
                        while ($row = $result->fetch_assoc()) {
                            // Determine solved class
                            $solvedClass = "";
                            if ($row['Solved_By'] == $handle) {
                                $solvedClass = $row['Solved'] == 1 ? "solved" : ($row['Attempted'] >= 1 ? "attempted" : "");
                            }
                            if (in_array($row['Name'], $usedNames)) {
                                continue; // Skip this row if name has already been displayed
                            }
                            $usedNames[] = $row['Name'];

                            // Prepare the problem details
                            $problemDetails = array(
                                'Name' => $row['Name'],
                                'Problem_ID' => $row['Problem_ID'],
                                'Link' => $row['Link'],
                                'Rating' => $row['Rating'] == 0 ? "Unavailable" : $row['Rating'],
                                'Tags' => $row['Tags'] == NULL ? "Unavailable" : $row['Tags'],
                                'SolvedClass' => $solvedClass
                            );

                            // Add the problem details to the array
                            $problemsArray[] = $problemDetails;
                        }
                        foreach ($problemsArray as $problem) {
                            echo "<tr class='{$problem['SolvedClass']}'>
                                    <td>{$problem['Name']}</td>
                                    <td>{$problem['Problem_ID']}</td>
                                    <td><a href='{$problem['Link']}'><i class='bx bx-link-external link'></i></a></td>
                                    <td>{$problem['Rating']}</td>
                                    <td>{$problem['Tags']}</td>
                                </tr>";
                        }
                    } else {
                        echo "<tr><td colspan='5'>No data found</td></tr>";
                    }
                    $conn->close();
                    ?>
                </tbody>
            </table>
        </div>
    </section>
    <script>
        let isAscending = true;

        document.getElementById('ratingHeader').addEventListener('click', function() {
            const table = document.getElementById('problemsTable');
            const rows = Array.from(table.rows);
            const sorter = document.getElementById('sort-icon');

            rows.sort(function(a, b) {
                const ratingA = a.cells[3].innerText === "Unavailable" ? Infinity : parseInt(a.cells[3].innerText);
                const ratingB = b.cells[3].innerText === "Unavailable" ? Infinity : parseInt(b.cells[3].innerText);

                if (isAscending) {
                    return ratingA - ratingB;
                } else {
                    return ratingB - ratingA;
                }
            });

            rows.forEach(function(row) {
                table.appendChild(row);
            });

            if (isAscending) {
                sorter.classList.remove('bx-sort-down');
                sorter.classList.add('bx-sort-up');
            } else {
                sorter.classList.remove('bx-sort-up');
                sorter.classList.add('bx-sort-down');
            }

            isAscending = !isAscending; // Toggle the sorting order
        });
    </script>
    
</body>

</html>