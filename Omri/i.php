<?php
session_start();

// Establish connection to MySQL database
$servername = "localhost";
$username = "root"; // Your MySQL username
$password = ""; // Your MySQL password
$dbname = "omri"; // Your database name

// Include the database connection file
include 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit_investment'])) {
    // Get investment data from the form
    $user_id = $_SESSION['user_id']; // Assuming you stored user ID in session
    $package = $_POST['package'];
    $capital = $_POST['capital'];
    $daily_income = $_POST['daily_income'];
    $start_date = date('Y-m-d');
    $days_countdown = $_POST['days_countdown'];

    // Prepare SQL statement to insert investment information
    $sql = "INSERT INTO investments (user_id, package, capital, daily_income, start_date, days_countdown) 
            VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    // Bind parameters and execute the statement
    $stmt->bind_param("isdsii", $user_id, $package, $capital, $daily_income, $start_date, $days_countdown);

    if ($stmt->execute()) {
        // Investment information successfully inserted
        echo "<script>alert('Investment Successful');</script>";
    } else {
        // Error inserting investment information
        echo "<script>alert('Error recording investment');</script>";
    }
}

// Close the database connection
$conn->close();
?>

