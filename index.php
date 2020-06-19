<?php
// mostrar como funciona MCV modelo Vista Controlador

$url = !empty($_GET['url'])? $_GET['url']: 'home/home';
$arrUrl = explode("/",$url);
$controller = $arrUrl[0];
$param="";
//controller method
if (!empty($arrUrl[1]))
{
    if ($arrUrl[1]!="")
    {
        $method = $arrUrl[1];
    }
}
//param
if (!empty($arrUrl[2])){
    if ($arrUrl[2]!=""){
        for ($i=2;$i<count($arrUrl);$i++){
            $param.=$arrUrl[$i].",";
        }
        $param =trim($param,',');
        echo $param;
    }
}

require_once("Libraries/Core/Autoload.php");

//Load
require_once ("Libraries/Core/Load.php");


//echo "<br>";
//echo "controlador: ".$controller;
//echo "<br>";
//echo "metodo: ".$method;
//echo "<br>";
//echo "parametro: ".$param;


print_r($arrUrl);