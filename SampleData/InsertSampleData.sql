-- Insert statements for Instructors
INSERT INTO instructor (InstructorId, Department)
VALUES (1, 'Math'),
       (2, 'History'),
       (3, 'CS'),
       (4, 'Bio'),
       (5, 'CS'),
       (6, 'Chemistry'),
       (7, 'Bio'),
       (8, 'English'),
       (9, 'Physics'),
       (10, 'History');


-- Insert statements for Students
INSERT INTO student (StudentId, Major, GPA, Year)
VALUES (1, 'Mathematics', 2.01, 3),
       (2, 'Biology', 2.03, 3),
       (3, 'Chemistry', 3.74, 1),
       (4, 'History', 3.83, 2),
       (5, 'English', 3.63, 4),
       (6, 'Physics', 3.23, 1),
       (7, 'Computer Science', 2.32, 2),
       (8, 'Physics', 3.02, 4),
       (9, 'Biology', 2.38, 1),
       (10, 'English', 3.58, 4),
       (11, 'English', 2.47, 2),
       (12, 'Computer Science', 3.26, 2),
       (13, 'Mathematics', 2.96, 2),
       (14, 'Physics', 3.01, 3),
       (15, 'Chemistry', 2.21, 1),
       (16, 'Mathematics', 3.85, 3),
       (17, 'Computer Science', 2.17, 2),
       (18, 'Chemistry', 3.42, 2),
       (19, 'English', 3.27, 3),
       (20, 'Physics', 3.23, 1),
       (21, 'Computer Science', 2.84, 2),
       (22, 'Mathematics', 2.7, 4),
       (23, 'Biology', 2.63, 4),
       (24, 'English', 2.7, 3),
       (25, 'Mathematics', 3.32, 1),
       (26, 'Physics', 2.2, 2),
       (27, 'Biology', 3.07, 3),
       (28, 'History', 3.35, 2),
       (29, 'Physics', 2.88, 4),
       (30, 'Physics', 2.54, 4),
       (31, 'Mathematics', 2.7, 4),
       (32, 'Physics', 3.18, 4),
       (33, 'History', 2.44, 4),
       (34, 'Physics', 3.82, 3),
       (35, 'English', 2.45, 4),
       (36, 'Mathematics', 2.35, 3),
       (37, 'English', 3.77, 3),
       (38, 'Computer Science', 3.37, 2),
       (39, 'Biology', 3.64, 2),
       (40, 'English', 3.98, 2),
       (41, 'History', 3.2, 2),
       (42, 'English', 2.35, 1),
       (43, 'Chemistry', 3.24, 3),
       (44, 'Chemistry', 3.27, 1),
       (45, 'Chemistry', 3.92, 3),
       (46, 'Chemistry', 2.29, 2),
       (47, 'Chemistry', 3.37, 1),
       (48, 'English', 3.26, 2),
       (49, 'Chemistry', 2.98, 2),
       (50, 'Computer Science', 3.28, 3),
       (51, 'History', 2.41, 3),
       (52, 'Computer Science', 2.72, 4),
       (53, 'Physics', 2.51, 4),
       (54, 'Mathematics', 2.2, 1),
       (55, 'Physics', 3.92, 1),
       (56, 'Biology', 3.82, 3),
       (57, 'History', 3.38, 1),
       (58, 'Computer Science', 3.88, 3),
       (59, 'History', 3.07, 2),
       (60, 'History', 3.24, 4),
       (61, 'Chemistry', 2.01, 2),
       (62, 'English', 2.91, 4),
       (63, 'Chemistry', 3.94, 2),
       (64, 'Biology', 2.45, 1),
       (65, 'Chemistry', 2.69, 1),
       (66, 'Biology', 2.14, 3),
       (67, 'History', 2.86, 2),
       (68, 'Biology', 3.0, 2),
       (69, 'English', 3.01, 1),
       (70, 'Computer Science', 2.84, 3),
       (71, 'Physics', 3.53, 3),
       (72, 'History', 2.74, 2),
       (73, 'History', 2.11, 2),
       (74, 'Mathematics', 3.84, 4),
       (75, 'Chemistry', 2.11, 3),
       (76, 'Chemistry', 3.65, 1),
       (77, 'Mathematics', 3.87, 4),
       (78, 'History', 2.69, 2),
       (79, 'Physics', 2.31, 3),
       (80, 'Mathematics', 2.54, 2),
       (81, 'Biology', 2.62, 3),
       (82, 'Physics', 2.52, 2),
       (83, 'Physics', 2.36, 3),
       (84, 'History', 3.15, 3),
       (85, 'Computer Science', 3.41, 3),
       (86, 'Chemistry', 3.01, 4),
       (87, 'English', 3.37, 4),
       (88, 'Computer Science', 2.83, 1),
       (89, 'Mathematics', 3.99, 4),
       (90, 'Physics', 2.38, 2),
       (91, 'Mathematics', 2.81, 3),
       (92, 'Physics', 2.36, 1),
       (93, 'Physics', 2.76, 3),
       (94, 'English', 3.42, 1),
       (95, 'History', 2.68, 2),
       (96, 'Mathematics', 2.62, 1),
       (97, 'English', 2.26, 4),
       (98, 'History', 3.41, 4),
       (99, 'Chemistry', 2.03, 3),
       (100, 'English', 2.5, 3);

-- Insert statements for Classrooms
INSERT INTO classroom (ClassroomId, RoomNumber, Building)
VALUES (101, 10100, 'Building 101'),
       (102, 10200, 'Building 102'),
       (103, 10300, 'Building 103'),
       (104, 10400, 'Building 104'),
       (105, 10500, 'Building 105'),
       (106, 10600, 'Building 106'),
       (107, 10700, 'Building 107'),
       (108, 10800, 'Building 108'),
       (109, 10900, 'Building 109'),
       (110, 11000, 'Building 110');

-- Insert statements for Courses
INSERT INTO course (CourseId, CourseName, Department, InstructorId, RoomId)
VALUES (1, 'Introduction to CS', 'CS', 1, 101),
       (2, 'Calculus I', 'Math', 2, 102),
       (3, 'Biology 101', 'Bio', 3, 103),
       (4, 'Physics I', 'Physics', 4, 104),
       (5, 'Organic Chemistry', 'Chemistry', 5, 105),
       (6, 'World History', 'History', 6, 106),
       (7, 'English Literature', 'English', 7, 107),
       (8, 'Data Structures', 'CS', 8, 108),
       (9, 'Linear Algebra', 'Math', 9, 109),
       (10, 'Genetics', 'Bio', 10, 110);

-- Insert statements for Enrollments
INSERT INTO enrollment (EnrollmentId, CourseId, StudentId, LetterGrade)
VALUES (1, 3, 1, 'A'),
       (2, 9, 2, 'C'),
       (3, 1, 3, 'F'),
       (4, 6, 4, 'F'),
       (5, 9, 4, 'C'),
       (6, 4, 4, 'A'),
       (7, 1, 4, 'A'),
       (8, 6, 5, 'C'),
       (9, 5, 5, 'F'),
       (10, 10, 6, 'F'),
       (11, 6, 6, 'C'),
       (12, 7, 7, 'A'),
       (13, 6, 7, 'D'),
       (14, 10, 7, 'B'),
       (15, 1, 8, 'F'),
       (16, 6, 8, 'F'),
       (17, 8, 8, 'A'),
       (18, 2, 9, 'F'),
       (19, 4, 9, 'F'),
       (20, 4, 10, 'B'),
       (21, 3, 11, 'F'),
       (22, 4, 12, 'F'),
       (23, 1, 12, 'B'),
       (24, 5, 12, 'B'),
       (25, 9, 12, 'C'),
       (26, 7, 12, 'D'),
       (27, 8, 13, 'D'),
       (28, 2, 14, 'A'),
       (29, 7, 14, 'B'),
       (30, 6, 14, 'F'),
       (31, 9, 14, 'A'),
       (32, 3, 14, 'B'),
       (33, 8, 15, 'D'),
       (34, 4, 15, 'C'),
       (35, 10, 16, 'C'),
       (36, 3, 16, 'B'),
       (37, 2, 16, 'D'),
       (38, 7, 16, 'B'),
       (39, 5, 17, 'D'),
       (40, 3, 17, 'D'),
       (41, 2, 17, 'D'),
       (42, 1, 18, 'B'),
       (43, 1, 19, 'D'),
       (44, 10, 19, 'A'),
       (45, 5, 19, 'B'),
       (46, 9, 20, 'F'),
       (47, 1, 20, 'A'),
       (48, 2, 21, 'C'),
       (49, 9, 21, 'F'),
       (50, 3, 21, 'C'),
       (51, 5, 22, 'C'),
       (52, 8, 22, 'A'),
       (53, 1, 22, 'F'),
       (54, 2, 23, 'B'),
       (55, 4, 23, 'D'),
       (56, 10, 24, 'D'),
       (57, 4, 24, 'F'),
       (58, 5, 24, 'D'),
       (59, 7, 24, 'C'),
       (60, 7, 25, 'C'),
       (61, 3, 26, 'D'),
       (62, 8, 26, 'F'),
       (63, 2, 26, 'B'),
       (64, 9, 26, 'C'),
       (65, 7, 27, 'C'),
       (66, 1, 28, 'C'),
       (67, 10, 28, 'D'),
       (68, 2, 28, 'D'),
       (69, 6, 28, 'C'),
       (70, 7, 29, 'B'),
       (71, 3, 29, 'C'),
       (72, 9, 30, 'B'),
       (73, 8, 31, 'D'),
       (74, 4, 31, 'B'),
       (75, 2, 31, 'A'),
       (76, 5, 31, 'A'),
       (77, 9, 31, 'C'),
       (78, 4, 32, 'B'),
       (79, 1, 32, 'B'),
       (80, 3, 32, 'B'),
       (81, 9, 32, 'D'),
       (82, 8, 32, 'B'),
       (83, 4, 33, 'A'),
       (84, 6, 34, 'F'),
       (85, 3, 35, 'D'),
       (86, 10, 35, 'B'),
       (87, 9, 35, 'B'),
       (88, 10, 36, 'A'),
       (89, 9, 36, 'A'),
       (90, 6, 36, 'D'),
       (91, 10, 37, 'A'),
       (92, 1, 38, 'F'),
       (93, 10, 38, 'A'),
       (94, 7, 38, 'F'),
       (95, 4, 38, 'D'),
       (96, 6, 38, 'C'),
       (97, 4, 39, 'A'),
       (98, 8, 39, 'C'),
       (99, 10, 39, 'B'),
       (100, 7, 39, 'B'),
       (101, 5, 39, 'B'),
       (102, 2, 40, 'B'),
       (103, 4, 40, 'D'),
       (104, 6, 40, 'A'),
       (105, 5, 40, 'B'),
       (106, 3, 40, 'B'),
       (107, 4, 41, 'C'),
       (108, 8, 41, 'C'),
       (109, 5, 41, 'C'),
       (110, 9, 41, 'F'),
       (111, 7, 41, 'F'),
       (112, 4, 42, 'B'),
       (113, 3, 42, 'F'),
       (114, 8, 42, 'D'),
       (115, 2, 42, 'F'),
       (116, 1, 43, 'B'),
       (117, 8, 43, 'A'),
       (118, 3, 44, 'D'),
       (119, 10, 44, 'B'),
       (120, 7, 44, 'A'),
       (121, 5, 44, 'C'),
       (122, 9, 44, 'F'),
       (123, 8, 45, 'D'),
       (124, 3, 45, 'F'),
       (125, 10, 45, 'C'),
       (126, 4, 46, 'A'),
       (127, 7, 46, 'D'),
       (128, 5, 46, 'B'),
       (129, 8, 46, 'C'),
       (130, 6, 47, 'F'),
       (131, 3, 47, 'F'),
       (132, 1, 47, 'F'),
       (133, 5, 48, 'A'),
       (134, 5, 49, 'B'),
       (135, 7, 49, 'D'),
       (136, 3, 49, 'D'),
       (137, 6, 50, 'F'),
       (138, 9, 50, 'D'),
       (139, 1, 50, 'C'),
       (140, 5, 50, 'C'),
       (141, 10, 51, 'D'),
       (142, 7, 51, 'C'),
       (143, 1, 52, 'D'),
       (144, 4, 52, 'B'),
       (145, 1, 53, 'C'),
       (146, 2, 53, 'B'),
       (147, 7, 54, 'B'),
       (148, 5, 54, 'A'),
       (149, 10, 54, 'D'),
       (150, 6, 55, 'A'),
       (151, 5, 56, 'D'),
       (152, 10, 56, 'C'),
       (153, 6, 57, 'D'),
       (154, 1, 57, 'B'),
       (155, 5, 57, 'A'),
       (156, 9, 57, 'F'),
       (157, 3, 58, 'B'),
       (158, 9, 58, 'B'),
       (159, 5, 59, 'C'),
       (160, 9, 59, 'B'),
       (161, 10, 59, 'B'),
       (162, 6, 59, 'D'),
       (163, 7, 60, 'B'),
       (164, 3, 60, 'D'),
       (165, 6, 60, 'C'),
       (166, 1, 60, 'B'),
       (167, 8, 61, 'C'),
       (168, 10, 61, 'A'),
       (169, 4, 61, 'C'),
       (170, 7, 61, 'C'),
       (171, 9, 61, 'F'),
       (172, 9, 62, 'D'),
       (173, 2, 62, 'D'),
       (174, 1, 63, 'B'),
       (175, 10, 63, 'A'),
       (176, 5, 63, 'C'),
       (177, 7, 63, 'B'),
       (178, 2, 63, 'B'),
       (179, 4, 64, 'C'),
       (180, 1, 64, 'B'),
       (181, 10, 64, 'B'),
       (182, 9, 64, 'C'),
       (183, 10, 65, 'A'),
       (184, 2, 65, 'D'),
       (185, 3, 65, 'A'),
       (186, 1, 65, 'C'),
       (187, 4, 65, 'B'),
       (188, 1, 66, 'A'),
       (189, 6, 66, 'B'),
       (190, 8, 66, 'D'),
       (191, 6, 67, 'F'),
       (192, 3, 67, 'C'),
       (193, 5, 68, 'F'),
       (194, 8, 68, 'A'),
       (195, 2, 68, 'D'),
       (196, 4, 68, 'B'),
       (197, 2, 69, 'D'),
       (198, 9, 70, 'B'),
       (199, 10, 70, 'F'),
       (200, 10, 71, 'C'),
       (201, 9, 71, 'B'),
       (202, 3, 71, 'B'),
       (203, 7, 72, 'A'),
       (204, 8, 72, 'F'),
       (205, 10, 72, 'C'),
       (206, 6, 73, 'C'),
       (207, 4, 73, 'D'),
       (208, 7, 73, 'C'),
       (209, 8, 73, 'F'),
       (210, 1, 73, 'D'),
       (211, 3, 74, 'B'),
       (212, 8, 75, 'D'),
       (213, 1, 76, 'B'),
       (214, 7, 76, 'C'),
       (215, 8, 77, 'C'),
       (216, 6, 77, 'B'),
       (217, 10, 78, 'A'),
       (218, 2, 79, 'F'),
       (219, 9, 79, 'A'),
       (220, 7, 79, 'D'),
       (221, 9, 80, 'B'),
       (222, 3, 80, 'F'),
       (223, 5, 80, 'F'),
       (224, 1, 81, 'A'),
       (225, 3, 81, 'B'),
       (226, 4, 81, 'F'),
       (227, 8, 82, 'C'),
       (228, 1, 82, 'F'),
       (229, 9, 82, 'C'),
       (230, 8, 83, 'C'),
       (231, 3, 83, 'B'),
       (232, 3, 84, 'A'),
       (233, 5, 84, 'A'),
       (234, 8, 84, 'A'),
       (235, 10, 84, 'B'),
       (236, 4, 84, 'D'),
       (237, 6, 85, 'C'),
       (238, 7, 85, 'B'),
       (239, 2, 86, 'A'),
       (240, 6, 87, 'B'),
       (241, 10, 87, 'F'),
       (242, 2, 87, 'A'),
       (243, 4, 87, 'B'),
       (244, 10, 88, 'D'),
       (245, 8, 88, 'A'),
       (246, 9, 88, 'F'),
       (247, 8, 89, 'D'),
       (248, 7, 90, 'D'),
       (249, 2, 90, 'D'),
       (250, 3, 90, 'D'),
       (251, 1, 91, 'D'),
       (252, 9, 91, 'A'),
       (253, 10, 91, 'A'),
       (254, 9, 92, 'B'),
       (255, 7, 92, 'A'),
       (256, 3, 92, 'D'),
       (257, 10, 92, 'F'),
       (258, 8, 93, 'D'),
       (259, 5, 93, 'D'),
       (260, 1, 93, 'A'),
       (261, 6, 94, 'B'),
       (262, 9, 94, 'F'),
       (263, 2, 95, 'F'),
       (264, 5, 96, 'D'),
       (265, 4, 96, 'F'),
       (266, 9, 96, 'F'),
       (267, 2, 97, 'C'),
       (268, 1, 98, 'A'),
       (269, 8, 98, 'F'),
       (270, 4, 98, 'D'),
       (271, 5, 98, 'B'),
       (272, 2, 98, 'F'),
       (273, 7, 99, 'F'),
       (274, 6, 99, 'A'),
       (275, 5, 99, 'A'),
       (276, 1, 99, 'C'),
       (277, 8, 99, 'C'),
       (278, 10, 100, 'C'),
       (279, 3, 100, 'D'),
       (280, 1, 100, 'A');

