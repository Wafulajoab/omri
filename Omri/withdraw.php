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
    <!-- <link rel="stylesheet" href="public/css/main.css"> -->
    <!-- Google Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    	<script defer src="public/new_assets/plugins/fontawesome/js/all.min.js"></script>
    		<link rel="shortcut icon" href="favicon.ico">

           
</head>

<style>
    #custom_cards
    {
      border-radius:8px;
    }
   @keyframes  moveColors {
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
 </nav>
       
     
                <div class="btn-group dropstart">
                  <button type="button" class="btn" data-bs-toggle="dropdown" aria-expanded="false">
                     <img src="https://action-economics.shop/public/user.png" style="height:30px;border-radius:15px;">
                  </button>
                  <ul class="dropdown-menu">
                    <!-- Dropdown menu links -->
                        <!-- <li><a href="logout.php"><button class="dropdown-item" type="button">Logout</button></a> -->
                       <li><a href="logout.php"><button class="dropdown-item" type="button">Logout </button></a>

                        </li>
                        <li><a href="profile">
                            <button class="dropdown-item" type="button">Profile</button></a>
                        </li>
                       <li><a href="downlines">
                            <button class="dropdown-item" type="button">My Team</button></a>
                        </li>
                        
                         <li><a href="https://wa.me/+254791302603">
                            <button class="dropdown-item" type="button">Contact</button></a>
                        </li>
                  </ul>
                </div>
    </nav>

    <div class="col mt-3" style="max-width: 50%; margin: auto;">
      <div class="alert alert-info alert-dismissible fade show" role="alert">
          <strong>Hello "username"!</strong><hr> Your current transactions fee is 8%, Keep inviting to reduce this fee
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      <form id="withdrawForm" method="post" action="withdrawal_transactions.php">
        <input type="hidden" name="_token" value="akMPZ42oATbijoPE7QcdW07IypWOwTQiAYaNbgIu">
        <div class="card">
            <div class="card-header">
                <center>
                    <img src="omri.jpg" class="card-img-top" style="width:100px;" alt="avatar">
                </center>
            </div>
            <div class="card-header">
                <h4 class="card-title">WITHDRAWAL PANEL</h4>
            </div>
            <div class="card-body">
                <!-- Form for withdrawing -->
                <div class="form-group">
                    <label>Enter wallet or phone No:</label>
                    <input type="text" name="phone" id="phone" class="form-control text-dark" value="" placeholder="Enter wallet or phone" aria-label="Enter wallet or phone" required>
                </div>
                <div class="form-group">
                    <label>Enter Amount</label>
                    <input required type="number" name="amount" id="amount" class="form-control form-control-lg bg-light text-dark" placeholder="Enter Amount" aria-label="Enter Amount" min="500" max="120000" required>
                    <small class="text-muted">Minimum: Ksh. 500 | Maximum: Ksh. 120000</small>
                </div>
                <button type="button" onclick="withdraw()" class="btn btn-success w-100">WITHDRAW YOUR INCOME</button>
                <!-- Section to show available account balance -->
                <div class="mt-3">
                    <p class="mb-0">Available Account Balance: Ksh 500.00</p>
                </div>
            </div>
        </div>
    </form>
    
    <script>
        function withdraw() {
            var amount = parseInt(document.getElementById('amount').value);
            var minWithdrawal = 500;
            var maxWithdrawal = 120000;
    
            if (amount > maxWithdrawal) {
                alert("Maximum withdrawal is Ksh. 120000.00");
                setTimeout(function() {
                    document.getElementById('amount').value = '';
                }, 2000); // Change the duration to 2000 milliseconds (2 seconds)
            } else if (amount >= minWithdrawal) {
                alert("Successful withdrawal");
                // Submit the form
                document.getElementById("withdrawForm").submit();
            } else {
                alert("Insufficient balance");
            }
        }
    </script>

    
  </div>
  <br>
  
  <div class="col-12 stretch-card" style="max-width: 50%; margin: auto;">
    <div class="card">
        <div class="card-header">
            <small>8% transaction fee applied for taxes</small>
        </div>
        <div class="card-body">
            <h6 class="card-title center">Your Withdrawal Table</h6>
            <div class="table-responsive">
                <table class="table table-stripped table-contextual">
                    <thead class="text-black">
                        <tr>
                            <th> ID </th>
                            <th> AMOUNT </th>
                            <th> MPESA </th>
                            <th> STATUS </th>
                            <th> DATE </th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Your table content goes here -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


         <br><br>
    </div>

  
        </div>
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
    <!-- <script src="public/js/main.js"></script> -->
    	<!-- Javascript -->
	<!-- <script src="public/new_assets/plugins/popper.min.js"></script>
	<script src="public/new_assets/plugins/bootstrap/js/bootstrap.min.js"></script> -->

	<!-- Charts JS -->
	<!-- <script src="public/new_assets/plugins/chart.js/chart.min.js"></script>
	<script src="public/new_assets/js/index-charts.js"></script> -->

	<!-- Page Specific JS -->
	<!-- <script src="public/new_assets/js/app.js"></script> -->
</body>

</html>