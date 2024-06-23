<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ip project";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle deletion
if (isset($_GET['delete'])) {
    $email = $_GET['delete'];
    $delete_sql = "DELETE FROM registered_people WHERE Email='$email'";
    if ($conn->query($delete_sql) === TRUE) {
        echo "<script>alert('User deleted successfully');</script>";
    } else {
        echo "<script>alert('Error deleting user');</script>";
    }
}

// Fetch data
$sql = "SELECT * FROM registered_people";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registered People</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .top-right {
            position: absolute;
            top: 20px;
            right: 20px;
        }
    </style>
</head>
<body>
        <div class="">
            <a href="./admin_dashboard.php" class="btn btn-primary">BACK</a>
        </div>
    <div class="container mt-5">
        <h2 class="mb-4 text-center">Registered People</h2>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Name</th>
                    <th>Codeforces Handle</th>
                    <th>Current Rating</th>
                    <th>Max Rating</th>
                    <th>Title Photo</th>
                    <th>Current Rank</th>
                    <th>Max Rank</th>
                    <th>Country</th>
                    <th>Institute</th>
                    <th>Solved</th>
                    <th>Submission</th>
                    <th>Image</th>
                    <th>Delete User</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['Email'] . "</td>";
                        echo "<td>" . $row['Password'] . "</td>";
                        echo "<td>" . $row['Name'] . "</td>";
                        echo "<td>" . $row['codeforces_handle'] . "</td>";
                        echo "<td>" . $row['codeforces_current_rating'] . "</td>";
                        echo "<td>" . $row['codeforces_max_rating'] . "</td>";
                        echo "<td><img src='" . $row['codeforces_titlephoto'] . "' alt='Title Photo' width='50'></td>";
                        echo "<td>" . $row['codeforces_current_rank'] . "</td>";
                        echo "<td>" . $row['codeforces_max_rank'] . "</td>";
                        echo "<td>" . $row['Country'] . "</td>";
                        echo "<td>" . $row['Institute'] . "</td>";
                        echo "<td>" . $row['Solved'] . "</td>";
                        echo "<td>" . $row['Submission'] . "</td>";
                        echo "<td><img src='" . $row['Image'] . "' alt='User Image' width='50'></td>";
                        echo "<td><a href='?delete=" . $row['Email'] . "' class='btn btn-danger btn-sm'>Delete</a></td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='15' class='text-center'>No records found</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>

<?php
$conn->close();
?>
