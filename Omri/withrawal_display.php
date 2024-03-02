<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Withdrawal Form and Records</title>
</head>
<body>
    <h2>Withdrawal Records</h2>
    

    <?php
    // Database connection
    $servername = "localhost";
    $username = "root"; // Change to your MySQL username
    $password = ""; // Change to your MySQL password
    $dbname = "omri";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Process withdrawal form submission
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $amount = $_POST["amount"];
        $mpesa_number = $_POST["mpesa_number"];

        // Insert withdrawal record into the database
        $sql = "INSERT INTO withdrawals (amount, mpesa_number) VALUES ('$amount', '$mpesa_number')";

        if ($conn->query($sql) === TRUE) {
            echo "Withdrawal submitted successfully.";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    // Display withdrawal records
    $sql = "SELECT * FROM withdrawals";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<h2>Withdrawal Records</h2>";
        echo "<table border='1'>";
        echo "<tr><th>ID</th><th>Amount</th><th>M-Pesa Number</th><th>Date</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>".$row["id"]."</td>";
            echo "<td>".$row["amount"]."</td>";
            echo "<td>".$row["mpesa_number"]."</td>";
            echo "<td>".$row["date"]."</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No withdrawal records found.";
    }

    $conn->close();
    ?>
</body>
</html>
