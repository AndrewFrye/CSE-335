<?php
include("db_connection.php");
include("add_enrollment.php");
include("delete_enrollment.php");
include("retrieve_enrollment.php");
include("retrieve_student.php");
include("advanced_op.php");
?>

<!DOCTYPE html>
<html>

<head>
    <title>Student Enrollment Database</title>
</head>

<body>
    <h1>Student Enrollment Database</h1>

    <h2>Choose an Action:</h2>

    <!-- Form to Add an Enrollment -->
    <h3>Add Enrollment</h3>
    <form action="add_enrollment.php" method="post">
        <label for="EnrollmentId">Enrollment ID:</label>
        <input type="number" id="EnrollmentId" name="EnrollmentId" required><br><br>

        <label for="CourseId">Course ID:</label>
        <input type="number" id="CourseId" name="CourseId" required><br><br>

        <label for="StudentId">Student ID:</label>
        <input type="number" id="StudentId" name="StudentId" required><br><br>

        <label for="LetterGrade">Letter Grade:</label>
        <input type="text" id="LetterGrade" name="LetterGrade" maxlength="1" required><br><br>

        <input type="submit" value="Add Enrollment">
    </form>

    <hr>

    <!-- Form to Delete an Enrollment -->
    <h3>Delete Enrollment</h3>
    <form action="delete_enrollment.php" method="post">
        <label for="EnrollmentId">Enrollment ID:</label>
        <input type="number" id="EnrollmentId" name="EnrollmentId" required><br><br>

        <input type="submit" value="Delete Enrollment">
    </form>

    <hr>

    <!-- Form to Retrieve an Enrollment -->
    <h3>Retrieve Enrollment</h3>
    <form action="retrieve_enrollment.php" method="get">
        <label for="EnrollmentId">Enrollment ID:</label>
        <input type="number" id="EnrollmentId" name="EnrollmentId" required><br><br>

        <input type="submit" value="Retrieve Enrollment">
    </form>

    <hr>

    <!-- Form to Retrieve an Enrollment -->
    <h3>Retrieve Student</h3>
    <form action="retrieve_student.php" method="get">
        <label for="StudentId">Student ID:</label>
        <input type="number" id="StudentId" name="StudentId" required><br><br>

        <input type="submit" value="Retrieve Student">
    </form>

    <hr>

    <!-- Form to Generate Report -->
    <h3>Generate Student Enrollment Report</h3>
    <form method="post" action="advanced_op.php">
        <label for="student_id">Select Student ID:</label>
        <select id="student_id" name="student_id">
            <?php for ($i = 1; $i <= 50; $i++): ?>
                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
            <?php endfor; ?>
        </select>
        <button type="submit">Generate Report</button>
    </form>

</body>

</html>