<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit;
}

$servername = "localhost";
$username = "root"; // Change to your MySQL username
$password = ""; // Change to your MySQL password
$database = "ip project"; // Change to your MySQL database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    http_response_code(500);
    echo json_encode(array("message" => "Connection failed: " . $conn->connect_error));
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input = json_decode(file_get_contents('php://input'), true);

    if (!isset($_GET['handle']) || !isset($input['solved']) || !isset($input['submission'])) {
        http_response_code(400);
        echo json_encode(array("message" => "Missing required parameters"));
        exit;
    }

    $handle = $_GET['handle'];
    $solved = $input['solved'];
    $submission = $input['submission'];

    $updateSql = "UPDATE registered_people SET Solved=?, Submission=? WHERE codeforces_handle=?";
    $updateStmt = $conn->prepare($updateSql);
    $updateStmt->bind_param("iis", $solved, $submission, $handle);

    try {
        if ($updateStmt->execute()) {
            http_response_code(200);
            echo json_encode(array("message" => "Update successful"));
        } else {
            http_response_code(500);
            echo json_encode(array("message" => "Update failed"));
        }
    } catch (mysqli_sql_exception $updateE) {
        http_response_code(500); // Internal Server Error
        echo json_encode(array("message" => "MySQL Error: " . $updateE->getMessage()));
    }
    $updateStmt->close();
} else {
    http_response_code(405);
    echo json_encode(array("message" => "Invalid request method"));
}

$conn->close();
?>
