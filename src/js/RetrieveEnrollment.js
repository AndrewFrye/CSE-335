function retrieveEnrollment() {
    const selection = document.getElementById("RetrieveEnrollmentId");
    if (!inputValidation('EnrollmentIdList', selection.value) )
    {
        document.getElementById('enrollmentData').innerHTML = '<h3>Please select a valid Enrollment ID</h3>';
    }

    let id = null;
    const enrollmentIdOptions = document.querySelectorAll('#EnrollmentIdList option');
    Array.from(enrollmentIdOptions).forEach(option => {
        if (option.value === selection.value) {
            id = option.value;
        }
    });

    console.log("Retrieving Enrollment Data for Enrollment ID: " + id);

    fetch('src/php/retrieve_enrollment.php', {
        method: 'POST', headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: `enrollment_id=${encodeURIComponent(id)}`,
    })
        .then(response => response.text())
        .then(data => {
            if (JSON.parse(data).success == 'false') {
                document.getElementById('enrollmentData').innerHTML = `<h3>No Enrollment Data Found for Enrollment ID: ${id}</h3>`;
            }
            else {
                console.log(`Query Results: ${JSON.parse(data).data}`);
                let table = `
                    <h3>Enrollment Data for Enrollment ID: ${id}</h3>
                    <table>
                        <thead>
                            <tr>
                                <th>Enrollment ID</th>
                                <th>Student ID</th>
                                <th>Course ID</th>
                                <th>Letter Grade</th>
                            </tr>
                        </thead>
                        <tbody>`;

                table += `<tr>
                            <td>${JSON.parse(data).data.EnrollmentId}</td>
                            <td>${JSON.parse(data).data.StudentId}</td>
                            <td>${JSON.parse(data).data.CourseId}</td>
                            <td>${JSON.parse(data).data.LetterGrade}</td>`;

                table += `</tbody></table>`;
                document.getElementById('enrollmentData').innerHTML = table;
            }
        });
}