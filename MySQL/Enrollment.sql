create table Enrollment(
    EnrollmentId int primary key,
    StudentId int,
    CourseId int,
    LetterGrade varchar(255),
    foreign key (StudentId) references student_enrollment.student(StudentId),
    foreign key (CourseId) references student_enrollment.course(CourseId)
);