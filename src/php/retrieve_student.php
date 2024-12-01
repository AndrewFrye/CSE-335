<?php
include("db_connection.php");

try {


    // Check if the StudentId is provided
    if (isset($_POST['student_id'])) {
        $studentId = $_POST['student_id'];

        // Prepare the SQL statement
        $sql = "SELECT * FROM student_enrollment.Student WHERE StudentId = :StudentId";
        $stmt = $conn->prepare($sql);

        // Bind the parameter
        $stmt->bindParam(':StudentId', $studentId, PDO::PARAM_INT);

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
                'message' => "No student found with StudentId = " . htmlspecialchars($studentId) . "."
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