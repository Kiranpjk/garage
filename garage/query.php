<?php
session_start(); // Start session at the very beginning

// Database connection
$servername = "localhost"; // Change if necessary
$db_username = "root"; // Change to your database username
$db_password = ""; // Change to your database password
$dbname = "garage"; // Change to your database name

$conn = new mysqli($servername, $db_username, $db_password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $query = $_POST['query'];

    // Insert new user into the database
    $stmt = $conn->prepare("INSERT INTO query (name, email, query) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $query);

    if ($stmt->execute()) {
        echo "<script>alert('Query submitted successfully!');</script>";
    } else {
        echo "<script>alert('Error while submitting Query!');</script>";

    }

}

$conn->close();
?>