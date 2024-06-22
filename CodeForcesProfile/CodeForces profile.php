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

    <!-- =============== Google Charts =============-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>


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
                    fetch(`http://localhost/CF_image.php?email=${encodeURIComponent(email)}`)
                        .then(response => {
                            if (!response.ok) {
                                throw new Error('Network response was not ok');
                            }
                            return response.text();
                        })
                        .then(imagePath => {
                            // Set the src attribute of the img element
                            document.getElementById('user_profile_icon').src = imagePath;
                        })
                        .catch(error => {
                            console.error('Error fetching image path:', error);
                        });
                } else {
                    // Handle the case where email is not available in localStorage
                    console.error('Email not found in localStorage');
                }
            </script>
            <span class="handle-name" id="handle">
                <script>
                    var email = localStorage.getItem('email');
                    var apiUrl1 = `http://localhost/data_from_registered_people.php?email=${email}`;
                    fetch(apiUrl1)
                        .then(response => {
                            if (!response.ok) {
                                throw new Error('Network response was not ok');
                            }
                            return response.json();
                        })
                        .then(data => {
                            var handle = data[0].codeforces_handle;
                            var text = "Handle: "
                            text += handle
                            document.getElementById('handle').innerText = text;
                        })
                        .catch(error => {
                            console.error('There was a problem with the fetch operation:', error);
                        });
                </script>
            </span>
        </div>
        <div class="all-charts">
            <div class="bar-chart">

            </div>
            <div class="pie-chart">

            </div>
            <div class="line-chart">

            </div>
        </div>

    </section>



    <script type="text/javascript">
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawCharts);

        function drawCharts() {
            // Fetch data from the server (example for column chart)
            var email = localStorage.getItem('email');
            var url_to_get_handle = `http://localhost/data_from_registered_people.php?email=${email}`;

            fetch(url_to_get_handle)
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {
                    handle = data[0].codeforces_handle;
                    var url_to_get_all_problems = `https://codeforces.com/api/user.status?handle=${handle}&from=1&count=1000000000`;

                    return fetch(url_to_get_all_problems);
                })
                .then(response => response.json())
                .then(data => {
                    // Format data for Google Charts (example for column chart)
                    const formattedDataColumn = [
                        ['Rating', 'Solved', {
                            role: 'style'
                        }]
                    ];
                    var mapColumn = {};
                    data.result.forEach(item => {
                        if (item.problem && item.problem.rating !== undefined && item.problem.rating !== null) {
                            key = item.problem.rating

                            if (mapColumn[key]) {
                                mapColumn[key]++;
                            } else {
                                mapColumn[key] = 1;
                            }
                        }
                    });

                    for (let key in mapColumn) {
                        var color = "#808080";
                        switch (true) {
                            case (key >= 2200):
                                color = "#FF0000"; // GM
                                break;
                            case (key >= 2000):
                                color = "#FF8C00"; // Master
                                break;
                            case (key >= 1800):
                                color = "#AA00AA"; // CM
                                break;
                            case (key >= 1600):
                                color = "#0000FF"; // Expert
                                break;
                            case (key >= 1400):
                                color = "#03A89E"; // Specialist
                                break;
                            case (key >= 1200):
                                color = "#008000"; // Pupil
                                break;
                            default:
                                color = "#808080"; // Newbie
                                break;
                        }
                        formattedDataColumn.push([key, mapColumn[key], color]);
                    }

                    var dataTableColumn = google.visualization.arrayToDataTable(formattedDataColumn);

                    var optionsColumn = {
                        title: 'Problems Solved (Column Chart)',
                        hAxis: {
                            title: 'Rating',
                            minValue: 0
                        },
                        vAxis: {
                            title: 'Solved'
                        }
                    };

                    var chartColumn = new google.visualization.ColumnChart(document.querySelector('.bar-chart'));
                    chartColumn.draw(dataTableColumn, optionsColumn);
                })
                .catch(error => {
                    console.error('Error fetching data for column chart:', error);
                });


            // Fetch data from the server (example for column chart)
            var email = localStorage.getItem('email');
            var url_to_get_handle = `http://localhost/data_from_registered_people.php?email=${email}`;

            fetch(url_to_get_handle)
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {
                    handle = data[0].codeforces_handle;
                    var url_to_get_all_problems = `https://codeforces.com/api/user.status?handle=${handle}&from=1&count=1000000000`;

                    return fetch(url_to_get_all_problems);
                })
                .then(response => response.json())
                .then(data => {
                    // Format data for Google Charts (example for column chart)
                    var mapPie = {};
                    data.result.forEach(item => {
                        key = item.verdict
                        if (mapPie[key]) {
                            mapPie[key]++;
                        } else {
                            mapPie[key] = 1;
                        }

                    });
                    // Define the data for pie chart
                    const formattedDataPie = [
                        ['Type', 'Number of problems']
                    ];
                    for (let verdict in mapPie) {
                        var tmp = verdict;
                        if (verdict === "OK") verdict = "Accepted";
                        formattedDataPie.push([verdict, mapPie[tmp]]);
                    }
                    var dataPie = google.visualization.arrayToDataTable(formattedDataPie);
                    // Set options for pie chart
                    var optionsPie = {
                        title: 'All Submission Status(Pie Chart)',
                        is3D: true,
                    };

                    // Instantiate and draw the pie chart
                    var chartPie = new google.visualization.PieChart(document.querySelector('.pie-chart'));
                    chartPie.draw(dataPie, optionsPie);
                })
                .catch(error => {
                    console.error('Error fetching data for column chart:', error);
                });



            // Fetch user handle and ratings data
            var email = localStorage.getItem('email');
            var url_to_get_handle = `http://localhost/data_from_registered_people.php?email=${email}`;

            fetch(url_to_get_handle)
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {
                    var handle = data[0].codeforces_handle;
                    var url_to_get_all_contest_rating = `https://codeforces.com/api/user.rating?handle=${handle}`;

                    return fetch(url_to_get_all_contest_rating);
                })
                .then(response => response.json())
                .then(data => {
                    // Format data for Google Charts (line chart)
                    var mapLine = {};
                    data.result.forEach(item => {
                        var timestamp = item.ratingUpdateTimeSeconds; // Unix timestamp
                        var date = new Date(timestamp * 1000); // Convert to milliseconds

                        // Format date as Oct 2022
                        var options_for_date = {
                            year: 'numeric',
                            month: 'short'
                        };
                        var formattedDate = date.toLocaleDateString('en-US', options_for_date);

                        // Store rating data by formatted date
                        mapLine[formattedDate] = {
                            newRating: item.newRating,
                            contestName: item.contestName // Assuming contestName is available
                        };
                    });

                    // Prepare data array for Google Charts
                    var formattedDataLine = [
                        ['Date', 'New Rating']
                    ];

                    // Iterate over formatted dates and push data to array
                    for (var date in mapLine) {
                        formattedDataLine.push([
                            date,
                            mapLine[date].newRating
                        ]);
                    }

                    // Create DataTable from formatted data
                    var dataTable = google.visualization.arrayToDataTable(formattedDataLine);

                    // Define options for the line chart
                    var options = {
                        title: 'Rating Change Graph',
                        curveType: 'none', // Straight line
                        legend: {
                            position: 'bottom'
                        },
                        hAxis: {
                            title: 'Date'
                        },
                        vAxis: {
                            title: 'Rating'
                        },
                        series: {
                            0: {
                                pointShape: 'circle',
                                pointSize: 7
                            } // Customize point shape and size
                        }
                    };

                    // Instantiate and draw the chart
                    var chart = new google.visualization.LineChart(document.querySelector('.line-chart'));
                    chart.draw(dataTable, options);
                })
                .catch(error => {
                    console.error('Error fetching or processing data:', error);
                });


        }
    </script>

    <script src="CodeForces profile.js"></script>

</body>

</html>