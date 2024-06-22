<?php
include("db_conn.php");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['FORGOT_PASSWORD'])) {
    $email = $_POST['EMAIL'];
    $username = $_POST['USERNAME'];

    $response = array('status' => 'error', 'message' => 'Invalid email or username');

    if (!empty($email) && !empty($username)) {
        $query = "SELECT * FROM form WHERE email = '$email' AND username = '$username' LIMIT 1";
        $result = mysqli_query($con, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            $user_data = mysqli_fetch_assoc($result);
            $password = $user_data['pass']; // Assuming 'pass' is the password field

            $mail = new PHPMailer(true);

            try {
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'sagormdsagorchowdhury@gmail.com';
                $mail->Password = 'yerrswugaweehakn';
                $mail->SMTPSecure = 'ssl';
                $mail->Port = 465;

                $mail->setFrom('sagormdsagorchowdhury@gmail.com');
                $mail->addAddress($email);

                $mail->isHTML(true);
                $mail->Subject = "Password Recovery";
                $mail->Body = "Your password is: " . $password;

                $mail->send();
                $response = array('status' => 'success', 'message' => 'Password sent to your email');
            } catch (Exception $e) {
                $response = array('status' => 'error', 'message' => 'Mail could not be sent. Please try again later.');
            }
        }
    }

    echo json_encode($response);
}
?>
