<?php

echo "PHP Version: " . phpversion() . "<br>"; // Display PHP version

// Attempt to connect to MySQL (using mysqli)
$servername = "mysql"; // The MySQL service name (defined in docker-compose.yml)
$username = "your_username"; // Replace with your MySQL username
$password = "your_password"; // Replace with your MySQL password
$dbname = "your_database";  // Replace with your MySQL database name

try {
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully to MySQL!";

    // Example query (replace with your own)
    $sql = "SELECT * FROM your_table"; // Replace your_table
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<br>" . $row["id"]. " - " . $row["name"];
        }
    } else {
        echo "<br>0 results";
    }

    $conn->close();

} catch (Exception $e) {
    echo "MySQL connection error: " . $e->getMessage();
}

?>