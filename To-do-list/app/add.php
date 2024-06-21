<?php

if (isset($_POST['title']) && isset($_POST['email'])) {
    require '../db_conn.php';

    $title = $_POST['title'];
    $email = $_POST['email'];

    if(empty($title)){
        header("Location: ../todolist.php?mess=error");
    }else {
        $stmt = $conn->prepare("INSERT INTO todos(title, email) VALUES(?, ?)");
        $res = $stmt->execute([$title, $email]);

        if($res){
            header("Location: ../todolist.php?mess=success"); 
        }else {
            header("Location: ../todolist.php");
        }
        $conn = null;
        exit();
    }
}else {
    header("Location: ../todolist.php?mess=error");
}

