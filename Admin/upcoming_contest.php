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

// Initialize variables for form data
$contest_id = $contest_name = $site = $start = $duration = $link = "";

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['insert'])) {
        $contest_id = $_POST['contest_id'];
        $contest_name = $_POST['contest_name'];
        $site = $_POST['site'];
        $start = $_POST['start'];
        $duration = $_POST['duration'];
        $link = $_POST['link'];
        
        $insert_sql = "INSERT INTO upcoming_contests (Contest_ID, Contest_Name, Site, Start, Duration, Link) VALUES ('$contest_id', '$contest_name', '$site', '$start', '$duration', '$link')";
        if ($conn->query($insert_sql) === TRUE) {
            echo "<script>alert('Record inserted successfully');</script>";
        } else {
            echo "Error inserting record: " . $conn->error;
        }
    } elseif (isset($_POST['update'])) {
        $contest_id = $_POST['contest_id'];
        $contest_name = $_POST['contest_name'];
        $site = $_POST['site'];
        $start = $_POST['start'];
        $duration = $_POST['duration'];
        $link = $_POST['link'];
        
        $update_sql = "UPDATE upcoming_contests SET Contest_Name='$contest_name', Site='$site', Start='$start', Duration='$duration', Link='$link' WHERE Contest_ID='$contest_id'";
        if ($conn->query($update_sql) === TRUE) {
            echo "<script>alert('Record updated successfully');</script>";
        } else {
            echo "Error updating record: " . $conn->error;
        }
    } elseif (isset($_POST['delete'])) {
        $contest_id = $_POST['contest_id'];
        
        $delete_sql = "DELETE FROM upcoming_contests WHERE Contest_ID='$contest_id'";
        if ($conn->query($delete_sql) === TRUE) {
            echo "<script>alert('Record deleted successfully');</script>";
        } else {
            echo "Error deleting record: " . $conn->error;
        }
    } elseif (isset($_POST['clear'])) {
        $contest_id = $contest_name = $site = $start = $duration = $link = "";
    }
}

// Fetch data
$sql = "SELECT * FROM upcoming_contests";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upcoming Contests</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .top-right {
            position: absolute;
            top: 20px;
            right: 20px;
        }
        .table-section {
            margin-top: 30px;
        }
        .form-section {
            margin-bottom: 30px;
        }
    </style>
    <script>
        function populateForm(contest_id, contest_name, site, start, duration, link) {
            document.getElementById('contest_id').value = contest_id;
            document.getElementById('contest_name').value = contest_name;
            document.getElementById('site').value = site;
            document.getElementById('start').value = start;
            document.getElementById('duration').value = duration;
            document.getElementById('link').value = link;
        }
    </script>
</head>
<body>
    <div class="">
            <a href="./admin_dashboard.php" class="btn btn-primary">BACK</a>
        </div>
    <div class="container mt-5">
        
        <h2 class="mb-4 text-center">Upcoming Contests</h2>
        <div class="form-section">
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <div class="form-group">
                    <label for="contest_id">Contest ID</label>
                    <input type="text" class="form-control" id="contest_id" name="contest_id" value="<?php echo $contest_id; ?>" required>
                </div>
                <div class="form-group">
                    <label for="contest_name">Contest Name</label>
                    <input type="text" class="form-control" id="contest_name" name="contest_name" value="<?php echo $contest_name; ?>" required>
                </div>
                <div class="form-group">
                    <label for="site">Site</label>
                    <input type="text" class="form-control" id="site" name="site" value="<?php echo $site; ?>" required>
                </div>
                <div class="form-group">
                    <label for="start">Start</label>
                    <input type="datetime-local" class="form-control" id="start" name="start" value="<?php echo $start; ?>" required>
                </div>
                <div class="form-group">
                    <label for="duration">Duration</label>
                    <input type="text" class="form-control" id="duration" name="duration" value="<?php echo $duration; ?>" required>
                </div>
                <div class="form-group">
                    <label for="link">Link</label>
                    <input type="url" class="form-control" id="link" name="link" value="<?php echo $link; ?>" required>
                </div>
                <button type="submit" name="insert" class="btn btn-success">Insert</button>
                <button type="submit" name="update" class="btn btn-primary">Update</button>
                <button type="submit" name="delete" class="btn btn-danger">Delete</button>
                <button type="submit" name="clear" class="btn btn-secondary">Clear</button>
            </form>
        </div>
        <div class="table-section">
            <h1>Upcoming Contest</h1>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Contest ID</th>
                        <th>Contest Name</th>
                        <th>Site</th>
                        <th>Start</th>
                        <th>Duration</th>
                        <th>Link</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<tr onclick=\"populateForm('".$row['Contest_ID']."', '".$row['Contest_Name']."', '".$row['Site']."', '".$row['Start']."', '".$row['Duration']."', '".$row['Link']."')\">";
                            echo "<td>" . $row['Contest_ID'] . "</td>";
                            echo "<td>" . $row['Contest_Name'] . "</td>";
                            echo "<td>" . $row['Site'] . "</td>";
                            echo "<td>" . $row['Start'] . "</td>";
                            echo "<td>" . $row['Duration'] . "</td>";
                            echo "<td><a href='" . $row['Link'] . "' target='_blank'>View</a></td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='6' class='text-center'>No records found</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>

<?php
$conn->close();
?>
