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

// Fetch admins data from the database
$sql = "SELECT id, username, password, time FROM admins";
$result = $conn->query($sql);

// Check if there are any admins
if ($result->num_rows > 0) {
    // Output image on top of the display form
    echo "<div style='text-align: center;'><img src='omri.jpg' alt='' style='width: 200px;'></div>";

    // Output table header with inline CSS for styling
    echo "<div style='width: 80%; margin: 0 auto;'>"; // Center align the table and make it 80% width
    echo "<table style='border-collapse: collapse; width: 100%;'>";
    echo "<tr><th style='border: 1px solid #ddd; padding: 8px; background-color: #f2f2f2; text-align: left;'>S. No.</th><th style='border: 1px solid #ddd; padding: 8px; background-color: #f2f2f2; text-align: left;'>Username</th><th style='border: 1px solid #ddd; padding: 8px; background-color: #f2f2f2; text-align: left;'>Password</th><th style='border: 1px solid #ddd; padding: 8px; background-color: #f2f2f2; text-align: left;'>Time</th><th style='border: 1px solid #ddd; padding: 8px; background-color: #f2f2f2; text-align: left;'>Actions</th></tr>";

    // Output data of each row with inline CSS for styling
    $serial_number = 1;
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td style='border: 1px solid #ddd; padding: 8px;'>" . $serial_number . "</td>";
        echo "<td style='border: 1px solid #ddd; padding: 8px;'>" . $row["username"] . "</td>";
        echo "<td style='border: 1px solid #ddd; padding: 8px;'>" . $row["password"] . "</td>";
        echo "<td style='border: 1px solid #ddd; padding: 8px;'>" . $row["time"] . "</td>";
        echo "<td style='border: 1px solid #ddd; padding: 8px;'><a href='delete_admin_process.php?id=" . $row["id"] . "'>Delete</a></td>"; // Link to delete_admin.php with admin ID as parameter
        echo "</tr>";
        $serial_number++;
    }
    echo "</table>";
    echo "</div>"; // Close the container div
} else {
    echo "No admins found.";
}

// Close connection
$conn->close();
?>

<!-- Add Admin Button -->
<div style="text-align: center; margin-top: 20px;">
    <a href="add_admin.php" style="background-color: #4CAF50; /* Green */
                                    border: none;
                                    color: white;
                                    padding: 15px 32px;
                                    text-align: center;
                                    text-decoration: none;
                                    display: inline-block;
                                    font-size: 16px;
                                    margin-bottom: 20px;

                                    cursor: pointer;">Add Admin</a>
</div>
