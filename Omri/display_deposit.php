<?php
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

// Assuming you have a database connection established

// Query to fetch deposit amount from the database
$query = "SELECT amount FROM deposits
WHERE id='2'";
$result = mysqli_query($conn, $query);

// Check if query was successful
if ($result) {
    // Fetch data from the result set
    while ($row = mysqli_fetch_assoc($result)) {
        $amount = $row['amount'];
        // Now you can use $amount to display the value in your HTML
        echo "<div class='stats-figure'>KES.$amount</div>";
    }
} else {
    // Handle error if the query fails
    echo "Error: " . mysqli_error($conn);
}

// Close database connection
mysqli_close($conn);
?>
