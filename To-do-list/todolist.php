<?php
require 'db_conn.php';


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToDo List</title>
    <link rel="stylesheet" href="css/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

</head>

<body>
    <!-- Head part start -->

    <!-- Head part end -->

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

        <!-- Sidebar End -->

        <!-- Left partition Start -->
        <!-- <div class="container">
        <div class="left-partition">
            <p>Contact</p>
            <hr>
            <p>FAQ</p>
            <hr>
            <p>Privacy</p>
        </div> -->
        <!-- Left partition End -->

        <!-- Right partition Start -->
        <div class="container">
            <div class="right-partition">


                <div class="main-section">
                    <div class="add-section">
                        <form action="app/add.php" method="POST" autocomplete="off">
                            <input type="hidden" name="email" id="email" />
                            <?php if (isset($_GET['mess']) && $_GET['mess'] == 'error') { ?>
                                <input type="text" name="title" style="border-color: #ff6666" placeholder="This field is required" />
                                <button type="submit">Add &nbsp; <span>&#43;</span></button>
                            <?php } else { ?>
                                <input type="text" name="title" placeholder="What do you need to do?" />
                                <button type="submit">Add &nbsp; <span>&#43;</span></button>
                            <?php } ?>
                        </form>
                    </div>


                </div>
                <?php
                $todos = $conn->query("SELECT * FROM todos ORDER BY id DESC");
                ?>
                <div class="show-todo-section">
                    <?php if ($todos->rowCount() <= 0) { ?>
                        <div class="todo-item">
                            <div class="empty">
                                <img src="img/f.png" width="100%" />
                                <img src="img/Ellipsis.gif" width="80px">
                            </div>
                        </div>
                    <?php } ?>

                    <?php while ($todo = $todos->fetch(PDO::FETCH_ASSOC)) { ?>
                        <div class="todo-item">
                            <span id="<?php echo $todo['id']; ?>" class="remove-to-do">x</span>
                            <?php if ($todo['checked']) { ?>
                                <input type="checkbox" class="check-box" data-todo-id="<?php echo $todo['id']; ?>" checked />
                                <h2 class="checked"><?php echo $todo['title'] ?></h2>
                            <?php } else { ?>
                                <input type="checkbox" data-todo-id="<?php echo $todo['id']; ?>" class="check-box" />
                                <h2><?php echo $todo['title'] ?></h2>
                            <?php } ?>
                            <br>
                            <small>created: <?php echo $todo['date_time'] ?></small>
                        </div>
                    <?php } ?>
                </div>
            </div>

        </div>
        </div>
        <!-- Right partition End -->


        <script src="js/todolist.js"></script>
        <script src="js/jquery-3.2.1.min.js"></script>\
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                var email = localStorage.getItem('email');
                if (email) {
                    document.getElementById('email').value = email;
                } else {
                    console.error('Email not found in localStorage');
                }
            });
        </script>

        <script>
            $(document).ready(function() {
                $('.remove-to-do').click(function() {
                    const id = $(this).attr('id');

                    $.post("app/remove.php", {
                            id: id
                        },
                        (data) => {
                            if (data) {
                                $(this).parent().hide(600);
                            }
                        }
                    );
                });

                $(".check-box").click(function(e) {
                    const id = $(this).attr('data-todo-id');

                    $.post('app/check.php', {
                            id: id
                        },
                        (data) => {
                            if (data != 'error') {
                                const h2 = $(this).next();
                                if (data === '1') {
                                    h2.removeClass('checked');
                                } else {
                                    h2.addClass('checked');
                                }
                            }
                        }
                    );
                });
            });
        </script>

</body>

</html>