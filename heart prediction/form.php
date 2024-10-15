<?php
session_start();
require_once("./handeler/function.php");
require_once("./handeler/db.php");
if (!isset($_SESSION['succ'])) {
  redirect("./index.php");
}
$sql = "SELECT * from diseases ";
$result =  mysqli_query($conn, $sql);
$diseases = mysqli_fetch_all($result, MYSQLI_ASSOC);
$colorClass = ""; 


if (isset($_SESSION['brady'])) {
    $heartRate = $_SESSION['data']; 


    if ($heartRate < 60 || $heartRate > 100) {
        $colorClass = "bg-danger text-white"; 
    } else {
        $colorClass = "bg-success text-white"; 
    }
}
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>HEART PREDICTION</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
  <?php require_once("./handeler/header.php") ?>
  <h5 style="position:absolute ; top:20%; left:50%; ; 
    transform:translatex(-40%);" class="text-success insert_text sm:w-50">insert your heart rate here</h5>
  <div class="container w-50" style=" position:absolute ; top:30%; left:50%; transform:translateY(-50%); transform:translatex(-40%);">
    <div class="row mb-3">
      <div class="col-sm-10">
        <form action="./handeler/form.php" method="post">
          <input type="number" id="form" placeholder="B/M" value="<?php if (isset($_SESSION['data'])) {
                                                                    echo $_SESSION['data'];
                                                                    unset($_SESSION['data']);
                                                                  } ?>" name="predict" class="form-control" id="email">
          <?php if (isset($_SESSION['error'])): ?>
            <?php foreach ($_SESSION['error'] as $error): ?>
              <div class="text-danger my-1"><?php echo $error ?></div>
              <?php unset($_SESSION['error']) ?>
            <?php endforeach ?>
          <?php endif ?>
          <input type="submit" class="btn btn-success w-75 my-5  text-center"
            style="transform: translateX(20%);" name="submit" class="form-control" value="PREDICTION " id="submit">
        </form>
      </div>
      <?php if (isset($_SESSION['brady'])): ?>
        <div id="predict" class="text-center fs-5 my-3 <?php echo $colorClass?>  p-2"><?php echo $_SESSION['brady'] ?></div>
        <p id="advice" class="text-center fs-5 my-3  <?php echo $colorClass ?>"><?php echo $_SESSION['bradyadvice'] ?></p>
        <?php unset($_SESSION['brady']) ?>
        <?php unset($_SESSION['bradyadvice']) ?>
      <?php endif ?>
    </div>
  </div>
  <script src="./js/main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>