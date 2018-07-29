<?php
 class EnrollmentController{
     public static function getAllEnrollment(){
         $data=Enrollment::getAllEnrollment();
         include 'View/list_Enrollment.php';
     }
     public static function getAllStudent(){
         $data=Student::getAllStudent();
         include 'View/list_Enrollment.php';
     }

 }
?>