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

// Fetch data
$sql = "SELECT * FROM problems";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problems</title>
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
    <div class="container mt-5 position-relative">
        
        <h2 class="mb-4 text-center">Problems Solved by Users</h2>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Solved By</th>
                    <th>Problem ID</th>
                    <th>Link</th>
                    <th>Rating</th>
                    <th>Tags</th>
                    <th>Solved</th>
                    <th>Attempted</th>
                    <th>Last Update</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['Name'] . "</td>";
                        echo "<td>" . $row['Solved_By'] . "</td>";
                        echo "<td>" . $row['Problem_ID'] . "</td>";
                        echo "<td><a href='" . $row['Link'] . "' target='_blank'>View Problem</a></td>";
                        echo "<td>" . $row['Rating'] . "</td>";
                        echo "<td>" . $row['Tags'] . "</td>";
                        echo "<td>" . $row['Solved'] . "</td>";
                        echo "<td>" . $row['Attempted'] . "</td>";
                        echo "<td>" . $row['Last_Update'] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='9' class='text-center'>No records found</td></tr>";
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
