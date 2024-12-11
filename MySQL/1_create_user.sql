CREATE SCHEMA IF NOT EXISTS student_enrollment;

CREATE USER 'cse-335-user'@'%' IDENTIFIED BY 'password';
GRANT ALL PRIVILEGES ON student_enrollment.* TO 'cse-335-user'@'%';
FLUSH PRIVILEGES;