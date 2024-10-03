<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensaje interceptado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="./style.css">
</head>
<body>
    <div id="contenedor">
        <h1>DESCIFRADOR DE MENSAJES</h1>
        <h3>(ULTRASECRETOS)</h3>
        <div id="formulario">
            <form method="POST" action="./resultado.php" id="encripto">
                <label for="cifrado">Ingresa la frase encriptada:</label>
                <abbr></abbr><br><br>
                <input type="text" name="cifrado" id="cifrado" required>
                <input type="submit" class="btn btn-outline-success" value="Enviar">
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html> 