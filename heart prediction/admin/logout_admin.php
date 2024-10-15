<?php
session_start();
session_destroy();
require_once("../handeler/function.php");
redirect("../admin/admin.php")
?>