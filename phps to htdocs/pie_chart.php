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

if (isset($_GET['handle'])) {
    $handle = $_GET['handle'];

    // Prepare SQL statement to select data
    $sql = "SELECT * FROM problems WHERE Solved_By = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $handle);

    try {
        $stmt->execute();
        $result = $stmt->get_result();
        $data = $result->fetch_all(MYSQLI_ASSOC);

        // Send the data as a JSON response
        http_response_code(200);
        echo json_encode($data);

    } catch (mysqli_sql_exception $e) {
        http_response_code(500);
        echo json_encode(array("message" => "MySQL Error: " . $e->getMessage()));
    }

    $stmt->close();
} else {
    http_response_code(400);
    echo json_encode(array("message" => "Missing required parameter: handle"));
}

$conn->close();
?>
