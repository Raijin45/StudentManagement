<?php
include 'vendor/autoload.php';

use Docallos\StudentManagement\Model\StudentModel;

$student = new StudentModel;
$student->id = 117006110035;
$student->fullname = "Docallos , Jickey";
$student->YearLevel = "First Year";
$student->course = "BSIT";
$student->Section = "A";

$student->displayinfo();
