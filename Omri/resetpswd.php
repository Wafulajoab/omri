<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Reset Password - Omri Investments</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<center class="p-0 mt-3 " style="background:black;">
        <nav class="navbar fixed-top navbar-light" style="background-color:black;">
            <h1 style="color:rgb(247, 243, 243);">OMRI INVESTMENTS</h1>
        </nav>
    </center>
<body>

<br><br><br>
    <div class="container mt-4">
    <div class="col">
                <center>
                    <img src="omri.jpg" style="height:50px;">
                </center>
            </div>
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card">
             
                    <div class="card-header">
                        Reset Password
                    </div>
                    <div class="card-body">
                        <form action="resetp.php" method="post">
                            <div class="form-group">
                                <label for="email">Email Address</label>
                                <input type="email" name="email" id="email" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="password">New Password</label>
                                <input type="password" name="password" id="password" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="confirm_password">Confirm New Password</label>
                                <input type="password" name="confirm_password" id="confirm_password" class="form-control" required>
                            </div>
                            <button type="submit" name="reset_password" class="btn btn-primary">Reset Password</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
