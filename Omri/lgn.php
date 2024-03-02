<?php
session_start();

// Establish connection to MySQL database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "omri";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate user credentials
    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            // Correct credentials, redirect to dashboard or wherever you want
            $_SESSION['username'] = $username;
            header("Location: home.php");
            exit();
        } else {
            // Incorrect password
            echo "<script>alert('Incorrect details');</script>";
            // Delay the redirect by 2 seconds
            echo "<meta http-equiv='refresh' content='2;url=login.html'>";
        }
    } else {
        // User not found
        echo "<script>alert('Incorrect details');</script>";
        // Delay the redirect by 2 seconds
        echo "<meta http-equiv='refresh' content='2;url=login.html'>";
    }
}

// Close the database connection
$conn->close();
?>
