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
$varified = 0; // Default to unverified

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $contest_id = $_POST['contest_id'];
    $contest_name = $_POST['contest_name'];
    $site = $_POST['site'];
    $start = $_POST['start'];
    $duration = $_POST['duration'];
    $link = $_POST['link'];
    $varified = $_POST['varified'];

    if (isset($_POST['insert'])) {
        $insert_sql = "INSERT INTO upcoming_iupc (Contest_Name, Site, Start, Duration, Link, varified) 
                       VALUES ('$contest_name', '$site', '$start', '$duration', '$link', '$varified')";
        if ($conn->query($insert_sql) === TRUE) {
            echo "<script>alert('Record inserted successfully');</script>";
            // Clear form fields after successful insertion
            $contest_id = $contest_name = $site = $start = $duration = $link = "";
            $varified = 0; // Reset to unverified
        } else {
            echo "Error inserting record: " . $conn->error;
        }
    } elseif (isset($_POST['update'])) {
        $update_sql = "UPDATE upcoming_iupc 
                       SET Contest_Name='$contest_name', Site='$site', Start='$start', 
                           Duration='$duration', Link='$link', varified='$varified' 
                       WHERE Contest_id='$contest_id'";
        if ($conn->query($update_sql) === TRUE) {
            echo "<script>alert('Record updated successfully');</script>";
        } else {
            echo "Error updating record: " . $conn->error;
        }
    } elseif (isset($_POST['delete'])) {
        $delete_sql = "DELETE FROM upcoming_iupc WHERE Contest_id='$contest_id'";
        if ($conn->query($delete_sql) === TRUE) {
            echo "<script>alert('Record deleted successfully');</script>";
            // Clear form fields after successful deletion
            $contest_id = $contest_name = $site = $start = $duration = $link = "";
            $varified = 0; // Reset to unverified
        } else {
            echo "Error deleting record: " . $conn->error;
        }
    } elseif (isset($_POST['clear'])) {
        $contest_id = $contest_name = $site = $start = $duration = $link = "";
        $varified = 0; // Reset to unverified
    } elseif (isset($_POST['verify'])) {
        $verify_sql = "UPDATE upcoming_iupc SET varified='1' WHERE Contest_id='$contest_id'";
        if ($conn->query($verify_sql) === TRUE) {
            echo "<script>alert('Contest verified successfully');</script>";
        } else {
            echo "Error verifying contest: " . $conn->error;
        }
    }
}

// Fetch unverified contests
$unverified_sql = "SELECT Contest_id, Contest_Name, Site, Start, Duration, Link FROM upcoming_iupc WHERE varified = 0";
$unverified_result = $conn->query($unverified_sql);

// Fetch verified contests
$verified_sql = "SELECT Contest_id, Contest_Name, Site, Start, Duration, Link FROM upcoming_iupc WHERE varified = 1";
$verified_result = $conn->query($verified_sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upcoming IUPC Management</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .top-section, .middle-section, .bottom-section {
            margin-top: 20px;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 15px;
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
    <div class="container mt-5">
        <h2 class="text-center mb-4">Upcoming IUPC Management</h2>
        <!-- Top Section for Form -->
        <div class="top-section">
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <div class="form-group">
                    <label for="contest_id">Contest ID</label>
                    <input type="text" class="form-control" id="contest_id" name="contest_id" value="<?php echo $contest_id; ?>" readonly>
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
                    <input type="text" class="form-control" id="start" name="start" value="<?php echo $start; ?>" required>
                </div>
                <div class="form-group">
                    <label for="duration">Duration</label>
                    <input type="text" class="form-control" id="duration" name="duration" value="<?php echo $duration; ?>" required>
                </div>
                <div class="form-group">
                    <label for="link">Link</label>
                    <input type="text" class="form-control" id="link" name="link" value="<?php echo $link; ?>" required>
                </div>
                <input type="hidden" id="varified" name="varified" value="<?php echo $varified; ?>">
                <button type="submit" name="insert" class="btn btn-success">Insert</button>
                <button type="submit" name="update" class="btn btn-primary">Update</button>
                <button type="submit" name="delete" class="btn btn-danger">Delete</button>
                <button type="submit" name="clear" class="btn btn-secondary">Clear</button>
                <button type="submit" name="verify" class="btn btn-warning">Verify</button>
            </form>
        </div>

        <!-- Middle Section for Unverified Contests -->
        <div class="middle-section">
            <h4 class="mb-3">Unverified Contests</h4>
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
                    if ($unverified_result->num_rows > 0) {
                        while($row = $unverified_result->fetch_assoc()) {
                            echo "<tr onclick=\"populateForm('".$row['Contest_id']."', '".$row['Contest_Name']."', '".$row['Site']."', '".$row['Start']."', '".$row['Duration']."', '".$row['Link']."')\">";
                            echo "<td>" . $row['Contest_id'] . "</td>";
                            echo "<td>" . $row['Contest_Name'] . "</td>";
                            echo "<td>" . $row['Site'] . "</td>";
                            echo "<td>" . $row['Start'] . "</td>";
                            echo "<td>" . $row['Duration'] . "</td>";
                            echo "<td>" . $row['Link'] . "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='6' class='text-center'>No unverified contests found</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div><!-- Bottom Section for Verified Contests -->
<div class="bottom-section">
    <h4 class="mb-3">Verified Contests</h4>
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
            if ($verified_result->num_rows > 0) {
                while ($row = $verified_result->fetch_assoc()) {
                    echo "<tr onclick=\"populateForm('".$row['Contest_id']."', '".$row['Contest_Name']."', '".$row['Site']."', '".$row['Start']."', '".$row['Duration']."', '".$row['Link']."')\">";
                    echo "<td>" . $row['Contest_id'] . "</td>";
                    echo "<td>" . $row['Contest_Name'] . "</td>";
                    echo "<td>" . $row['Site'] . "</td>";
                    echo "<td>" . $row['Start'] . "</td>";
                    echo "<td>" . $row['Duration'] . "</td>";
                    echo "<td>" . $row['Link'] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='6' class='text-center'>No verified contests found</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>
