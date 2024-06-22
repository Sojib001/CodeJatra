<?php
session_start();
include("db_conn.php");

// Check if the form data is sent
if (isset($_POST['FORGOT_PASSWORD'])) {
    // Sanitize input data
    $contestName = mysqli_real_escape_string($con, $_POST['CONTEST_NAME']);
    $site = mysqli_real_escape_string($con, $_POST['SITE']);
    $startTime = mysqli_real_escape_string($con, $_POST['START_TIME']);
    $duration = mysqli_real_escape_string($con, $_POST['DURATION']);
    $link = mysqli_real_escape_string($con, $_POST['LINK']);

    // Get email from session or wherever you are storing it
    $email = "ajfaisal1208023@gmail.com"; // Example, replace with your logic to get email

    // Prepare and execute query to insert data into database
    $insertQuery = "INSERT INTO upcoming_iupc ( Contest_Name, Site, Start, Duration, Link) VALUES ('$contestName', '$site', '$startTime', '$duration', '$link')";

    if (mysqli_query($con, $insertQuery)) {
        $response = [
            'status' => 'success',
            'message' => 'IUPC details added successfully.'
        ];
    } else {
        $response = [
            'status' => 'error',
            'message' => 'Failed to add IUPC details: ' . mysqli_error($con)
        ];
    }

    // Return JSON response
    echo json_encode($response);
} else {
    // Handle case where form data is not sent
    $response = [
        'status' => 'error',
        'message' => 'Form data not received.'
    ];
    echo json_encode($response);
}
?>
