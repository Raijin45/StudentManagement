<?php
include 'vendor/autoload.php';

use Docallos\StudentManagement\Core\Database;
use Docallos\StudentManagement\Model\StudentModel;

$students = new StudentModel();

$students = $students->read();


?>

<!DOCTYPE html>

<html>

<head>
    <title>HTML Forms </title>
</head>
<body>
    <h1>Student Management</h1>
    <form action="index.html">
        <label for="full name">Full Name :</label><br>
        <input type="text" id="full name" placeholder="Full Name" required><br>
        <br>
        <label for="year level">Year Level :</label><br>
        <input type="text" id="year level" placeholder="Year Level" required><br>
        <br>
        <label for="course">Course :</label><br>
        <input type="text" id="course" placeholder="Course" required><br>
        <br>
        <label for="section">Section :</label><br>
        <input type="text" id="section" placeholder="Section" required><br>
        <button type="create">Create</button><br>
        <br>
        <h2>UPDATE Student</h2>
        <label for="id">ID :</label><br>
        <input type="text" id="id" placeholder="ID" required><br>
        <label for="male">Male</label><br>
        <input type="radio" name="gender" id="female" value="Female">
        <label for="female">Female</label><br>
        <br>
        <label for="status">Status :</label><br>
        <select id="status">
            <option value="Single">Single</option>
            <option value="Married">Married</option>
            <option value="Widow">Widow</option>
        </select><br>
        <br>
        <label for="skills">Skills :</label><br>
        <input type="checkbox" id="c++" value="C++" name="skills">
        <label for="c++">C++</label><br>
        <input type="checkbox" id="c#" value="C#" name="skills">
        <label for="c#">C#</label><br>
        <input type="checkbox" id="php" value="Php" name="skills">
        <label for="php">Php</label><br>
        <br>
        <label for="birthday">Birthday :</label><br>
        <input type="date" id="birthday" required><br>
        <br>
        <label for="age">Age</label>
        <input type="number" min="1"><br>
        <br>
        <button type="submit">Submit</button>
        <button type="reset">Reset</button>
    </form>
</body>

</html>

