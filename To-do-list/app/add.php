<?php

if (isset($_POST['title']) && isset($_POST['email'])) {
    require '../db_conn.php';

    $title = $_POST['title'];
    $email = $_POST['email'];

    if (empty($title)) {
        header("Location: ../todolist.php?mess=error&email=" . urlencode($email));
    } else {
        $stmt = $conn->prepare("INSERT INTO todos(title, email) VALUES(?, ?)");
        $res = $stmt->execute([$title, $email]);

        if ($res) {
            header("Location: ../todolist.php?mess=success&email=" . urlencode($email));
        } else {
            header("Location: ../todolist.php?email=" . urlencode($email));
        }
        $conn = null;
        exit();
    }
} else {
    header("Location: ../todolist.php?mess=error&email=" . urlencode(isset($_POST['email']) ? $_POST['email'] : ''));
}
?>
