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
    <!-- Internal CSS -->
    <style>
        body {
            background-color: #8c96e9;
            font-family: Arial, sans-serif;
        }
        .content-wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 90vh;
        }
        .card {
            width: 100%;
            max-width: 400px;
            padding: 20px;
            background-color: #e6eced;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .card-header h4 {
            color: #000;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-control {
            width: 90%;
            height: 7px;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
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
        .text-center {
            text-align: center;
        }
        .mt-4 {
            margin-top: 20px;
        }
        .small-link {
            font-size: 14px;
            color: #007bff;
            text-decoration: none;
        }
    </style>
</head>

<body>
   

    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper align-items-center auth">
           
            <div class="container m-0 pb-5" id="register_page">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-0">
                        <div class="card bg-transparent shadow rounded">
                            <div class="card-header bg-white pb-1">


                            <div class="card-header">
                <center>
                    <img src="omri.jpg" class="card-img-top" style="width:100px;" alt="avatar">
                </center>
            </div>
            


                                <div class="text-dark text-center"><h4>Create Your Account</h4></div>
                            </div>


                            <div class="card-body px-lg-3 py-lg-3">
                                <form role="form" method="POST" action="r.php">
                                    <input type="hidden" name="token" value="">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Name" type="text" name="name" value="" required autofocus>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Username" type="text" name="username" value="" required autofocus>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Phone" type="text" name="phone" value="254" required autofocus>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Email" type="email" name="email" value="" required>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Password" type="password" name="password" required>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Confirm Password" type="password" name="password_confirmation" required>
                                    </div>
                                    <input type="hidden" value="Kenya" name="country">
                                    <input type="hidden" value="" name="ip">
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-info mt-4 w-100">Create account</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-6">
                                <a href="https://wa.me/+254791302603" class="small-link">
                                    <small>Need Help?</small>
                                </a>
                            </div>
                            <div class="col-6 text-right">
                                <a href="login.php" class="small-link">
                                    <small>Already Have Account?</small>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
