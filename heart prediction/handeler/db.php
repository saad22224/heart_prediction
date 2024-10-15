
<?php

  $conn =  mysqli_connect("localhost" , "root" , "" , "prediction");

if(!$conn){
  echo "error" . mysqli_connect_error($conn);
}
?>