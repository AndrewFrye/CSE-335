<?php
// Database connection parameters
$host = 'localhost:3306';
$dbname = 'student_enrollment';
$username = 'root';
$password = 'Beanhead#77';

try {
    // Create a new PDO instance
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Connected successfully to the database!";
} catch (PDOException $e) {
    // If the connection fails, display an error message
    echo "Connection failed: " . $e->getMessage();
}
//php -S localhost:8000
?>