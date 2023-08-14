<?php
// Get the form values from POST request
$username = $_POST['username'];
$mobile = $_POST['mobile'];

// Database connection
$servername = "localhost"; // Change this to your MySQL server name
$username_db = "your_mysql_username"; // Change this to your MySQL username
$password_db = "your_mysql_password"; // Change this to your MySQL password
$dbname = "createacc"; // Change this to your database name

// Create connection
$conn = new mysqli($servername, $username_db, $password_db, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and execute the SQL query to insert data into the "createaccount" table
$sql = "INSERT INTO createaccount (name, mobile) VALUES ('$username', '$mobile')";

if ($conn->query($sql) === TRUE) {
    echo "Data saved successfully!";
    header('Location: login.html'); // Redirect to login.html after successful registration
    exit;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
