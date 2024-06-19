<?php
session_start();
include("db_conn.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

$alertMessage = '';
$formType = 'login';
if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['LOGIN'])) {
    $gmail = $_POST['EMAIL'];
    $password = $_POST['PASS'];

    if (!empty($gmail) && !empty($password) && !is_numeric($gmail)) {
        $query = "SELECT * FROM form WHERE email = '$gmail' LIMIT 1";
        $result = mysqli_query($con, $query);
        $formType="login";
        if ($result) {
            if ($result && mysqli_num_rows($result) > 0) {
                $user_data = mysqli_fetch_assoc($result);
                if ($user_data['pass'] == $password) {
                    header('Location: ../To-do-list/index.php');
                    exit();
                } else {
                    $alertMessage = 'Wrong username or password';
                }
            } else {
                $alertMessage = 'Wrong username or password';
            }
        } else {
            $alertMessage = 'Wrong username or password';
        }
    } else {
        $alertMessage = 'Wrong username or password';
    }
}
if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['REGISTER'])) {


    $email=$_POST['EMAIL'];
    $pass=$_POST['PASS'];
    $username =$_POST['USERNAME'];
    $formType="register";
    if(!empty($pass) && !empty($username) && !empty($email) && !empty($pass) && !is_numeric($email)){

        $query = "SELECT * FROM form WHERE email = '$email' LIMIT 1";
        $result = mysqli_query($con, $query);

        $q = "SELECT * FROM form WHERE username = '$username' LIMIT 1";
        $r = mysqli_query($con, $q);

        if($result && mysqli_num_rows($result) > 0){
            $alertMessage = 'Email already exists'; 
        }
        elseif($r && mysqli_num_rows($r) > 0){
            $alertMessage = 'username already exits'; 
        }
        else{

        
        $query = "insert into form (email,pass,username) values('$email','$pass','$username')";
        mysqli_query($con,$query);

        $alertMessage = 'Successfully registered';
        

        
        

        

        $mail=new PHPMailer(true);

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
        $mail->Subject = "Welcome to CodeJatra";
        $mail->Body = "Welcome " . $username .' to our website';

        $mail->send();
        }
    }
    else{
        echo "<script type='text/javascript'> alert('Please enter valid information')</script>";
    }


}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogIn</title>
    <link rel="stylesheet" href="style/style.css">
    <script>
        function showAlert(message) {
            if (message) {
                alert(message);
            }
        }

        function type(formtype) {
            const wrapper = document.querySelector('.wrapper');
            if (formtype === "register") {
                wrapper.classList.add('active');
            } else {
                wrapper.classList.remove('active');
            }
        }

        function showForgotPasswordModal() {
            document.getElementById('forgot-password-modal').style.display = 'flex';
        }

        function hideForgotPasswordModal() {
            document.getElementById('forgot-password-modal').style.display = 'none';
        }

        async function handleForgotPassword(event) {
            event.preventDefault();

            const email = document.getElementById('forgot-email').value;
            const username = document.getElementById('forgot-username').value;

            const response = await fetch('forgot_password.php', {
                method: 'POST',
                headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
                body: new URLSearchParams({
                    'FORGOT_PASSWORD': true,
                    'EMAIL': email,
                    'USERNAME': username
                })
            });

            const result = await response.json();

            alert(result.message);
            function clearForgotPasswordModal() {
                document.getElementById('forgot-email').value = '';
                document.getElementById('forgot-username').value = '';
              }
            if (result.status === 'success') {
                hideForgotPasswordModal();
            } else {
                // Close the modal
                clearForgotPasswordModal();
                hideForgotPasswordModal();
            }
        }
    </script>
</head>
<body onload="showAlert('<?php echo $alertMessage; ?>'); type('<?php echo $formType; ?>')">
    <div class="wrapper">
        <a href="landingpage.php"><span class="icon-close"><ion-icon name="close"></ion-icon></span></a>
        <div class="form-box Login">
            <img src="image/panda1.jpg" alt="notfound" id="profilepic">
            <form action="" method="POST">
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                    <input type="email" name="EMAIL" id="emailfield" required>
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <span class="icon2" id="LOCKHIDDEN"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" name="PASS" id="PASSWORD" required>
                    <label>Password</label>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox">Remember me</label>
                    <a href="#" onclick="showForgotPasswordModal(); return false;">Forgot password?</a>
                </div>
                <button type="submit" class="btn" name="LOGIN">
                    <p style="text-decoration: none;color: white;">Login</p>
                </button>
                <div class="login-register">
                    <p>Don't have an account?<a href="#" class="register-link">Register</a></p>
                </div>
            </form>
        </div>

        <!-- Registration Form -->
        <div class="form-box register">
            <img src="image/panda1.jpg" alt="notfound" id="profilepiC">
            <form action="" method="POST">
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                    <input type="email" id="emailfielD" name="EMAIL" required>
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <span class="icon2" id="LOCKHIDDEn"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" id="PASSWORd" name="PASS" required>
                    <label>Password</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="person"></ion-icon></span>
                    <input type="text" name="USERNAME" id="#" required>
                    <label>Username</label>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox">Agree to terms and conditions</label>
                </div>
                <button type="submit" class="btn" name="REGISTER">Register</button>
                <div class="login-register">
                    <p>Have an account?<a href="#" class="login-link">Login</a></p>
                </div>
            </form>
        </div>
    </div>

    <!-- Forgot Password Modal -->
    <div id="forgot-password-modal" style="display: none;">
        <div class="modal-content">
            <span class="close" onclick="hideForgotPasswordModal()">&times;</span>
            <h2>Forgot Password</h2>
            <form onsubmit="handleForgotPassword(event)">
                <div class="input-box">
                    <input type="email" id="forgot-email" name="EMAIL" required>
                    <label for="forgot-email">Email</label>
                </div>
                <div class="input-box">
                    <input type="text" id="forgot-username" name="USERNAME" required>
                    <label for="forgot-username">Username</label>
                </div>
                <button type="submit" class="btn">Submit</button>
            </form>
        </div>
    </div>

    <script src="js/index.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>