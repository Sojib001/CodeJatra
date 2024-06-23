<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 3 Layout with Hover Effect</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            background-color: #F3F1DA;
        }
        .container {
            max-width: 1800px;
        }
        .feature-box {
            background: #F3F1DA;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            text-align: center;
            padding: 20px;
            margin: 10px 0;
            transition: all 0.3s ease;
            cursor: pointer;
        }
        .feature-box:hover {
            background-color: #3Ac8bc;
            color: #F3F1DA;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3);
            text-decoration: none;
        }
        .feature-box img {
            width: 50px;
            height: 50px;
            margin-bottom: 10px;
            transition: all 0.3s ease;
        }
        
        .feature-box h3 {
            font-size: 18px;
            margin: 10px 0;
            transition: all 0.3s ease;
        }
        .feature-box p {
            color: #777;
            text-decoration: none;
            transition: all 0.3s ease;
        }
        .feature-box:hover p {
            color: #F3F1DA;
            text-decoration: none;
        }
        .feature-box a {
            color: inherit;
            text-decoration: none;
            display: block;
        }
    </style>
</head>
<body>
        
<div class="container">
<div class="">
            <a href="../landingpage/landingpage.php" class="btn btn-primary">LOGOUT</a>
        </div>
    <div class="row">
        <div class="col-lg-4">
            <a href="./problems.php" style="text-decoration: none;">
                <div class="feature-box">
                    <img src="images/problemstatement.jpg" alt="icon">
                    <h1>Problem Details</h1>
                    <p>Add,Update or Remove a problem to give different taste to users.</p>
                </div>
            </a>
        </div>
        <div class="col-sm-4">
            <a href="./registeredpeople.php" style="text-decoration: none;">
                <div class="feature-box">
                    <img src="images/registeredpeople.png" alt="icon">
                    <h1>Registered People</h1>
                    <p>Access Registered people details to have a good understanding of who are your users.</p>
                </div>
            </a>
        </div>
        <div class="col-sm-4">
            <a href="./upcoming_contest.php" style="text-decoration: none;">
                <div class="feature-box">
                    <img src="images/upcomingcontest.png" alt="icon">
                    <h1>Upcoming Contests</h1>
                    <p>Have a look to the upcoming or ongoing contests and see any modification is needed or not.</p>
                </div>
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <a href="./upcoming_iupc.php" style="text-decoration: none;">
                <div class="feature-box">
                    <img src="images/upcomingiupc.png" alt="icon">
                    <h1>Upcoming IUPC</h1>
                    <p>Check whether anyone requested to add a new IUPC contest to the scheduled table</p>
                </div>
            </a>
        </div>
        <div class="col-sm-4">
            <a href="./queries.php" style="text-decoration: none;">
                <div class="feature-box">
                    <img src="images/replyqueries.png" alt="icon">
                    <h1>Reply queries</h1>
                    <p>Give reply to the users who asked question in the form of landing page.</p>
                </div>
            </a>
        </div>
        <div class="col-lg-4">
            <a href="./admin_management.php" style="text-decoration: none;">
                <div class="feature-box">
                    <img src="images/addadmin.png" alt="icon">
                    <h1>Add Admin</h1>
                    <p>To reduce the workload add new person administrator.They have access of these pages.</p>
                </div>
            </a>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>
