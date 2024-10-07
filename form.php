<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="./style/style.css">
</head>
<body>
    <div id="contenedor">
        <h1>ENCRIPTADOR DE MENSAJES</h1>
        <h3>(INFO SECRETA)</h3>
        <div id="formulario">
            <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="encripto">
                <label for="cifrado">Ingresa la frase para encriptar:</label>
                <abbr></abbr><br><br>
                <input type="text" name="encriptar" id="encriptar" required><br><br>
                <div class="botones">
                    <input type="submit" name="cifrarR1" class="btn btn-outline-success" value="X - X'">
                    <input type="submit" name="cifrarR2" class="btn btn-outline-success" value="X - X''"><br><br>
                </div>
            </form>
            <div class="botones">
                <a type="submit" class="btn btn-outline-success" href="./index.php">DESCIFRADOR</a>
            </div>
        </div>
    </div>
    <?php
        if (filter_has_var(INPUT_POST, 'cifrarR1')) {
            $encriptar = $_POST['encriptar']; 
            header("Location: ./actions/encriptado1.php?encriptar=$encriptar");
            exit();
        } else if (filter_has_var(INPUT_POST, 'cifrarR2')) {
            $encriptar = $_POST['encriptar']; 
            header("Location: ./actions/encriptador2.php?encriptar=$encriptar");
            exit();
        }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>