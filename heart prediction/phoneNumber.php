<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>أرقام الطوارئ الطبية</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        .emergency-card {
            border: 1px solid #e9ecef;
            padding: 20px;
            border-radius: 5px;
            margin-bottom: 15px;
            transition: transform 0.5s ease-in-out;
        }
         .emergency-card:hover{
            transform: scale(1.1);
         }
    </style>
</head>
<body>
    

 <?php require_once("./handeler/header.php")?>
 <div class="container mt-5">
        <h1 class="mb-4" style="color: #007bff;">Emergency Medical Numbers</h1>
        <div class="row">
            <!-- Card for Red Crescent -->
            <div class="col-md-4">
                <div class="emergency-card bg-white">
                    <h3>Red Crescent</h3>
                    <p>Emergency Number: 997</p>
                </div>
            </div>

            <!-- Card for Ambulance -->
            <div class="col-md-4">
                <div class="emergency-card bg-white">
                    <h3>Ambulance</h3>
                    <p>Emergency Number: 998</p>
                </div>
            </div>

            <!-- Card for Medical Services -->
            <div class="col-md-4">
                <div class="emergency-card bg-white">
                    <h3>Emergency  Services</h3>
                    <p>Emergency Number: 999</p>
                </div>
            </div>
        </div>
    </div>


    <!-- Bootstrap JS and dependencies -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
