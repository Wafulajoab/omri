<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Omri Investments</title>
    <!-- plugins:css -->
    <link rel="icon" href="https://sponsersparkfarm.com/public/bg.png" type="image/png">
    <link rel="stylesheet" href="public/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="https://sponsersparkfarm.com/public/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="https://sponsersparkfarm.com/public/assets/vendors/css/vendor.bundle.base.css">

    <link rel="stylesheet" href="https://sponsersparkfarm.com/public/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="https://sponsersparkfarm.com/public/assets/images/favicon.png" />

    <style>
        body {
            background-color: #8c96e9;
            font-family: Arial, sans-serif;
        }

        .content-wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .card {
            width: 100%; /* Set width to 100% of the page */
            max-width: 400px;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .card-header h4 {
            color: #000;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 25px;
        }

        .form-control {
            width: 90%;
            height: 7px;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
        }

        .form-control:focus {
            outline: 0;
            border-color: #007bff;
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
        }

        .btn {
            height: 30px;
            border: none;
            border-radius: 25px;
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        .custom-control-input:focus~.custom-control-label::before {
            border-color: #007bff;
        }

        .custom-control-label {
            color: #000;
        }

        .custom-control-input:checked~.custom-control-label::before {
            background-color: #007bff;
            border-color: #007bff;
        }

        .custom-checkbox .custom-control-input:checked~.custom-control-label::after {
            background-color: #fff;
        }

        .small {
            font-size: 14px;
        }

        .small a {
            color: #000;
            text-decoration: none;
        }

        .small a:hover {
            color: #007bff;
        }
    </style>
</head>

<body>


    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper align-items-center auth">

            <div class="container mt-0 pb-0" id="login_page">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-0">
                        <div class="card">
                            <div class="card-header bg-white pb-1">
                                <div class="text-center">
                                    <h4>Login To Your Account</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <form role="form" method="POST" action="lgn.php">
                                    <input type="hidden" name="_token" value="OkwoQg2ILYAxGEALV90TXKb2koGwetlFT8G4Mh6D">
                                    <div class="form-group mb-5">
                                        <div class="input-group input-group-alternative">
                                            <input class="form-control" placeholder="Username" type="text" name="username" required autofocus>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group input-group-alternative">
                                            <input class="form-control" name="password" placeholder="Password" type="password" required>
                                        </div>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" name="remember" id="customCheckLogin" type="checkbox">
                                        <label class="custom-control-label" for="customCheckLogin">
                                            <span class="text-dark">Remember me</span>
                                        </label>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn my-2">Sign in</button> <!-- Removed 'w-100' class -->
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="row mt-0">
                            <div class="col-5">
                                <a href="resetpswd.php" class="small">Forgot password?</a>
                            </div>
                            <div class="col-7 text-right">
                                <a href="register.php" class="small">Create new account</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->

</body>

</html>
