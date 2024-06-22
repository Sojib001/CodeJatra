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

// Get the JSON data
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

foreach ($data as $value) {
    // Prepare SQL statement to insert data
    $sql = "INSERT INTO problems (Name,Solved_By, Problem_ID, Link, Rating, Tags, Solved, Attempted, Last_Update) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $tagsString = implode(',', $value['tags']);
    $stmt->bind_param(
        "ssssisiis",
        $value['problem_name'],
        $value['solved_by'],
        $value['problem_id'],
        $value['problem_link'],
        $value['rating'],
        $tagsString,
        $value['solved'],
        $value['attempted'],
        $value['last_update']
    );

    try {
        $result = $stmt->execute();
    } catch (mysqli_sql_exception $e) {
        // Check if the error is a duplicate entry error (error code 1062)
        if ($e->getCode() == 1062) {
            // Duplicate entry error occurred, fetch the current data
            $selectSql = "SELECT Solved, Attempted, Last_Update FROM problems WHERE Problem_ID = ? AND Solved_By = ?";
            $selectStmt = $conn->prepare($selectSql);
            $selectStmt->bind_param("ss", $value['problem_id'], $value['solved_by']);
            $selectStmt->execute();
            $selectStmt->bind_result($currentSolved, $currentAttempted, $lastUpdate);
            $selectStmt->fetch();
            $selectStmt->close();

            // Update the existing record with new data
            if ($lastUpdate < $value['last_update']) {
                $newSolved = max($currentSolved, $value['solved']);
                $newAttempted = $currentAttempted + $value['attempted'];
                $newLastUpdate = $value['last_update'];

                $updateSql = "UPDATE problems SET Solved=?, Attempted=?, Last_Update=? WHERE Problem_ID=? AND Solved_By=?";
                $updateStmt = $conn->prepare($updateSql);
                $updateStmt->bind_param(
                    "iisss",
                    $newSolved,
                    $newAttempted,
                    $newLastUpdate,
                    $value['problem_id'],
                    $value['solved_by']
                );

                try {
                    $updateResult = $updateStmt->execute();
                } catch (mysqli_sql_exception $updateE) {
                    // Other MySQL error occurred during update
                    http_response_code(500); // Internal Server Error
                    echo json_encode(array("message" => "MySQL Error: " . $updateE->getMessage()));
                    exit;
                }
                $updateStmt->close();
            }
        } else {
            // Other MySQL error occurred
            http_response_code(500); // Internal Server Error
            echo json_encode(array("message" => "MySQL Error: " . $e->getMessage()));
            exit;
        }
    }
}

// All records inserted successfully
http_response_code(201); // Created
echo json_encode(array("message" => "New records inserted successfully"));

// Close statement and connection
$stmt->close();
$conn->close();
?>
