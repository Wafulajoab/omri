<?php
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

// Reset the auto-increment value of the ID column to 1
$sql_reset = "ALTER TABLE users AUTO_INCREMENT = 1";
if ($conn->query($sql_reset) === TRUE) {
    echo "Auto-increment value reset successfully.";
} else {
    echo "Error resetting auto-increment value: " . $conn->error;
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $username = $_POST['username'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Hash the password for security
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // SQL query to insert user data into the database
    $sql = "INSERT INTO users (name, username, phone, email, password) 
            VALUES ('$name', '$username', '$phone', '$email', '$hashed_password')";

    if ($conn->query($sql) === TRUE) {
        header("Location: login.php"); // Redirect to the login page
        exit(); // Ensure that no other content is sent
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close connection
$conn->close();
?>
