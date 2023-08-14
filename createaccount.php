<?php
// Get the form values from POST request
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email= $_POST['email'];
$mobile = $_POST['mobile'];
$password = $_POST['password'];
$state = $_POST['state'];
$country = $_POST['country'];
// Database connection
$servername = "localhost"; // Change this to your MySQL server name
$username = "root"; // Change this to your MySQL username (default is root)
$password_db = ""; // Change this to your MySQL password (default is empty for XAMPP)
$dbname = "createacc"; // Change this to your database name

// Create connection
$conn = new mysqli($servername, $username, $password_db, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert data into the database table
$sql = "INSERT INTO crtacc(fname,lname,email,mobile,password,state,country) VALUES ('$fname','$lname','$email','$mobile','$password','$state','$country')";

if ($conn->query($sql) === TRUE) {
    echo "Data submitted successfully.";
     header('Location: login.html');
     exit;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
