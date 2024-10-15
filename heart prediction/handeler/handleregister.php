<?php
session_start();
require_once("./function.php");
require_once("./db.php");

$error = [
    "nameE" => "",
    "emailE" => "",
    "passE" => "",
];

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    foreach ($_POST as $key => $value) {
        $$key = trim(htmlentities(htmlspecialchars($value)));
    }


    if (emptyInput($first_name)) {
        $error["nameE"] = "username shouldnt be empty value";
    } elseif (minInput($first_name)) {
        $error["nameE"] = "username should be more than 3 chars";
    } elseif (maxInput($first_name)) {
        $error["nameE"] = "username should be less than 20 chars";
    }


    if (emptyInput($email)) {
        $error["emailE"] = "email shouldnt be empty value";
    } elseif (validEmail($email)) {
        $error["emailE"] = "invalid email address";
    }


    if (emptyInput($password)) {
        $error["passE"] = "password shouldnt be empty value";
    } elseif (minInput($password)) {
        $error["passE"] = "password should be more than 3 chars";
    } elseif (maxInput($password)) {
        $error["passE"] = "password should be less than 20 chars";
    }

    if (empty(array_filter($error))) {
        $_SESSION['succ'] = "login success";
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users (name, email, password) VALUES ('$first_name', '$email', '$hashed_password')";
        $result = mysqli_query($conn, $sql);
        $user_id = mysqli_insert_id($conn);
        $_SESSION['user_id'] = $user_id; // تخزين id المستخدم في الجلسة
        redirect("../form.php");
    } else {
        $_SESSION['error'] = $error;
        redirect("../register.php");
    }
}
