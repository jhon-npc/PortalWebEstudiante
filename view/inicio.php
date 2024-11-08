<!DOCTYPE html>
<?php
    require_once('../includes/funciones.php');
    $tmp = array();
    $res = array();
    $sel = $con->query("SELECT * FROM files");
    while ($row = $sel->fetch_assoc()) {
        $tmp = $row;
        array_push($res, $tmp);
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="icon" href="../assets/images/insignia.png" type="image/png">
    <link rel="stylesheet" href="../assets/css/estiloinicio.css">
</head>

<body>
    <?php require_once('../includes/templates/header.php'); ?>
    <main>
        <h1 class="titulo__inicio">TEMAS DEL MES</h1>
        <div class="container">
        <?php foreach ($res as $val) { ?> 
            <div class="card">
                <figure>
                    <img src="../assets/images/bg2.jpg" >
                </figure>
                <?php 
                    $numberStudent = (int)substr($studentIn,2); 
                    $pagina = "verPdf" . $numberStudent . ".php";
                ?>
                <form action="<?php echo $pagina; ?>" method="POST">
                    <?php $id = $val['id']?>
                    <input type="hidden" name="id" value="<?php echo $id; ?>">   
                    <div class="contenido">
                        <h3><?php echo $val['title'] ?></h3>
                        <p><?php echo $val['description'] ?></p>
                        <input type="submit" value="Ingresar">
                    </div>
                </form>
            </div>
        <?php } ?>
        </div>
        <div class="container2">
            <a href="https://forms.gle/MBY7DAbsjRsvPK617" class="login__boton" target="_blank">Enlace encuesta</a>
        </div>
    </main>
    <footer></footer>
</body>
</html>