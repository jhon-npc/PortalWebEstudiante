<?php
include_once('model/student.php');
include_once('model/teacher.php');
$student = new student();
$teacher = new teacher();

if (!empty($_POST["btn_login"])){
    if((empty($_POST["user"]) && empty($_POST["password"])) || (empty($_POST["user"]) || empty($_POST["password"]))){
        echo '<div class="alert alert-danger">INGRESE LOS DATOS REQUERIDOS</div>';
    }else{
        $userForm = $_POST['user'];
        $passForm = $_POST['password'];
        if ($student->studentExists($userForm,$passForm)){
            $student->setCurrentStudent($userForm);
            header("location:../view/inicio.php");    
        }else{
            if ($teacher->teacherExists($userForm,$passForm)){
                $teacher->setCurrentTeacher($userForm);
                header("location:../view/subir.php");    
            }else{
                echo '<div class="alert alert-danger">ACCESO DENEGADO</div>';
            }
        }
    }
}

