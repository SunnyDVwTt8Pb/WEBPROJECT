<?php
// Replace 'your_database_host', 'your_database_username', 'your_database_password', 'your_database_name'
// with your actual database connection details.
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'createacc';

// Establish a connection to the MySQL database
$conn = new mysqli($host, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Prepare and execute a SELECT query to check if the email and password match the database records
    $stmt = $conn->prepare("SELECT * FROM crtacc WHERE email=? AND password=?");
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        // If the details match, redirect to home.html
        header("Location: home.html");
        exit();
    } else {
        // If the details don't match, redirect back to login.html
        header("Location: login.html");
        exit();
    }

    $stmt->close();
    $conn->close();
}
?>
