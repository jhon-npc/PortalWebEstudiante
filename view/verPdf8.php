<!DOCTYPE html>
<?php 
    require_once('../includes/funciones.php');   
    $id = $_POST['id'];
    $tmp = array();
    $res = array();
    $sel = $con->query("SELECT * FROM files WHERE id = '$id'");
    while ($row = $sel->fetch_assoc()) {
        $tmp = $row;
        array_push($res, $tmp);
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documento</title>
    <link rel="icon" href="../assets/images/insignia.png" type="image/png">
    <link rel="stylesheet" href="../assets/css/estiloindex.css">

</head>
<body>
    <?php    
    incluirTemplate('header');
    ?>
    <main class="contenedor__pdf">
        <?php foreach ($res as $val) { ?> 
            <h1 class="titulo"><?php echo $val['title'] ?></h1>
            <hr>
            <div class="verPdf">
                <embed class="pdf" src="../<?php echo $val['url'] ?>" type="application/pdf" >
            </div>  
        <?php } ?> 
    </main>

    <!-- Iframe code -->
    <iframe
        id="iframeId"
        src="https://www.stack-ai.com/embed/b8c951d3-9c9d-4aab-9632-a4da268b2e3a/821d1b4c-aa85-4fc4-80c4-8bc2a5474142/672d3c5700089f134d62f5e2"
        width="350"
        height="600"
        frameborder="0"
        style="position: fixed; z-index: 1; bottom: 15px; right: 15px;"
    ></iframe>

    <!-- Script for handling the resizing -->
    <script>
    function handleMessage(event) {
        if (event.data.type === 'chatbotStateChange') {
        const iframe = document.getElementById('iframeId')
        if (iframe) {
            if (event.data.isClosed) {
            iframe.style.width = '80px'
            iframe.style.height = '80px'
            iframe.style.bottom = '15px'
            } else {
            iframe.style.width = '450px'
            iframe.style.height = '650px'
            iframe.style.bottom = '-15px'
            }
        }
        }
    }

    // Attach event listener
    window.addEventListener('message', handleMessage)

    // If you want to clean up the event listener when the page unloads (optional)
    window.addEventListener('beforeunload', function () {
        window.removeEventListener('message', handleMessage)
    })
    </script>
</body>
</html>