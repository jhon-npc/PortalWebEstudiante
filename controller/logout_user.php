<?php 
include_once('../model/student.php');
$student = new student();
if (!empty($_POST["btn_logout"])){
    $student->closeSession();
    header("location:../index.php");
}
?>