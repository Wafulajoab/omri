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

// SQL query to fetch data
$sql = "SELECT * FROM investments";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data in the admin panel section
    echo "<h2>Investments</h2>";
    echo "<div style='overflow-x:auto;'>";
    echo "<table style='border-collapse: collapse; width: 100%;'>";
    echo "<tr><th>ID</th><th>Investor Name</th><th>Amount</th><th>Date</th><th>Investments Package</th><th>Expected Maturity Date</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td style='border: 1px solid #dddddd; text-align: left; padding: 8px;'>".$row["id"]."</td>";
        echo "<td style='border: 1px solid #dddddd; text-align: left; padding: 8px;'>".$row["investor_name"]."</td>";
        echo "<td style='border: 1px solid #dddddd; text-align: left; padding: 8px;'>".$row["amount"]."</td>";
        echo "<td style='border: 1px solid #dddddd; text-align: left; padding: 8px;'>".$row["date"]."</td>";
        echo "<td style='border: 1px solid #dddddd; text-align: left; padding: 8px;'>".$row["investments_package"]."</td>";
        echo "<td style='border: 1px solid #dddddd; text-align: left; padding: 8px;'>".$row["expected_maturity_date"]."</td>";
        echo "</tr>";
    }
    echo "</table>";
    echo "</div>";
} else {
    echo "0 results";
}

$conn->close();
?>
