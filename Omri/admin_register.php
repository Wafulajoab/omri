<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "omri";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Check if the username already exists
    $check_username_sql = "SELECT * FROM admins WHERE username = '$username'";
    $result = $conn->query($check_username_sql);
    if ($result->num_rows > 0) {
        echo "<script>alert('User already exists'); window.location.href = 'admin.php';</script>";
    } else {
        // Check if the password and confirm password match
        if ($password !== $confirm_password) {
            echo "<script>alert('Passwords do not match'); window.location.href = 'admin.php';</script>";
            exit;
        }

        // Hash the password for security
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // SQL query to insert admin data into the database
        $insert_sql = "INSERT INTO admins (username, password) 
                VALUES ('$username', '$hashed_password')";

        if ($conn->query($insert_sql) === TRUE) {
            // Redirect to the admin login page
            header("Location: admin_login.php");
            exit;
        } else {
            echo "Error: " . $insert_sql . "<br>" . $conn->error;
        }
    }
}

// Close connection
$conn->close();
?>
