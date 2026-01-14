<?php
    include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="student_form_container">
        <h1>Student Information Form</h1>
        <form name=student_form method="POST" action="submit_student.php">
            <label for="student_name">Student Name:</label>
            <input type="text" id="student_name" name="student_name" required>
            <br><br>
            <label for="student_age">Student Age:</label>
            <input type="number" id="student_age" name="student_age" required>
            <br><br>
            <label for="student_course">Student Course:</label>
            <input type="text" id="student_course" name="student_course" required>
            <br><br>
            <label for="student_year">Year Of Study:</label>
            <input type="number" id="student_year" name="student_year" required>
            <br><br>
            <label for="student_email">Student Email:</label>
            <input type="email" id="student_email" name="student_email" required>
            <br><br>
            <input type="submit" id="submit_button" name="submit_button" value="Submit">
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>