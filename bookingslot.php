<?php
    // Get the form values from POST request
    $Name = $_POST['Name'];
    $Email = $_POST['Email'];
    $Mobile = $_POST['Mobile NUmber'];
    $Day1 = $_POST['Day1'];
    $Day2 = $_POST['Day2'];
    $Day3 = $_POST['Day3'];

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "createacc";

// Create a connection to the MySQL server
$conn = new mysqli($servername, $username, $password_db, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



  // Prepare and execute the SQL query to insert data into the "bookedslot" table
   $sql = "INSERT INTO bookedslot(Name, Email, Mobile,Day1, Day2, Day3) VALUES ('$Name', '$Email', '$Mobile', '$Day1', '$Day2', '$Day3')";

        if ($conn->query($sql) == TRUE) {
            echo "Data submitted successfully.";
            header('Location: bookedslot.html');
            exit;
        } 
          else {
               echo "Error: " . $sql . "<br>" . $conn->error;
               }

$conn->close();
?>
