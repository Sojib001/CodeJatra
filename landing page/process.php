<?php
session_start();
include("db_conn.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $fname = $_POST['Firstname'];
    $lname = $_POST['Secondname'];
    $gmail = $_POST['Email'];
    $subject = $_POST['Subject'];
    $message = $_POST['Message'];

    if (!empty($fname) && !empty($lname) && !empty($gmail) && !empty($subject) && !empty($message) && !is_numeric($gmail)) {
        // Process the form data, insert into database, etc.
        if (strlen($message) <= 500) {
            $query = "INSERT INTO `queries`(`fname`, `lname`, `email`, `subject`, `message`) VALUES ('$fname','$lname','$gmail','$subject','$message')";
            mysqli_query($con,$query);
            echo "Message sent successfully.You will be answered soon.";
        } else {
            // Error message if message length exceeds 500 characters
            echo "Error: Message length should be 500 characters or less.";
        }
    } else {
        // Handle error
        echo "Please enter valid information";
    }
}
?>
