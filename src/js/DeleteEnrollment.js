function deleteEnrollment() {
    var id = document.getElementById('DeleteEnrollmentId').value;
    fetch('src/php/delete_enrollment.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: `enrollment_id=${encodeURIComponent(id)}`,
    })
        .then(response => response.text())
        .then(data => {
            let results = `Query Results: ${data}`;
            document.getElementById('deleteEnrollmentResults').innerHTML = `<h4 class="w3-border-bottom">${results}</h4>`;
        });
}