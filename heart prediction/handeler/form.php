<?php
session_start();
require_once("./function.php");
require_once("../handeler/db.php");

if (!isset($_SESSION['user_id'])) {
    redirect("../index.php");
}

$error = [];
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    foreach ($_POST as $key => $value) {
        $$key = trim(htmlentities(htmlspecialchars($value)));
        $_SESSION['data'] = $predict;
    }

    if (empty($predict)) {
        $error[] = "Prediction shouldn't be empty";
    }
    
    if (empty($error)) {
        $user_id = $_SESSION['user_id']; 

      
        $sql = "UPDATE users SET heart_beat = $predict WHERE id = $user_id";
        $result = mysqli_query($conn, $sql);
        
     
        if ($predict < 60) {
            $count = 0;
            $sql = "SELECT * FROM diseases";
            $result = mysqli_query($conn, $sql);
            $diseases = mysqli_fetch_all($result, MYSQLI_ASSOC);

            foreach ($diseases as $disease) {
                $count++;
                if ($count == 2) { 
                    $_SESSION['brady'] = $disease['disease_name'];
                    $_SESSION['bradyadvice'] = $disease['disease_advice'];
                    break;
                }
            }
        } elseif ($predict >= 60 && $predict <= 100) {
            $count = 0;
            $sql = "SELECT * FROM diseases";
            $result = mysqli_query($conn, $sql);
            $diseases = mysqli_fetch_all($result, MYSQLI_ASSOC);

            foreach ($diseases as $disease) {
                $count++;
                if ($count == 3) { 
                    $_SESSION['brady'] = $disease['disease_name'];
                    $_SESSION['bradyadvice'] = $disease['disease_advice'];
                    break;
                }
            }
        } elseif ($predict > 100) {
            $count = 0;
            $sql = "SELECT * FROM diseases";
            $result = mysqli_query($conn, $sql);
            $diseases = mysqli_fetch_all($result, MYSQLI_ASSOC);

            foreach ($diseases as $disease) {
                $count++;
                if ($count == 1) { 
                    $_SESSION['brady'] = $disease['disease_name'];
                    $_SESSION['bradyadvice'] = $disease['disease_advice'];
                    break;
                }
            }
        }
        redirect("../form.php");
    } else {
        $_SESSION['error'] = $error;
        redirect("../form.php");
    }
}
?>
