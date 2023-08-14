<!DOCTYPE html>
<html>
<head>
    <title>Display Results</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            background-image: url(images/background\ image.jpg);
            margin-top: 150px;
        }

        h1 {
            text-align: center;
            padding: 20px;
            color: #333;
        }

        table {
            border-collapse: collapse;
            width: 80%;
            margin: 20px auto;
            background-color: #fff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        table th, table td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        table th {
            background-color: #f2f2f2;
            font-weight: bold;
            color: #333;
        }

        table tr:hover {
            background-color: #f5f5f5;
        }

        .message {
            text-align: center;
            padding: 20px;
            font-style: italic;
            color: #777;
        }
.no-records {
            text-align: center;
            padding: 20px;
            font-size: 18px; /* Increased font size */
            color: white; /* White text color */
            background-color: #f44336;
}
body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    .vertical-bar {
      height: 100px;
      background-image: url(images/background\ image.jpg);
      background-size: cover;
      background-position: center;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .vertical-bar h2 {
      font-size: 44px;
      color: #000;
      font-weight: bold;
      text-align: center;
    }

    /* Same nav bar CSS as in home.html */
    .navbar {
      background-color: black;
      overflow: hidden;
      display: flex;
      align-items: center;
      justify-content: space-evenly; /* Make equal space between every option */
    }

    .navbar a {
      display: block;
      color: white;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
      font-size: 18px;
      font-weight: bold;
    }

    .navbar a:hover {
      background-color: #555;
    }

    /* Styles for account dropdown */
    .account-dropdown {
      position: relative;
      display: inline-block;
    }

    .account-dropdown select {
      appearance: none;
      background: transparent;
      border: none;
      color: white;
      padding: 14px 16px;
      font-size: 18px;
      font-weight: bold;
      cursor: pointer;
    }

    .account-dropdown select:focus {
      outline: none;
    }

    .account-dropdown select option {
      background-color: black;
      color: white;
    }

    .account-dropdown-content {
      display: none;
      position: absolute;
      background-color: black;
      min-width: 160px;
      z-index: 1;
      padding: 8px;
      text-align: center;
    }

    .account-dropdown-content a {
      color: white;
      display: block;
      padding: 4px 0;
      text-decoration: none;
      font-size: 14px;
    }

    .account-dropdown-content a:hover {
      background-color: #555;
    }

    .account-dropdown select:focus + .account-dropdown-content {
      display: block;
    }

    /* Styles for gallery dropdown */
    .gallery-dropdown {
      position: relative;
      display: inline-block;
    }

    .gallery-dropdown select {
      appearance: none;
      background: transparent;
      border: none;
      color: white;
      padding: 14px 16px;
      font-size: 18px;
      font-weight: bold;
      cursor: pointer;
    }

    .gallery-dropdown select:focus {
      outline: none;
    }

    .gallery-dropdown select option {
      background-color: black;
      color: white;
    }

    .gallery-dropdown-content {
      display: none;
      position: absolute;
      background-color: black;
      min-width: 160px;
      z-index: 1;
      padding: 8px;
      text-align: center;
    }

    .gallery-dropdown-content a {
      color: white;
      display: block;
      padding: 4px 0;
      text-decoration: none;
      font-size: 14px;
    }

    .gallery-dropdown-content a:hover {
      background-color: #555;
    }

    .gallery-dropdown select:focus + .gallery-dropdown-content {
      display: block;
    }

    .body-content {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      margin: 20px auto;
      max-width: 1200px;
    }

    .image-boxes {
      width: 100%;
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      padding: 20px;
    }

    .update-box {
      width: calc(25% - 20px);
      margin-bottom: 20px;
      padding: 5px;
      box-sizing: border-box;
      border: 1px solid #ddd;
      border-radius: 5px;
      transition: transform 0.3s ease;
    }

    .update-box img {
      width: 100%;
      height: auto;
      border-radius: 5px;
    }

    .footer {
      background-color: #333;
      color: #fff;
      padding: 20px;
      text-align: center;
     margin-top: 367px;
    }

    /* Media queries for responsiveness */
    @media screen and (max-width: 1200px) {
      .update-box {
        width: calc(33.33% - 20px);
      }
    }

    @media screen and (max-width: 800px) {
      .update-box {
        width: calc(50% - 20px);
      }
    }

    @media screen and (max-width: 600px) {
      .update-box {
        width: 100%;
      }
    }
    .ik{
        justify-content: center;
        text-align: center;
    }
    .vd{
        justify-content: center;
        align-items: center;
    }
 .go-back-button {
      position: fixed;
      top: 170px;
      right: 40px;
      padding: 10px 20px;
      background-color: #0096FF;
      color: white;
      font-weight: bold;
      text-decoration: none;
      border-radius: 5px;
    }
    </style>
</head>
<body>
<div class="vertical-bar">
    <h2>Welcome to Nellore  Sai Thapovanam</h2>
  </div>
<div class="navbar">
  <a href="adminhome.html">Home</a>
  <div class="gallery-dropdown">
    <select onchange="location = this.value;">
      <option value="#">Gallery</option>
      <option value="adminbook.html">Books</option>
      <option value="adminvideo.html">Videos</option>
    </select>
    <div class="gallery-dropdown-content">
      <a href="#">Gallery Option 1</a>
      <a href="#">Gallery Option 2</a>
    </div>
  </div>
  <a href="bookingslot.html">Booking Slot</a>
  <a href="adminabout.html">About Us</a> <!-- New "About Us" option -->
  <a href="admincontact.html">Contact Us</a> <!-- Existing "Contact Us" option -->
 
    <a href="index.html?logout=true">Log Out</a>
    
</div>
<a href="adminbookingslot.html" class="go-back-button">Go Back</a>
  
<?php
// Replace these with your MySQL server details
error_reporting(0);
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

// Query to retrieve all data from the booking_records table
$sql = "SELECT * FROM booking_records";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Display the table header
    echo "<table>
          <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Mobile Number</th>
            <th>Day 1</th>
            <th>Day 2</th>
            <th>Day 3</th>
            <th>Amount</th>
          </tr>";

    // Loop through the fetched data and display it in the table rows
   $currentEmail = "";
$currentMobile = "";
$alternateColor = true;

while ($row = $result->fetch_assoc()) {
    if ($row['name'] && $row['email'] && $row['mobile'] && $row['day1'] && $row['day2'] && $row['day3'] && $row['amount']) {
        if ($currentEmail != $row['email'] || $currentMobile != $row['mobile']) {
            $alternateColor = !$alternateColor; // Toggle the color for each new email or mobile
            $currentEmail = $row['email'];
            $currentMobile = $row['mobile'];
        }

        $rowColor = $alternateColor ? "lightblue" : "white";

        echo "<tr style='background-color: $rowColor;'>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . $row['mobile'] . "</td>";
        echo "<td>" . $row['day1'] . "</td>";
        echo "<td>" . $row['day2'] . "</td>";
        echo "<td>" . $row['day3'] . "</td>";
        echo "<td>" . $row['amount'] . " /-</td>";
        echo "</tr>";
    }
}

    echo "</table>";
} else {
    echo "<p class='no-records'>No records found.</p>";
}

// Close the database connection
$conn->close();
?><div class="footer">
    &copy; Sadhguru Moment | Vamsi Kiran
  </div>
</body>
</html>
