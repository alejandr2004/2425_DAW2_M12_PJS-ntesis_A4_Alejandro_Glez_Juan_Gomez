<?php
    if(isset($_GET['cifrado'])){
        $cifrado = $_GET['cifrado'];
        require_once "./funciones.php";
        $descoficaX1 = transformarTexto($cifrado);
        $descifrado = deshacerTransformacion($descoficaX1);
        
    }
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link type="text/css" rel="stylesheet" href="./styleresul.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <title>Descifrado</title>
    </head>
    <body>
        <div id="centrar">
            <h2>Descifado X'' a X</h2>
            <p><?php echo $cifrado; ?> => <?php echo $descifrado; ?></p>
            <form action="./index.php" method="POST">
                <input type="submit" class="btn btn-info" value="Volver">
            </form>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
    </html>