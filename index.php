<?php
include 'controller/CourseController.php';
include 'controller/EnrollmentController.php';
include 'model/Course.php';
include 'model/Database.php';
include 'model/Enrollment.php';
include 'model/Student.php';
$action = 'list-course';
if (isset($_GET['action'])) {
    $action = $_GET['action'];
}
switch ($action){
    case 'laydanhsach-course':
        CourseController::getAllCourse();
        break;
    case 'laydanhsach-student':
        EnrollmentController::getAllStudent();
		$a = 1;
        break;
}
?>