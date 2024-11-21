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
                student_enrollment.instructors AS i ON c.InstructorID = i.InstructorID
            JOIN 
                student_enrollment.classroom AS r ON c.RoomID = r.RoomID
            WHERE 
                s.StudentId = :student_id
        ";

        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':student_id', $studentId, PDO::PARAM_INT);
        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if ($results): ?>
            <h2>Enrollment Report for Student ID: <?php echo htmlspecialchars($studentId); ?></h2>
            <table>
                <thead>
                    <tr>
                        <th>Student Name</th>
                        <th>Major</th>
                        <th>Course Name</th>
                        <th>Course Department</th>
                        <th>Instructor Department</th>
                        <th>Instructor ID</th>
                        <th>Room Number</th>
                        <th>Building</th>
                        <th>Letter Grade</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($results as $row): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($row['StudentName']); ?></td>
                            <td><?php echo htmlspecialchars($row['Major']); ?></td>
                            <td><?php echo htmlspecialchars($row['CourseName']); ?></td>
                            <td><?php echo htmlspecialchars($row['CourseDepartment']); ?></td>
                            <td><?php echo htmlspecialchars($row['InstructorDepartment']); ?></td>
                            <td><?php echo htmlspecialchars($row['InstructorID']); ?></td>
                            <td><?php echo htmlspecialchars($row['RoomNumber']); ?></td>
                            <td><?php echo htmlspecialchars($row['Building']); ?></td>
                            <td><?php echo htmlspecialchars($row['LetterGrade']); ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p>No data found for the selected student.</p>
        <?php endif; ?>

        <?php
    } catch (Exception $e) {
        echo "Error generating report: " . $e->getMessage();
    }
} else {
    echo "<p>Please select a student to view the report.</p>";
}
?>