<?php
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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];
    $newPassword = $_POST["newpassword"];
    
    // Update password if old password matches
    $sql = "UPDATE crtacc SET password = '$newPassword' WHERE email = '$email' AND mobile = '$mobile'";
    $result = $conn->query($sql);
    
    if ($result) {
        echo "Password changed successfully!";
        header('Location: login.html');
     exit;
    } else {
        echo "Incorrect details or an error occurred.";
    }
    
    $conn->close();
}
?>
