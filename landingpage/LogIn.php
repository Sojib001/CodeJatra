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
        $query = "SELECT * FROM registered_people WHERE email = '$gmail' LIMIT 1";
        $result = mysqli_query($con, $query);
        $formType = "login";
        $cmail = $gmail;
        $query2 = "SELECT * FROM admin WHERE email = '$cmail' LIMIT 1";
        $result2 = mysqli_query($con, $query2);

        if ($result2 && mysqli_num_rows($result2) > 0) {
            $user_data = mysqli_fetch_assoc($result2);
            if ($user_data['pass'] == $password) {
                echo '<meta http-equiv="refresh" content="0.5;url=../Admin/admin_dashboard.php">';
                exit();
            } else {
                $alertMessage = 'Wrong email or password';
            }
        } else if ($result) {
            if ($result && mysqli_num_rows($result) > 0) {
                $user_data = mysqli_fetch_assoc($result);
                if ($user_data['Password'] == $password) {
                    echo "<script>
                        localStorage.setItem('email', '" . $gmail . "');
                        console.log(localStorage.getItem('email'));
                    </script>";
                    echo '<meta http-equiv="refresh" content="0.5;url=../dashboard/dashboard.php">';
                    exit();
                } else {
                    $alertMessage = 'Wrong email or password';
                }
            } else {
                $alertMessage = 'Wrong email or password';
            }
        } else {
            $alertMessage = 'Wrong email or password';
        }
    } else {
        $alertMessage = 'Wrong email or password';
    }
}

if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['REGISTER'])) {
    $email = $_POST['EMAIL'];
    $pass = $_POST['PASS'];
    $username = $_POST['USERNAME'];
    $handle = $_POST['handle'];
    $country = $_POST['country'];
    $institute = $_POST['institute'];
    $photoContent = NULL;

    $handle = urlencode($handle);
    $apiUrl = "https://codeforces.com/api/user.info?handles=$handle&checkHistoricHandles=true";
    $apiResponse = @file_get_contents($apiUrl);
    if ($apiResponse === FALSE) {
        $formType = 'register';
        $alertMessage = $alertMessage = isset($apiData['comment']) ? $apiData['comment'] : 'Invalid Handle';
    } else {
        $apiData = json_decode($apiResponse, true);
        if ($apiData === null) {
            $alertMessage = 'Failed to decode API response.';
            $formType = 'register';
        } elseif ($apiData['status'] !== 'OK') {
            $alertMessage = isset($apiData['comment']) ? $apiData['comment'] : 'Unknown error';
            $formType = 'register';
        } else {
            if (isset($_FILES['Photo']) && $_FILES['Photo']['error'] == UPLOAD_ERR_OK) {
                $file_tmp = $_FILES['Photo']['tmp_name'];
                $file_name = $_FILES['Photo']['name'];
                $file_path = 'image/' . $file_name;

                if (move_uploaded_file($file_tmp, $file_path)) {
                    $photoContent = $file_path;
                } else {
                    die('Failed to upload file.');
                }
            } else {
                $photoContent = NULL;
            }

            if (!isset($_POST['lol'])) {
                $alertMessage = 'Select terms and conditions';
                $formType = 'register';
            } else if (!empty($pass) && !empty($username) && !empty($email) && !empty($pass) && !is_numeric($email)) {
                $query = "SELECT * FROM registered_people WHERE Email = '$email' LIMIT 1";
                $result = mysqli_query($con, $query);

                $q = "SELECT * FROM registered_people WHERE Name = '$username' LIMIT 1";
                $r = mysqli_query($con, $q);

                $q = "SELECT * FROM registered_people WHERE CodeForces_handle = '$handle' LIMIT 1";
                $st = mysqli_query($con, $q);

                if ($result && mysqli_num_rows($result) > 0) {
                    $alertMessage = 'Email already exists';
                } elseif ($r && mysqli_num_rows($r) > 0) {
                    $alertMessage = 'Username already exists';
                } elseif ($st && mysqli_num_rows($st) > 0) {
                    $alertMessage = 'This handle already exists';
                } else {
                    $codeforces_current_rating = 0;
                    $codeforces_max_rating = 0;
                    $codeforces_current_rank = null;
                    $codeforces_max_rank = null;
                    $titlephoto = null;
                    $solved_problems = 0;
                    $submission = 0;
                    $query = "INSERT INTO `registered_people`(`Email`, `Password`, `Name`, `codeforces_handle`, `codeforces_current_rating`, `codeforces_max_rating`, `codeforces_titlephoto`, `codeforces_current_rank`, `codeforces_max_rank`, `Country`, `Institute`, `Solved`, `Submission`, `Image`) VALUES ('$email','$pass','$username','$handle','$codeforces_current_rating','$codeforces_max_rating','$titlephoto','$codeforces_current_rank','$codeforces_max_rank','$country','$institute','$solved_problems','$submission','$photoContent')";
                    mysqli_query($con, $query);

                    $alertMessage = 'Successfully registered';

                    try {
                        $mail = new PHPMailer(true);
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
                        $mail->Body = "Welcome " . $username . ' to our website';

                        $mail->send();
                    } catch (Exception $e) {
                        $alertMessage = 'Message could not be sent. Mailer Error: ' . $mail->ErrorInfo;
                    }
                }
            } else {
                $alertMessage = 'Please enter valid information';
            }
        }
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
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                },
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
            <form action="" method="POST" enctype="multipart/form-data">
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
                    <input type="text" name="USERNAME" id="y" required>
                    <label>Username</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
                    <input type="text" name="handle" id="yy" required>
                    <label>Codeforces Handle</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="globe-outline"></ion-icon></span>
                    <input type="text" name="country" id="yyy" required>
                    <label>Country</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="school-outline"></ion-icon></span>
                    <input type="text" name="institute" id="yyyy" required>
                    <label>Institute</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="image-outline"></ion-icon></span>

                    <input type="file" name="Photo" id="yyyyy" required>

                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox" name="lol">Agree to terms and conditions</label>
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