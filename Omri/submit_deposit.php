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

        main {
            padding: 10px;
            text-align: center; /* Center-align content */
        }

        footer {
            background-color: dark;
            color: #fff;
            padding: 10px;
            text-align: center; /* Center-align the footer */
        }

        table {
            border-collapse: collapse;
            width: 80%; /* Set width to 80% of the page */
            margin: 0 auto; /* Center-align the table */
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #555;
            color: white;
        }
    </style>
</head>
<body>
<header>
    <h1>Admin Dashboard</h1>
</header>

<main>
    <h2>Available Deposits</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Amount</th>
            <th>M-Pesa Number</th>
            <th>Package</th>
            <th>Date</th>
        </tr>
        <?php
        // Database connection
        $servername = "localhost";
        $username = "root"; // Change to your MySQL username
        $password = ""; // Change to your MySQL password
        $dbname = "omri";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Fetch deposits from the database
        $sql = "SELECT * FROM deposits";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Output data in the table
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>".$row["id"]."</td>";
                echo "<td>".$row["amount"]."</td>";
                echo "<td>".$row["mpesa_number"]."</td>";
                // Check if package index exists before accessing it
                echo "<td>".(isset($row["package"]) ? $row["package"] : "")."</td>";
                // Check if date index exists before accessing it
                echo "<td>".(isset($row["date"]) ? $row["date"] : "")."</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='5'>No deposits available</td></tr>";
        }

        $conn->close();
        ?>
    </table>
</main>

</body>
</html>
