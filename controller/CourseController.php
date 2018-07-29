<?php
 class CourseController{
    public static function getAllCourse(){
        $data=Course::getAllCourse();
        include 'View/list_course.php';
    }
 }
?>