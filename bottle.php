<?php
// Replace these with your MySQL server details
$servername = "localhost";
$username = "root";
$password = "";

// Connect to MySQL server
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create the database
$sql = "CREATE DATABASE IF NOT EXISTS createacc";
if ($conn->query($sql) === TRUE) {
    echo "Database 'createacc' created successfully<br>";
} else {
    echo "Error creating database: " . $conn->error . "<br>";
}

// Select the database
$conn->select_db("createacc");

// Create the table
$sql = "CREATE TABLE IF NOT EXISTS booking_records (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    mobile VARCHAR(10) NOT NULL,
    day1 DATE NOT NULL,
    day2 DATE NOT NULL,
    day3 DATE NOT NULL,
    amount INT(11) NOT NULL
)";
if ($conn->query($sql) === TRUE) {
    echo "Table 'booking_records' created successfully<br>";
} else {
    echo "Error creating table: " . $conn->error . "<br>";
}

// Close the database connection
$conn->close();
?>
