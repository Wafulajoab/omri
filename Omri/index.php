<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Welcome to Omri Investments">
    <meta name="author" content="Andrew Henry">
    <title>Omri Investments</title>
    <link rel="icon" href="https://sponsersparkfarm.com/public/lg.png" type="image/png">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            margin: 0;
            padding: 0;
            background-image: url('omri.jpg');
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center; /* Change to flex-start to position at the top */
            align-items: center;
            color: rgb(241, 245, 241); /* bright color */
        }

        /* Style for the welcome message */
        .welcome-message {
            font-size: 50px; /* Adjusted to medium size */
            text-align: center;
            font-family: 'Times New Roman', Times, serif;
            margin-top: 50px; /* Adjusted for more spacing */
            animation: glow 3s linear infinite alternate; /* Animation properties */
        }

        @keyframes glow {
            0% {
                color: #ff0000; /* Red */
                box-shadow: 0 0 10px #ff0000; /* Red glow */
            }
            50% {
                color: #00ff00; /* Green */
                box-shadow: 0 0 20px #00ff00; /* Green glow */
            }
            100% {
                color: #0000ff; /* Blue */
                box-shadow: 0 0 30px #0000ff; /* Blue glow */
            }
        }


        /* Style for the button container */
        .btn-container {
            display: flex;
            justify-content: center;
            margin-top: 20px; /* Adjusted margin for spacing */
        }

        /* Style for the buttons */
        .btn {
            margin: 5px;
        }
    </style>
</head>

<body>
    <div class="welcome-message">
        <p><b>WELCOME TO OMRI INVESTMENTS!</b></p>
    </div>

    <div class="btn-container">
         <a href="admin.php" class="btn btn-danger">Register as Admin</a> <!-- New link for admin registration -->
        <a href="admin_login.php" class="btn btn-warning">Login as Admin</a> <!-- New link for admin login -->

        <a href="register.php" class="btn btn-secondary">Register as User</a>
        <a href="login.php" class="btn btn-primary">Login as User</a>
    </div>
</body>

</html>
