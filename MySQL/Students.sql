CREATE TABLE student(
    StudentId INT PRIMARY KEY AUTO_INCREMENT,
    Major VARCHAR(255),
    StudentName VARCHAR(255),
    GPA DOUBLE,
    Year INT
);



# creating a procedure and triggers for calculating the GPA column
DELIMITER //

CREATE PROCEDURE calculate_student_gpa(IN student_id INT)
BEGIN
    DECLARE gpa DOUBLE;

    SELECT
        SUM(
                CASE
                    WHEN LetterGrade = 'A' THEN 4.0 * c.CourseCredit
                    WHEN LetterGrade = 'A-' THEN 3.7 * c.CourseCredit
                    WHEN LetterGrade = 'B+' THEN 3.3 * c.CourseCredit
                    WHEN LetterGrade = 'B' THEN 3.0 * c.CourseCredit
                    WHEN LetterGrade = 'B-' THEN 2.7 * c.CourseCredit
                    WHEN LetterGrade = 'C+' THEN 2.3 * c.CourseCredit
                    WHEN LetterGrade = 'C' THEN 2.0 * c.CourseCredit
                    WHEN LetterGrade = 'C-' THEN 1.7 * c.CourseCredit
                    WHEN LetterGrade = 'D+' THEN 1.3 * c.CourseCredit
                    WHEN LetterGrade = 'D' THEN 1.0 * c.CourseCredit
                    WHEN LetterGrade = 'D-' THEN 0.7 * c.CourseCredit
                    ELSE 0
                    END
        ) / SUM(c.CourseCredit)
    INTO gpa
    FROM Enrollment e
             JOIN Course c ON e.CourseId = c.CourseId
    WHERE e.StudentId = student_id;

    UPDATE student_enrollment.student
    SET GPA = gpa
    WHERE StudentId = student_id;
END //

DELIMITER ;

DELIMITER //

CREATE TRIGGER after_insert_enrollment
    AFTER INSERT ON Enrollment
    FOR EACH ROW
BEGIN
    CALL calculate_student_gpa(NEW.StudentId);
END //

DELIMITER ;

DELIMITER //

CREATE TRIGGER after_update_enrollment
    AFTER UPDATE ON Enrollment
    FOR EACH ROW
BEGIN
    CALL calculate_student_gpa(NEW.StudentId);
END //

DELIMITER ;

