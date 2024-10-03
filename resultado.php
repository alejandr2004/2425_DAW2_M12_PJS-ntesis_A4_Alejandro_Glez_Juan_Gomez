<?php
    if(isset($_POST['cifrado'])){
        $cifrado = $_POST['cifrado'];

        function transformarTexto($texto) {
            $resultado = ''; 
            $longitud = strlen($texto); // Obtiene la longitud del texto
            $inicio = '';
            $final = '';
            for ($i = 0; $i < $longitud; $i++) {
                if ($i % 2 == 0) {
                    $inicio .= $texto[$i];// Toma los pares y pone al inicio del mensaje
                } else {
                    $final .= $texto[$i];//Toma los impares y los pone al final del mensaje
                }
            }
            // Combina las partes
            $resultado = $inicio . strrev($final);//Voltea el string de impares para concatenar con el inicio del mensaje.
            return $resultado;
        }
        function deshacerTransformacion($texto) {
            $vocales = 'aeiouAEIOU';// Definimos las vocales para saber que caracteres no debemos invertir
            $resultado = '';
            $secuencia = '';
            for ($i = 0; $i < strlen($texto); $i++) {//Recorremos el texto para ver cada caracter
                $caracter = $texto[$i];
                if (strpos($vocales, $caracter) !== false ) {//Si es una vocal o espacio, no cambia la secuencia
                    if ($secuencia !== '') {//Si son consonantes, invertimos y guardamos resultado
                        $resultado .= strrev($secuencia);
                        $secuencia = '';  // Limpiamos la secuencia
                    }
                    $resultado .= $caracter;//Concatenamos la vocal o espacio
                } else {
                    $secuencia .= $caracter;// Si es una consonante, lo concatenamos
                }
            }
            if ($secuencia !== '') {//Si no hay vocales al final de la palabra, se invierte en espejo y añade
                $resultado .= strrev($secuencia);
            }
            return $resultado;
        }
        echo "<div id='fondo'>";
            echo "<div id='centrar'>";
            echo "<h2>MENSAJE DESCIFRADO</h2>";
                echo "<div id ='resultados'>";
                    echo "<p>Cifrado: " . $cifrado . "</p>";
                    $descoficaX1 = transformarTexto($cifrado);
                    echo "<p>Descodificacion a X': " . $descoficaX1 .  "</p>";
                    $descifrado = deshacerTransformacion($descoficaX1);
                    echo "<p>Mensaje descodificado: " . $descifrado . "</p>";
                    echo "<form action='./index.php' method='POST'>";
                        echo "<input  type='submit' value='volver'>";
                    echo "</form>";
                echo "</div>";
            echo "</div>";
        echo "</div>";
    }
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <div id='fondo'>
            <div id='centrar'>
                <h2>MENSAJE DESCIFRADO</h2>
    </body>
    </html>