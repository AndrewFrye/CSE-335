<?php
// Database connection parameters
$host = 'localhost:3306';
$dbname = 'student_enrollment';
$username = 'cse-335-user';
$password = 'password';

try {
    // Create a new PDO instance
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//    echo "<script>console.log('Connected successfully to the database!');</script>";
} catch (PDOException $e) {
    // If the connection fails, display an error message
//    echo "<script>console.log('Connection failed: " . $e->getMessage() . "');</script>";
}
//php -S localhost:8000
?>