function retrieveStudent() {
    const selection = document.getElementById('RetrieveStudentId');
    if (!inputValidation('StudentIdList', selection.value) )
    {
        document.getElementById('studentData').innerHTML = '<h3>Please select a valid student ID</h3>';
    }

    let id = null;
    const studentIdOptions = document.querySelectorAll('#StudentIdList option');
    Array.from(studentIdOptions).forEach(option => {
        if (option.value === selection.value) {
            id = option.dataset.id;
        }
    });

    console.log("Retrieving Student Data for Student ID: " + id);

    fetch('src/php/retrieve_student.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: `student_id=${encodeURIComponent(id)}`,
    })
        .then(response => response.text())
        .then(data => {
            console.log(`Query Results: ${JSON.parse(data).data}`);
            let table = `
            <h3>Student Data for Student ID: ${id}</h3>
            <table>
                <thead>
                    <tr>
                        <th>Student ID</th>
                        <th>Student Name</th>
                        <th>Major</th>
                        <th>GPA</th>
                        <th>Year</th>
                    </tr>
                </thead>
                <tbody>`;

            table += `<tr>
                <td>${JSON.parse(data).data.StudentId}</td>
                <td>${JSON.parse(data).data.StudentName}</td>
                <td>${JSON.parse(data).data.Major}</td>
                <td>${JSON.parse(data).data.GPA}</td>
                <td>${JSON.parse(data).data.Year}</td>`;

            table += `</tbody></table>`;
            document.getElementById('studentData').innerHTML = table;
        });
}