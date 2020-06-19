<?php

function base_url(){
    return BASE_URL;
}
//Return to url Asset
function media(){
    return BASE_URL."/Assets";

}
//INfo formateada
function dep($data){
    $format = print_r('<pre>');
    $format .=print_r($data);
    $format .=print_r('<pre>');
    return $format;
}
//Eliminar exceso de espacios entre palabras
function strClean($strCadena){
    $string = preg_replace(['/\s+/','/*\s|\s$/']);
}