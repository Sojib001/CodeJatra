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
$handle = isset($_GET['handle']) ? $db->real_escape_string($_GET['handle']) : '';

if (!empty($handle)) {
    // Prepare and execute the query to fetch the email
    $stmt = $db->prepare("SELECT Email FROM registered_people WHERE codeforces_handle = ?");
    if ($stmt) {
        $stmt->bind_param("s", $handle);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $stmt->bind_result($email);
            $stmt->fetch();

            if ($email) {
                // Return the email
                echo $email;
            } else {
                echo 'No email found for the given handle';
            }
        } else {
            echo 'No email found for the given handle';
        }
        $stmt->close();
    } else {
        echo 'Failed to prepare the SQL statement: ' . $db->error;
    }
} else {
    echo 'No handle provided';
}

$db->close();
?>
