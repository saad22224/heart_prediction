<?php
 session_start();
 require_once("./function.php");
 $error = [];
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
    foreach($_POST as $key => $value){
        $$key = trim(htmlentities(htmlspecialchars($value)));
    }
  if(emptyInput($email) || emptyInput($password)){
    $error[] = "username or password is incorrect";
  }
  if($email != "h.d.p.1446@gmail.com" || $password != "Hdp1446hdp"){
    $error[] = "username or password is incorrect";
  }
  if(emptyInput($error)){
    $_SESSION['login'] = "login success";
        redirect("../admin/admin_content.php");
  }else{
    $_SESSION['error'] = $error;
    redirect("../admin/admin.php");
  }
}

?>