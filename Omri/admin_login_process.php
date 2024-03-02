<?php
session_start();

// Assuming your database connection is established
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "omri";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve username and password from the form
$username = $_POST['username'];
$password = $_POST['password'];

// SQL query to check if the admin credentials are valid
$sql = "SELECT * FROM admins WHERE username='$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Admin found, verify password
    $row = $result->fetch_assoc();
    if (password_verify($password, $row['password'])) {
        // Password is correct, set session variables
        $_SESSION['admin_username'] = $username;
        // Redirect to admin dashboard or any other page
        header("Location: admin_dashboard.php");
        exit();
    } else {
        // Incorrect password
        $_SESSION['login_error'] = "Incorrect username or password";
        header("Location: admin_login.php");
        exit();
    }
} else {
    // Admin not found
    $_SESSION['login_error'] = "Incorrect username or password";
    header("Location: admin_login.php");
    exit();
}

$conn->close();
?>
