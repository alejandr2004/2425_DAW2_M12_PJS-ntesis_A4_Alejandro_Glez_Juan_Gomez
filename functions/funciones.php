<?php
    function transformarTexto($texto) {
            $resultado = ''; 
            $longitud = strlen($texto); // Obtiene la longitud del texto
            $inicio = '';
            $final = '';
            for ($i = 0; $i < $longitud; $i++) {
                if ($i % 2 == 0) {
                    $inicio .= $texto[$i];// Guarda los pares y pone al inicio del mensaje
                } else {
                    $final .= $texto[$i];//Guarda los impares y los pone al final del mensaje
                }
            }
            // Combina las partes
            $resultado = $inicio . strrev($final);//Gira el string de impares para concatenar el inicio del mensaje.
            return $resultado;
        }
        function deshacerTransformacion($texto) {
            $vocales = 'aeiouAEIOU';// Definición las vocales para saber que caracteres no se deben invertir
            $resultado = '';
            $secuencia = '';
            for ($i = 0; $i < strlen($texto); $i++) {//Se recorre un caracter de $texto por iteración
                $caracter = $texto[$i];
                if (strpos($vocales, $caracter) !== false ) {//Si es una vocal o espacio, la secuencia permanece
                    if ($secuencia !== '') {//Si son consonantes, invertimos y guardamos resultado
                        $resultado .= strrev($secuencia);
                        $secuencia = '';  // Limpiamos la secuencia
                    }
                    $resultado .= $caracter;//Concatenamos la vocal/espacio
                } else {
                    $secuencia .= $caracter;// Si es una consonante se concatena
                }
            }
            if ($secuencia !== '') {//Si no hay vocales al final de la palabra, se invierte en espejo y añade
                $resultado .= strrev($secuencia);
            }
            return $resultado;
        }


?>