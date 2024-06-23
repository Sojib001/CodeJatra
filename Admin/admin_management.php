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
$name = $email = $pass = "";

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    if (isset($_POST['insert'])) {
        $email = 'admin'.$_POST['email'];
        $insert_sql = "INSERT INTO admin (Name, email, pass) VALUES ('$name', '$email', '$pass')";
        if ($conn->query($insert_sql) === TRUE) {
            echo "<script>alert('Record inserted successfully');</script>";
        } else {
            echo "Error inserting record: " . $conn->error;
        }
    } elseif (isset($_POST['update'])) {
        $update_sql = "UPDATE admin SET Name='$name', pass='$pass' WHERE email='$email'";
        if ($conn->query($update_sql) === TRUE) {
            echo "<script>alert('Record updated successfully');</script>";
        } else {
            echo "Error updating record: " . $conn->error;
        }
    } elseif (isset($_POST['delete'])) {
        $delete_sql = "DELETE FROM admin WHERE email='$email'";
        if ($conn->query($delete_sql) === TRUE) {
            echo "<script>alert('Record deleted successfully');</script>";
        } else {
            echo "Error deleting record: " . $conn->error;
        }
    } elseif (isset($_POST['clear'])) {
        $name = $email = $pass = "";
    }
}

// Fetch data
$sql = "SELECT * FROM admin";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Management</title>
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
        function populateForm(name, email, pass) {
            document.getElementById('name').value = name;
            document.getElementById('email').value = email;
            document.getElementById('pass').value = pass;
        }
    </script>
</head>
<body>
        <div class="">
            <a href="./admin_dashboard.php" class="btn btn-primary">BACK</a>
        </div>
    <div class="container mt-5">
        
        <h2 class="mb-4 text-center">Admin Management</h2>
        <div class="form-section">
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?php echo $name; ?>" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?php echo $email; ?>" required>
                </div>
                <div class="form-group">
                    <label for="pass">Password</label>
                    <input type="password" class="form-control" id="pass" name="pass" value="<?php echo $pass; ?>" required>
                </div>
                <button type="submit" name="insert" class="btn btn-success">Insert</button>
                <button type="submit" name="update" class="btn btn-primary">Update</button>
                <button type="submit" name="delete" class="btn btn-danger">Delete</button>
                <button type="submit" name="clear" class="btn btn-secondary">Clear</button>
            </form>
        </div>
        <div class="table-section">
            <h1>Admin Table</h1>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Password</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<tr onclick=\"populateForm('".$row['Name']."', '".$row['email']."', '".$row['pass']."')\">";
                            echo "<td>" . $row['Name'] . "</td>";
                            echo "<td>" . $row['email'] . "</td>";
                            echo "<td>" . $row['pass'] . "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='3' class='text-center'>No records found</td></tr>";
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
