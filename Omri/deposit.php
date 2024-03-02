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
    
</head>

<style>
    #custom_cards {
        border-radius: 8px;
    }

    @keyframes moveColors {
        0% {
            background-position: 0% 0%;
        }

        100% {
            background-position: 100% 0%;
        }
    }
</style>

<body style="background-color:#8c96e9;">
    <!-- As a heading -->
    
            
    
    <!-- Begin page content -->
    <div class="container-fluid" style="background-image:url('#'); background-repeat:no-repeat; background-size:100% 100%;">
        <div class="container">
            <!-- Transactions -->
            <div class="row mb-5">
                <div class="col">
                    <h6 class="title">Deposit To Your Account<br>
                    </h6>
                </div>
                <div class="col-auto align-self-center">
                    <a href="#" class="small">Back</a>
                </div>
            </div>

             <br><br>
             <div class="row mb-5 justify-content-center">
                <div class="col-5">
                    <div class="card bg-transparent">
                        <div class="card-body p-5 m-5">
                            <div class="main-container container"> 
                                <!-- select Amount -->
                                <!-- coupon code-->
                                <form method="GET" action="d.php">
                                    <input type="hidden" name="payhero" value="true">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Enter Mpesa Number</label>
                                        <input type="number" name="phone" class="form-control" value="254791302603" id="" placeholder="enter mpesa number">
                                    </div>
                                
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Enter Deposit Amount</label>
                                        <input type="number" required class="form-control" value="" name="amount" id="" placeholder="enter amount ">
                                    </div>
                                
                                    <button type="submit" class="btn btn-info btn-lg shadow-sm w-100">Initiate STK</button>
                                </form>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            

            <!-- Say hello to Offers! End -->
        </div>

        <nav class="navbar fixed-top navbar-light" style="background-color:black;">

            <div id="buttonGroup" class="btn-group selectors" style="background-color:black;" role="group" aria-label="Basic example">
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
        </nav>

        <!-- Bottom Nav Bar -->
        <footer class="footer" style="margin:8px; width:95%;background:transparent;">
            <!-- <a href="profile" id="account" type="button" class="btn btn-secondary button-inactive">-->
            <!--    <div class="selector-holder">-->
            <!--        <i class="material-icons">settings</i>-->
            <!--        <span>Profile</span>-->
            <!--    </div>-->
            <!--</a>-->
        </footer>
        <script>
            function copyLink() {
                var copyText = document.getElementById("mylink");
                copyText.select();
                copyText.setSelectionRange(0, 99999);
                navigator.clipboard.writeText(copyText.value);
                alert("Copied address: " + copyText.value);
            }
        </script>

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
