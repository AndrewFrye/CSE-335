function addEnrollment(){
    const CourseName = document.getElementById('AddEnrollmentCourseId').value;
    const StudentName = document.getElementById('AddEnrollmentStudentId').value;
    const Grade = document.getElementById('AddEnrollmentLetterGrade').value;

    let StudentId = null;
    const studentIdOptions = document.querySelectorAll('#StudentIdList option');
    Array.from(studentIdOptions).forEach(option => {
        if (option.value === StudentName) {
            StudentId = option.dataset.id;
        }
    });

    let CourseId = null;
    const courseIdOptions = document.querySelectorAll('#CourseIdList option');
    Array.from(courseIdOptions).forEach(option => {
        if (option.value === CourseName) {
            CourseId = option.dataset.id;
        }
    });

    console.log("Adding Enrollment for Student ID: " + StudentId + " and Course ID: " + CourseId + " with Grade: " + Grade);

    fetch('src/php/add_enrollment.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: `course_id=${encodeURIComponent(CourseId)}&student_id=${encodeURIComponent(StudentId)}&grade=${encodeURIComponent(Grade)}`,
    })
        .then(response => response.text())
        .then(data => {
            let results = `Query Results: ${data}`;
            document.getElementById('addEnrollmentResults').innerHTML = `<h4 class="w3-border-bottom">${results}</h4>`;
        });
}