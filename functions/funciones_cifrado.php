<?php
function primerCifrado($mensaje){
    $secuencia="";
    $x1="";
    $vocales="aeiouAEIOU";
    for($i=0;$i<strlen($mensaje);$i++){
        if(strpos($vocales,$mensaje[$i]) !==false){
            $x1.=strrev($secuencia) . $mensaje[$i];
            $secuencia="";
        }else{
            $secuencia.=$mensaje[$i];
        }
    }
    if ($secuencia != ""){
        $x1 .= strrev($secuencia);
    }
    return $x1;
}
function intercalarExtremos($frase){
    $resultado = '';
    $inicio = 0;
    $fin = strlen($frase) - 1;
    while ($inicio <= $fin) {  // Intercalar desde los extremos
        if ($inicio == $fin) {  // Si es el mismo índice (cadena impar), solo se añade una vez
            $resultado .= $frase[$inicio];
        } else {
            $resultado .= $frase[$inicio] . $frase[$fin];
        }
        $inicio++;
        $fin--;
    }
    return $resultado;
}