create table Course(
    CourseId int primary key,
    CourseName varchar(255),
    Department varchar(255),
    CourseCredit int,
    InstructorId int,
    RoomId int,
    foreign key (InstructorId) references Instructor(InstructorId),
    foreign key (RoomId) references Classroom(ClassroomId)
);