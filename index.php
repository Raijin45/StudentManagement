<?php
include 'vendor/autoload.php';

use Docallos\StudentManagement\Core\Database;
use Docallos\StudentManagement\Model\StudentModel;

$students = new StudentModel();

$students = $students->read();
// Handle form actions
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['action'])) {
        switch ($_POST['action']) {
            case 'create' :
        }
    }
}




?>

<!DOCTYPE html>

<html> lang="en";

<head>
    <meta> charset="UTF-8">
    <meta> name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management</title>
</head>
<body>
    <h1>Student Management System</h1>
    <h2>Add New student</h2>
    <form method="POST" action="index.php">
        <input type="text" name="name" placeholder="Full Name" required><br>
        <input type="number" name="year_level" placeholder="Year Level" required><br>
        <input type="text" name="course" placeholder="Course" required><br>
        <input type="text" name="section" placeholder="Section" required><br>
        <button type="submit" name="create">Add Student</button>
    </form>

    <h2>Update Student</h2>
    <form method="POST" action="index.php">
        <input type="number" name="id" placeholder="Student ID to update" required><br>
        <input type="text" name="name" placeholder="Full Name" required><br>
        <input type="number" name="year_level" placeholder="Year Level" required><br>
        <input type="number" name="course" placeholder="Course" required><br>
        <input type="number" name="section" placeholder="Section" required><br>
        <button type="submit" name="update">Update Student</button>
    </form>

    <h2>All Students</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Full Name</th>
            <th>YearLevel</th>
            <th>Course</th>
            <th>Section</th>
            <th>Actions</th>
        </tr>
        <?php if (!empty($students)): ?>
            <?php foreach ($students as $stu): ?>
                <tr>
                    <td><?=$stu['id']?></td>
                    <td><?=$stu['name']?></td>
                    td><?=$stu['year_level']?></td>
                    td><?=$stu['course']?></td>
                    td><?=$stu['section']?></td>
                    <td>
                        <a href="index.php?delete_id=<?= $stu['id'] ?>">Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?> 
                <?php else: ?>
                    <tr></td colspan="6">No students found</td><tr>
                        <?php endif; ?>





    </table>
   
   
    
</body>

</html>

