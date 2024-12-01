<?php

if (isset($_POST['student_id'])) {
    include 'db_connection.php';
    $studentId = intval($_POST['student_id']);

    try {
        // Query with multiple joins filtered by student ID
        $sql = "
            SELECT 
                s.StudentName,
                s.Major,
                c.CourseName,
                c.Department AS CourseDepartment,
                i.Department AS InstructorDepartment,
                i.InstructorID,
                r.RoomNumber,
                r.Building,
                e.LetterGrade
            FROM 
                student_enrollment.student AS s
            JOIN 
                student_enrollment.enrollment AS e ON s.StudentId = e.StudentId
            JOIN 
                student_enrollment.course AS c ON e.CourseId = c.CourseId
            JOIN 
                student_enrollment.instructor AS i ON c.InstructorID = i.InstructorID
            JOIN 
                student_enrollment.classroom AS r ON c.RoomID = r.ClassroomId
            WHERE 
                s.StudentId = :student_id
        ";

        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':student_id', $studentId, PDO::PARAM_INT);
        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        echo json_encode([
            'success' => true,
            'data' => $results
        ]);

    } catch (PDOException $e) {
        echo json_encode([
            'success' => false,
            'message' => $e->getMessage()
        ]);
    }
}
?>
