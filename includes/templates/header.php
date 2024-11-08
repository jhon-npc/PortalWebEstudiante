<?php
    session_start();
    include_once('../model/student.php');
    include_once('../model/teacher.php');
    $student = new student();
    $teacher = new teacher();
    $studentIn = $student->getCurrentStudent();
    $student->setStudent($studentIn);
    $teacherIn = $teacher->getCurrentTeacher();
    $teacher->setTeacher($teacherIn);       
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/estiloinicio.css">
</head>
<body>
    <header class="cabecera">
        <div class="container__header">
            <div class="nav-logo">
                <?php echo '<a href="../view/inicio.php">' ?>
                <img class="logo" src="../assets/images/insignia.png" alt=""></a>'  
            </div>
            <div class="login">
                <h1 class="login__nombre">Bienvenido
                    <?php if(isset($studentIn)){
                            echo $student->getStudent();
                        } if(isset($teacherIn)){
                            echo $teacher->getTeacher();
                    }?> </h1>
                <form  action="" method="POST">
                    <?php include("../controller/logout_user.php");?>
                    <input class="login__boton"  name="btn_logout" type="submit" value="Cerrar Sesión">
                </form>
            </div>
        </div>
    </header>
</body>
</html>