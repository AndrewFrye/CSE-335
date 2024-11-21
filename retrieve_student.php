<?php
include("db_connection.php");

try {


    // Check if the StudentId is provided
    if (isset($_GET['StudentId'])) {
        $studentId = $_GET['StudentId'];

        // Prepare the SQL statement
        $sql = "SELECT * FROM student_enrollment.Student WHERE StudentId = :StudentId";
        $stmt = $conn->prepare($sql);

        // Bind the parameter
        $stmt->bindParam(':StudentId', $studentId, PDO::PARAM_INT);

        $stmt->execute();

        // Fetch the result
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($result) {
            echo "Student ID: " . htmlspecialchars($result["StudentId"]) . "<br>";
            echo "Major: " . htmlspecialchars($result["Major"]) . "<br>";
            echo "GPA: " . htmlspecialchars($result["GPA"]) . "<br>";
            echo "Year: " . htmlspecialchars(string: $result["Year"]) . "<br>";
            echo "Name: " . htmlspecialchars(string: $result["StudentName"]) . "<br>";

        } else {
            echo "No student found with StudentId = " . htmlspecialchars($studentId) . ".";
        }
    } else {
        echo "Please provide a Student ID.";
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>