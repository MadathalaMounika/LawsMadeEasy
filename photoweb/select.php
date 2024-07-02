<?php
// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "website";
$port=4306;
// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $dbname,$port);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to select data from a table
$sql = "SELECT * FROM admin";

// Execute the query
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["article"]. " - Name: " . $row["sections"]. " - Email: " . $row["info"]. " - Name: " . $row["punish"]. "<br>";
    }
} else {
    echo "0 results";
}

// Close the database connection
$conn->close();
?>