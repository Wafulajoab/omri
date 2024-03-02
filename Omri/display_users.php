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

// SQL query to select users from the database
$sql_select = "SELECT id, name, username, phone, email FROM users";
$result = $conn->query($sql_select);

// Check if there are any users
if ($result->num_rows > 0) {
    // Output image on top of the display form
    echo "<div style='text-align: center;'><img src='omri.jpg' alt='' style='width: 200px;'></div>";

    // Output table header with inline CSS for styling
    echo "<div style='width: 80%; margin: 0 auto;'>"; // Center align the table and make it 80% width
    echo "<table style='border-collapse: collapse; width: 100%;'>";
    echo "<tr><th style='border: 1px solid #ddd; padding: 8px; background-color: #f2f2f2; text-align: left;'>S. No.</th><th style='border: 1px solid #ddd; padding: 8px; background-color: #f2f2f2; text-align: left;'>Name</th><th style='border: 1px solid #ddd; padding: 8px; background-color: #f2f2f2; text-align: left;'>Username</th><th style='border: 1px solid #ddd; padding: 8px; background-color: #f2f2f2; text-align: left;'>Phone</th><th style='border: 1px solid #ddd; padding: 8px; background-color: #f2f2f2; text-align: left;'>Email</th><th style='border: 1px solid #ddd; padding: 8px; background-color: #f2f2f2; text-align: left;'>Actions</th></tr>";

    // Output data of each row with inline CSS for styling
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td style='border: 1px solid #ddd; padding: 8px;'>" . $row["id"] . "</td>";
        echo "<td style='border: 1px solid #ddd; padding: 8px;'>" . $row["name"] . "</td>";
        echo "<td style='border: 1px solid #ddd; padding: 8px;'>" . $row["username"] . "</td>";
        echo "<td style='border: 1px solid #ddd; padding: 8px;'>" . $row["phone"] . "</td>";
        echo "<td style='border: 1px solid #ddd; padding: 8px;'>" . $row["email"] . "</td>";
        echo "<td style='border: 1px solid #ddd; padding: 8px;'>
                <a href='edit_user.php?id=" . $row["id"] . "'>Edit</a> | 
                <a href='delete_user.php?id=" . $row["id"] . "'>Delete</a>
              </td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No users found.";
}

// Close connection
$conn->close();
?>
