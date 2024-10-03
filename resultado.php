<?php
    if(isset($_GET['cifrado'])){
        $cifrado = $_GET['cifrado'];

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
                    if ($secuencia !== '') {//Si son consonantes, invertimps y guardamos resultado
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
        echo "Cifrado: " . $cifrado . "<br>";
        $descoficaX1 = transformarTexto($cifrado);
        echo "Descodificacion a X': " . $descoficaX1 .  "<br>";
        $descifrado = deshacerTransformacion($descoficaX1);
        echo "Mensaje descodificado: " . $descifrado . "<br>";
    }