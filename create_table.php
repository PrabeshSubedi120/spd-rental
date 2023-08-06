<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "SPD_Rental";

// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to create table
$sql = "CREATE TABLE customer (
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    phone VARCHAR(20) NOT NULL
)";

// Execute query
if ($conn->query($sql) === TRUE) {
    echo "Table 'Customer' created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>