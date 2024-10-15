<?php session_start() ?>
<!DOCTYPE html>
<html lang="ar" ">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=El+Messiri:wght@400..700&family=Tajawal:wght@200;300;400;500;700;800;900&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>

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
            background: linear-gradient(145deg, #ffffff, #e6e6e6);
            padding: 60px;
            border-radius: 15px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
        }

        .swal2-confirm:focus {
            outline: none;
        }

        .swal2-confirm {
            border: none;
            background-color: aqua;
            outline: none;
        }

        *:not([class*="fa"]) {
            font-family: "El Messiri", sans-serif !important;
        }

        .forget::after {
            content: "";
            position: absolute;
            width: 300%;
            height: 1px;
            background-color: #999;
            top: -50%;
            left: 50%;
            transform: translateX(-50%);
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
            </div>
            <div class="col-md-6 mx-auto">
                <div class="registration-form">
                    <form action="./handeler/handlelogin.php" method="POST">
                        <?php if (isset($_SESSION['error'])): ?>
                            <script>
                                Swal.fire({
                                    title: <?php echo json_encode($_SESSION['error']); ?>,
                                    text: <?php echo json_encode($_SESSION['error']); ?>,
                                    icon: 'error',
                                    confirmButtonText: 'ok'
                                });
                            </script>
                            <?php unset($_SESSION['error']); ?>
                        <?php endif; ?>

                        <h4 class="text-center header" style="color: black;">Login</h4>
                        <div class="form-group">
                            <label for="email" >Email Adresse<span style="color: red;">*</span></label>
                            <input type="email" class="form-control mail " style="border-radius: 10px;"
                                id="email" name="email" placeholder="Email Adresse">
                        </div>
                        <div class="form-group">
                            <label for="pass" > Password <span style="color: red;">*</span></label>
                            <input type="password" class="form-control pass"
                                style="border-radius: 10px;" id="pass" name="password" placeholder="Password">
                            <i class="fas fa-eye-slash"
                                style="position: relative; top: -30px; left: 10px; font-size: 15px; cursor: pointer;"
                                id="toggle-icon" onclick="togglePassword()"></i>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" style="border-radius:
                             10px;" class="btn log btn-block btn-info" value="Login">
                        </div>
                    </form>
               <a href="./register.php">
               <button class="btn 
                         btn-primary forget"
                        style="position: relative; left: 50%; top: 35px; transform: translateX(-50%);"
                       ">Create New Acount</button>
               </a>
                </div>
            </div>
        </div>
    </div>
    <script src="js/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>