<?php
// Check if the admin ID is provided in the URL
if(isset($_GET['id']) && !empty($_GET['id'])){
    // Database connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "omri";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and execute SQL to delete admin
    $id = $_GET['id'];

    if (isset($_GET['confirm']) && $_GET['confirm'] == 'yes') {
        $sql = "DELETE FROM admins WHERE id = $id";

        // Execute the deletion query
        if ($conn->query($sql) === TRUE) {
            echo "Admin deleted successfully.";
        } else {
            echo "Error deleting admin: " . $conn->error;
        }
    } else {
        // Render confirmation dialog
        echo "<script>";
        echo "if (confirm('Are you sure you want to delete this admin?')) {";
        echo "  window.location.href = 'delete_admin.php?id=$id&confirm=yes';";
        echo "} else {";
        echo "  window.location.href = 'display_admin.php';";
        echo "}";
        echo "</script>";
    }

    // Close connection
    $conn->close();
} else {
    // If admin ID is not provided, redirect back to the page where admins are listed
    header("Location: display_admin.php");
    exit();
}
?>
