<?php
// Include the necessary PHP files to fetch summary data
include "display_admin.php";
include "display_users.php";
include "display_deposits.php";

// Fetch summary data from each page
$admin_summary = getSummary("admins");
$users_summary = getSummary("users");
$deposits_summary = getSummary("deposits");

// Function to get summary data
function getSummary($page) {
    // Sample logic to fetch summary data from each page
    // Replace this with your actual logic to fetch summary data
    $summary = array(
        "page" => $page,
        "total" => rand(10, 100), // Sample total count
        "active" => rand(5, 50), // Sample active count
        "inactive" => rand(5, 50) // Sample inactive count
    );

    return $summary;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reports</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1, h2 {
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Your HTML content for reports page goes here -->
        <h1>Reports Page</h1>
        <p>Welcome to the Reports section!</p>

        <!-- Display summaries in a table -->
        <h2>Summary of Pages</h2>
        <table>
            <tr>
                <th>Page</th>
                <th>Total</th>
                <th>Active</th>
                <th>Inactive</th>
            </tr>
            <tr>
                <td>Admins</td>
                <td><?php echo $admin_summary['total']; ?></td>
                <td><?php echo $admin_summary['active']; ?></td>
                <td><?php echo $admin_summary['inactive']; ?></td>
            </tr>
            <tr>
                <td>Users</td>
                <td><?php echo $users_summary['total']; ?></td>
                <td><?php echo $users_summary['active']; ?></td>
                <td><?php echo $users_summary['inactive']; ?></td>
            </tr>
            <tr>
                <td>Deposits</td>
                <td><?php echo $deposits_summary['total']; ?></td>
                <td><?php echo $deposits_summary['active']; ?></td>
                <td><?php echo $deposits_summary['inactive']; ?></td>
            </tr>
        </table>
    </div>
</body>
</html>
