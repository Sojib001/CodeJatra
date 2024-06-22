<?php
// Allow requests from any origin
header("Access-Control-Allow-Origin: *");
// Allow certain HTTP methods
header("Access-Control-Allow-Methods: POST, OPTIONS");
// Allow certain headers
header("Access-Control-Allow-Headers: Content-Type");

// Check if it's a preflight request (OPTIONS method)
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    // Respond with a 200 status code and exit
    http_response_code(200);
    exit;
}
$jsonData = file_get_contents('php://input');

// Check if the JSON data is valid
$data = json_decode($jsonData, true);

if ($data === null) {
    // JSON data is invalid
    http_response_code(400); // Bad Request
    echo json_encode(array("message" => "Invalid JSON data"));
    exit;
}

// Database connection parameters
$servername = "localhost";
$username = "root"; // Change to your MySQL username
$password = ""; // Change to your MySQL password
$database = "ip project"; // Change to your MySQL database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    // Connection failed
    http_response_code(500); // Internal Server Error
    echo json_encode(array("message" => "Connection failed: " . $conn->connect_error));
    exit;
}

// Prepare SQL statement to insert data
// SQL statement for updating the record
$sql = "UPDATE registered_people 
        SET codeforces_handle = ?, 
            codeforces_current_rating = ?, 
            codeforces_max_rating = ?, 
            codeforces_titlephoto = ?, 
            codeforces_current_rank = ?, 
            codeforces_max_rank = ?, 
            Solved = ?, 
            Submission = ?
        WHERE Email = ?";

$stmt = $conn->prepare($sql);

// Bind parameters and execute the statement
$stmt->bind_param("siisssiis", 
    $data['codeforces_handle'],
    $data['codeforces_current_rating'], 
    $data['codeforces_max_rating'], 
    $data['codeforces_titlephoto'], 
    $data['codeforces_current_rank'], 
    $data['codeforces_max_rank'],
    $data['Solved'],
    $data['Submission'],
    $data['Email']
);
$result = $stmt->execute();

if ($result === TRUE) {
    // Record inserted successfully
    http_response_code(201); // Created
    echo json_encode(array("message" => "New record inserted successfully"));
} else {
    // Error inserting record
    http_response_code(500); // Internal Server Error
    echo json_encode(array("message" => "Error: " . $sql . "<br>" . $conn->error));
}

// Close statement and connection
$stmt->close();
$conn->close();
?>
