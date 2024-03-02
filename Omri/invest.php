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
    
    <!-- Google Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script defer src="public/new_assets/plugins/fontawesome/js/all.min.js"></script>
    <link rel="shortcut icon" href="favicon.ico">
</head>

<body style="background-color:#8c96e9;">
    <!-- As a heading -->
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
     
    <div class="btn-group dropstart">
        <button type="button" class="btn" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://action-economics.shop/public/user.png" style="height:30px;border-radius:15px;">
        </button>
        <ul class="dropdown-menu">
            <!-- Dropdown menu links -->
            <li><a href="logout"><button class="dropdown-item" type="button">Logout</button></a></li>
            <li><a href="profile"><button class="dropdown-item" type="button">Profile</button></a></li>
            <li><a href="downlines"><button class="dropdown-item" type="button">My Team</button></a></li>
            <li><a href="https://wa.me/+254791302603"><button class="dropdown-item" type="button">Contact</button></a></li>
        </ul>
    </div>
    </nav>
    <hr>        

    <!-- Silver Package -->
    <div class="card border mb-3 rainbow">
        <center><h4>SILVER PACKAGE</h4></center>
        <div class="card-body b-2 m-2 rounded text-secondary" style="background-color:black; align-self: center;">
            <div class="col align-items-center">
                <div align="center" class="col badge bg-info">Minimum Capital: KES. 500</div><br>
                <div style="flex-direction: column;" class="col d-flex align-items-center justify-content-center text-center">
                    <small class="mb-1 badge bg-success">Earn 15% After 2 Days</small><br>
                    <form class="text-center" method="post" action="silver_investments.php"> <!-- Update the action attribute -->
                        <input type="hidden" name="_token" value="akMPZ42oATbijoPE7QcdW07IypWOwTQiAYaNbgIu">
                        <input type="hidden" value="10" name="daily">
                        <input type="hidden" value="500" name="minimum">
                        <input type="hidden" value="2" name="days">
                        <input type="hidden" value="0" name="type">
                        <label class="badge bg-info">Enter Capital & Submit:</label>
                        <input type="number" name="capital" style="font-weight:bold;" placeholder="Enter Amount" value="" class="form-control form-control-sm"><br>
                        <button class="btn btn-sm btn-primary border-custom" type="submit" name="submit_investment" data-id="158">Submit Investment</button> <!-- Add name attribute -->
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bronze Package -->
    <div class="card border mb-3 rainbow">
        <center><h4>BRONZE PACKAGE</h4></center>
        <div class="card-body b-2 m-2 rounded text-secondary" style="background-color:brown; align-self: center;">
            <div class="col align-items-center">
                <div align="center" class="col badge bg-info">Minimum Capital: KES.1000</div><br>
                <div style="flex-direction: column;" class="col d-flex align-items-center justify-content-center text-center">
                    <small class="mb-1 badge bg-success">Earn 30% After 3 days</small><br>
                    <form class="text-center" method="post" action="bronze_investments.php">
                        <input type="hidden" name="_token" value="akMPZ42oATbijoPE7QcdW07IypWOwTQiAYaNbgIu">
                        <input type="hidden" value="10" name="daily">
                        <input type="hidden" value="1000" name="minimum">
                        <input type="hidden" value="3" name="days">
                        <input type="hidden" value="0" name="type">
                        <label class="badge bg-info">Enter Capital & Submit:</label>
                        <input type="number" name="capital" style="font-weight:bold;" placeholder="Enter Amount" value="" class="form-control form-control-sm"><br>
                        <button class="btn btn-sm btn-primary border-custom" type="submit" name="submit_investment" data-id="158">Submit Investment</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Gold Package -->
    <div class="card border mb-3 rainbow">
        <center><h4>GOLD PACKAGE</h4></center>
        <div class="card-body b-2 m-2 rounded text-secondary" style="background-color:purple; align-self: center;">
            <div class="col align-items-center">
                <div align="center" class="col badge bg-info">Minimum Capital: KES.2,000</div><br>
                <div style="flex-direction: column;" class="col d-flex align-items-center justify-content-center text-center">
                    <small class="mb-1 badge bg-success">Earn 50% After 6 Days</small><br>
                    <form class="text-center" method="post" action="gold_investments.php">
                        <input type="hidden" name="_token" value="akMPZ42oATbijoPE7QcdW07IypWOwTQiAYaNbgIu">
                        <input type="hidden" value="10" name="daily">
                        <input type="hidden" value="2000" name="minimum">
                        <input type="hidden" value="6" name="days">
                        <input type="hidden" value="0" name="type">
                        <label class="badge bg-info">Enter Capital & Submit:</label>
                        <input type="number" name="capital" style="font-weight:bold;" placeholder="Enter Amount" value="" class="form-control form-control-sm"><br>
                        <button class="btn btn-sm btn-primary border-custom" type="submit" name="submit_investment" data-id="158">Submit Investment</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Executive Package -->
    <div class="card border mb-3 rainbow">
        <center><h4>EXECUTIVE PACKAGE</h4></center>
        <div class="card-body b-2 m-2 rounded text-secondary" style="background-color:blue; align-self: center;">
            <div class="col align-items-center">
                <div align="center" class="col badge bg-info">Minimum Capital: KES.5,000</div><br>
                <div style="flex-direction: column;" class="col d-flex align-items-center justify-content-center text-center">
                    <small class="mb-1 badge bg-success">Earn 100% After 8 Days</small><br>
                    <form class="text-center" method="post" action="executive_investments.php">
                        <input type="hidden" name="_token" value="akMPZ42oATbijoPE7QcdW07IypWOwTQiAYaNbgIu">
                        <input type="hidden" value="10" name="daily">
                        <input type="hidden" value="5000" name="minimum">
                        <input type="hidden" value="8" name="days">
                        <input type="hidden" value="0" name="type">
                        <label class="badge bg-info">Enter Capital & Submit:</label>
                        <input type="number" name="capital" style="font-weight:bold;" placeholder="Enter Amount" value="" class="form-control form-control-sm"><br>
                        <button class="btn btn-sm btn-primary border-custom" type="submit" name="submit_investment" data-id="158">Submit Investment</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-lg-7 mb-lg-0 mb-4">
            <div class="card ">
                <div class="card-header pb-0 p-3">
                    <div class="d-flex justify-content-between">
                        <h6 class="mb-2">My Investment Table</h6>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-sm small align-items-center text-dark">
                        <thead>
                            <tr>
                                <th class="text-dark font-weight-bold mb-0"> ID </th>
                                <th>
                                    <div class="text-center">
                                        <p class="text-dark font-weight-bold mb-0">Capital:</p>
                                    </div> 
                                </th>
                                <th>
                                    <div class="text-center">
                                        <p class="text-dark font-weight-bold mb-0">Daily Income:</p>
                                    </div> 
                                </th>
                                <th>
                                    <div class="text-center">
                                        <p class="text-dark font-weight-bold mb-0">Start date:</p>
                                    </div> 
                                </th>
                                <th> 
                                    <div class="text-center">
                                        <p class="text-dark font-weight-bold mb-0">Days- Countdown:</p>
                                    </div> 
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Bottom Nav Bar -->
    <footer class="footer" style="margin:8px; width:95%;background:transparent;"></footer>
    
    <script>
        function copyLink() {
            var copyText = document.getElementById("mylink");
            copyText.select();
            copyText.setSelectionRange(0, 99999);
            navigator.clipboard.writeText(copyText.value);
            alert("Copied address: " + copyText.value);
        }
    </script>

</body>

</html>
