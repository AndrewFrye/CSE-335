<?php
include("db_connection.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    try {
        // Capture the form input values
        $courseId = $_POST['course_id'];
        $studentId = $_POST['student_id'];
        $letterGrade = $_POST['grade'];

        $sql = "INSERT INTO student_enrollment.Enrollment (CourseId, StudentId, LetterGrade)
                VALUES (:CourseId, :StudentId, :LetterGrade)";

        $stmt = $conn->prepare($sql);

        // Bind the parameters to the captured form values
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