<?php
include("db_connection.php");

try {
    // Check if the EnrollmentId is provided
    if (isset($_POST['enrollment_id'])) {
        $enrollmentId = $_POST['enrollment_id'];

        // Prepare the SQL statement
        $sql = "SELECT * FROM student_enrollment.Enrollment WHERE EnrollmentId = :EnrollmentId";
        $stmt = $conn->prepare($sql);

        // Bind the parameter
        $stmt->bindParam(':EnrollmentId', $enrollmentId, PDO::PARAM_INT);

        $stmt->execute();

        // Fetch the result
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($result) {
            echo json_encode([
                'success' => true,
                'data' => $result
            ]);
        } else {
            echo json_encode([
                'success' => false,
                'message' => "No enrollment found with EnrollmentId = " . htmlspecialchars($enrollmentId) . "."
            ]);
        }
    }
} catch (PDOException $e) {
    echo json_encode([
        'success' => false,
        'message' => "Error: " . $e->getMessage()
    ]);
}
?>