create table Course(
    CourseId int primary key auto_increment,
    CourseName varchar(255),
    Department varchar(255),
    CourseCredit int,
    InstructorId int,
    RoomId int,
    foreign key (InstructorId) references student_enrollment.instructor(InstructorId),
    foreign key (RoomId) references student_enrollment.classroom(ClassroomId)
);