<?php
session_start();

// Establish connection to MySQL database
$servername = "localhost";
$username = "root"; // Your MySQL username
$password = ""; // Your MySQL password
$dbname = "omri"; // Your database name

// Include the database connection file
include 'invest.php';

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Reset the auto-increment value of the ID column to 1
$sql_reset = "ALTER TABLE executive_investments AUTO_INCREMENT = 1";
if ($conn->query($sql_reset) === TRUE) {
    echo "Auto-increment value reset successfully.";
} else {
    echo "Error resetting auto-increment value: " . $conn->error;
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit_investment"])) {
    // Retrieve form data
    $capital = $_POST["capital"];
    $minimum = $_POST["minimum"];
    $days = $_POST["days"];
    $type = $_POST["type"];
    $package_name = "Executive Package";
    $expected_payout = $capital * (1 + 1); // Assuming 100% return
    $user_id = 1; // Assuming a user ID

    // Calculate maturity date and time
    $maturity_date = date('Y-m-d', strtotime("+{$days} days"));
    $maturity_time = '23:59:59'; // Assuming maturity time is end of day

    // Insert data into the database
    $sql = "INSERT INTO executive_investments (capital, minimum, days, type, package_name, expected_payout, user_id, maturity_date, maturity_time) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ddiisdiss", $capital, $minimum, $days, $type, $package_name, $expected_payout, $user_id, $maturity_date, $maturity_time);

    if ($stmt->execute()) {
        // Display pop-up message using JavaScript
        echo '<script>alert("Successfully Invested in Executive Package!");</script>';
    } else {
        echo "Error recording investment: " . $conn->error;
    }
}

// Close connection
$conn->close();
?>
