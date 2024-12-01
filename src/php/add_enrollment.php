<?php
include("db_connection.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    try {
        // Capture the form input values
        $enrollmentId = $_POST['EnrollmentId'];
        $courseId = $_POST['CourseId'];
        $studentId = $_POST['StudentId'];
        $letterGrade = $_POST['LetterGrade'];

        $sql = "INSERT INTO student_enrollment.Enrollment (EnrollmentId, CourseId, StudentId, LetterGrade)
                VALUES (:EnrollmentId, :CourseId, :StudentId, :LetterGrade)";

        $stmt = $conn->prepare($sql);

        // Bind the parameters to the captured form values
        $stmt->bindParam(':EnrollmentId', $enrollmentId);
        $stmt->bindParam(':CourseId', $courseId);
        $stmt->bindParam(':StudentId', $studentId);
        $stmt->bindParam(':LetterGrade', $letterGrade);

        // Execute the statement
        $stmt->execute();

        echo "Enrollment added successfully.";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>