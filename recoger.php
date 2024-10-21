<?php
require_once "operaciones.php";
$num1=$_GET['num1'];
$num2=$_GET['num2'];
$operadores=$_GET['operadores'];

    $objeto = new operaciones($num1, $num2);
    switch ($operadores){
        case 'suma':
        $resultado = $objeto-> suma();
        break;
        case'resta':
        $resultado = $objeto->resta();
        break;
        case 'multiplicacion':
        $resultado = $objeto->multiplicacion();
        break;
        case 'division':
        $resultado = $objeto->division();
        break;
    }
    echo "El resultado es: ".$resultado;
    
?>
