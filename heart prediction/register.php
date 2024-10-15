<?php session_start() ?>

<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=El+Messiri:wght@400..700&family=Tajawal:wght@200;300;400;500;700;800;900&display=swap" rel="stylesheet">
    <title>إنشاء حساب</title>
    <style>
        body {
            background-color: #f7f3e9;
            /* لون البودي أصفر باهت */
        }

        .header {
            color: #ffffff;
            padding: 15px;
            border-radius: 8px;
        }

        .registration-form {
            margin-top: 60px;
            /* رفع النموذج للأعلى */
            background: linear-gradient(145deg, #ffffff, #e6e6e6);
            /* خلفية متدرجة */
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
        }

        .swal2-confirm {
            border: none;
            background-color: aqua;
            outline: none;
        }

        .swal2-confirm:focus {
            outline: none;
        }

        .swal2-styled {
            border: none;
            background-color: aqua;
            outline: none;
        }

        *:not([class*="fa"]) {
            font-family: "El Messiri", sans-serif !important;
        }
    </style>
</head>

<body>
    <div class="container" style="transform: translateY(-3%);">
        <div class="row">
            <div class="col-12">
            </div>
            <div class="col-md-6 mx-auto">
                <div class="registration-form">
                    <form action="./handeler/handleregister.php" method="POST">
                        <h4 class="text-center header" style="color: black;">Create Acount</h4>
                        <div class="form-group">
                            <label for="fname">Username</label>
                            <input type="text" style="border-radius: 10px;" class="form-control fname"
                                id="name" name="first_name" placeholder=" Username">
                            <?php if (isset($_SESSION['error']["nameE"])): ?>
                                <di class="text-danger" style="margin-top: 5px;"> <?php echo $_SESSION['error']["nameE"] ?> </di>
                                <?php unset($_SESSION['error']["nameE"]) ?>
                            <?php endif ?>
                        </div>
                        <div class="form-group">
                            <label for="email">Email Adresse <span style="color: red;">*</span></label>
                            <input type="email" style="border-radius: 10px;" id="email"
                                class="form-control mail" name="email" placeholder="Email Adresse">
                            <?php if (isset($_SESSION['error']["emailE"])): ?>
                                <di class="text-danger" style="margin-top: 5px;"> <?php echo $_SESSION['error']["emailE"] ?> </di>
                                <?php unset($_SESSION['error']["emailE"]) ?>
                            <?php endif ?>
                        </div>
                        <div class="form-group">
                            <label for="pass">Password <span style="color: red;">*</span></label>

                            <input type="password" style="border-radius: 10px; "
                                class="form-control pass" id="pass" name="password" placeholder="Password">
                            <i class="fas fa-eye-slash"
                                style="position: relative; top: -30px; left: 10px; font-size: 15px; cursor: pointer;"
                                id="toggle-icon"></i>
                            <?php if (isset($_SESSION['error']["passE"])): ?>
                                <div class="text-danger" style="margin-top: 5px;"> <?php echo $_SESSION['error']["passE"] ?> </div>
                                <?php unset($_SESSION['error']["passE"]) ?>
                            <?php endif ?>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" style="border-radius: 10px;"
                                class="btn btn-block btn-info" value="Create Acount">
                        </div>
                    </form>
                    <h6 style=" margin-top: 20px;">Already have an account?
                        <a style="text-decoration: none;" class="text-info" href="./index.php">Click here</a>
                    </h6>

                </div>
            </div>
        </div>
    </div>

    <script src="js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>