<?php
session_start();

// Establish connection to MySQL database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "omri";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["reset_password"])) {
    // Retrieve form data
    $email = $_POST["email"];
    $new_password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    // Validate password and confirm password match
    if ($new_password !== $confirm_password) {
        echo "Passwords do not match.";
        exit;
    }

    // Hash the new password
    $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);

    // Prepare SQL statement to update user's password
    $sql = "UPDATE users SET password = ? WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $hashed_password, $email);

    // Execute the prepared statement
    if ($stmt->execute()) {
        echo "Password updated successfully.";
    } else {
        echo "Error updating password: " . $stmt->error;
    }

    // Close statement and database connection
    $stmt->close();
    $conn->close();
}
?>
