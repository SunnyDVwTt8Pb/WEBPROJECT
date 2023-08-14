<?php


// Replace these with your MySQL server details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "createacc"; // Use the same database name you created in the previous step

// Connect to MySQL server
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$amount = 500; // Assuming a fixed amount of 500 for each booking 

// Check if "day1", "day2", and "day3" keys exist in $_POST array
$day1 = isset($_POST['day1']) ? $_POST['day1'] : '';
$day2 = isset($_POST['day2']) ? $_POST['day2'] : '';
$day3 = isset($_POST['day3']) ? $_POST['day3'] : '';


// Insert the form data into the database
$sql = "INSERT INTO booking_records (name, email, mobile, day1, day2, day3, amount)
        VALUES ('$name', '$email', '$mobile', '$day1', '$day2', '$day3', $amount)";

if ($conn->query($sql) === TRUE) {
    echo "Booking submitted successfully";
      header('Location: bookedslot.html');
     exit;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
if ($bookingSuccess) {
    session_start();
    $_SESSION['slotBooked'] = true;
}

header("Location: bookedslot.html");
exit();



?>
