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
    <!-- <script defer src="public/new_assets/plugins/fontawesome/js/all.min.js"></script>
    <link rel="shortcut icon" href="favicon.ico"> -->

    <style>
        /* Custom CSS for center alignment and width */
        .custom-container {
            width: 50%;
            margin: 0 auto;
        }
    </style>
</head>

<body style="background-color:#8c96e9;">
    <!-- As a heading -->

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
            <ul id="dropdownMenu" class="dropdown-menu dropdown-menu-right" style="background-color: light black; color: rgb(0, 0, 0); left: auto; right: 0;">
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

    <!-- Begin page content -->
    <div class="container-fluid custom-container">
        <!--include('layouts.headers.cards')-->
        <br><br><br>
        <div class="content-body">
            <div class="container">
                <div class="app-wrapper">

                    <div class="mt-3 bg-transparent app-content p-md-3 p-lg-4 p-sm-8">
                        <div class="container-xl">

                        <form role="form" method="POST" action="h.php">
                            <div class="mb-4 row g-4 justify-content-center">
                                <div class="shadow col-12 col-lg-6 card" style="background:green;">
                                    <div class="app-card app-card-stat h-100" style="background:green;">
                                        <div class="p-3 app-card-body p-lg-2 p-sm-8">
                                           
                                        <h4 class="mb-1 stats-type text-white"> Total Deposit Amount</h4>
                                        <?php include 'display_deposit.php'; ?>
                                        </div><!--//app-card-body 505E76-->
                                        <a class="app-card-link-mask" href="#"></a>
                                    </div><!--//app-card-->
                                </div><!--//col-->

                                <br><br>

                                <div class="shadow col-12 col-lg-6 card" style="background:#505E76;">
                                    <div class="app-card app-card-stat h-100" style="background:#505E76;">
                                        <div class="p-3 app-card-body p-lg-2">
                                            <h4 class="mb-1 stats-type text-white"> Total Account Amount</h4>
                                            <div class="stats-figure text-white">KES.0.00</div>
                                        </div><!--//app-card-body-->
                                        <a class="app-card-link-mask" href="#"></a>
                                    </div><!--//app-card-->
                                </div><!--//col FEAF00-->

                                <div class="shadow col-12 col-lg-6 card" style="background:brown;">
                                    <div class="app-card app-card-stat h-100" style="background:brown;">
                                        <div class="p-3 app-card-body p-lg-2">
                                            <h4 class="mb-1 stats-type text-light">Total Daily Income</h4>
                                            <div class="stats-figure text-white">KES.0.00</div>
                                        </div><!--//app-card-body-->
                                        <a class="app-card-link-mask" href="#"></a>
                                    </div><!--//app-card-->
                                </div><!--//col F5E4FB-->
<br><br>
                                <div class="shadow col-12 col-lg-6 card" style="background:purple;">
                                    <div class="app-card app-card-stat h-100" style="background:purple;">
                                        <div class="p-3 app-card-body p-lg-2">
                                            <h4 class="mb-1 stats-type text-white"> Total Invested Amount</h4>
                                            <div class="stats-figure text-white">KES.0.00</div>
                                        </div><!--//app-card-body-->
                                        <a class="app-card-link-mask" href="#"></a>
                                    </div><!--//app-card-->
                                </div><!--//col FEAF00-->

                                <div class="shadow col-12 col-lg-6 card" style="background:blue;">
                                    <div class="app-card app-card-stat h-100" style="background:blue;">
                                        <div class="p-3 app-card-body p-lg-2">
                                            <h4 class="mb-1 stats-type text-white">Total Withdrawn Amount</h4>
                                            <div class="stats-figure text-white">KES.0.00</div>
                                        </div><!--//app-card-body-->
                                        <a class="app-card-link-mask" href="#"></a>
                                    </div><!--//app-card-->
                                </div><!--//col-->
<br><br>
                                <div class="shadow col-12 col-lg-6 bg-info card">
                                    <div class="app-card app-card-stat h-100 bg-info">
                                        <div class="p-3 app-card-body p-lg-2">
                                            <h4 class="mb-1 stats-type text-white">Total Members Invited</h4>
                                            <div class="stats-figure text-white">0</div>
                                        </div><!--//app-card-body-->
                                        <a class="app-card-link-mask" href="#"></a>
                                    </div><!--//app-card-->
                                </div><!--//col-->

                                <br><br>
                                <div class="shadow col-12">
                                    <label>Referral Link</label>
                                    <div class="row">
                                        <div class="col-8">
                                            <input type="text" id="copy" class="form-control form--control referralURL" value="https://omri-investent.com/register?code=xyz" readonly>
                                        </div>
                                        <div class="col-4">
                                            <a href="#" onclick="CopyToText('copy');return true;" class="ml-0 text-white btn btn-link bg-primary">Copy</a>
                                        </div>
                                    </div>
                                    <div class="row mt-3 mb-3">
                                        <div class="col-6">
                                            <a href="#" style="color:black;"><button class="btn btn-sm btn-primary">Download App</button></a>
                                        </div>
                                        <div class="col-6">
                                            <a href="#" style="color:black;"><button class="btn btn-sm btn-primary">WhatsApp-Group</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div><!--//row-->

                        </div>
                    </div>


                </div><!--//app-wrapper-->


            </div>
        </div>

        


        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script>
            function CopyToTet() {

                var r = document.getElementById(id);

                document.execCommand('copy');
                window.getSelection().removeAllRanges();
                swal("successfuly Copied!", "Ready To Share Your Referral Link!", "success");
            }

            function CopyToText(id) {
                var copyText = document.getElementById(id)
                copyText.select()
                copyText.setSelectionRange(0, 999)
                document.execCommand("copy")
                console.log(copyText);
                swal("successfuly Copied!", "Ready To Share Your Referral Link!", "success");
            }
        </script>
        <br><br>
    </div>

    <!-- Bottom Nav Bar -->
    <footer class="footer" style="margin:8px; width:95%;background:transparent;">

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
