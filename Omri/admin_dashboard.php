<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        /* CSS styles */
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            height: 100vh;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 1px;
        }

        nav {
            background-color: #555;
            color: #fff;
            width: 0; /* Initially hide the sidebar */
            flex: 0 0 auto; /* Fix the sidebar */
            transition: width 0.5s; /* Animation effect for width */
        }

        nav:hover {
            width: 150px; /* Expand width on hover */
        }

        nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        nav ul li {
            padding: 10px;
            border-bottom: 1px solid #444;
        }

        nav ul li a {
            text-decoration: none;
            color: inherit;
            transition: background-color 0.3s; /* Hover effect transition */
        }

        nav ul li a:hover {
    border-bottom: 2px solid #fff; /* Add a 2px solid white line under the links on hover */
}

        main {
            padding: 10px;
            margin-left: 350px; /* Adjust margin to accommodate sidebar width */
            flex: 3; /* Expand main content area to fill remaining space */
        }


        footer {
            background-color: green;
            color: #fff;
            padding: 1px;
            text-align: center; /* Center-align the footer */
        }

        .dropdown-content {
            display: none;
        }

        .dropdown.active .dropdown-content {
            display: block;
        }
    </style>
</head>
<body>
<header>
    <style>
        h1 {
            text-align: center;
        }
    </style>
    <h1>Omri Investments Admin Dashboard</h1>
</header>

    <nav>
        <ul>
        <?php
// Your PHP logic to determine whether to redirect to analytics section
$redirect_to_analytics = true; // Change this condition as per your logic
?>

<li class="dropdown">
    <a href="#" style="color: white;">Dashboard</a>
    <br>
    <div class="dropdown-content">
        <a href="<?php echo $redirect_to_analytics ? 'analytics.php' : 'analytics_process.php'; ?>" style="color: white;">Analytics</a>
        <br>
        <a href="reports.php" style="color: white;">Reports</a>
    </div>
</li>

            <br>
            <li><a href="display_admin.php" style="color: white;">Admins</a></li>
            <br>
            <li><a href="display_users.php" style="color: white;">Users</a></li>
            <br>
            <li><a href="#" style="color: white;">Settings</a></li>
         
            <br>
            <li><a href="display_investments.php" style="color: white;">Investments</a></li>
            <br>
            <li><a href="submit_deposit.php" style="color: white;">Deposits</a></li>
            <br>
            <li><a href="withrawal_display.php" style="color: white;">Withdrawals</a></li>
            <br>
            <li><a href="#" style="color: white;">Downlines</a></li>
        </ul>
    </nav>



    <footer style="position: fixed; bottom: 0; width: 100%; background-color: #333; color: #fff; text-align: center; padding: 0.5px;">
    <p>&copy; 2024 Admin Dashboard. All rights reserved.</p>
</footer>

    <script>
        // JavaScript for dropdown menu functionality
        document.addEventListener('DOMContentLoaded', function() {
            var dropdowns = document.querySelectorAll('.dropdown');
            dropdowns.forEach(function(dropdown) {
                dropdown.addEventListener('click', function() {
                    dropdown.classList.toggle('active');
                });
            });
        });
    </script>
</body>
</html>
