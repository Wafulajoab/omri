<?php
session_start();

// Establish connection to MySQL database
$servername = "localhost";
$username = "root"; // Your MySQL username
$password = ""; // Your MySQL password
$dbname = "omri"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the deposits table exists
$result = $conn->query("SHOW TABLES LIKE 'deposits'");
$tableExists = $result->num_rows > 0;

// If deposits table doesn't exist or has no rows, reset the auto-increment value to 1
if (!$tableExists || $conn->query("SELECT COUNT(*) FROM deposits")->fetch_row()[0] === '0') {
    $conn->query("ALTER TABLE deposits AUTO_INCREMENT = 1");
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['payhero'])) {
    $mpesa_number = $_GET['phone'];
    $amount = $_GET['amount'];

    // Prepare SQL statement to insert deposit information
    $sql = "INSERT INTO deposits (mpesa_number, amount) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);

    // Bind parameters and execute the statement
    $stmt->bind_param("sd", $mpesa_number, $amount);

    if ($stmt->execute()) {
        // Deposit information successfully inserted
        echo "<script>
                alert('Deposited Successfully');
                setTimeout(function() {
                    window.location.href = 'deposit.php';
                }, 2000); // 2 seconds delay before redirecting
              </script>";
        exit();
    } else {
        // Error inserting deposit information
        echo "<script>
                alert('Error recording deposit information');
                setTimeout(function() {
                    window.location.href = 'deposit.php';
                }, 2000); // 2 seconds delay before redirecting
              </script>";
              exit();
    }
}

// Close the database connection
$conn->close();
?>
