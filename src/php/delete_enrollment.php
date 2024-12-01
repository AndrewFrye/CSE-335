<?php
include("db_connection.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    try {
        // Capture the form input value
        $enrollmentId = $_POST['enrollment_id'];

        $sql = "DELETE FROM student_enrollment.Enrollment WHERE EnrollmentId = :EnrollmentId";
        $stmt = $conn->prepare($sql);

        // Bind the parameter to the captured form value
        $stmt->bindParam(':EnrollmentId', $enrollmentId);

        // Execute the statement
        $stmt->execute();

        echo "Enrollment deleted successfully.";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>