<?php
session_start();

// Establish connection to MySQL database
$servername = "localhost";
$username = "root"; // Your MySQL username
$password = ""; // Your MySQL password
$dbname = "omri"; // Your database name

// Include the database connection file
include 'withdraw.php';

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["amount"]) && isset($_POST["phone"])) {
    // Retrieve form data
    $user_id = $_SESSION["user_id"]; // Assuming user ID is stored in a session variable
    $withdrawal_amount = $_POST["amount"];
    $withdrawal_method = $_POST["phone"]; // Assuming phone number is the withdrawal method

    // Insert data into the database
    $sql = "INSERT INTO withdrawal_transactions (user_id, withdrawal_amount, withdrawal_method) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ids", $user_id, $withdrawal_amount, $withdrawal_method);

    if ($stmt->execute()) {
        // Display success message
        echo '<script>alert("Withdrawal request submitted successfully!");</script>';
    } else {
        echo "Error submitting withdrawal request: " . $conn->error;
    }
}

// Close connection
$conn->close();
?>
