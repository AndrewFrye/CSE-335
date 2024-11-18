<?php
include("db_connection.php");

try {

    // Check if the EnrollmentId is provided through a GET request (from a form)
    if (isset($_GET['EnrollmentId'])) {
        $enrollmentId = $_GET['EnrollmentId'];

        // Prepare the SQL statement
        $sql = "SELECT * FROM student_enrollment.Enrollment WHERE EnrollmentId = :EnrollmentId";
        $stmt = $conn->prepare($sql);

        // Bind the parameter
        $stmt->bindParam(':EnrollmentId', $enrollmentId, PDO::PARAM_INT);

        $stmt->execute();

        // Fetch the result
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($result) {
            echo "Enrollment ID: " . htmlspecialchars($result["EnrollmentId"]) . "<br>";
            echo "Course ID: " . htmlspecialchars($result["CourseId"]) . "<br>";
            echo "Student ID: " . htmlspecialchars($result["StudentId"]) . "<br>";
            echo "Letter Grade: " . htmlspecialchars($result["LetterGrade"]) . "<br>";
        } else {
            echo "No enrollment found with EnrollmentId = " . htmlspecialchars($enrollmentId) . ".";
        }
    } else {
        echo "Please provide an Enrollment ID.";
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>