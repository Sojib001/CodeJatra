<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;



require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';// Change this path if you have included PHPMailer manually

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
$fname = $lname = $email = $subject = $message = $answer = "";

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $answer = $_POST['answer'];

    if (isset($_POST['reply'])) {
        // Send email
        $mail = new PHPMailer(true);
        try {
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;
            $mail->Username = 'sagormdsagorchowdhury@gmail.com'; // SMTP username
            $mail->Password = 'yerrswugaweehakn'; // SMTP password
            $mail->SMTPSecure = 'ssl';
            $mail->Port = 465;

            $mail->setFrom('sagormdsagorchowdhury@gmail.com');
            $mail->addAddress($email);

            $mail->isHTML(true);
            $mail->Subject = 'reply for '.$subject;
            $mail->Body = $answer;

            $mail->send();
            echo "<script>alert('Reply sent successfully');</script>";

            // Delete record from database
            $delete_sql = "DELETE FROM queries WHERE id='$id'";
            $conn->query($delete_sql);
        } catch (Exception $e) {
            echo "<script>alert('Message could not be sent. Mailer Error: {$mail->ErrorInfo}');</script>";
        }
    } elseif (isset($_POST['ignore'])) {
        // Delete record from database
        $delete_sql = "DELETE FROM queries WHERE id='$id'";
        if ($conn->query($delete_sql) === TRUE) {
            echo "<script>alert('Query ignored and deleted successfully');</script>";
        } else {
            echo "Error deleting record: " . $conn->error;
        }
    }

    // Clear form fields
    $fname = $lname = $email = $subject = $message = $answer = "";
}

// Fetch data
$sql = "SELECT * FROM queries";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Queries</title>
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
        function populateForm(id, fname, lname, email, subject, message) {
            document.getElementById('id').value = id;
            document.getElementById('fname').value = fname;
            document.getElementById('lname').value = lname;
            document.getElementById('email').value = email;
            document.getElementById('subject').value = subject;
            document.getElementById('message').value = message;
        }
    </script>
</head>
<body>
    <div class="">
            <a href="./admin_dashboard.php" class="btn btn-primary">BACK</a>
        </div>
    <div class="container mt-5">
        
        <h2 class="mb-4 text-center">Queries</h2>
        <div class="form-section">
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <input type="hidden" id="id" name="id" value="<?php echo $id; ?>">
                <div class="form-group">
                    <label for="fname">First Name</label>
                    <input type="text" class="form-control" id="fname" name="fname" value="<?php echo $fname; ?>" required>
                </div>
                <div class="form-group">
                    <label for="lname">Last Name</label>
                    <input type="text" class="form-control" id="lname" name="lname" value="<?php echo $lname; ?>" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?php echo $email; ?>" required>
                </div>
                <div class="form-group">
                    <label for="subject">Subject</label>
                    <input type="text" class="form-control" id="subject" name="subject" value="<?php echo $subject; ?>" required>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea class="form-control" id="message" name="message" rows="3" required><?php echo $message; ?></textarea>
                </div>
                <div class="form-group">
                    <label for="answer">Answer</label>
                    <textarea class="form-control" id="answer" name="answer" rows="3" required><?php echo $answer; ?></textarea>
                </div>
                <button type="submit" name="reply" class="btn btn-success">Reply</button>
                <button type="submit" name="ignore" class="btn btn-danger">Ignore</button>
            </form>
        </div>
        <div class="table-section">
            <h1>Asked Questions</h1>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Subject</th>
                        <th>Message</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<tr onclick=\"populateForm('".$row['id']."', '".$row['fname']."', '".$row['lname']."', '".$row['email']."', '".$row['subject']."', '".$row['message']."')\">";
                            echo "<td>" . $row['fname'] . "</td>";
                            echo "<td>" . $row['lname'] . "</td>";
                            echo "<td>" . $row['email'] . "</td>";
                            echo "<td>" . $row['subject'] . "</td>";
                            echo "<td>" . $row['message'] . "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='5' class='text-center'>No records found</td></tr>";
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
