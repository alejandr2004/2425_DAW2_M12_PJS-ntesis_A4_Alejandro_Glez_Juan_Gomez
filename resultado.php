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
                    // Letras en posiciones pares
                    $inicio .= $texto[$i];
                } else {
                    // Letras en posiciones impares
                    $final .= $texto[$i];
                }
            }
    
            // Combina las partes
            $resultado = $inicio . strrev($final);
    
            return $resultado;
        }

        function deshacerTransformacion($texto) {
            $vocales = 'aeiouAEIOU';// Definimos las vocales para saber que caracteres no debemos invertir
            $resultado = '';
            $secuencia = '';
        
            // Recorremos el texto carácter por carácter
            for ($i = 0; $i < strlen($texto); $i++) {
                $caracter = $texto[$i];
                
                // Si el carácter es una vocal o un separador (no parte de la secuencia de no vocales)
                if (strpos($vocales, $caracter) !== false ) {
                    // Si tenemos una secuencia acumulada de no vocales, la invertimos y la añadimos al resultado
                    if ($secuencia !== '') {
                        $resultado .= strrev($secuencia);
                        $secuencia = '';  // Limpiamos la secuencia
                    }
                    // Añadimos la vocal o el carácter no alfabético al resultado tal como está
                    $resultado .= $caracter;
                } else {
                    // Si es una consonante (o cualquier carácter alfabético que no sea vocal), lo acumulamos
                    $secuencia .= $caracter;
                }
            }
        
            // Si al finalizar el bucle aún hay una secuencia de no vocales, la invertimos y la añadimos
            if ($secuencia !== '') {
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