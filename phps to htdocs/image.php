<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");

// Database connection
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'ip project';

$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

// Get the email parameter from the URL
$email = isset($_GET['email']) ? $db->real_escape_string($_GET['email']) : '';

if (!empty($email)) {
    // Prepare and execute the query to fetch the image path
    $stmt = $db->prepare("SELECT image FROM registered_people WHERE email = ?");
    if ($stmt) {
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $stmt->bind_result($imagePath);
            $stmt->fetch();

            if ($imagePath) {
                // Return the image path
                echo $imagePath;
            } else {
                echo 'Image path not found...';
            }
        } else {
            echo 'No record found with the provided email.';
        }
        $stmt->close();
    } else {
        echo 'Failed to prepare the SQL statement: ' . $db->error;
    }
} else {
    echo 'No email provided...';
}

$db->close();
?>
