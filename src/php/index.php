<?php
include("src/php/db_connection.php");
include("src/php/add_enrollment.php");
include("src/php/delete_enrollment.php");
include("src/php/retrieve_enrollment.php");
include("src/php/retrieve_student.php");
include("src/php/advanced_op.php");
?>

<!DOCTYPE html>
<html>

<script type="text/javascript" src="../js/Index.js"></script>
<script type="text/javascript" src="../js/GenerateReport.js"></script>
<script type="text/javascript" src="../js/RetrieveStudent.js"></script>
<script type="text/javascript" src="../js/RetrieveEnrollment.js"></script>
<script type="text/javascript" src="../js/DeleteEnrollment.js"></script>
<script type="text/javascript" src="../js/AddEnrollment.js"></script>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Enrollment Database</title>
    <link rel="stylesheet" href="../../css/Index.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script>
        sortDataList();
    </script>
</head>

<body>

<div id="TabButtons" class="w3-Sidebar w3-bar-block w3-red">
    <h3 class="w3-bar-item" id="MainHeader">Student Enrollment Database</h3>
    <button class="w3-bar-item w3-button tablink" id="OpenAddEnrollment" onclick="openTab(event, 'AddEnrollment')">Add
        Enrollment
    </button>
    <button class="w3-bar-item w3-button tablink" id="OpenDeleteEnrollment"
            onclick="openTab(event, 'DeleteEnrollment')">Delete Enrollment
    </button>
    <button class="w3-bar-item w3-button tablink" id="OpenRetrieveEnrollment"
            onclick="openTab(event, 'RetrieveEnrollment')">Retrieve
        Enrollment
    </button>
    <button class="w3-bar-item w3-button tablink" id="OpenRetrieveStudent" onclick="openTab(event, 'RetrieveStudent')">
        Retrieve Student
    </button>
    <button class="w3-bar-item w3-button tablink" id="OpenGenerateReport" onclick="openTab(event, 'GenerateReport')">
        Generate Report
    </button>
    <!--    <span class="strech"></span>-->
</div>

<div id="Page">
    <div id="AddEnrollment" class="tabcontent w3-display-container">
        <!-- Form to Add an Enrollment -->
        <div class="content">
            <h3 class="w3-border-bottom">Add Enrollment</h3>
            <div class="w3-row-padding">
                <div class="w3-third">
                    <input class="w3-input w3-border w3-round-medium" type="text" list="CourseIdList"
                           id="AddEnrollmentCourseId"
                           name="AddEnrollmentCourseId" placeholder="Course ID" required>
                </div>
                <div class="w3-third">
                    <input class="w3-input w3-border w3-round-medium" type="text" list="StudentIdList"
                           id="AddEnrollmentStudentId"
                           name="AddEnrollmentStudentId" placeholder="Student ID" required>
                </div>
                <div class="w3-third">
                    <input class="w3-input w3-border w3-round-medium" type="text" list="LetterGradeList"
                           id="AddEnrollmentLetterGrade"
                           name="AddEnrollmentLetterGrade" maxlength="1" placeholder="Letter Grade" required>
                </div>
            </div>
        </div>


        <datalist id="LetterGradeList">
            <option value="A"></option>
            <option value="B"></option>
            <option value="C"></option>
            <option value="D"></option>
            <option value="F"></option>
        </datalist>


        <div class="w3-padding w3-margin-top w3-display-bottom middle bottom-item">
            <button class="w3-button w3-round-large executeButton w3-red" type="button"
                    onclick="addEnrollment()">Add
                Enrollment
            </button>
        </div>

        <div id="addEnrollmentResults" class="resultsDiv"></div>
    </div>

    <div id="DeleteEnrollment" class="tabcontent">
        <!-- Form to Delete an Enrollment -->
        <h3 class="w3-border-bottom">Delete Enrollment</h3>

        <input class="w3-input w3-border w3-round-medium" type="text" list="EnrollmentIdList" id="DeleteEnrollmentId"
               placeholder="Enrollment ID">

        <div class="w3-padding w3-margin-top w3-display-bottom middle bottom-item">
            <button class="w3-button w3-round-large executeButton w3-red" type="button" onclick="deleteEnrollment()">
                Delete Enrollment
            </button>
        </div>
        <div id="deleteEnrollmentResults" class="resultsDiv"></div>
    </div>

    <div id="RetrieveEnrollment" class="tabcontent">
        <!-- Form to Retrieve an Enrollment -->
        <h3 class="w3-border-bottom">Retrieve Enrollment</h3>

        <input class="w3-input w3-border w3-round-medium" type="text" list="EnrollmentIdList" id="RetrieveEnrollmentId"
               placeholder="Enrollment ID">

        <div class="w3-padding w3-margin-top w3-display-bottom middle bottom-item">
            <button class="w3-button w3-round-large executeButton w3-red" type="button" onclick="retrieveEnrollment()">
                Retrieve Enrollment
            </button>
        </div>
        <div id="enrollmentData" class="resultsDiv"></div>
    </div>

    <div id="RetrieveStudent" class="tabcontent">
        <!-- Form to Retrieve a Student -->
        <h3 class="w3-border-bottom">Retrieve Student</h3>

        <input class="w3-input w3-border w3-round-medium" type="text" list="StudentIdList" id="RetrieveStudentId"
               name="RetrieveStudentId" required placeholder="Student ID">

        <div class="w3-padding w3-margin-top w3-display-bottom middle bottom-item">
            <button class="w3-button w3-round-large executeButton w3-red" type="button"
                    onclick="retrieveStudent(RetrieveStudentId.value)">Retrieve Student
            </button>
        </div>
        <div id="studentData" class="resultsDiv"></div>
    </div>

    <div id="GenerateReport" class="tabcontent">
        <!-- Form to Generate Report -->
        <h3 class="w3-border-bottom">Generate Student Enrollment Report</h3>

        <input class="w3-input w3-border w3-round-medium" type="text" list="StudentIdList" id="ReportStudentId" placeholder="Student ID">

        <div class="w3-padding w3-margin-top w3-display-bottom middle bottom-item">
            <button class="w3-button w3-round-large executeButton w3-red" type="button" onclick="GenerateReport()">Generate Report</button>
        </div>
        <div id="report" class="resultsDiv"></div>
    </div>
</div>

<div id="DataListDiv">
    <datalist id="StudentIdList">
        <?php
        $sql = "SELECT StudentId, StudentName FROM student_enrollment.student";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($results as $row): ?>
            <option value="<?php echo $row['StudentName'] . ' (' . $row['StudentId'] . ')'; ?>"
                    data-id="<?php echo $row['StudentId']; ?>"></option>
        <?php endforeach; ?>
    </datalist>

    <datalist id="CourseIdList">
        <?php
        $sql = "SELECT CourseId, CourseName FROM student_enrollment.course";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($results as $row): ?>
            <option value="<?php echo $row['CourseName'] . ' (' . $row['CourseId'] . ')'; ?>"
                    data-id="<?php echo $row['CourseId']; ?>"></option>
        <?php endforeach; ?>
    </datalist>

    <datalist id="EnrollmentIdList">
        <?php
        $sql = "SELECT EnrollmentId FROM student_enrollment.enrollment";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($results as $row): ?>
            <option value="<?php echo $row['EnrollmentId']; ?>"><?php echo $row['EnrollmentId']; ?></option>
        <?php endforeach; ?>
    </datalist>
</div>

</body>

<script lang="javascript">
    openDefaultTab('AddEnrollment');
</script>

</html>