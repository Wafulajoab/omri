<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Template for the new android layout">
    <meta name="author" content="Andrew Henry">
    <link rel="icon" href="#">
    <title>Omri Investments</title>
    <link rel="icon" href="https://sponsersparkfarm.com/public/lg.png" type="image/png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/main.css">
    <!-- Google Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script defer src="public/new_assets/plugins/fontawesome/js/all.min.js"></script>
    <link rel="shortcut icon" href="favicon.ico">

    <!-- App CSS -->
    <link id="theme-style" rel="stylesheet" href="public/new_assets/css/portal.css">

    <style>
        #custom_cards {
            border-radius: 8px;
        }
    </style>
</head>

<body style="background-color:#8c96e9;">
    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-light" style="background-color:black;">
        <div id="buttonGroup" class="btn-group selectors" style="background-color:black;;" role="group" aria-label="Basic example">
            <!-- Navbar buttons -->
            <a href="home.php" id="home" type="button" class="btn button-active">
                <div class="selector-holder">
                    <i class="material-icons">token</i>
                    <span>Home</span>
                </div>
            </a>
            <a href="deposit.php" id="feed" type="button" class="btn  button-inactive">
                <div class="selector-holder">
                    <i class="material-icons">local_atm</i>
                    <span>Deposit</span>
                </div>
            </a>
            <a href="invest.php" id="create" type="button" class="btn  button-inactive">
                <div class="selector-holder">
                    <i class="material-icons">diamond</i>
                    <span>Invest</span>
                </div>
            </a>
            <a href="withdraw.php" id="account" type="button" class="btn  button-inactive">
                <div class="selector-holder">
                    <i class="material-icons">shopping_cart_checkout</i>
                    <span>Cashout</span>
                </div>
            </a>
            <a href="profile.php" id="account" type="button" class="btn button-inactive">
                <div class="selector-holder">
                    <i class="material-icons">account_circle</i>
                    <span>Profile</span>
                </div>
            </a>
        </div>

        <!-- Profile dropdown -->
        <div class="btn-group dropstart">
            <button id="profileDropdown" type="button" class="btn" aria-expanded="false">
                <!-- Profile icon -->
                <img src="profile.jpg" style="height:30px;">
            </button>
            <ul id="dropdownMenu" class="dropdown-menu dropdown-menu-right" style="background-color:light blue; left: auto; right: 0;">
                <!-- Dropdown menu links -->
                <li><a href="logout.php"><button class="dropdown-item" type="button">Logout</button></a></li>
                <li><a href="profile.php"><button class="dropdown-item" type="button">Profile</button></a></li>
                <li><a href="myteam.php"><button class="dropdown-item" type="button">My Team</button></a></li>
                <li><a href="https://wa.me/+254791302603"><button class="dropdown-item" type="button">Contact</button></a></li>
            </ul>
        </div>
        
<script>
document.getElementById("profileDropdown").addEventListener("click", function() {
    var dropdownMenu = document.getElementById("dropdownMenu");
    if (dropdownMenu.classList.contains("show")) {
        dropdownMenu.classList.remove("show");
    } else {
        dropdownMenu.classList.add("show");
    }
});
</script>

    </nav>

    <!-- Page content -->
    <div class="container-fluid" style="background-image:url('#'); background-repeat:no-repeat; background-size:100% 100%;">
        <br><br><br><br>
        <div class="card" style="max-width: 50%; margin: auto;">
            <div class="card-header">
                <center>
                    <img src="omri.jpg" class="card-img-top" style="width:100px;" alt="avatar">
                </center>
            </div>
            <div class="card-body" style="text-decoration-color: black">
                <h5 class="card-title">Joab Wafula</h5>
                <p class="card-text">Your User Id Is:5173.</p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item" style="text-decoration-color: black">Username: Joab</li>
                <li class="list-group-item">Phone number: 254791302603</li>
                <li class="list-group-item">Balance: 0</li>
            </ul>
            <div class="card-body">
                <a href="editprofile.php" class="card-link">EDIT</a>
            </div>
        </div>
        
        <br><br>
    </div>


    
    <!-- Footer and scripts -->
    <footer class="footer" style="margin: 8 px; width:95%; background:transparent;">
        <!-- Footer content -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <!-- JS needed for this page -->
    <script src="public/js/main.js"></script>
    <!-- Javascript -->
    <script src="public/new_assets/plugins/popper.min.js"></script>
    <script src="public/new_assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- Charts JS -->
    <script src="public/new_assets/plugins/chart.js/chart.min.js"></script>
    <script src="public/new_assets/js/index-charts.js"></script>

    <!-- Page Specific JS -->
    <script src="public/new_assets/js/app.js"></script>
</body>

</html>
