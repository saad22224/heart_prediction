<?php
 session_start();
 require_once("./function.php");
 require_once("./db.php");
 $error = [];
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
    foreach($_POST as $key => $value){
        $$key = trim(htmlentities(htmlspecialchars($value)));
    }
  if(emptyInput($email) || emptyInput($password)){
    $error[] = "Invalid email or password!";
  }
  $sql = "SELECT * FROM users WHERE email = '$email'";
 $result = mysqli_query($conn , $sql);
 if(mysqli_num_rows($result) > 0) {
    $user = mysqli_fetch_assoc($result);
    if (password_verify($password, $user['password'])) {
      $_SESSION['user_id'] = $user['id']; // حفظ user_id في الجلسة
       $_SESSION['succ'] = "Login successful!";
       redirect("../form.php");
    } else {
        $_SESSION['error'] =  $error;
       redirect("../index.php");

    }
} else {
  $_SESSION['error'] =  $error;
    redirect("../index.php");
}

}
  ?>