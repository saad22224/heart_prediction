
<?php
  session_start();
 require_once("../handeler/db.php");
require_once("../handeler/function.php");
if(!isset($_SESSION['login'])){
    redirect("../admin/admin.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Heart Rate Table</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        .table-container {
            margin: 20px;
        }
    </style>
</head>
<body>
    

<style>
    @media(min-width:768px) {
        .log{
          position: absolute;
           right:0
        }
    }
    @media(min-width:991px) {
        .log{
          position: absolute;
           right:0;
           top: 7px;
           /* transform: translateY(-10%); */
        }
    }
    @media(max-width:767px){
        .navbar-brand{
            padding: 15px;
        }
        .active{
            padding: 15px;
        }
        .log{
            padding: 15px;
        }
    } 
    .navbar{
            z-index: 100;
            transition: transform 0.5s ease-in-out !important;
        }
        .navbar-brand:hover{
          color: #007bff;
        }
        .nav-link:hover{
            color: #007bff !important;
        }
</style>

<div class="container">
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="./form.php">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

          <form class="d-flex log"  role="search" action="../admin/logout_admin.php">
            <button class="btn btn-outline-success" type="submit">log out</button>
          </form>
        </div>
      </nav>
    </div>
<div class="container">
    <div class="container table-container">
        <h2 class="my-5 " style="color: #007bff;">Patient Heart Rate Data</h2>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Patient Name</th>
                    <th>Heart Rate</th>
                </tr>
            </thead>
            <tbody>
                <?php
    
                $sql = "SELECT name, heart_beat FROM users";
                $result = mysqli_query($conn , $sql);
    
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . htmlspecialchars($row['name']) . "</td>" ;
                        echo "<td>" . htmlspecialchars($row['heart_beat']) . " B/M" . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='2'>No data available</td></tr>";
                }
    
                $conn->close();
                ?>
            </tbody>
        </table>
    </div>
</div>

</table>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>