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

    if ($secuencia != "") {
        $x1 .= strrev($secuencia);
    }

    return "El primer cifrado es " . $x1;
}
    
function intercalarExtremos($frase) {
    $resultado = '';
    $inicio = 0;
    $fin = strlen($frase) - 1;
    
    // Intercalar desde los extremos
    while ($inicio <= $fin) {
        if ($inicio == $fin) {
            $resultado .= $frase[$inicio];
        } else {
            $resultado .= $frase[$inicio] . $frase[$fin];
        }
        $inicio++;
        $fin--;
    }
    
    return $resultado;
}
