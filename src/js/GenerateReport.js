function GenerateReport() {
    const reportDiv = document.getElementById('report');
    const selection = document.getElementById('ReportStudentId');
    if (!inputValidation('StudentIdList', selection.value) )
    {
       reportDiv.innerHTML = '<h3>Please select a valid student ID</h3>';
    }

    let StudentId = null;
    const studentIdOptions = document.querySelectorAll('#StudentIdList option');
    Array.from(studentIdOptions).forEach(option => {
        if (option.value === selection.value) {
            StudentId = option.dataset.id;
        }
    });

    console.log("Generating Report for Student ID: " + StudentId);

    var xmlhttp = new XMLHttpRequest();

    fetch('src/php/advanced_op.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: `student_id=${encodeURIComponent(StudentId)}`,
    })
        .then(response => response.text())
        .then(data => {
            console.log(`Query Results: ${JSON.parse(data).data}`);

            let table = `
            <h4 class="w3-border-bottom">Enrollment Report for Student ID: ${StudentId}</h4>
            <table class="w3-Table w3-hoverable">
            <thead class="w3-red DataTable">
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
            <tbody>`;

            JSON.parse(data).data.forEach(row => {
                table += `<tr>
                    <td>${row.StudentName}</td>
                    <td>${row.Major}</td>
                    <td>${row.CourseName}</td>
                    <td>${row.CourseDepartment}</td>
                    <td>${row.InstructorDepartment}</td>
                    <td>${row.InstructorID}</td>
                    <td>${row.RoomNumber}</td>
                    <td>${row.Building}</td>
                    <td>${row.LetterGrade}</td>
                </tr>`;
            });

            table += `</tbody></table>`;
            reportDiv.innerHTML = table;
        });
}