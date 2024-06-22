<?php
// Set CORS headers to allow requests from any origin
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type");

// Database connection parameters
$host = 'localhost'; // Hostname
$username = 'root'; // Database username
$password = ''; // Database password
$dbname = 'ip project'; // Database name

// Create a new MySQLi object
$mysqli = new mysqli($host, $username, $password, $dbname);

// Check if there are any connection errors
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Check if contest ID is provided via POST request
if(isset($_POST['contest_id'])) {
    // Sanitize the input to prevent SQL injection
    $contest_id = $_POST['contest_id'];

    // Prepare the SQL query to delete the row where contest ID matches
    $sql = "DELETE FROM upcoming_contests WHERE contest_id = ?";
    
    // Prepare the statement
    $stmt = $mysqli->prepare($sql);
    
    // Bind the contest ID parameter
    $stmt->bind_param("s", $contest_id); // Assuming contest_id is a string
    
    // Execute the statement
    if($stmt->execute()) {
        // Row deleted successfully
        // echo "Row deleted successfully";
    } else {
        // Error occurred
        // echo "Error: Unable to delete row";
    }
} else {
    // Contest ID not provided
    // echo "Error: Contest ID not provided";
}

// Close the database connection
$mysqli->close();
?>
